<?php
// to start the session in logout page I connected with my database
require 'connect.php';
session_destroy();
header("location:login.html?msg=loggedout");
?>