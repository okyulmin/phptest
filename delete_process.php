<?php
  unlink('data/'.$_POST['id']);
  header('Location: /phptest/phptest.php');
 ?>
