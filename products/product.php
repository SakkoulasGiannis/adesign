<?php include "../headers/header-3.php";?>

<section class="margin-bottom-40  ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">


                <img  class="zoom img-responsive" src="../src/bike.jpeg" alt="" data-zoom-image="../src/bike.jpeg">


            </div>
            <div class="col-md-6">
                <h1 class="sepeartor-1">Lorem ipsum dolor sit amet, consectetur.</h1>
                <ul class="list-unstyled">
                    <li class="price font-lg bold">US$21.50</li>
                    <li><b>SKU:</b> 23333</li>
                    <li>Quantity: 3</li>
                    <li class="description margin-top-20">
                        <b>Description</b>
                       <ul>
                           <li>Lorem ipsum dolor sit amet.</li>
                           <li>Blanditiis consequatur exercitationem facilis non!</li>
                           <li>Dicta ipsam magni obcaecati quidem!</li>
                           <li>Delectus deleniti ea possimus provident.</li>
                       </ul>
                    </li>
                </ul>


                <button class="btn black">Add To Cart </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 sepeartor-1">
                Similar Products
            </div>
        </div>
        <div class="row">
            <?php for($a = 1; $a <=12; $a++):?>

                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.<?=$a;?>s">

                    <img class="img-responsive" src="holder.js/263x263" alt="">
                    <div class="text-center margin-top-bottom-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="text-center margin-top-bottom-10">
                        M2334 <i class="fa fa-shopping-basket  "></i>


                    </div>

                </div>
            <?php endfor;?>
        </div>
    </div>
</section>


<?php include "../footers/footer-3.inc";?>