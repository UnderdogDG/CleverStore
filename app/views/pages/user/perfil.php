<?php
  require ROOT_APP . '/views/includes/header.php';
?>
<?php
    require ROOT_APP . '/views/includes/nav.php';
?>

<?php
 $name = $_SESSION["name"] . " " . (($_SESSION["first_name"]) ? $_SESSION["first_name"] : "");
?>
<main>
  <div class="section section_nofull">
    <!-- <div class="container_register"> -->
      <div class="form_black perfil wow fadeInUp">

        <div class="title">
          <h2>Perfil</h2>
        </div>

        <div class="body">
          <div class="col-50 user">
            <div class="field">
              <div class="photo">
                <img src="<?= URL . '/public/img/upload/' . $_SESSION["img"]?>" alt="<?= $_SESSION["name"]?>">
              </div>
            </div>
            
            <div class="field">
              <h2><?= $name ?></h2>
            </div>

            <div class="field">
              <a href="#" class="btn btn_warning sm"><span><i class="fas fa-trash-alt"></i> Eliminar</span></a>
              <a href="<?= URL . "/user/editar/" . $_SESSION["user"]?>" class="btn btn_gold sm"><span><i class="fas fa-pen"></i> Editar</span></a>
            </div>
          </div>

          <div class="col-50 menu">

            <a href="<?= URL?>/user/favoritos" class="btn_pop wow fadeIn" data-wow-delay="1s">
              <div class="btn_wrapper">
                <i class="far fa-star fav"></i>
                <p class="alt">Favoritos</p>
              </div>
            </a>

            <a href="#" class="btn_pop wow fadeIn" data-wow-delay="1.5s">
              <div class="btn_wrapper">
                <i class="fas fa-shopping-bag"></i>
                <p class="alt">Tus Compras</p>
              </div>
            </a>

            <a href="#" class="btn_pop wow fadeIn" data-wow-delay="2s">
              <div class="btn_wrapper">
                <i class="fas fa-user-friends"></i>
                <p class="alt">Amigos</p>
              </div>
            </a>

            <a href="#" class="btn_pop wow fadeIn" data-wow-delay="2.5s">
              <div class="btn_wrapper">
                <i class="fas fa-gift"></i>
                <p class="alt">Regalos</p>
              </div>
            </a>

          </div>

          <!-- <div class="field">
          <h2>fdsds</h2>
          </div>
          <div class="field">
          <h2>fdsds</h2>
          </div> -->
          
          

          <!-- <?= print_r($_SESSION);?> -->

        </div>

        <div class="footer">
          <a href="<?= URL ?>/user/logout" class="btn btn_red md">
            <span><i class="fas fa-power-off"></i> Cerrar Sesión</span>
          </a>
        </div>
      </div>
    <!-- </div> -->
  </div>
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>