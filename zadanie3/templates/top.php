<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/responsive.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/jquery.mCustomScrollbar.min.css">
        <!-- Javascript files-->
        <script src="<?php print(_APP_URL); ?>/js/jquery.min.js"></script>
        <script src="<?php print(_APP_URL); ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?php print(_APP_URL); ?>/js/jquery-3.0.0.min.js"></script>
        <!-- sidebar -->
        <script src="<?php print(_APP_URL); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php print(_APP_URL); ?>/js/custom.js"></script>
        <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
        </script>
   </head>
   <!-- body -->
   <body class="main-layout">
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="#home">Strona główna</a>
         <a href="#calc">Kalkulator kredytowy</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
        <div id="home" class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <a href="<?php print(_APP_URL); ?>/index.php"><h1>Kalkulator kredytowy</h1></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                     <div class="right_bottun">
                        <ul class="conat_info d_none ">
                           <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                        <button class="openbtn" onclick="openNav()"><img src="<?php print(_APP_URL); ?>/images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->