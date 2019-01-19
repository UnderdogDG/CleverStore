<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  require ROOT_APP . '/views/includes/nav.php';
?>

  <main>
    <div class="section section_nofull">
      <!-- <?= print_r($data); ?>
      <br>
      <?= print_r($_SESSION); ?>
      <br>
      <?= count($data) ?> -->

      <div class="container_cart">
        <?php if($data) :?>
          <?php foreach($data as $item) :?>
            <div class="wrapper">
              <div class="item">

                <div class="img">
                <img src="<?=URL ?>/img/store/anillo.png" alt="">
                </div>

                <div class="info">
                  <h2><?= $item['name']?></h2>
                  <h3><?= $item['price']?></h3>
                </div>

                <div class="options">

                </div>

              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="wrapper">
            <h2>No has agregado nada a tu Carrito de Compras</h2>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>