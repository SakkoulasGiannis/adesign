<?=
$navbar = null;
$scrollTo = null;
include "../head.inc";
?>

<div class="container min-height">
  <div class="row">
    <div class="col-md-12">
      <h1 class="small-line">Seperator small line</h1>
    </div>
    <div class="col-md-12">
           <h1 class="line-after">Seperator small line</h1>

    </div>


    <div class="col-md-12">
      <div class="text-center">
        <h1>Center Title</h1>
        <hr/>
          <h2>Center</h2>
          <div class="seperator-small"></div>
      </div>
    </div>
    <div class="col-md-12">
      <h1 class="text-center">Seperator with Icon</h1>
        <div class="seperator-icon"><i class='fa fa-heart'></i></div>
    </div>
    <div class="col-md-12 padding-top-20">
      <div class="line"></div>
      <h1 class="text-center line-before line-after">Seperator with line</h1>
    </div>
  </div>
</div>

<?= include "../foot.inc";?>
