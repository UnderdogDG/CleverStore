<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="section section_nofull">
    <div class="container_detail">
      <!-- <form class="form_white" action="<?= (isset($_SESSION["user"]))? URL . '/product/buy/' : URL . '/user/nouser'; ?>" method="post"> -->
      <form class="form_white" action="<?= URL . '/product/buy/'; ?>" method="post">

        <div class="title">
        <h2><?= $data["name"]; ?></h2>
        <input type="text" name="sku" id="sku" value="<?= $data["sku"]?>">
        </div>

        <div class="body">

          <div class="header">
            <div class="col-50">
              <div class="img">
                <img src="<?=URL ?>/img/store/anillo.jpg" alt="<?= $data["name"]; ?>">
              </div>
            </div>

            <div class="col-50 info">
              <h2 class="name"><?= $data["name"]; ?></h2>

              <div class="field">
                <h2 class="feature"><i class="fas fa-lock"></i><span>Envio Seguro</span></h2>
                <h2 class="feature"><i class="fas fa-truck-moving"></i><span>Envio Express</span></h2>
              </div>

              <div class="field">
                <div class="label">
                  <label class="sign" for="price">$</label>
                  <input class="price" type="text" name="price" id="price" disabled value="<?= $data["price"]; ?>">
                  <span>c/u</span>
                </div>
                

                <div class="quantity">
                  <label for="quantity">Cantidad</label>
                  <div class="inputNumber">
                    <button type="button" id="min"><span>-</span></button>
                    <input type="text" name="quantity" id="quantity" min="1" value="1" pattern="\d{1,2}">
                    <button type="button" id="plus"><span>+</span></button>
                  </div>
                </div>

                <div class="total">
                  <h3 class="output"><span class="prefix">Total $</span><span id="totalPrice"><?= $data["price"]; ?></span></h3>
                </div>

              </div>

              <div class="btn_add_buy">
                <button type="button" id="add" class="btn btn_green add <?= (isset($_SESSION["user"])) ? "" : "disabled" ?>" <?= (isset($_SESSION["user"])) ? "" : "disabled=\"disabled\"" ?>><span><i class="fas fa-cart-arrow-down agregar"></i> </span></button>
                <button type="submit" class="btn btn_gold buy"><span>Comprar</span></button>
              </div>
            </div>
          </div>
          
          <div class="description">
            <h2 class="name">Descripción</h2>
            <p><?= $data["description"]?></p>
          </div>
        </div>
        
      </form>
      <!-- <?php print_r($_SESSION); ?> -->
      <!-- <?php print_r($data); ?> -->
    </div>
  </div>
</main>

<script src="<?= URL; ?>/public/js/compras.js"></script>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>