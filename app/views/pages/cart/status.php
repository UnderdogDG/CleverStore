<?php
  require ROOT_APP . '/views/includes/header.php';
?>
<div id="fullpage">
  <?php
      require ROOT_APP . '/views/includes/nav.php';
  ?>
  <main>
    <div class="section">
      <div class="form_white cart">

        <div class="title">
          <h2>Tu Carrito</h2>
        </div>

        <div class="body">
          <div class="cart_item">
            <div class="img">
              <img src="" alt="">
            </div>

            <div class="detail">

              <div class="info">
                <h2>Solo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, suscipit unde voluptate tenetur quos aut enim perspiciatis eum! Obcaecati, velit.</p>
              </div>

            </div>
          </div>

        </div>

        <div class="footer">
          <a href="#" class="btn btn_green md"><span><i class="far fa-newspaper"></i> Publicación</span></a>
          <a href="#" class="btn btn_red md"><span><i class="fas fa-trash-alt"></i> Quitar</span></a>
        </div>

      </div>
    </div>
  </main>
</div>
<?php
  require ROOT_APP . '/views/includes/fullpage-js.php';
?>
<?php
  require ROOT_APP . '/views/includes/footer.php';
?>