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

    <section class="card">

      <div class="card_container">

        <div class="name">
          <h2><?= $data["name"]; ?></h2>
          <h3><?= "Other";?></h3>
        </div>

        <div class="img">
          <img src="<?= URL . "/img/store/anillo.png"?>" alt="">
        </div>

      </div>

    </section>

    <section class="description">
      <p><?= $data["description"]; ?></p>
    </section>

    <section class="options">
      <button class="cart"><i class="fas fa-gift"></i></button>
      <button class="cart"><i class="fas fa-shopping-cart"></i></button>
      <button class="cart"><i class="fas fa-dollar-sign"></i></button>
    </section>

    
  
  </div>
  <!-- <?= print_r($data);?> -->
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>