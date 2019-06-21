
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="about.css"/>
<link rel="stylesheet" type="text/css" href="myblog.css"/>
<link rel="stylesheet" type="text/css" href="myevents.css"/>
<link rel="stylesheet" type="text/css" href="index.css"/>
<link rel="stylesheet" type="text/css" href="cooie.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="owl.carousel.css"/>

<title>Real Estate</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Owl carousel -->
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom Style -->
<link href="dist/css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head><body>
<!-- Top Bar start -->
<div class="topbar-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="tpinfo"> <a href="#"><i aria-hidden="true">Real Estate</i> </a> <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Lazimpat, Kathmandu</a> </div>

	  </div>
      <div class="col-md-6 col-sm-6">
          <?php


              if(isset( $_SESSION['login_name'])) {
                  $username = $_SESSION['login_name'];
                  ?>
                  <div class="toplinks"><a> <?php echo $username; ?>  </a>
                      <a href="EdituserinfoAction.php?id=<?php echo $_SESSION['login_id']; ?>"
                         class="mt-style-button small">Edit Profile </a>
                      <a href="logout.php" class="mt-style-button small">LogOut </a>

                  </div>
                  <?php
              }
else {?>

               <div class="toplinks">
                <div id="search">
      <form action="search.php" method="get">
        <fieldset>
          <input type="text" name="keyword" value="Search&hellip;"  onfocus="this.value=(this.value=='Search;')? '' : this.value ;" />
          <input type="submit" name="search" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />




              </div>
              <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
              <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
               <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

    <?php
          }

          ?>
      </div>
    </div>
  </div>
</div>

<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="Index.php" class="logo"><img src="images/logo.jpg" height="50px", width="100px" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12">
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
               <?php
                      if(isset($_SESSION['roles'])){
         if($_SESSION['roles'] == "admin"){
          ?>
            <li><a href="DashBoard.php">DashBoard </a>  </li>
        <?php

         }
       }
                  ?>
              <li><a href="DashBoard.php">Home </a>  </li>







            </ul>
            <!-- Nav collapes end -->
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end -->
      </div>
    </div>
    <!-- row end -->
  </div>
  <!-- Header container end -->
</div>
<!-- Header end -->
