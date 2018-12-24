<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<div class="section">
  <?= print_r($_SESSION);?>
  <a href="<?= URL ?>/user/logout" class="btn-green">Logout</a>

</div>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>