<?php
  include ROOT_APP . '/views/includes/header.php';
?>
  <?php
    require ROOT_APP . '/views/includes/nav.php';

    $i = 0.2;
  ?>
  <main>
    <div class="section section_nofull">
      <div class="container_search">

        <?php if(!$data) : ?>
          <div class="item wow flipInX">
            <div class="container">
              <div class="noFound">
                <h2>Lo sentimos</h2>
                <h3>No se encontraron ítems con esta búsqueda</h2>
              </div>
            </div>
          </div>

        <?php else : ?>

          <?php foreach ($data as $item) : ?>

          <div class="item wow flipInX" data-wow-delay="<?= $i += 0.2; ?>s">
            <div class="container">
              <div class="container_head">
                <h2><span><?= $item["name"]; ?></span></h2>
                <a href="<?= URL . "/product/item/" . $item["sku"]?>" class="btn btn_gold md"><span>Ir al Producto</span></a>
              </div>

              <div class="container_img">
                <img src="<?=URL ?>/img/store/anillo.png" alt="<?= $item["name"]; ?>">
              </div>

              <div class="container_options">
                <button class="btn_pop">
                  <div class="btn_wrapper">
                    <i class="far fa-star fav"></i>
                  </div>
                </button>
                <button class="btn_pop">
                  <div class="btn_wrapper">
                    <i class="fas fa-gift"></i>
                  </div>
                </button>
              </div>
            </div>
          </div>

          <?php endforeach;  ?>
          <!-- <?= print_r($data); ?> -->

        <?php endif; ?>
      </div>
    </div>
  </main>
<?php
  include ROOT_APP . '/views/includes/footer.php';
?>