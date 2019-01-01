<nav class="nav">
      
      <a href="<?= URL ?>" class="logo">
        <h1>CLEVER</h1>
      </a>

      <div class="menu">
        <a href="<?= URL?>/main/section/clothes" class="btn"><span>Ropa</span></a>
        <a href="<?= URL?>/main/section/shoes" class="btn"><span>Zapatos</span></a>
        <a href="<?= URL?>/main/section/jewels" class="btn"><span>Joyería</span></a>
        <a href="<?= URL?>/main/section/props" class="btn"><span>Accesorios</span></a>
      </div>

      <div class="compress">

        <form id="buscar" class="item hidden" action="<?= URL?>/main/search" method="get">
          <input type="text" name="search" id="buscar" placeholder="Encuentra los mejores productos">
          <input type="submit" value="Buscar">
        </form>

        <a class="icon item hidden" href="<?= (isset($_SESSION["user"]))? URL . '/user/perfil' : URL . '/user/nouser';?>">

        <?php if (isset($_SESSION["user"])) : ?>

        <div class="perfil">
          <img src="<?= URL?>/public/img/upload/<?= $_SESSION["img"]?>" alt="">
        </div>
        <h2><?= $_SESSION["name"]; ?></h2>

        <?php else : ?>
          <svg class="perfil" viewBox="0 0 24 24">
            <path fill="#616161" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
          </svg>
          <h2>Perfil</h2>
        
        <?php endif; ?>
        </a>

        <a class="icon item hidden" href="<?= URL?>/cart/status">
          <svg viewBox="0 0 24 24" class="car">
            <path fill="#616161" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
          </svg>
          <h2>Carrito</h2>
        </a>

      </div>

      <a id="hamburguesa" class="hamburguesa" href="#">
          <svg viewBox="0 0 24 24">
            <path fill="#272727" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
          </svg>
      </a>
      
    </nav>