<?php

/*

Класс для отправки mime сообщения

 */

class MimeMail
{
    public $mailer        = '008Maileer';
    public $to            = '';
    public $Cc            = array();
    public $Bcc           = array();
    public $save          = false;
    public $subject       = '';
    public $message       = '';
    public $attachment    = array();
    public $embed         = array();
    public $charset       = 'UTF-8';
    public $emailboundary = '';
    public $emailheader   = '';
    public $textheader    = '';
    public $errors        = array();

    public function MimeMail($toname, $toemail, $fromname, $fromemail)
    {
        $this->emailboundary = uniqid(time());
        if (empty($toname))
        {
            $toname = $toemail;
        }
        $this->to = "=?UTF-8?B?" . base64_encode($toname) . "?= <" . $this->validateEmail($toemail) . ">";
        if (empty($fromname))
        {
            $fromname = $fromemail;
        }
        $this->emailheader .= "From: =?UTF-8?B?" . base64_encode($fromname) . "?= <" . $this->validateEmail($fromemail) . ">\r\n";
    }
    public function validateEmail($email)
    {
        if (preg_match('/^[A-Z0-9._%-]+@(?:[A-Z0-9-]+\\.)+[A-Z]{2,4}$/i', $email))
        {
            return $email;
        }
        else
        {
            return false;
        }

    }
    public function Cc($email)
    {
        $this->Cc[] = $this->validateEmail($email);
    }
    public function Bcc($email)
    {
        $this->Bcc[] = $this->validateEmail($email);
    }
    public function buildHead($type)
    {
        $count = count($this->$type);
        if ($count > 0)
        {
            $this->emailheader .= "{$type}: ";
            $array = $this->$type;
            for ($i = 0; $i < $count; $i++)
            {
                if ($i > 0)
                {
                    $this->emailheader .= ',';
                }
                $this->emailheader .= $array[$i];
            }
            $this->emailheader .= "\r\n";
            return true;
        }
        return false;
    }
    public function buildMimeHead()
    {
        $this->buildHead('Cc');
        $this->buildHead('Bcc');
        $this->emailheader .= "X-Mailer: $this->mailer\r\n";
        $this->emailheader .= "MIME-Version: 1.0\r\n";
    }
    public function buildMessage($subject, $message = '')
    {
        $this->message = strip_tags(preg_replace("/<br[	 ]*[\\/]>/i", "\r\n", $message));
        //    mlog("buildmessage ".strlen($message));
        $textboundary     = uniqid(time());
        $this->subject    = strip_tags(trim($subject));
        $this->textheader = "Content-Type: multipart/alternative; boundary=\"$textboundary\"\r\n\r\n";
        $this->textheader .= "--{$textboundary}\r\n";
        $this->textheader .= "Content-Type: text/plain; charset=\"{$this->charset}\"\r\n";
        $this->textheader .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";
        $this->textheader .= strip_tags(preg_replace("/<br[	 ]*[\\/]>/i", "\r\n", $message)) . "\r\n\r\n";
        $this->textheader .= "--$textboundary\r\n";
        $this->textheader .= "Content-Type: text/html; charset=\"{$this->charset}\"\r\n";
        $this->textheader .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";
        $this->textheader .= "<html>\n<body>\n{$message}\n</body>\n</html>\r\n\r\n";
        $this->textheader .= "--{$textboundary}--\r\n\r\n";
        //    mlog("buildmessage1 ".strlen($this->message));
    }
    public function mimeType($file)
    {
        return (function_exists('mime_content_type')) ? mime_content_type($file) : trim(exec('file -bi ' . escapeshellarg($file)));
    }
    public function attachment($file)
    {
        if (is_file($file))
        {
            $basename         = basename($file);
            $attachmentheader = "--{$this->emailboundary}\r\n";
            $attachmentheader .= "Content-Type: " . $this->mimeType($file) . "; name=\"{$basename}\"\r\n";
            $attachmentheader .= "Content-Transfer-Encoding: base64\r\n";
            $attachmentheader .= "Content-Disposition: attachment; filename=\"{$basename}\"\r\n\r\n";
            $attachmentheader .= chunk_split(base64_encode(fread(fopen($file, "rb"), filesize($file))), 72) . "\r\n";
            $this->attachment[] = $attachmentheader;
        }
        else
        {
            ShowMessage('Файл не найден', MESSAGE_ERROR);
            return false;
        }
    }
    public function attachmentTime($file)
    {
        if (is_file($file))
        {
            $basename         = substr(basename($file), 14);
            $attachmentheader = "--{$this->emailboundary}\r\n";
            $attachmentheader .= "Content-Type: " . $this->mimeType($file) . "; name=\"{$basename}\"\r\n";
            $attachmentheader .= "Content-Transfer-Encoding: base64\r\n";
            $attachmentheader .= "Content-Disposition: attachment; filename=\"{$basename}\"\r\n\r\n";
            $attachmentheader .= chunk_split(base64_encode(fread(fopen($file, "rb"), filesize($file))), 72) . "\r\n";
            $this->attachment[] = $attachmentheader;
        }
        else
        {
            ShowMessage('Файл не найден', MESSAGE_ERROR);
            return false;
        }
    }
    public function embed($file)
    {
        if (is_file($file))
        {
            $basename    = basename($file);
            $fileinfo    = pathinfo($basename);
            $contentid   = md5(uniqid(time())) . "." . $fileinfo['extension'];
            $embedheader = "--{$this->emailboundary}\r\n";
            $embedheader .= "Content-Type: " . $this->mimeType($file) . "; name=\"{$basename}\"\r\n";
            $embedheader .= "Content-Transfer-Encoding: base64\r\n";
            $embedheader .= "Content-Disposition: inline; filename=\"{$basename}\"\r\n";
            $embedheader .= "Content-ID: <{$contentid}>\r\n\r\n";
            $embedheader .= chunk_split(base64_encode(fread(fopen($file, "rb"), filesize($file))), 72) . "\r\n";
            $this->embed[] = $embedheader;
            return "<img src=3D\"cid:{$contentid}\">";
        }
        else
        {
            ShowMessage('Файл не найден', MESSAGE_ERROR);
            return false;
        }
    }
    public function sendmail()
    {
        //mlog("send1 ".strlen($this->message));
        $this->buildMimeHead();
        //mlog("send2 ".strlen($this->message));
        $header = $this->emailheader;
        //mlog("send3 ".strlen($this->message));
        $attachcount = count($this->attachment);
        $embedcount  = count($this->embed);
        if ($attachcount > 0 || $embedcount > 0)
        {
            $header .= "Content-Type: multipart/mixed; boundary=\"{$this->emailboundary}\"\r\n\r\n";
            $header .= "--{$this->emailboundary}\r\n";
            $header .= $this->textheader;
            if ($attachcount > 0)
            {
                $header .= implode("", $this->attachment);
            }

            if ($embedcount > 0)
            {
                $header .= implode("", $this->embed);
            }

            $header .= "--{$this->emailboundary}--\r\n\r\n";
        }
        else
        {
            $header .= $this->textheader;
        }
        $ret = mail($this->to, "=?" . $this->charset . "?B?" . base64_encode($this->subject) . "?=", $this->message);
        mlog("send " . strlen($this->message) . " to " . $this->to . " = $ret");
        return $ret;
        //return mail($this->to, "=?".$this->charset."?B?".base64_encode($this->subject)."?=", $this->message, $header);
    }
}
