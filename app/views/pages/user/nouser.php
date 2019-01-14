<?php
  include ROOT_APP . '/views/includes/header.php';
?>
<?php
    require ROOT_APP . '/views/includes/nav.php';
?>
<main>

  <div class="section section_nofull animated shake">
    <div class="form_nouser">
      <div class="title">
        <h2>Sin Sesión</h2>
      </div>

      <div class="body">
        <div class="field">
          <h2>¡Hola!</h2>
        </div>
        <div class="field">
          <h3>Parece ser que aún no hay un Usuario Activo</h3>
        </div>
        
        <div class="field">
          <a href="<?= URL?>/user/registro" class="btn btn_white lg mx-10px"><span><i class="fas fa-file-signature"></i> Quiero Registrarme</span></a>
          <a href="<?= URL?>/user/ingresar" class="btn btn_gold lg mx-10px"><span><i class="fas fa-user"></i> Ya tengo una cuenta</span></a>
        </div>
      </div>

    </div>
  </div>

</main>
<?php
  include ROOT_APP . '/views/includes/footer.php';
?>