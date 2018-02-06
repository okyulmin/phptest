<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <?php
    if (isset($_GET['id'])) {
    ?>
      <a href="updata.php?id=<?= $_GET['id'] ?>">updata</a>
      <form class="" action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="submit" value="Delete">
      </form>
    <?php
    }
    ?>
    <h2>
      <?php
        print_title();
      ?>
    </h2>
    <?php
      print_description();
    ?>
  </body>
</html>
