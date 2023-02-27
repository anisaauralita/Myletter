<?php
session_start();
ob_start();
include "library/config.php";
//var_dump($_SESSION);
if (empty($_SESSION['username']) or
    empty($_SESSION['password']))
{
    echo "<script>
     window.alert('Maaf, anda harus login terlebih dahulu');
     window.location.href='login.php';
    </script>";
} else {
    define('INDEX', true);
}

?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php include "parts/head.php" ?>
<!--

BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

<?php include "parts/header/header.php" ?>

<?php include "parts/sidebar-left-1.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php include "konten.php" ?>
  </div>
  <!-- /.content-wrapper -->

<?php // include "parts/sidebar-right.php" ?>
</div>
<?php include "parts/footer.php" ?>
<!-- ./wrapper -->

<?php include "parts/js-files.php" ?>

</body>
</html>
