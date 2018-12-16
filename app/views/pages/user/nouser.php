<?php
  include ROOT_APP . '/views/includes/header.php';
?>

<div class="section">
  <div class="container_register">
    <div class="field">
      <h2>¡Hola!</h2>
      <h3>Parece ser que aun no hay un Usuario activo</h3>
    </div>

    <div class="field">
      <a href="<?= URL?>/user/registro" class="btn-std btn-green"><span>Quiero Registrarme</span></a>
    </div>

    <div class="field">
      <a href="<?= URL?>/user/ingresar" class="btn-std btn-green"><span>Ya tengo una cuenta</span></a>
    </div>
  </div>
</div>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>