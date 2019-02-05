<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php

  $class= "";

  $category = [
    'Ropa'=>'clt', 
    'Zapatos'=>'sho', 
    'Joyería'=>'jwl',
    'Accesorios'=>'acc',
  ];

  foreach ($category as $key => $value) {
    if($data["art_class"] == $value){
      $class = $key;
    };
  }

  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="product_container">
    <div class="sort wow fadeInLeft">
      <h2 data-sort="<?= $class; ?>"><?= $class?></h2>
    </div>

    <section class="card wow fadeInDown">

      <div class="card_container wow flipInX" data-wow-delay="0.8s">
        <div class="sku">
          <input type="text" name="sku" id="sku" value="<?= $data["sku"]?>" disabled="disabled">
        </div>
        
        <div class="name">
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
        <i class="fas fa-cart-arrow-down agregar"></i>
      </button>

      <button class="btn_circle wow zoomIn" id="comprar" data-wow-delay="2.25s">
        <i class="fas fa-dollar-sign icon"></i>
      </button>

      <button class="btn_circle wow zoomIn outline" id="btn_menu" data-wow-delay="2.25s">
        <i class="fas fa-cash-register icon"></i>
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

        <input type="text" name="quantity" id="quantity" min="01" value="1" pattern="\d{1,2}" disabled="disabled">

        <button class="btn_circle outline" type="button" id="min">
          <span class="icon">-</span>
        </button>
      </div>

      <div class="total wow flipInY" data-wow-delay="1.4s">
        <h3 class="output wow flipInX" data-wow-delay="1.8s">
          <span class="prefix">Total $</span>
          <span id="totalPrice"><?= $data["price"]; ?></span>
        </h3>
      </div>

      <div class="buy">
        <!-- <button class="btn sm outline" id="menuClose">
          <i class="fas fa-times icon"></i>
        </button> -->
        <!-- <button class="btn_std wow zoomIn" data-wow-delay="2.25s">
          <i class="fas fa-dollar-sign icon"></i>
        </button> -->
        <button class="btn btn_green md wow zoomIn" data-wow-delay="1s" id="menuClose">
          <span><i class="fas fa-arrow-left"></i></i>Regresar</span>
        </button>
        <button type="button" class="btn md wow zoomIn" data-wow-delay="1s">
          <span><i class="fas fa-dollar-sign icon"></i>Comprar</span>
        </button>
      </div>
    </section>
  
  </div>
  <!-- <?= print_r($data);?> -->
  <div class="modal_std drop" id="modal">
    <div class="container form_white wow flipInX">
      <div class="title">
        <h2>Agregado</h2>
      </div>
      <div class="body">
        <h3><i class="fas fa-shopping-cart icon"></i></h3>
        <h4>Has agregado un item a tu carrito</h4>
      </div>

    </div>
  </div>
</main>

<script src="<?= URL; ?>/public/js/compras.js"></script>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>