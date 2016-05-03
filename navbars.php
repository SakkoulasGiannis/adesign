<?php
include('head.inc');
?>

    <div class="space-xl">style 2</div>

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="text-center">
                    <a class="navbar-brand strong" href="index.php"><img src="src/ad.png" width="140"/> </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <nav class="navbar center navbar-style-2 clearHeader" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div> <!--container-->
    </nav>



<div class="space"></div>


<?php
include('foot.inc');
?>