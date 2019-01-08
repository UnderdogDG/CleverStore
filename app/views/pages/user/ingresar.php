<?php
  include ROOT_APP . '/views/includes/header.php';
?>

<?php
  include ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="section section_nofull">
    <form class="form_register" action="<?= URL?>/user/login" method="post">
      <div class="title">
        <h2>Ingresar</h2>
      </div>
        
      <div class="body">
        <div class="field">
          <label for="email">E-mail</label><input type="text" name="email" id="email" placeholder="tu_e-mail@ejemplo.com">
        </div>
        <div class="field">
          <label for="password">Contraseña</label><input type="text" name="password" id="password" placeholder="Tu contraseña">
        </div>
      </div>

      <div class="footer">
        <button class="btn btn_gold md" type="submit" value="Ingresar"><span><i class="fas fa-sign-in-alt"></i> Ingresar</span></button>
      </div>
    </form>
  </div>
</main>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>