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
        <?php if($_SESSION["cart"]) :?>
          <?php foreach($_SESSION["cart"] as $item) :?>
            <div class="wrapper">
              <div class="item">

                <div class="img">
                <img src="<?=URL ?>/img/store/anillo.png" alt="">
                </div>

                <div class="info">
                  <h2 class="head"><?= $item['name']?></h2>
                  <div class="label">
                    <h3 class="price"><?= $item['price']?></h3>
                  </div>
                </div>

                <div class="options">

                  <button class="btn_pop">
                    <div class="btn_wrapper">
                      <i class="fas fa-trash-alt"></i>
                    </div>
                  </button>

                </div>

              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="wrapper">
            <h2>No has agregado productos a tu Carrito de Compras</h2>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>