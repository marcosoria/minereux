<script type="text/javascript">
$(document).ready(function(){
	$('.btn-danger').click(function(){
		if(!confirm('Seguro de borrar el fondo?')){
			return false;
		}
	});
});
</script>
<h3>Fondos</h3>
<a href="<?php echo base_url().'index.php/admin/wallpapers/create' ?>" class="btn btn-success">Nuevo Fondo</a>
<table class="table table-striped table-condensed table-hover table-bordered">
<thead>
<tr>
<th>Descripcion</th>
<th>Archivo</th>
<th style="width: 160px;">Acciones
</tr>
</thead>
<tbody>
<?php foreach($wallpapers as $wallpaper): ?>

	
<tr>
	<td>
		<?php echo $wallpaper['description']; ?>	
	</td>
	<td>
		<?php echo $wallpaper['bg_url']; ?>	
	</td>
	<td>
		<a href="<?php echo base_url().'index.php/admin/wallpapers/edit/'.$wallpaper['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
		<a href="<?php echo base_url().'index.php/admin/wallpapers/delete/'.$wallpaper['id'] ?>" class="btn btn-danger btn-sm">Borrar</a>
	</td>
</tr>


<?php endforeach; ?>
</tbody>
</table>