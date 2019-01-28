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
      <h2 data-sort="<?= $class; ?>"><?= $class?></h2>
    </div>

    <section class="card">

      <div class="card_container">

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

    <div class="label">
      <input class="price" id="price" value="<?= $data["price"]; ?>">
      <h3 class="price"><?= $data["price"]; ?></h3>
    </div>

    <div class="quantity">
      <!-- <label for="quantity">Cantidad</label> -->
        <button class="btn_circle outline" type="button" id="plus">
          <span class="icon">+</span>
        </button>

        <input type="text" name="quantity" id="quantity" min="01" value="1" pattern="\d{1,2}">

        <button class="btn_circle outline" type="button" id="min">
          <span class="icon">-</span>
        </button>
    </div>

    <section class="description">
      <p><?= $data["description"]; ?></p>
    </section>

    <section class="options">
      <button class="btn_circle outline <?= (isset($_SESSION["user"])) ? "" : "disabled" ?>" <?= (isset($_SESSION["user"])) ? "" : "disabled=\"disabled\"" ?>>
        <i class="fas fa-gift icon"></i>
      </button>

      <button class="btn_circle outline <?= (isset($_SESSION["user"])) ? "" : "disabled" ?>" id="cart" <?= (isset($_SESSION["user"])) ? "" : "disabled=\"disabled\"" ?>>
        <i class="fas fa-shopping-cart icon"></i>
      </button>

      <button class="btn_circle">
        <i class="fas fa-dollar-sign icon"></i>
      </button>
    </section>

    <div class="total">
      <h3 class="output"><span class="prefix">Total $</span><span id="totalPrice"><?= $data["price"]; ?></span></h3>
    </div>

    
  
  </div>
  <!-- <?= print_r($data);?> -->
</main>

<script src="<?= URL; ?>/public/js/compras.js"></script>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>