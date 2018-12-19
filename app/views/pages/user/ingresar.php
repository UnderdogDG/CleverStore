<?php
  include ROOT_APP . '/views/includes/header.php';
?>

<div class="section">
    <div class="container_register">
      <form action="<?= URL?>/user/signin" method="post">
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
          <input class="btn-std" type="submit" value="Ingresar">
        </div>
      </form>
    </div>
  </div>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>