<?php
  require ROOT_APP . '/views/includes/header.php';
?>
  <div class="section">

    <div class="container_main">
      <div class="container_main_item">
        <div class="slogan">
          <h2>Elige lo mejor</h2>
          <h3>Compra <span>Clever</span></h3>
        </div>
      </div>

      <div class="container_main_pleca"></div>

      <div class="container_main_item">

      </div>
    </div>
        
  </div>

  <div class="section bg-black">
  
    <div class="container_title">
      <h2>Lo más Vendido</h2>
    </div>

    <div class="container_content">

      <?php foreach($data as $art) : ?>
        <a href="#" class="articulo">
          <h3><?= $art["name"]?></h3>
          <h2>$<?= $art["price"]?></h2>
        </a>
      <?php endforeach; ?>
      
    </div>

  </div>

  <div class="section bg-black">
  
    <div class="container_title">
      <h2>BLOG</h2>
    </div>

  </div>
    
  <footer>
    
  </footer>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>

