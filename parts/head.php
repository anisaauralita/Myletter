<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
if (!isset($_GET['hal'])){
    $_GET['hal']="dashboard";
}
 switch ($_GET['hal']) {
     case 'dashboard':
         echo "<title>Myletter | Dashboard</title>";
         break;
     case 'tentang':
         echo "<title>Myletter | Tentang Aplikasi</title>";
         break;
     case 'surat_tampil':
         echo "<title>Myletter | Surat Masuk</title>";
         break;
     case 'keluar_tampil':
         echo "<title>Myletter | Surat Keluar</title>";
         break;
     default:
         echo "<title>Myletter | Admin</title>";
 }
  ?>
    <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="landing/assets/ion_icon_favicon.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<!-- style custom -->
    <style>
        .warna-ungu{
            background-color: #9966ff;
            color: white;
        }
        .box.box-ungu{
            border-top-color: #9966ff;
        }
    </style>
</head>