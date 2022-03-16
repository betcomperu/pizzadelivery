<?php echo $this->extend('Admin/layout/principal'); ?>
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

  <!-- /.card-header -->
  <?php if (session()->has('errors_model')) : ?>
    <ul>
      <?php foreach (session('errors_model') as $error) : ?>
        <li class="text-danger"><?php echo $error; ?></li>

      <?php endforeach; ?>

    </ul>

  <?php endif; ?>
  <!-- form start -->
  <?= form_open("admin/usuarios/actualizar/$usuarios->id"); ?>

  <?= $this->include('Admin/Usuarios/form') ?>

  <?= form_close(); ?>
  </div>
  <!-- /.card -->


  <?php echo $this->endSection(); ?>
  /*
  # Pinta script propios
  */
  <?php echo $this->section('scripts'); ?>

  <script src="<?php echo site_url('admin/vendors/mask/jquery.mask.min.js'); ?>"></script>
  <script src="<?php echo site_url('admin/vendors/mask/app.js'); ?>"></script>

  <?php echo $this->endSection(); ?>