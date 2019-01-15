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

        <?php foreach ($data as $item) : ?>

        <div class="item wow fadeInUp" data-wow-delay="<?= $i += 0.1; ?>">
          <div class="container">
            <div class="container_head">
              <h2><span><?= $item["name"]; ?></span></h2>
              <a href="<?= URL . "/product/item/" . $item["sku"]?>" class="btn btn_gold md"><span>Ir al Producto</span></a>
            </div>

            <div class="container_img">
              <img src="<?=URL ?>/img/store/anillo.png" alt="<?= $item["name"]; ?>">
            </div>

            <div class="container_options">
              <button class="btn_pop"><i class="far fa-star fav"></i></button>
              <button class="btn_pop"><i class="fas fa-gift"></i></button>
            </div>
          </div>
        </div>



        <?php endforeach;  ?>
        <!-- <?= print_r($data); ?> -->
      </div>
    </div>
  </main>
<?php
  include ROOT_APP . '/views/includes/footer.php';
?>