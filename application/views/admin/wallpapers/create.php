<!-- place in header of your html document -->

<script>
tinymce.init({
    selector: "textarea#content",
    theme: "modern",
    width: 640,
    height: 320,
    valid_children : "+body[style|span]",
    relative_urls: false,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor jbimages"
   ],
   content_css: "/assets/css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons jbimages", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>
<div class="form-horizontal">
<?php echo form_open_multipart('admin/wallpapers/create') ?>


	
	<div class="form-group">
	  <label for="bg_file" class="col-sm-2 control-label">Archivo</label>
	  <div class="col-sm-10">
	    <input type="text" name="file_name" size="20" />
	  </div>
	</div>
  <div class="form-group">
    <label for="date_begin" class="col-sm-2 control-label">Fecha Inicio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="date_begin" placeholder="Fecha Inicio"/>
    </div>
  </div>
  <div class="form-group">
    <label for="date_end" class="col-sm-2 control-label">Fecha Fin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="date_end" placeholder="Fecha Fin"/>
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Subir Archivo</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="content" id="content" placeholder="Sube archivo"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="description"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Crear Wallpaper</button>
      <a class="btn btn-default" href="<?php echo base_url().'index.php/admin/wallpapers' ?>">Cancelar</a>
    </div>
  </div>
</form>
</div>