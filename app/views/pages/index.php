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

  <div class="section">
  <!-- Es necesario un contenedor pincipal posible "container_main" -->
    <div class="container_title">
      <h2>Lo mas Vendido</h2>
        <?php
          foreach ($data as $key => $person) {
            echo '<ol><li>'. $person["last_name"] .'</li>'.'<li>'.$person["first_name"].'</li></ol>';
          }
        ?>
    </div>

    <div class="container_content">

    </div>

  </div>
    
  <footer>
    
  </footer>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>

