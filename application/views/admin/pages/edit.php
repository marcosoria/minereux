<!-- place in header of your html document -->
<script>


tinymce.init({
    selector: "textarea#content",
    theme: "modern",
    width: 640,
    height: 320,
    relative_urls: false,
    valid_children : "+body[style],+a[span],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style],img[href|src|name|title|onclick|align|alt|title|width|height|vspace|hspace],iframe[id|class|width|size|noshade|src|height|frameborder|border|marginwidth|marginheight|target|scrolling|allowtransparency],style[type]",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor jbimages"
   ],   
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
Span
<div class="form-horizontal">
<?php echo form_open('admin/pages/edit') ?>
	<input type="hidden" name="id" value="<?php echo $page['id'] ?>" />
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="title" class="form-control" id="title" placeholder="Titulo de la Pagina" name="title" value="<?php echo $page['title'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="excrept" class="col-sm-2 control-label">Sumario</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="excrept" placeholder="Sumario"><?php echo $page['excrept'] ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Contenido</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="content" id="content" placeholder="Contenido de la pagina (HTML)"><?php echo $page['content']?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Editar Pagina</button>
      <a class="btn btn-default" href="<?php echo base_url().'index.php/admin/pages' ?>">Cancelar</a>
    </div>
  </div>
</form>
</div>