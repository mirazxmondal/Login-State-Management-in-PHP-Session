<?php
if($_SESSION["FIEM"]==null)
    {
        header("location:login.html?msg=loginfirst");
    }
?>