<?php
$navbar = null;
$scrollTo = null;

// echo $docRoot;

require "../head.inc";?>

  <div class="container-fluid">
    <div class="row">
      <div class="owl-carousel">
        <div> <img src="<?=$root;?>src/imac.jpg">
          <div class="carousel-caption">
            <h2 class=" large wow fadeInUp" data-wow-delay="0.4s">{SEO READY}</h2>
            <p class="wow fadeInUp" data-wow-delay="0.6s">Web Design Agency in Somewhere</p>
          </div>
        </div>
        <div> <img src="<?=$root;?>src/image3.jpg"> </div>

      </div>
    </div>
  </div>
  <div class="container">
    <?php include "../inc/about.inc";?>
      <div class="gallery">
        <?php include "../inc/gallery-1.inc";?>
      </div>
  </div>

  <?php include "../foot.inc";?>
