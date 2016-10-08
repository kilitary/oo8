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
        <h1>Обратная связь</h1>

        <?if(!$sentok):?>
            <div id="status">
                <form class="isave ihelp" id="sendmail" action="/feedback/" method="post" enctype="multipart/form-data">

                    <input name="cmd" id="cmd" type="hidden" value="sendmail">
						<input name="referer" type=hidden value="<?=$_SERVER['HTTP_REFERER']?>">
                    <div style="padding-left:4px">
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Тема письма<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <select required="true" class="{validate:{required:true}}" name="subject" id="subject">
                                            <option value="" selected="">Выберите тему письма</option>
                                            <option <?if($_POST['subject']=='размещение информации') echo "selected";?> value="размещение информации">Размещение информации</option>
                                            <option <?if($_POST['subject']=='размещение рекламы') echo "selected";?> value="размещение рекламы">размещение рекламы</option>
                                            <option <?if($_POST['subject']=='предложение о сотрудничестве') echo "selected";?> value="предложение о сотрудничестве">предложение о сотрудничестве</option>
                                            <option <?if($_POST['subject']=='вопросы по сервисам сайта') echo "selected";?> value="вопросы по сервисам сайта">вопросы по сервисам сайта</option>
                                            <option <?if($_POST['subject']=='вопросы по обслуживанию') echo "selected";?> value="вопросы по обслуживанию">вопросы по обслуживанию</option>
                                            <option <?if($_POST['subject']=='корректировка информации') echo "selected";?> value="корректировка информации">корректировка информации</option>
                                            <option <?if($_POST['subject']=='вопросы дизайна рекламы') echo "selected";?> value="вопросы дизайна рекламы">вопросы дизайна рекламы</option>
                                            <option <?if($_POST['subject']=='предложения, пожелания') echo "selected";?> value="предложения, пожелания">предложения, пожелания</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Контактное лицо<span style="color:red;">*</span></td>
                                    <td style="border:dashed 1px #ECE9D8;">
                                        <input required="true" name="contactname" id="contactname" type="text" value="<?=$_POST['contactname']?>" style="width:400px" class="{validate:{required:true,maxlength:255}}">
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
                                        <input name="email" id="email"  type="text" value="<?=$_POST['email']?>" style="width:300px;" class="{validate:{email:true}}">
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
													 $options['image_width'] = 250;
													 $options['image_height'] = 10;
													 echo Securimage::getCaptchaHtml($options); ?>
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
													  <strong style='color:red'><?=$msg?></strong><br/><br/>
                                        <div id="result"></div>
                                        <input class="isubmit" type="submit" name="save" value="Отправить">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
						
						
                    </div>

                </form>
            </div>
            <?else:?>
                <strong ><?=$msg?></strong>
			</div>
			<?endif?>

        <?include( "templates/subs/footer.php");?>