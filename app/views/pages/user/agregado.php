<?php
  include ROOT_APP . '/views/includes/header.php';
?>
<div class="section">
  <div class="container_register">
    <div class="field">
      <img class="img_success" src="<?= URL; ?>/img/success.png" alt="Registrado">
    </div>
    <div class="field">
      <h1>Felicidades <?= $data["name"]?></h1>
      <h2>¡Te has Registrado correctamente!</h2>
      <p>Ahora puedes empezar a disfrutar de los beneficios de comprar en Clever Store</p>
    </div>
  </div>
</div>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>