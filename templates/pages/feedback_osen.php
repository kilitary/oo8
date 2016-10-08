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
        
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<h1>Вступительная скидка для новых клиентов&nbsp; -&nbsp; 1000 руб.!</h1>
		<h1>Только до 30 ноября!</h1>
		<div>Интернет -<strong> </strong>это самая эффективная и самая недорогая , активно развивающаяся рекламная площадка, которая работает на Ваш бизнес круглые сутки без выходных и праздников 365 дней в году.</div>
		<div>Также бесперебойно - вот&nbsp; уже 22 года работает наша справочная служба по телефону 008. Информационный центр 008 - это call-центр Вашей компании, где ее представят грамотно, вежливо и достойно - так, что покупатели обязательно придут за покупками в Вашу компанию.</div>
		<div>&nbsp;</div>
		<div><strong>УНИКАЛЬНАЯ ВОЗМОЖНОСТЬ</strong> для <strong>НОВЫХ </strong>клиентов -&nbsp;&nbsp;&nbsp; <strong>СКИДКА&nbsp; 1000 руб. на пакет&nbsp; услуг Эконом</strong>.</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>Воспользуйтесь нашим предложением с 01 ноября&nbsp; по 30 ноября&nbsp; и получите отличный рекламно-информационный сервис на весь год по ОЧЕНЬ ВЫГОДНОЙ ЦЕНЕ<span> -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><strong style="color: red; font-size: 20px;"><span>7900 руб. в год включая НДС!</span></strong></div>
		<div>&nbsp;</div>
		<h4><strong>&nbsp;Вы получите комплексное обслуживание</strong></h4>
		<ul>
			<li>На бизнес-портале <a href="http://www.008.ru/info/iprice/">по пакету Эконом</a><strong style="color: red; font-size: 16px;"><br>
		</strong></li>
			<li>В справочной службе «008»<strong style="color: red;"><br>
		</strong></li>
		</ul>
		<h3>Включено:</h3>
		<ul type="disc">
			<li>Работа с Вашими текстами профессионального персонального менеджера и &nbsp;отличное оформление страницы Вашей компании - 1,5 тыс. знаков текстовой информации, все контакты и филиалы</li>
			<li>Изображение каждого филиала или представительства на карте</li>
			<li>Активная&nbsp;ссылка на ваш сайт<strong> </strong></li>
			<li>Фотогалерея и 2 картинки в справочной информации о Вашей компании</li>
			<li>Приоритет третьей очереди в каталоге компаний</li>
			<li>Размещение логотипа компании на странице и в каталоге</li>
			<li>Публикация на главной странице новостей и статей компании</li>
			<li>Участие в разделах «Акции, скидки» и «Вакансии»<strong><br>
		</strong></li>
			<li><strong>Информирование Ваших покупателей по любым вопросам &nbsp;профессиональными операторами-консультантами по телефону 008 </strong></li>
			<li><strong>Бесплатная и безлимитная корректировка информации в течение года</strong></li>
		</ul>
		<h3>Примеры размещения:</h3>
		<ul>
			<li><a href="http://www.008.ru/company/25545/">Баварский ресторан Shwaben Keller</a></li>
			<li><a href="http://www.008.ru/company/4254/" target="_blank">Аврора Авто</a></li>
		</ul>
		<div>&nbsp;<em><strong style="color: red; font-size: 20px;"><span>Спешите, потом будет дороже!</span></strong></em>
			<div>&nbsp;</div>
			<h2><strong>Заявка на обслуживание<br></strong></h2>
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	   


        <?if($sentok):?>
            <div id="status">
                <form class="isave ihelp" id="sendmail" action="/feedback/request/" method="post" enctype="multipart/form-data">

                    <input name="cmd" id="cmd" type="hidden" value="sendmail">
					<input type=hidden name=tarif value="Эконом">
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
	<?else:?>
	<?=$msg?><br/><br/>
   <?endif?>
	 
	<br/>
       
       

            <?include( "templates/subs/footer.php");?>