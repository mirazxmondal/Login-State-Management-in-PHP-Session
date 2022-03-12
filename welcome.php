<?php
require 'connect.php';
require 'session-check.php';

?>
<html>
<!-- user name coloum in database -->
<h1>Welcome <?php echo($_SESSION['FIEM']['firstname']);?></h1>
<a href="./logout.php">Log out</a>
</html>
