<?php
function print_title(){
  if (isset($_GET['id'])){
    echo $_GET['id'];
  }
  else {
    echo "Welcom";
  }
}
function print_description(){
  if (isset($_GET['id'])){
    echo nl2br(file_get_contents('data/'.$_GET['id']));
  }
  else {
    echo "열심히 해보자. 화이팅!";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if ($list[$i] != '.' && $list[$i] != '..')
    echo "<li><a href=\"phptest.php?id=$list[$i]\">$list[$i]</a></li>\n";
    $i = $i +1;
  }
}
?>
