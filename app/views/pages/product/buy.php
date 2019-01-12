<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="section section_nofull">
    <div class="container_detail container_buy">
      <form class="form_black" action="<?= URL?>/product/purchase" method="post">

        <div class="title">
          <h2>Comprar</h2>
        </div>

        <div class="body">

          <div class="col-50 detail">
            <div class="img">
              <img src="<?=URL ?>/img/store/anillo.jpg" alt="<?= $data["name"]; ?>">
            </div>
            <div class="field">
              <div class="name">
                <h2><?= $data["name"]?></h2>
              </div>
            </div>
            <div class="label gray">
              <span class="sign" for="price">$</span>
              <div class="price"><?= $data["price"]; ?></div>
              <span>c/u</span>
            </div>
          </div>

          <div class="col-50 request">
    
            <div class="title">
              <h2>Detalle</h2>
            </div>

            <div class="field payment">

              <div class="head">
                <h2>Método de Pago</h2>
              </div>

              <div class="methods">

                <div class="feature">
                  <input type="radio" name="payment" id="deposito" value="deposito">
                  <label for="deposito"><i class="far fa-money-bill-alt"></i> Depósito Bancario</label>
                </div>
                <div class="feature">
                  <input type="radio" name="payment" id="tarjeta" value="tarjeta">
                  <label for="tarjeta"><i class="far fa-credit-card"></i> Tarjeta de Crédito</label>
                </div>
                <div class="feature">
                  <input type="radio" name="payment" id="paypal" value="deposito">
                  <label for="paypal"><i class="fab fa-paypal"></i></i> Paypal</label>
                </div>
                <div class="feature">
                  <input type="radio" name="payment" id="clever" value="clever">
                  <label for="clever"><i class="far fa-credit-card"></i> Tarjeta Clever</label>
                </div>
              </div>

            </div>

            <div class="col-100 total">

              <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <input type="text" name="quantity" id="quantity" value="<?= $data["quantity"] ?>" disabled>
                <span class="unidades"><?= ($data["quantity"]>1) ? "Unidades" : "Unidad" ?></span>
              </div>
            
              <div class="final">
                <span class="sign" for="price">Total $ </span>
                <div class="price"><?= ($data["price"]*$data["quantity"]) ?></div>
                <span>MX</span>
              </div>

            </div>

          </div>
        
        </div>

        <div class="footer">
          <button type="button" class="btn btn_red md"><span><i class="far fa-times-circle"></i>Cancelar</span></button>
          <button type="button" class="btn btn_gold md"><span><i class="far fa-check-circle"></i>Comprar</span></button>
          <!-- <?= print_r($data);?> -->
        </div>
        
      </form>
    </div>
  </div>
  
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>