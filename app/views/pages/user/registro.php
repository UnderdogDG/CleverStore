<?php
  include ROOT_APP . '/views/includes/header.php';
?>

  <div class="section">
    <div class="container_register">
      <form class="form" action="<?= URL?>/user/signin" method="post" enctype="multipart/form-data">
        <div class="field">
          <h2>Registro</h2>
        </div>

        <div class="img" id="container">
          <label for="img"></label>
          <input type="file" name="img" id="img" class="img">
          <span id="adv" class="aviso"><?= (preg_match('/Error/', $data["img"])) ? $data["img"] : ""; ?></span>
        </div>
        
        <div>
          <div class="field">
            <label for="name">Nombre<sup>*</sup>
            </label><input type="text" name="name" id="name" class="<?= ($data["name"] == 'Error') ? "error" : ""; ?>" placeholder="Nombre" value="<?= ($data["name"] == 'Error') ? "" : $data["name"]; ?>">
          </div>
          <div class="field">
            <label for="first_name">Apellido<sup>*</sup></label>
            <input type="text" name="first_name" id="first_name" class="<?= ($data["first_name"] == 'Error') ? "error" : ""; ?>" placeholder="Apellido" value="<?= ($data["first_name"] == 'Error') ? "" : $data["first_name"]; ?>">
          </div>
          <div class="field">
            <label for="tel">Teléfono</label>
            <input type="text" name="tel" id="tel" class="<?= ($data["tel"] == 'Error') ? "error" : ""; ?>" placeholder="00-00-00-00" value="<?= ($data["tel"] == 'Error') ? "" : $data["tel"]; ?>">
          </div>
          <div class="field">
            <label for="email">E-mail<sup>*</sup></label>
            <input type="text" name="email" id="email" class="<?= ($data["email"] == 'Error' OR $data["email_conf"] == 'Error') ? "error" : ""; ?>" placeholder="ejemplo@exm.com" value="<?= ($data["email"] == 'Error') ? "" : $data["email"]; ?>">
            <span id="adv" class="aviso"></span>
          </div>
          <div class="field">
            <label for="email_conf">E-mail<sup>2</sup> </label>
            <input type="text" name="email_conf" id="email_conf" class="<?= ($data["email_conf"] == 'Error') ? "error" : ""; ?>" placeholder="Repite tu e-mail" value="<?= ($data["email_conf"] == 'Error') ? "" : $data["email_conf"]; ?>">
          </div>
          <div class="field">
            <label for="password">Contraseña<sup>*</sup></label>
            <input type="text" name="password" id="password" class="<?= ($data["password"] == 'Error' OR $data["password_conf"] == 'Error') ? "error" : ""; ?>" placeholder="al menos 8 caracteres" value="<?= ($data["password"] == 'Error') ? "" : $data["password"]; ?>">
          </div>
          <div class="field">
            <label for="password_conf">Contraseña<sup>2</sup> </label>
            <input type="text" name="password_conf" id="password_conf" class="<?= ($data["password_conf"] == 'Error') ? "error" : ""; ?>" placeholder="Repite tu contraseña" value="<?= ($data["password_conf"] == 'Error') ? "" : $data["password_conf"]; ?>">
          </div>
        </div>
        
          <p class="obl">* Campos Obligatorios</p>

        <div class="field">
          <button class="btn btn_green" type="submit" value="Enviar"><span>Enviar</span></button>
        </div>
      </form>
    </div>
  </div>

  <script src="<?= URL; ?>/public/js/validar.js"></script>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>