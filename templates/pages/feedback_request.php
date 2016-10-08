<?include( "templates/subs/header.php");?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="home">
            <tr>
                <td>
                    <table cellspacing="0" width="100%" border="0" cellpadding="0" style="margin-top:5px">
                        <tr>
							<td width="240" style="padding-right:40px;min-width: 240px;">
								<?include("templates/subs/left-pane.php");?>
							</td>
                            <td width="100%">
                                <div class="main_content">


    <div class="main_content">
        <h1>Заявка на обслуживание</h1>
        <h2>Размещение на 008.ru ПЛАТНОЕ.</h2>
        <div>Ознакомьтесь с ценами на наши услуги:</div>
        <ul type="disc">
            <li>Портал 008.ru - размещение на сайте www.008.ru - <a href="/info/iprice/">Пакеты</a></li>
        </ul>
        <p>Выберите вариант обслуживания, <strong>заполните Заявку</strong>, и наш менеджер оперативно свяжется с Вами.<strong><br>
</strong></p>
        <p>Обратите внимание, что если Вы отправляете Заявку в выходные дни, то мы сможем связаться с Вами только в понедельник.</p>
        <p>При необходимости<strong> </strong>Вы можете проконсультироваться по телефону&nbsp;<strong> (812) 244-4116 </strong>с 10.00 до 18.00 в рабочие дни.</p>
        <h3><strong>Заявка</strong>:</h3>

        <?if($sentok):?>
            <div id="status">
                <form class="isave ihelp" id="sendmail" action="/feedback/request/" method="post" enctype="multipart/form-data">

                    <input name="cmd" id="cmd" type="hidden" value="sendmail">
                    <input name="subject" id="subject" type="hidden" value="Заявка на обслуживание">
						  <input name="referer" type=hidden value="<?=$_SERVER['HTTP_REFERER']?>">

                    <div style="padding-left:4px">
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Название Вашей организации<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <input name="shortname" id="shortname" type="text" value="<?=$_POST['shortname']?>" autocomplete="off" required="true" style="width:88%" class="{validate:{required:true,rangelength:[2,50]}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Сфера деятельности<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <input name="cofield" id="cofield" required="true" type="text" value="<?=$_POST['cofield']?>" autocomplete="off" style="width:88%" class="{validate:{required:true,rangelength:[2,50]}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Контактное лицо<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <input name="contactname" id="contactname" required="true" type="text" value="<?=$_POST['contactname']?>" style="width:400px" class="{validate:{required:true,maxlength:255}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Должность<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <input name="contactpost" id="contactpost" required="true" type="text" value="<?=$_POST['contactpost']?>" style="width:400px" class="{validate:{required:true,maxlength:255}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Контактные телефоны<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <textarea name="contacts" required="true" id="contacts" style="width:200px;height:60px" class="{validate:{required:true,maxlength:255}}"><?=$_POST['contacts']?></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">E-mail</td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <input name="email" id="email" type="text" value="<?=$_POST['email']?>" style="width:300px;" class="{validate:{email:true}}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Пакет размещения на сайте 008.ru</td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <select name="paket" id="paket">
                                            <option value="" >выберите пакет</option>
                                            <option <?=$_POST['paket']=='Люкс'?'selected':''?> value="Люкс">Люкс</option>
                                            <option <?=$_POST['paket']=='Деловой'?'selected':''?> value="Деловой">Деловой</option>
                                            <option <?=$_POST['paket']=='Эконом'?'selected':''?> value="Эконом">Эконом</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Размещение в справочной службе по т. 008</td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <select name="tarif" id="tarif">
                                            <option  value="">выберите тариф</option>
                                            <option <?=$_POST['tarif']=='Люкс'?'selected':''?> value="Люкс">Люкс</option>
                                            <option <?=$_POST['tarif']=='Деловой'?'selected':''?> value="Деловой">Деловой</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Пожелания, комментарии, вопросы</td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <textarea name="notes" id="notes" style="width:400px; height:100px"><?=$_POST['notes']?></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right"></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <hr>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Введите код на картинке<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <? 
														$options[ 'input_name']='captcha' ; 
														$options[ 'input_text']='' ; 
														
														echo Securimage::getCaptchaHtml($options); 
													?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right"></td>
                                    <td style="border:dashed 1px #ECE9D8;">Поля отмеченные <span style="color:red;">*</span> - обязательны для заполнения.
                                        <hr>
													 
                                        <div id="result"></div>
                                        <input class="isubmit" type="submit" name="save" value="Отправить">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </form>
            </div>
    </div>
	 <?=$msg?><br/><br/>
	<?else:?>
	<?=$msg?><br/><br/>
   <?endif?>
	 
	<br/>
       
       

            <?include( "templates/subs/footer.php");?>