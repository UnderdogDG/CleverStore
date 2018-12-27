<?php
  include ROOT_APP . '/views/includes/header.php';
?>

<div class="section">
    <div class="container_register">
      <form class="form" action="<?= URL?>/user/login" method="post">
        <div class="field">
          <h2>Ingresar</h2>
          <br>
          <hr>
        </div>
        
        <div>
          <div class="field">
            <label for="email">E-mail</label><input type="text" name="email" id="email" placeholder="tu_e-mail@ejemplo.com">
          </div>
          <div class="field">
            <label for="password">Contraseña</label><input type="text" name="password" id="password" placeholder="Tu contraseña">
          </div>
        </div>

        <div class="field">
          <button class="btn btn_green" type="submit" value="Ingresar"><span>Ingresar</span></button>
        </div>
      </form>
    </div>
  </div>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>