<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  [$data["art_class"]=>$class] = ['jwl'=>'Joyería', 'acc'=>'Accesorios', 'sho'=>'Zapatos', 'clo'=>'Ropa'];
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="product_container">
    <div class="sort wow fadeInLeft">
      <h2 data-sort="<?= $class; ?>"><?= $class?></h2>
    </div>

    <section class="card wow fadeInDown">

      <div class="card_container wow flipInX" data-wow-delay="0.8s">

        <div class="name">
        <input type="text" name="sku" id="sku" value="<?= $data["sku"]?>">
          <h2><?= $data["name"]; ?></h2>
          <h3><?= "Other";?></h3>
        </div>

        <div class="img">
          <img src="<?= URL . "/img/store/anillo.png"?>" alt="">
        </div>

      </div>

    </section>

    <section class="options">
      <button class="btn_circle wow zoomIn md outline <?= (isset($_SESSION["user"])) ? "" : "disabled" ?>" <?= (isset($_SESSION["user"])) ? "" : "disabled=\"disabled\"" ?> data-wow-delay="1.75s">
        <i class="fas fa-gift icon"></i>
      </button>

      <button class="btn_circle wow zoomIn md outline <?= (isset($_SESSION["user"])) ? "" : "disabled" ?>" id="cart" <?= (isset($_SESSION["user"])) ? "" : "disabled=\"disabled\"" ?> data-wow-delay="2s">
        <i class="fas fa-shopping-cart icon"></i>
      </button>

      <button class="btn_circle wow zoomIn" data-wow-delay="2.25s">
        <i class="fas fa-dollar-sign icon"></i>
      </button>
    </section>

    <section class="description wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">
      <p><?= $data["description"]; ?></p>
    </section>
    
    <section id="menu" class="menu wow flipInY drop">
      <div class="label">
        <input class="price" id="price" value="<?= $data["price"]; ?>">
        <h3 class="price"><?= $data["price"]; ?></h3>
      </div>

      <div class="quantity wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">
      <!-- <label for="quantity">Cantidad</label> -->
        <button class="btn_circle outline" type="button" id="plus">
          <span class="icon">+</span>
        </button>

        <input type="text" name="quantity" id="quantity" min="01" value="1" pattern="\d{1,2}">

        <button class="btn_circle outline" type="button" id="min">
          <span class="icon">-</span>
        </button>
      </div>

      <div class="total wow flipInY" data-wow-delay="1.4s">
        <h3 class="output wow flipInX" data-wow-delay="1.8s"><span class="prefix">Total $</span><span id="totalPrice"><?= $data["price"]; ?></span></h3>
      </div>
    </section>

    <button class="btn_circle outline" id="btn_menu"><i class="fas fa-cash-register icon"></i></button>
  
  </div>
  <!-- <?= print_r($data);?> -->
</main>

<script src="<?= URL; ?>/public/js/compras.js"></script>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>