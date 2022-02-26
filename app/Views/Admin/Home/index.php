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
# Pinta contenidos
*/
<?php echo $this->section('contenido'); ?>

<?php echo $titulo; ?>

<?php echo $this->endSection(); ?>
/*
# Pinta script propios
*/
<?php echo $this->section('scripts'); ?>

<-- Aqui va los scripts-->

<?php echo $this->endSection(); ?>