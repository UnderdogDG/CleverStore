<?php
  include ROOT_APP . '/views/includes/header.php';
?>
<?php
    require ROOT_APP . '/views/includes/nav.php';
?>
<main>
  <!-- <?= print_r($data); ?> -->
  <!-- <?= print_r($_SESSION); ?> -->
  <div class="section section_nofull animated zoomIn">
      <form class="form_register" action="<?= URL?>/user/update" method="post" enctype="multipart/form-data">
        <div class="title">
          <h2>Registro</h2>
        </div>

        <div class="body">
          
          <div class="photo photo_input" id="container" <?= ($data["img"]) ? ('style="'. "background: url(". URL . "/public/img/upload/" . $data['img'] . ') center/cover no-repeat;"') : "";?>>
            <label for="img"></label>
            <input type="file" name="img" id="img" class="img">
          </div>

          <div class="field">
            <span id="adv" class="warning"><?= (preg_match('/Error/', $data["img"])) ? $data["img"] : ""; ?></span>
          </div>

          <div class="group">
            <div class="field">
              <label for="name">Nombre<sup>*</sup>
              </label><input type="text" name="name" id="name" class="<?= ($data["name"] == 'Error') ? "error" : ""; ?>" placeholder="Nombre" value="<?= ($data["name"] == 'Error') ? "" : $data["name"]; ?>">
            </div>
            <div class="field">
              <label for="last_name">Apellido<sup>*</sup></label>
              <input type="text" name="last_name" id="last_name" class="<?= ($data["last_name"] == 'Error') ? "error" : ""; ?>" placeholder="Apellido" value="<?= ($data["last_name"] == 'Error') ? "" : $data["last_name"]; ?>">
            </div>
            <div class="field">
              <label for="tel">Teléfono</label>
              <input type="text" name="tel" id="tel" class="<?= ($data["tel"] == 'Error') ? "error" : ""; ?>" placeholder="00-00-00-00" value="<?= ($data["tel"] == 'Error') ? "" : $data["tel"]; ?>">
            </div>
            <div class="field">
              <label for="email">E-mail</label>
              <input type="text" id="email" name="email" class="" placeholder="ejemplo@exm.com" value="<?= $data["email"]; ?>" disabled="disabled">
              <span id="adv" class="aviso"></span>
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
          
          <div class="field">
            <p class="warning">* Campos Obligatorios</p>
          </div>
        </div>
        
        <div class="footer">
          <button class="btn btn_green md" type="submit" value="Enviar"><span><i class="fas fa-share-square"></i> Enviar</span></button>
        </div>
      </form>
  </div>
</main>
<script src="<?= URL; ?>/public/js/validar.js"></script>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>