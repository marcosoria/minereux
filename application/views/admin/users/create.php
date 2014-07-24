
<div class="form-horizontal">
<?php echo form_open('admin/users/create') ?>

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Email" />
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Crear Usuario</button>
    </div>
  </div>
</form>
</div>