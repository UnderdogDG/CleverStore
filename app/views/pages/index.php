<?php
  require ROOT_APP . '/views/includes/header.php';
?>
<div id="fullpage">
  <?php
    require ROOT_APP . '/views/includes/nav.php';
  ?>
  <main>
    <div class="section">

      <div class="container_main animated fadeInLeft">
        <div class="col col_backImg">
          <div class="slogan">
            <h2>Elige lo mejor</h2>
            <h3>Compra en <span>Clever</span></h3>
          </div>
        </div>

        <div class="pleca"></div>

        <div class="col">
          <img src="<?= URL . "/img/bases/anillo_in.png"?>" alt="">
        </div>
      </div>
          
    </div>

    <div class="section">
      <div class="container_articles">
        <div class="header">
          <h2>Lo más Vendido</h2>
        </div>      

      <?php for($i = 0; $i < count($data);): ?>
        
      <div class="shelf slide">
          <div class="articles_group">

            <?php for($e = 1; (($e <= 4) and ($i < count($data))); $e++): ?>
          
              <a class="container" href="<?= URL . "/product/item/" . $data[$i]["sku"]?>">
                <div class="article">
                  <div class="title">
                    <h2><?= $data[$i]["name"]; ?></h2>
                  </div>

                  <div class="img">
                    <img src="<?= URL . "/img/store/anillo.png"?>" alt="">
                  </div>

                  <div class="footer">
                    <div class="label">
                      <h3 class="sign">$</h3>
                      <h2 class="price"><?= $data[$i]["price"]; ?></h2>
                      <span>c/u</span>
                    </div>
                  </div>

                </div>
              </a>

              <?php $i++; ?>

            <?php endfor; ?>
          </div>
        </div>
      <?php endfor; ?>


      <!-- <div class="shelf">
        <div class="articles_group">
          <canvas href="#" class="article" id="container">

          </canvas>

        </div>
      </div> -->

      </div>
    </div>

    <div class="section">
    
      <div class="container_blog animated fadeInRight">
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
<!-- <script type="text/javascript" src="<?= URL; ?>/public/js/three.js"></script>
<script type="text/javascript" src="<?= URL; ?>/public/js/3dEnviroment.js"></script> -->
<?php
  require ROOT_APP . '/views/includes/fullpage-js.php';
?>
<?php
  require ROOT_APP . '/views/includes/footer.php';
?>