<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <form class="" action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="title">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" placeholder="description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>
