<?= include "inc/variables.php";?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Awesome Design</title>

    <!-- Bootstrap -->
    <link href="<?=$root;?>css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,300,700,300italic,400' rel='stylesheet' type='text/css'>

    <link href="<?=$root;?>css/style.css" rel="stylesheet">
    <link href="<?=$root;?>css/custom_style.css" rel="stylesheet">
<!--    <link href="css/colors.css" rel="stylesheet">-->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=$root;?>js/bootstrap.min.js"></script>
    <script src="<?=$root;?>js/modernizr.js"></script>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="overlay">
    <div id="progstat"></div>
    <div id="progress"></div>
</div>
<nav class="navbar center navbar-style-1 <?=$navbar;?> clearHeader <?=$scrollTo;?>" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand strong" href="<?=$root;?>index.php"><img src="<?=$root;?>src/ad.png" width="140"/> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active dropdown"><a href="<?=$root;?>index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOME</a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="<?=$root;?>home-1.php">Home 1</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Home 2</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FEATURES <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=$root;?>sliders/owl.php">OWL carousel</a></li>
                        <li><a href="<?=$root;?>extra/buttons.php">Buttons</a></li>
                        <li><a href="<?=$root;?>extra/headers.php">Headers</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                <li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ELEMENTS <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="<?=$root;?>sliders/owl.php">OWL CAROUSEL</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                          <li class="divider"></li>
                          <li><a href="#">One more separated link</a></li>
                      </ul>
                  <li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ELEMENTS <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#scroll">OWL CAROUSEL</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                <li>
                    <a class="searchForm" href="#">
                        <i class="fa fa-search"></i>
                    </a>
<!--                    <form method="" action="">-->
<!--                        <input type="search" name="q" placeholder="search">-->
<!--                        <input class='searchbtn' type="submit" name="search">-->
<!--                    </form>-->
                </li>
            </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div> <!--container-->
</nav>
