<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<div class="section">
  <!-- <div class="container_register"> -->
    <div class="form_black">
      <div class="field">
        <h1>Perfil</h1>
      </div>

      <div class="field">
        <div class="photo">
          <img src="<?= URL . '/public/img/upload/' . $_SESSION["img"]?>" alt="<?= $_SESSION["name"]?>">
        </div>
      </div>
      
      <div class="field">
        <h2><?= $_SESSION["name"]?></h2>
      </div>
        <a href="<?= URL ?>/user/logout" class="btn btn_red md"><span>Salir</span></a>
      <?= print_r($_SESSION);?>
    </div>
  <!-- </div> -->
</div>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>