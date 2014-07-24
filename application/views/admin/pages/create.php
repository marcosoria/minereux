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
<?php echo form_open('admin/pages/create') ?>

  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="title" class="form-control" id="title" placeholder="Titulo de la Pagina" name="title">
    </div>
  </div>
  <div class="form-group">
    <label for="excrept" class="col-sm-2 control-label">Sumario</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="excrept" placeholder="Sumario"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Contenido</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="content" id="content" placeholder="Contenido de la pagina (HTML)"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Crear Pagina</button>
      <a class="btn btn-default" href="<?php echo base_url().'index.php/admin/pages' ?>">Cancelar</a>
    </div>
  </div>
</form>
</div>