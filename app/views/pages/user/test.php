<?php
  var_dump($data);
  echo "<br>SESSION<br><br>";
  var_dump($_SESSION);
?>

  <?php if (isset($_SESSION["user"])) :?>

  <div class="perfil">
    <p><?= $_SESSION["user"]; ?></p>
    TRUE
  </div>

  <?php else :?>
    FALSE
  
  <?php endif; ?>
