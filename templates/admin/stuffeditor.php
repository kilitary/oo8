<div>
   <form>
      <input type=hidden name=cID value=<?=(isset($_GET[ 'cID']) ? $_GET[ 'cID']: $company[ 'cID'])?>>
      <h3>Редактирование </h3> Заголовок
      <br/>
      <input id=stuffcaption style='width:720px' name=caption required value='<?=$stuff['caption']?>'>
      <br/> Дата с
      <input id=sdateon name="sdateon" class="datepicker " 
         value='<?=$stuff['dateon'] ? date('d.m.Y',strtotime($stuff['dateon'])):''?>'> По
      <input id=sdateoff name="sdateoff" class="datepicker " 
         value='<?=$stuff['dateoff'] ? date('d.m.Y',strtotime($stuff['dateoff'])):''?>'>
      <br/> Анонс
      <br/>
      <textarea id=stuffnotice class=ckeditor>
         <?=$stuff['notice']?>
      </textarea>
      <br/> Полный текст:
      <br/>
      <textarea id=stuffbody class=ckeditor>
         <?=$stuff['body']?>
      </textarea>
      <br/>
      <input type=hidden name=stype id=stype value='<?=$stuff['stuff_type']?>'>
      <input type=hidden name=sID id=sID value='<?=$stuff['sID']?>'>

      <button  onclick='SaveStuff(<?=$stuff[' sID ']?>)' 
         class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">сохранить
         </button>
       <span id=savemsg></span>
   </form>
</div>

<script type='text/javascript'>
   $(function()
   {
      CKEDITOR.replace('stuffbody',
      {
         "extraPlugins": "imgbrowse",
         "filebrowserImageBrowseUrl": "/assets/js/ckeditor/plugins/imgbrowse/imgbrowse.html"
      });
      CKEDITOR.replace('stuffnotice',
      {
         "extraPlugins": "imgbrowse",
         "filebrowserImageBrowseUrl": "/assets/js/ckeditor/plugins/imgbrowse/imgbrowse.html"
      });
     /* $(' #stuffnotice').redactor(
      {
         imageUpload: '/assets/redactor/scripts/image_upload.php',
         fileUpload: '/assets/redactor/scripts/file_upload.php',
         imageGetJson: '/assets/redactor/json/data.json'
      });*/
      var dateon = $('#sdateon').val();
      var dateoff = $('#sdateoff').val();
      $(".datepicker").datepicker($.datepicker.regional['ru']).datepicker("option", "dateFormat", "dd.mm.yy");
      $('#sdateon').val(dateon);
      $('#sdateoff').val(dateoff);
   });
</script>
