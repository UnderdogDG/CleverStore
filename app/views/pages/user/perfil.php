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
  <div class="section">
    <!-- <div class="container_register"> -->
      <div class="form_black">

        <div class="title">
          <h2>Perfil</h2>
        </div>

        <div class="body">
          <div class="field">
            <div class="photo">
              <img src="<?= URL . '/public/img/upload/' . $_SESSION["img"]?>" alt="<?= $_SESSION["name"]?>">
            </div>
          </div>
          
          <div class="field">
            <h2><?= $name ?></h2>
          </div>

          <!-- <?= print_r($_SESSION);?> -->

        </div>

        <div class="footer">
          <a href="#" class="btn btn_warning sm"><span><i class="fas fa-trash-alt"></i> Eliminar</span></a>
          <a href="#" class="btn btn_gold sm"><span><i class="fas fa-pen"></i> Editar</span></a>
          <a href="<?= URL ?>/user/logout" class="btn btn_red sm"><span><i class="fas fa-times-circle"></i> Salir</span></a>
        </div>

      </div>
    <!-- </div> -->
  </div>
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>