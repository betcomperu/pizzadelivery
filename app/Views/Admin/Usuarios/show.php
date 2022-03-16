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


<!-- /.col -->
<div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo esc($usuarios->nombre); ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p class="card-text">
                  <span class="font-weight-bold">Nombre: </span>
                  <?php echo esc($usuarios->nombre); ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Correo: </span>
                  <?php echo esc($usuarios->email); ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Dni/Ruc: </span>
                  <?php echo esc($usuarios->Dni_Ruc); ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Telefono: </span>
                  <?php echo esc($usuarios->telefono); ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Activo: </span>
                  <?php echo $usuarios->activo? 'Si': 'No'; ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Activo: </span>
                  <?php echo $usuarios->es_admin? 'Administrador': 'Cliente'; ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Creado: </span>
                  <?php echo $usuarios->fecha_alta; ?>
                </p>
                <p class="card-text">
                  <span class="font-weight-bold">Actualizado: </span>
                  <?php echo $usuarios->fecha_edit; ?>
                </p>
                
                <a href="<?php echo site_url("admin/usuarios/edit/$usuarios->id");?>" class="btn btn-dark btn-sm"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                <a href="<?php echo site_url("admin/usuarios/excluir/$usuarios->id");?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> Desactivar</a>
                <a href="<?php echo site_url("admin/usuarios");?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-backward"></i> Atras</a>
              </div>
           
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->

<?php echo $this->endSection(); ?>
/*
# Pinta script propios
*/
<?php echo $this->section('scripts'); ?>

<-- Aqui va los scripts-->

<?php echo $this->endSection(); ?>