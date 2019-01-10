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
        <div class="col col_backImg">
          <div class="slogan">
            <h2>Elige lo mejor</h2>
            <h3>Compra <span>Clever</span></h3>
          </div>
        </div>

        <div class="pleca"></div>

        <div class="col">
          <img src="./img/bases/anillo_in.png" alt="">
        </div>
      </div>
          
    </div>

    <div class="section">
      <div class="container_articles">
        <div class="header">
          <h2>Lo más Vendido</h2>
        </div>

      <!-- <div class="container_articles slide">
        <div class="header">
          <h2>Lo más Vendido</h2>
        </div>

        <div class="shelf">

          <?php foreach($data as $art) : ?>
            <a href="#" class="form_white article">
              <div class="title">
                <h2><?= $art["name"]?></h2>
              </div>
              <div class="img">
                <img src="./img/store/18.jpg" alt="">
              </div>
              <div class="footer">
                <h2><?= $art["price"]?></h2>
              </div>
  
            </a>
          <?php endforeach; ?>
          
        </div>
      </div> -->
      

      <?php for($i = 0; $i < count($data);): ?>
        
      <div class="shelf slide">
          <div class="articles_group">

            <?php for($e = 1; (($e <= 4) and ($i < count($data))); $e++): ?>
          
              <a href="<?= URL . "/product/item/" . $data[$i]["sku"]?>" class="article form_white">
                <div class="title">
                  <h2><?= $data[$i]["name"]; ?></h2>
                </div>

                <div class="img">
                  <img src="./img/store/anillo.jpg" alt="">
                </div>

                <div class="footer">
                  <h2><?= $data[$i]["price"]; ?></h2>
                </div>
              </a>

              <?php $i++; ?>

            <?php endfor; ?>
          </div>
        </div>
      <?php endfor; ?>

      </div>
    </div>

    <div class="section">
    
      <div class="container_blog">
        <div class="col">
          <div class="bullet">
          <h1 class="logo">CLEVER</h1>
          <h2 class="">BLOG</h2>
          <p>Conoce las últimas novedades</p>
          <a class="btn btn_gold md" href="./public/blog/"><span>Entrar</span></a>
          </div>
        </div>
        <div class="pleca"></div>
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