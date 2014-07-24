<script type="text/javascript">
$(document).ready(function(){
	$('.btn-danger').click(function(){
		if(!confirm('Seguro de borrar la pagina?')){
			return false;
		}
	});
});
</script>
<h3>Paginas</h3>
<a href="<?php echo base_url().'index.php/admin/pages/create' ?>" class="btn btn-success">Nueva Pagina</a>
<table class="table table-striped table-condensed table-hover table-bordered">
<thead>
<tr>
<th>Titulo</th>
<th>Slug</th>
<th style="width: 160px;">Acciones
</tr>
</thead>
<tbody>
<?php foreach($pages as $page): ?>

	
<tr>
	<td>
		<?php echo $page['title']; ?>	
	</td>
	<td>
		<?php echo $page['slug']; ?>	
	</td>
	<td>
		<a href="<?php echo base_url().'index.php/admin/pages/edit/'.$page['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
		<a href="<?php echo base_url().'index.php/admin/pages/delete/'.$page['id'] ?>" class="btn btn-danger btn-sm">Borrar</a>
	</td>
</tr>


<?php endforeach; ?>
</tbody>
</table>