<?php include "inc/variables.php"; ?>
    <!DOCTYPE html>
    <html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Awesome Design</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,300,700,300italic,400' rel='stylesheet'
              type='text/css'>


        <link href="css/style.css" rel="stylesheet">
        <!--    <link href="css/colors.css" rel="stylesheet">-->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.js"></script>


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

    <section class="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item  ">
                    <img src="src/image3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2 class=" large wow fadeInUp" data-wow-delay="0.4s">{SEO READY}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Web Design Agency in Somewhere</p>
                    </div>
                </div>
                <div class="item active">
                    <img src="src/image2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h2 class="large wow fadeInUp" data-wow-delay="0.4s">{Design Matters}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Web Design Agency in Somewhere</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

<!-- navigation -->
    <nav class="navbar center navbar-style-1  on-scroll-fixed-top clearHeader " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand strong" href="index.php"><img src="src/ad.png" width="140"/> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#scroll">Action</a></li>
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

    <div class="container">
        <div class="row margin-top-20">
            <div class="col-md-4">
                <div class="box padding-10 text-center">
                    <i class="fa fa-code fa-3x "></i>
                    <h2>Title Here</h2>
                    <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="box padding-10 text-center ">
                    <i class="fa fa-code fa-3x "></i>
                    <h2>Title Here</h2>
                    <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="box padding-10 text-center">
                    <i class="fa fa-code fa-3x "></i>
                    <h2>Title Here</h2>
                    <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="parallax-window white-fonts flex " data-parallax="scroll" data-height='500'
                     data-image-src="/adesign/src/handsmobile.jpeg">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="">
                            <div class="text-center">
                                <i class="fa fa-gear"></i>
                            </div>
                            <h1 class="text-center">fdsdfds fdsfsfsd</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row margin-top-bottom-40">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h1>Title Here </h1>
                    <div class="seperator-small"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

        </div>
    </div>




    <div class="container-fluid">



        <div class="row">
            <div class="parallax-window white-fonts flex " data-parallax="scroll" data-height='500'
                 data-image-src="/adesign/src/image3.jpg">
                <div class="col-md-6 col-md-offset-3">
                    <div class="">
                        <div class="text-center">
                            <i class="fa fa-gear"></i>
                        </div>
                        <h1 class="text-center">fdsdfds fdsfsfsd</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="margin-top-bottom-40">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>

<?php include('./foot.inc');
