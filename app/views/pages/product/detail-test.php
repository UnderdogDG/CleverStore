<?php
  require ROOT_APP . '/views/includes/header.php';
?>

<?php
  [$data["art_class"]=>$class] = [
    'clt'=>'Ropa', 
    'sho'=>'Zapatos', 
    'jwl'=>'Joyería',
    'acc'=>'Accesorios',
  ];
  require ROOT_APP . '/views/includes/nav.php';
?>

<main>
  <div class="product" data-section="<?= $class; ?>">
    <div class="product_container">

    </div>
    <!-- <?= print_r($data);?> -->
  </div>
</main>

<?php
  require ROOT_APP . '/views/includes/footer.php';
?>