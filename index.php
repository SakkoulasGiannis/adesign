<?php
$scrollTo = "scrollTo";
$navbar = "navbar-fixed-top";
include('head.inc');
?>
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
  <div class="container">

    <!-- about this block -->
    <?php include "./inc/about.inc";?>

    <!-- convertion box -->
    <section class="convertionBox">
      <div class="row">
        <div class="col-md-12">
          <div class="box-one padding-top-40">
            <div class="zigZag-sm"> </div>
            <div class="padding-btm-40 text-center">
              <h3 class="large wow fadeInUp">Fast Simple Small</h3>
              <a href="#" class="btn btn-one btn-large margin-top-10 wow fadeInRight">Get it</a>
            </div>
            <div class="zigZag"> </div>

          </div>
        </div>
      </div>

    </section>
    <!-- End convertion box -->

    <section class="gallery">
      <?php include "./inc/gallery-1.inc";?>
    </section>

    <div class="space-80"></div>

    <section class="about">

      <div class="row">
        <div class="col-md-6">
          <img src="src/image2.jpg" class="margin-top-30 img-responsive" alt="" />
        </div>
        <div class="col-md-6">
          <h2>Some text here</h2>
          <div class="zigZag"></div>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis
            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis
            iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>

        </div>
      </div>
      <div class="row">

        <div class="col-md-6 ">

          <h2>Some text here</h2>
          <div class="zigZag"></div>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis
            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis
            iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div class="col-md-6">
          <img src="src/image2.jpg" class="img-responsive margin-top-30" alt="" />
        </div>
      </div>

    </section>
    <div class="space-80"></div>
  </div>
  <!-- close container -->
  <section class="list-icons bg-grey">
    <div class="container padding-top-40">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-connectdevelop fa-3x"></i>
            </div>
            <div class="col-md-10">
              <h3 class="no_top_margin">Awesome design</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-search fa-3x"></i>
            </div>
            <div class="col-md-10">
              <h3 class="no_top_margin">seo friendly</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-magic fa-3x"></i>
            </div>
            <div class="col-md-10">
              <h3 class="no_top_margin">Awesome design</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
            </div>
          </div>
        </div>

        <div class="space-40"></div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-connectdevelop fa-3x"></i>
            </div>
            <div class="col-md-10">
              <h3 class="no_top_margin">Awesome design</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-2">
              <i class="fa fa-connectdevelop fa-3x"></i>
            </div>
            <div class="col-md-10">
              <h3 class="no_top_margin">Awesome design</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('./foot.inc');?>
