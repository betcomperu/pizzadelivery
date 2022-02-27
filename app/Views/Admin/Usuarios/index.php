<?php  echo $this->extend('Admin/layout/principal'); ?>
/*
# Pinta el titulo de la pagina
*/
<?php echo $this->section('titulo'); ?>

<?php echo $titulo; ?>

<?php echo $this->endSection(); ?>
### Termina titulo ###

/*
# Pinta estilos propios
*/
<?php echo $this->section('estilos'); ?>

<-- Aqui va los estilos-->

<?php echo $this->endSection(); ?>

/*
# Pinta contenido central
*/
<?php echo $this->section('contenido'); ?>

<div class="col-lg-12 grid-margin stretch-card">

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $titulo; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Dni o Ruc</th>
                    <th>Activo</th>
                 
                  </tr>
                  </thead>
                  <tbody>
                <?php foreach ($usuarios as $usuario) :?>
                    <td>
                      <a href="<?php echo site_url("admin/usuarios/show/$usuario->id");?>"><?php echo $usuario->nombre; ?></a>
                    </td>
                    <td><?php echo $usuario->email; ?></td>
                    <td><?php echo $usuario->Dni_Ruc; ?></td>
                    <td><?php echo $usuario->activo ?'<label class=" badge badge-primary">Si</label>':' <label class=" badge badge-danger">No</label>' ?></td>
                 
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<?php echo $this->endSection(); ?>
/*
# Pinta script propios
*/
<?php echo $this->section('scripts'); ?>

<-- Aqui va los scripts-->

<?php echo $this->endSection(); ?>