<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  [$data["art_class"]=>$class] = ['jwl'=>'Joyería', 'acc'=>'Accesorios', 'sho'=>'Zapatos', 'clo'=>'Ropa'];
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="product_container">
    <div class="sort">
      <h2><?= $class?></h2>
    </div>

    <div class="body">
      <div class="menu">
        
      </div>

      <div class="container">
        <div class="article">
          <div class="article_name">
            <h2><?= $data["name"]; ?></h2>
            <h3>Other</h3>
          </div>
          <div class="article_img">
            <img src="<?=URL ?>/img/store/anillo.png" alt="<?= $data["name"]; ?>">
          </div>
        </div>
      </div>

      <div class="description">
        <div class="col-50">
          <p><?= $data["description"]; ?></p>
          </div>
        <div class="col-50">
          
      </div>
      </div>

    </div>

    <div class="menu">
      <div class="label">
        <h3 class="price"><?= $data["price"]; ?></h3 class="price">
      </div>

    </div>
  
  </div>
  <!-- <?= print_r($data);?> -->
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>