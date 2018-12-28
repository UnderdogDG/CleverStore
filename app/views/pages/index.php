<?php
  require ROOT_APP . '/views/includes/header.php';
?>
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
          <a href="#" class="article">
            <h3><?= $art["name"]?></h3>
            <h2>$<?= $art["price"]?></h2>
          </a>
        <?php endforeach; ?>
        
      </div>
    </div>
  </div>

  <div class="section">
  
    <div class="container_main">
      <div class="lat_izq">
        <h1>CLEVER</h1>
        <h2>BLOG</h2>
        <p>Conoce las últimas novedades</p>
        <a class="btn btn_gold md" href="<?= URL; ?>/public/blog/"><span>Entrar</span></a>
      </div>
      <div class="lat_der">
        <!-- <img src="./img/bases/blog-bg2.png" alt=""> -->
      </div>
    </div>

  </div>
    
  <footer>
    
  </footer>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>

