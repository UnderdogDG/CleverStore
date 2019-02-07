<?php
  include ROOT_APP . '/views/includes/header.php';
?>
<?php
    require ROOT_APP . '/views/includes/nav.php';
?>
<main>
  <div class="section section_nofull">
    <div class="form_black success">
      <div class="title">
        <h2>Registrado</h2>
      </div>
      <div class="body">
        <div class="field">
          <img class="img_success" src="<?= URL; ?>/img/sitio/success.png" style="max-width: 40%" alt="Registrado">
        </div>
        <div class="field">
          <div class="field">
            <h1>Felicidades <?= $data["name"]?></h1>
          </div>
          <div class="field">
            <h2>¡Te has Registrado correctamente!</h2>
          </div>
          
          <p style="max-width: 80%">Ahora puedes empezar a disfrutar de los beneficios de comprar en Clever Store</p>
        </div>
      </div>
      
      
    </div>
  </div>
</main>

<?php
  include ROOT_APP . '/views/includes/footer.php';
?>