<div class="card-body">
  <div class=form-row>
    <div class="form-group col-md-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuarios->nombre; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuarios->email; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="Dni">Dni/Ruc</label>
      <input type="text" class="form-control" id="Dni_Ruc" name="Dni_Ruc" value="<?php echo $usuarios->Dni_Ruc; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="telefono">Telefono</label>
      <input type="text" class="form-control phone" name="telefono" id="telefono" value="<?php echo $usuarios->telefono; ?>">
    </div>
  </div>
  <div class=form-row>

    <div class="form-group col-md-3">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password_hash" name="password_hash">
    </div>
    <div class="form-group col-md-3">
      <label for="confirmacion_password">Confirmación de Password</label>
      <input type="password" class="form-control" id="activacion_hash" name="activacion_hash">
    </div>
    <div class="form-group col-md-3">
      <label for="activo">Perfil de acceso </label>
      <select class="form-control" name="es_admin">
        <?php if ($usuarios->id) : ?>
          <option value="1" <?php echo ($usuarios->es_admin ? 'selected' : ''); ?>>Administrador</option>
          <option value="1" <?php echo (!$usuarios->es_admin ? 'selected' : ''); ?>>Cliente</option>
        <?php else : ?>
          <option value="1">Si</option>
          <option value="0">No</option>
        <?php endif; ?>
      </select>
    </div>

    <div class="form-group col-md-3">
      <label for="activo">Activo</label>
      <select class="form-control" name="activo" id="activo">
        <?php if ($usuarios->id) : ?>
          <option value="1" <?php echo ($usuarios->activo ? 'selected' : ''); ?>>Si</option>
          <option value="1" <?php echo (!$usuarios->activo ? 'selected' : ''); ?>>No</option>
        <?php else : ?>
          <option value="1">Si</option>
          <option value="0">No</option>
        <?php endif; ?>
      </select>
    </div>
  </div>



  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Grabar</button>
    <a href="<?php echo site_url("admin/usuarios/show/$usuarios->id"); ?>" class="btn btn-warning"><i class="fa-solid fa-backward"></i> Atras</a>
  </div>