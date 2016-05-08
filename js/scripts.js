
function showmessage(message){
    console.log(message);
}

//scroolTo duration
var scrollDuration = 1000;


console.log(locationUrl);
yepnope([{
    //load wow animate.css
    test: $("div").hasClass("wow"),
    yep : [locationUrl + 'js/wow.min.js', locationUrl + 'css/animate.css'],
    callback: function(url, result, key) {
        showmessage('wow loaded')
        $(function(){
            new WOW().init();
        });
    }
},
{
    //load parallax
    test:$('div').hasClass('parallax-window'),
    yep: [locationUrl + 'js/parallax.min.js'],
    callback: function(url, result, key) {
        console.log('Parallax loaded');
        $('.parallax-window').each(function(){
          $(this).parallax({imageSrc: $(this).data("image-src")});
          $(this).css("min-height", $(this).data("height"))
        })

    }
},
{
    //load wow animate.css
    test:$('i').hasClass('fa'),
    yep: 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
    callback: function(url, result, key) {
        console.log('awesome Fonts loaded');
    }
},
{
    //load wow animate.css
    test:$('div').hasClass('owl-carousel'),
    yep: [locationUrl + 'js/owl.carousel.min.js', locationUrl + 'css/owl.carousel.css'],
    callback: function(url, result, key) {
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          items:1,
          loop: true
        });
      });

        console.log('owl carousel running');
    }
},
    //magnific-popup
    {
        test: $("a").hasClass("gallery"),
        yep : [locationUrl + 'js/jquery.magnific-popup.min.js', locationUrl + 'css/magnific-popup.css'],
        callback: function(url, result, key) {
            showmessage('gallery loaded');
            $(function(){
                $('.gallery').each(function() { // the containers for all your galleries
                    $(this).magnificPopup({
                        delegate: 'a', // the selector for gallery item
                        type: 'image',
                        gallery: {
                            enabled:true
                        }
                    });
                });
            });
        }
    },
    //scroll to
    // {
    //     test:$('nav').hasClass("scrollTo"),
    //     yep: ['//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js'],
    //     callback: function(url, result, key){
    //        $(function() {
    //             $('.scrollTo li a').on('click', function (e) {
    //                 e.preventDefault();
    //                 var ddd = $(this).attr('href');
    //                 $.scrollTo(ddd, {duration: scrollDuration});
    //             });
    //         });
    //     }
    // },
    {
        test:$('nav').hasClass('on-scroll-gtt'),
        yep:'',
          callback: function (url, result, key){
              console.log('scrool to top loadid');

              $(window).on('scroll', function() {
                 var scrolldivTop = $('.on-scroll-gtt').scrollTop();
                 var topDistance = $('.on-scroll-gtt').offset().top;
                 if ( (topDistance - 100) < scrolldivTop ) {
                     $('.on-scroll-gtt').addClass('navbar-fixed-top');
                 }

             });
        }
    },
]);




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
