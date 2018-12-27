<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<div class="section">
  <div class="container_register">
    <div class="field">
      <h2>Perfil</h2>
    </div>
    <div class="img">
      <img src="<?= URL . '/public/img/upload/' . $_SESSION["img"]?>" alt="">
    </div>
    <?= print_r($_SESSION);?>
    <a href="<?= URL ?>/user/logout" class="btn-green">Logout</a>
  </div>
</div>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>