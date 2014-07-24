<script type="text/javascript">
$(document).ready(function(){
	$('.btn-danger').click(function(){
		if(!confirm('Seguro de borrar el usuario?')){
			return false;
		}
	});
});
</script>
<h3>Usuarios</h3>
<a href="<?php echo base_url().'index.php/admin/users/create' ?>" class="btn btn-success">Nuevo Usuario</a>
<table class="table table-striped table-condensed table-hover table-bordered">
<thead>
<tr>
<th>Nombre</th>
<th>Email</th>
<th style="width: 160px;">Acciones
</tr>
</thead>
<tbody>
<?php foreach($users as $user): ?>

	
<tr>
	<td>
		<?php echo $user['name']; ?>	
	</td>
	<td>
		<?php echo $user['email']; ?>	
	</td>
	<td>
		<a href="<?php echo base_url().'index.php/admin/users/edit/'.$user['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
		<a href="<?php echo base_url().'index.php/admin/users/delete/'.$user['id'] ?>" class="btn btn-danger btn-sm">Borrar</a>
	</td>
</tr>


<?php endforeach; ?>
</tbody>
</table>