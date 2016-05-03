<?php include('head.inc');?>
<section class="margin-top-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="divider hr-1 margin-top-10"></div>
                <div class="space"></div>


                <div class="divider hr-2 margin-top-10"><i class="fa fa-thumbs-up fa-2x"></i></div>
                <div class="space"></div>

            </div>
        </div>
    </div>
</section>







<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/backstretch.js"></script>
<script src="js/isotope.min.js"></script>
<script>
    new WOW().init();


    $(window).load(function() {
        var theWindow        = $(window),
                $bg              = $("#bg"),
                aspectRatio      = $bg.width() / $bg.height();
        function resizeBg() {
            if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
                $bg
                        .removeClass()
                        .addClass('bgheight');
            } else {
                $bg
                        .removeClass()
                        .addClass('bgwidth');
            }
        }
        theWindow.resize(resizeBg).trigger("resize");
    });

    // navbar scroll detector
    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".clearHeader");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                header.removeClass('clearHeader').addClass("WhiteHeader");
            } else {
                header.removeClass("WhiteHeader").addClass('clearHeader');
            }
        });
    });



    //isotop
    $( function() {

        var $container = $('.isotope')
// initialize Isotope
        $container.isotope({

            // options...
            resizable: false, // disable normal resizing
            // set columnWidth to a percentage of container width
            masonryHorizontal: { columnWidth: $container.width() / 4,  rowHeight: 50,
                gutter: 10 }
        });

// update columnWidth on window resize
        $(window).smartresize(function(){
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: { columnWidth: $container.width() / 4, rowHeight: 50 }
            });
        });


    });


</script>



</body>
