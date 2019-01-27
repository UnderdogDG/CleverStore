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

    <div class="item">

      <div class="container">
        <div class="article">
          <div class="article_name">
            <h2><?= $data["name"]; ?></h2>
          </div>
          <div class="article_img">

          </div>

        </div>

      </div>

    </div>

    <div class="menu">

    </div>
  
  </div>
  <!-- <?= print_r($data);?> -->
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>