<?php
  file_put_contents('data/'.$_POST['title'],$_POST['description']);
  header('Location: /phptest/phptest.php?id='.$_POST['title']);
 ?>
