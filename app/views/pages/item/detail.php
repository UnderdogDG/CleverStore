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
            <h2><?= $data["name"]; ?></h2>
            <h3><?= $data["price"]; ?></h3>
            <a href="#" class="btn btn_green back-black md"><span>Comprar</span></a>
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