<?php ob_start(); ?>
<?php session_start(); ?>

<?php

if($_SESSION['username'] != null && $_SESSION['password'] != null)
{
    header("Location: ../admin");
}
else
{
    header("Location: ../index.php");
}

?>