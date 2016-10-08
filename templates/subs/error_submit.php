<div style="padding-top:5px;margin:15px 0 5px 0; border-top:1px dashed grey" class="noprint">
    Ошибка в описании компании <b><i><?=$company['shortname']?></i></b>? Пожалуйста, <a id="feedback_click" name="feedback" class="feedback_click" href="javascript:void(0);">сообщите нам</a></div>
<div id="feedback" class="hidden noprint" style="display: none;">



    <div id="status">
        <form class="isave ihelp" id="page_errors" action="/feedback/error/" method="post" enctype="multipart/form-data">

            <input name="cID" id="cID" type="hidden" value="<?=$company['cID']?>">
			<input name="company" type="hidden" value="<?=$company['fullname']?>">
            <input name="url" id="url" type="hidden" value="http://www.008.ru<?=$_SERVER['REQUEST_URI']?>">
            <input name="type" id="type" type="hidden" value="page_errors">

            <div style="padding-left:4px">
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Что не так?<span style="color:red;">*</span></td>
                            <td style="border:dashed 1px #ECE9D8;">
                                <label>
                                    <input  name="subject" id="subject_Неправильный телефон" type="radio" value="Неправильный телефон" class="{validate:{required:true}}">Неправильный телефон</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Неправильный адрес" type="radio" value="Неправильный адрес" class="{validate:{required:true}}">Неправильный адрес</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Неправильный график работы" type="radio" value="Неправильный график работы" class="{validate:{required:true}}">Неправильный график работы</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Неправильно указано метро" type="radio" value="Неправильно указано метро" class="{validate:{required:true}}">Неправильно указано метро</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Неправильный адрес сайта" type="radio" value="Неправильный адрес сайта" class="{validate:{required:true}}">Неправильный адрес сайта</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Ошибка в тексте" type="radio" value="Ошибка в тексте" class="{validate:{required:true}}">Ошибка в тексте</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Неправильное отображение на карте" type="radio" value="Неправильное отображение на карте" class="{validate:{required:true}}">Неправильное отображение на карте</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Неправильная рубрика" type="radio" value="Неправильная рубрика" class="{validate:{required:true}}">Неправильная рубрика</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Филиал компании закрылся" type="radio" value="Филиал компании закрылся" class="{validate:{required:true}}">Филиал компании закрылся</label>
                                <br>
                                <label>
                                    <input name="subject" id="subject_Компания закрылась" type="radio" value="Компания закрылась" class="{validate:{required:true}}">Компания закрылась</label>
                                <br>
                                <label>
                                    <input required="true" name="subject" id="subject_Другое" type="radio" value="Другое" class="{validate:{required:true}}">Другое (укажите)</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Описание ошибки и откуда вы о ней узнали?<span style="color:red;">*</span></td>
                            <td style="border:dashed 1px #ECE9D8;">
                                <textarea required="true" name="notes" id="notes" style="width:99%; height:100px" class="{validate:{required:true;minlength:10}}"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right"></td>
                            <td style="border:dashed 1px #ECE9D8;"><b>Кому сказать спасибо?</b></td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">Имя</td>
                            <td style="border:dashed 1px #ECE9D8;">
                                <input name="contactname" id="contactname" type="text" value="" style="width:300px">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr>
                            <td style="border:dashed 1px #ECE9D8;" width="200" valign="top" align="right">E-mail</td>
                            <td style="border:dashed 1px #ECE9D8;">
                                <input name="email" id="email" type="text" value="" style="width:300px;" class="{validate:{email:true}}">
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
                                <input class="isubmit" id=err_submit type="submit" name="save" value="Отправить" style="width:150px;font-size:18px;height:30px">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </form>
    </div>
</div>