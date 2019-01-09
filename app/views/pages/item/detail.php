<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="section section_nofull">
    <div class="container_detail">
      <div class="form_white">

        <div class="title">
        <h2><?= $data["name"]; ?></h2>
        </div>

        <div class="body">

          <div class="header">
            <div class="col-50">
              <div class="img">
                <img src="<?=URL ?>/img/store/anillo.jpg" alt="">
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
                  <label for="price">$</label>
                  <input type="text" name="price" id="price" disabled value="<?= $data["price"]; ?>">
                  <span>c/u</span>
                </div>
                

                <div class="quantity">
                  <label for="quantity">Cantidad</label>
                  <div class="inputNumber">
                    <button id="min"><span>-</span></button>
                    <input type="text" name="quantity" id="quantity" min="1" value="1" pattern="\d{1,2}">
                    <button id="plus"><span>+</span></button>
                  </div>
                </div>

                <div class="total">
                  <h3 class="output"><span class="prefix">Total $</span><span id="totalPrice"><?= $data["price"]; ?></span></h3>
                </div>

              </div>

              <div class="btn_add_buy">
                <button id="add" class="btn btn_green add"><span><i class="fas fa-cart-arrow-down agregar"></i> </span></button>
                <a href="#" class="btn btn_gold buy"><span>Comprar</span></a>
              </div>
            </div>
          </div>
          
          <div class="description">
            <h2 class="name">Descripción</h2>
            <p><?= $data["description"]?></p>
          </div>
        </div>
        
      </div>
      <?php print_r($_SESSION); ?>
    </div>
  </div>
</main>

<script src="<?= URL; ?>/public/js/compras.js"></script>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>