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