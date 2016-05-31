
<?=
$navbar = null;
include "../head.inc";?>

<!--
#boottstrap container
#min-height: set min-height to 650px
#margin-top: margint-top: 40px;
-->

<div class="container min-height margin-top-40">
  <div class="row">
    <div class="col-md-3 cls-xs-6">
      <a href='#' class="btn btn-block hover-gradient red"> Awesome Button</a>
    </div>
    <div class="col-md-3 cls-xs-6">
      <a href='#' class="btn btn-block hover-gradient black"> Gradient Effect</a>
    </div>
    <div class="col-md-3 cls-xs-6">
      <a href='#' class="padding-20 btn white border hover-gradient"> White Button</a>
    </div>
  </div>
  <div class="row margin-top-30">
    <div class="col-md-3 cls-xs-6">
      <a href='#' class="btn btn-block hover-gradient black animate-icon"> Just a button <i class=" pulse fa fa-heart-o"></i></a>
    </div>
    <div class="col-md-3 cls-xs-6">
      <a href='#' class="btn btn-block hover-gradient black animate-icon">
        <span class="blink pause">
         Just a button <i class="fa fa-heart-o"></i>
       </span>
       </a>
    </div>

    <div class="col-md-3 cls-xs-6">
      <a href='#' class="btn btn-block hover-gradient black  makeSpanAbsolute animate-icon">
        <span class="revealFromTop">
          <i class="fa fa-heart-o"></i>
       </span>
        <span class="active">
          <i class="fa fa-heart-o"></i>
       </span>Just a button
      </a>
    </div>

  </div>
</div>

<?= include "../foot.inc";?>
