<?php
  include ROOT_APP . '/views/includes/header.php';
?>
<div id="fullpage">
  <?php
    require ROOT_APP . '/views/includes/nav.php';
  ?>
  <main>
    <div class="section">
      <!-- <div class="list">
      <?php foreach($data as $art) : ?>

        <a href="" class="list_article">
          <div class="img">
            <img src="/img/18.jpg" alt="<?= $art["name"]?>">
          </div>
          <h3><?= $art["name"]?></h3>
        </a>
        
      <?php endforeach ?>
      </div> -->

      
    </div>
  </main>
</div>
<script type="text/javascript" src="<?= URL; ?>/public/js/fullpage.min.js"></script>
<?php
  include ROOT_APP . '/views/includes/footer.php';
?>