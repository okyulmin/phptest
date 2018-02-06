<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <form class="" action="updata_process.php" method="post">
      <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>">
      <p>
        <input type="text" name="title" placeholder="title" value="<?php print_title(); ?>">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" placeholder="description" ><?php print_description(); ?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
<?php
require_once('view/bottom.php');
?>
