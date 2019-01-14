<?php
  include ROOT_APP . '/views/includes/header.php';
?>
  <?php
    require ROOT_APP . '/views/includes/nav.php';

    $i = 0.25;
  ?>
  <main>
    <div class="section section_nofull">
      <div class="container_search">

        <?php foreach ($data as $item) : ?>

        <div class="item wow fadeInUp" data-wow-delay="<?= $i; ?>s">
          <div class="container">
            <div class="container_head">
              <h2><?= $item["name"]; ?></h2>
              <button class="btn btn_gold md"><span>Ir al Producto</span></button>
            </div>

            <div class="container_img">
              <img src="<?=URL ?>/img/store/anillo.png" alt="<?= $data["name"]; ?>">
            </div>

            <div class="container_options">
              <button class="btn_pop"><i class="far fa-star"></i></button>
              <button class="btn_pop"><i class="fas fa-gift"></i></button>
            </div>
          </div>
        </div>

        <?php $i += 0.25; ?>

        <?php endforeach;  ?>

      </div>
    </div>
  </main>
<?php
  include ROOT_APP . '/views/includes/footer.php';
?>