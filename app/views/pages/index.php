<?php
  require ROOT_APP . '/views/includes/header.php';
?>
<div id="fullpage">
  <?php
    require ROOT_APP . '/views/includes/nav.php';
  ?>
  <main>
    <div class="section">

      <div class="container_main">
        <div class="container_main col">
          <div class="slogan">
            <h2>Elige lo mejor</h2>
            <h3>Compra <span>Clever</span></h3>
          </div>
        </div>

        <div class="pleca"></div>

        <div class="container_main col">
          <img src="./img/bases/anillo_in.png" alt="">
        </div>
      </div>
          
    </div>

    <div class="section">
      <div class="container_articles">
        <div class="header">
          <h2>Lo más Vendido</h2>
        </div>

        <div class="body">

          <?php foreach($data as $art) : ?>
            <a href="#" class="form_white article">
              <div class="title">
                <h2><?= $art["name"]?></h2>
              </div>
              <div class="body">
                <img src="./img/store/anillo.jpg" alt="">
              </div>
              <div class="footer">
                <h2><?= $art["price"]?></h2>
              </div>
  
            </a>
          <?php endforeach; ?>
          
        </div>
      </div>
    </div>

    <div class="section">
    
      <div class="container_main">
        <div class="col">
          <div class="slogan">
          <h1 class="logo m-auto">CLEVER</h1>
          <h2 class="m-auto">BLOG</h2>
          <p>Conoce las últimas novedades</p>
          <a class="btn btn_gold md m-auto" href="./public/blog/"><span>Entrar</span></a>
          </div>
        </div>
        <div class="col_img">
          <img src="./img/bases/blog-bg2.png" alt="">
        </div>
      </div>

    </div>
      
    <footer>
      
    </footer>
  </main>
</div>
<?php
  require ROOT_APP . '/views/includes/fullpage-js.php';
?>
<?php
  require ROOT_APP . '/views/includes/footer.php';
?>

