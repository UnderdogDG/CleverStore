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
    
            <div class="field">
              <h2 class="title">Detalle</h2>
            </div>

            <div class="payment">
              <div class="col-50">
                <div class="feature">
                  <input type="radio" name="pago" id="deposito" value="deposito">
                  <label for="deposito"><i class="far fa-money-bill-alt"></i> Depósito Bancario</label>
                </div>
                <div class="feature">
                  <input type="radio" name="pago" id="tarjeta" value="tarjeta">
                  <label for="tarjeta"><i class="far fa-credit-card"></i> Tarjeta de Crédito</label>
                </div>
              </div>
            
              <div class="col-50">
                <div class="feature">
                  <input type="radio" name="pago" id="paypal" value="deposito">
                  <label for="deposito"><i class="fab fa-paypal"></i></i> Paypal</label>
                </div>
                <div class="feature">
                  <input type="radio" name="pago" id="tarjeta" value="tarjeta">
                  <label for="tarjeta"><i class="far fa-credit-card"></i> </label>
                </div>
              </div>
            </div>

              <div class="field">
                <div class="">
                  <h2><?= ($data["price"]*$data["quantity"]) ?></h2>
                </div>
              </div>
          </div>
        
        </div>

        <div class="footer">
          <button type="button" class="btn btn_red md"><span><i class="far fa-times-circle"></i>Cancelar</span></button>
          <button type="button" class="btn btn_gold md"><span><i class="far fa-check-circle"></i>Comprar</span></button>
          <?= print_r($data);?>
        </div>
        
      </form>
    </div>
  </div>
  
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>