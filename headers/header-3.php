<?php include "../inc/variables.php";?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Awesome Design</title>


    <?php include "../includeHeaderFiles.inc";?>

</head>

<style>
    ul li a{
        font-size: 14px;
        font-weight: 300;
        text-transform: uppercase;
        color: #000000;
        display: block;
        padding: 0 10px;
        letter-spacing: 1px;
    }
</style>

<body>

<div class="preheader bg-black ">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-4 text-center">
                <ul class="list-inline no_top_margin ">
                    <li>EN</li>
                    <li>EL</li>
                </ul>
            </div>

        </div>
    </div>
</div>


<div class="container">
    <div class="row flex same-height margin-top-20">
        <div class="col-md-4">
            <div class="">
                <form method="" action="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input class="style-1" type="search" name="q" placeholder="Enter your search term here">

                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">

                <a class="img-responsive" href="<?=$root;?>index.php"><img src="<?=$root;?>src/ad.png"/> </a>
            </div>
        </div>
        <div class="col-md-4 text-right">
            <ul class="list-inline">
                <li><a href="#"> Account</a></li>
                <li><a href="#"> Log out</a></li>
                <li><a href="#"> My cart</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="margin-bottom-20" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse border-bottom">
            <ul class="nav navbar-nav navbar-center">
                <li class="active dropdown"><a href="<?=$root;?>index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOME</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=$root;?>home-1.php">Home 1</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Home 2</a></li>
                    </ul>
                </li>

                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#scroll">OWL CAROUSEL</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
               </li>


        </div><!-- /.navbar-collapse -->
    </div> <!--container-->
</div>


