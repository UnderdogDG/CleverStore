<?php
  include ROOT_APP . '/views/includes/header.php';
?>

  <div class="section">
    <div class="container_register">
      <form action="<?= URL?>/main/create" method="post">
        <div class="field">
          <h2>Registro</h2>
        </div>

        <div class="photo">
        </div>
        
        <div>
          <div class="field">
            <label for="name">Nombre<sup>*</sup></label><input type="text" name="name" id="name" placeholder="Nombre">
          </div>
          <div class="field">
            <label for="first_name">Apellido<sup>*</sup></label><input type="text" name="first_name" id="first_name" placeholder="Apellido">
          </div>
          <div class="field">
            <label for="tel">Teléfono</label><input type="text" name="tel" id="tel" placeholder="00-00-00-00">
          </div>
          <div class="field">
            <label for="email">E-mail<sup>*</sup></label><input type="text" name="email" id="email" placeholder="ejemplo@exm.com">
          </div>
          <div class="field">
            <label for="email_conf">E-mail<sup>2</sup> </label><input type="text" name="email_conf" id="email_conf" placeholder="Repite tu e-mail">
          </div>
          <div class="field">
            <label for="password">Contraseña<sup>*</sup></label><input type="text" name="password" id="password" placeholder="al menos 8 caracteres">
          </div>
          <div class="field">
            <label for="password-conf">Contraseña<sup>2</sup> </label><input type="text" name="password-conf" id="password-conf" placeholder="Repite tu contraseña">
          </div>
        </div>
        
          <p class="obl">* Campos Obligatorios</p>

        <div class="field">
          <input class="btn-std" type="submit" value="Enviar">
        </div>
      </form>
    </div>
  </div>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>