<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="section">
    <div class="container_detail">
      <div class="form_white">
        <div class="title">
        <h2><?= $data["name"]; ?></h2>
        </div>
        <div class="body">
          <div class="col-50">
            <div class="img">
              <img src="<?=URL ?>/img/store/18.jpg" alt="">
            </div>
          </div>
          <div class="col-50 col-50_black info">
            <h2 class="name"><?= $data["name"]; ?></h2>

            <div class="field">
              <h2 class="seguro">Seguro</h2>
              <h2 class="envio">Envio Express</h2>
            </div>

            <h3 class="price"><?= $data["price"]; ?></h3>

            <div class="btn_add_buy">
              <a href="#" class="btn btn_green add"><span>Agregar</span></a>
              <a href="#" class="btn btn_gold buy"><span>Comprar</span></a>
            </div>
          </div>
          
          <div class="col-100 description">
            <p><?= $data["description"]?></p>
          </div>
        </div>
      </div>
      <!-- <?php print_r($data); ?> -->
    </div>
  </div>
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>