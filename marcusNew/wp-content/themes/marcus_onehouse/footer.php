<footer class="footer" id="stopka">
    <section class="footer" id="footer">
        <?php
get_template_part('template-parts/footer');
?>
    </section>


    <?php wp_footer(); ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
    AOS.init();
    AOS.init({
        disable: 'mobile'
    });
    </script>
    <script>
    $('.slick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        // autoplayspeed:200,
        dots: false,
        prevArrow: $('.slick-prev.slick-arrow2'),
        nextArrow: $('.slick-next.slick-arrow2'),
        // prevArrow:"<img class='slick-prevslick-arrow2' src='http://enerko.onehouse.nazwa.pl/wp-content/themes/enerko_onehouse/assets/img/strzalka_lewo.svg'>",
        // nextArrow:"<img class='slick-nextslick-arrow2' src='http://enerko.onehouse.nazwa.pl/wp-content/themes/enerko_onehouse/assets/img/strzalka_prawo.svg'>",
        // centerMode: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                infinite: true,
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }]
    });
    </script>
    <script>
    $('.testimonials__logos').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 1000,
        centermode: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false,
                autoplay: true,
                slidesToShow: 2.5,
                slidesToScroll: 1,
                dots: false,
                infinite: false,
            }
        }]
    });
    </script>

    <script>
    $('.meetus__logos').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 1500,
        centerMode: true,
        dots: false,
        prevArrow: "<img class='slick-prevslick-arrow2' src='/wp-content/themes/marcus_onehouse/assets/img/arrowl.png'>",
        nextArrow: "<img class='slick-nextslick-arrow2' src='/wp-content/themes/marcus_onehouse/assets/img/arrowr.png'>",

        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: true,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 1500,

                dots: true,
                centermode: true,
                centerPadding: "25%",
                prevArrow: "<img class='arrowmobilel' src='/wp-content/themes/marcus_onehouse/assets/img/strzalka_lewo.png'>",
                nextArrow: "<img class='arrowmobiler' src='/wp-content/themes/marcus_onehouse/assets/img/strzalka_prawo.png'>",
                // variableWidth: true
            }
        }]
    });



    $('.meetus__logos').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        $('.meetus__logos .slick-current img').addClass('centerslajd');
    });
    $('.meetus__logos').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $(' .meetus__logos .slick-current img').removeClass('centerslajd');
    });
    </script>
    <script>
    $('.counter__slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        arrows: false,
        autoplaySpeed: 1000,
        // centermode:true,
        responsive: [{
            breakpoint: 992,
            settings: {
                settings: "unslick"

            }
        }]
    });
    </script>
    <script>
    $('.certificates__icons').slick({
        responsive: [{
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    centermode: true,
                    arrows: true,
                    prevArrow: "<img class='arrowmobilel' src='/wp-content/themes/marcus_onehouse/assets/img/strzalka_lewo.png'>",
                    nextArrow: "<img class='arrowmobiler' src='/wp-content/themes/marcus_onehouse/assets/img/strzalka_prawo.png'>",
                }
            }
        ]
    });
    </script>
    <script>
    $('.tabs__przestrzen').slick({
        responsive: [{
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    centermode: true,
                    prevArrow: "<img class='arrowmobilel' src='/wp-content/themes/marcus_onehouse/assets/img/strzalka_lewo.png'>",
                    nextArrow: "<img class='arrowmobiler' src='/wp-content/themes/marcus_onehouse/assets/img/strzalka_prawo.png'>",
                }
            }
        ]
    });
    </script>
    <script>
    $('.why__icons').slick({
        responsive: [{
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    autoplay: false,
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: false,
                }
            }
        ]
    });
    </script>
    <script>
    $('.offer__button').click(function() {
        $(".offer__hiddenform").show();
        $(".offer__button").hide();
        // $(".offer__h3").hide();
    });
    $('.question__button').click(function() {
        $(".question__form").show();
        $(".question__button").hide();
    });
    $('.xclose').click(function() {
        if ($(window).width() < 960) {

            $(".navbar-expand-lg").css('top', '0px');
            $(".navigation__popup").hide();
            $(".certificates").css('margin-top', '15px');
            $(".mainslider ").css('padding-top', '5.5rem');
            $(".mainslider").css('max-height', '565px');
            $(".singleheader ").css('padding-top', '3rem');
        } else {}

    });




    $(".tabs__data--moreinfo").click(function() {
        $(this).hide();
        $(this).prev().show();
        $(this).parent().next().find('.tabs__data--bio').show();
    })

    $(".tabs__data--lessinfo").click(function() {
        $(this).hide();
        $(this).next().show();
        $(this).parent().next().find('.tabs__data--bio').hide();
    })

    // $('.tabs__data--moreinfo').click(function(e) {
    //     $(".tabs__data--bio").show();
    //     $(".tabs__data--lessinfo").show();
    //     $(".tabs__data--moreinfo").hide();
    // });

    // $('.tabs__data--lessinfo').click(function(e) {
    //     $(".tabs__data--bio").hide();
    //     $(".tabs__data--lessinfo").hide();
    //     $(".tabs__data--moreinfo").show();
    // });



    $('.readm').click(function(e) {
        // $(".readmhidden").show();
        // $(".readm").hide();
        $(this).hide();
        $(this).next().show()
    });
    </script>
    <script>
    $('.btn__more').click(function() {
        $(".trainings__more").css('display', 'flex');
        $(".btn__more").hide();
    });
    </script>
    <!--   <script>
            $('a.tooltip').mouseover(function(){
            $(".dropdowntooltip").show();

         });
                        $('a.tooltip').mouseleave(function(){
            $(".dropdowntooltip").hide();

         });
  </script> -->
    <!-- <script>
$(document).ready(function () {
    $('.navbar-nav a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
    $('.btn-light[data-id="roleId"]').addClass("has-success"); 

});
</script>
<script>
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            // $(this).text(Math.ceil(now));
           $(this).text(Math.ceil(now).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
    });
});
</script> -->
    <!-- <script>
//Call the function on scroll
$(window).scroll(numberCounter);

//Check if in viewport function
function inViewport(el, val) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elTop = $(el).offset().top;
    var elBottom = elTop + $(el).height();

    return ((elTop + val <= docViewBottom));
}

//Counter Function
function numberCounter() {
    if (inViewport($('.count'), 100)) {
        $('.count').not('.counted').each(function () {
            var $this = $(this);

            $({Counter: 0}).animate({Counter: $this.text()}, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                    $this.addClass('counted');
                    $this.text(commaSeparateNumber(Math.round(this.Counter)));
                }
            });
        });
    }
}


//Add Commas Function
function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}
</script> -->
    <script>
    // $(function() {

    //     //Call the function on scroll
    //     $(window).scroll(numberCounterFirstItem);
    //     $(window).scroll(numberCounter);
    //     $(window).scroll(numberCounterLastItem);

    //     //Check if in viewport function
    //     function inViewport(el, val) {
    //         var docViewTop = $(window).scrollTop();
    //         var docViewBottom = docViewTop + $(window).height();

    //         var elTop = $(el).offset().top;
    //         var elBottom = elTop + $(el).height();
    //         var lastCount = $('.count-3');
    //         return ((elTop + val <= docViewBottom));
    //     }

    //     // Counter Function

    //     function numberCounterFirstItem() {
    //         if (inViewport($('.count-0'), 100)) {
    //             $('.count-0').not('.counted').each(function() {
    //                 var $this = $(this);

    //                 $({
    //                     Counter: 2022
    //                 }).animate({
    //                     Counter: $this.text()
    //                 }, {
    //                     duration: 4000,
    //                     easing: 'swing',
    //                     step: function(now) {
    //                         $this.addClass('counted');
    //                         $this.text(Math.round(this.Counter));
    //                     }
    //                 });
    //             });
    //         }
    //     }

    //     function numberCounter() {

    //         if (inViewport($('.count-2, .count-1'), 100)) {
    //             $('.count-2, .count-1').not('.counted').each(function() {
    //                 var $this = $(this);

    //                 $({
    //                     Counter: 0
    //                 }).animate({
    //                     Counter: $this.text()
    //                 }, {
    //                     duration: 4000,
    //                     easing: 'swing',
    //                     step: function(now) {
    //                         $this.addClass('counted');
    //                         $this.text(Math.round(this.Counter));
    //                     }
    //                 });
    //             });
    //         }
    //     }


    //     function numberCounterLastItem() {
    //         if (inViewport($('.count-3'), 100)) {
    //             $('.count-3').not('.counted').each(function() {
    //                 var $this = $(this);

    //                 $({
    //                     Counter: 0
    //                 }).animate({
    //                     Counter: $this.text()
    //                 }, {
    //                     duration: 4000,
    //                     easing: 'swing',
    //                     step: function(now) {
    //                         $this.addClass('counted');
    //                         $this.text((this.Counter).toFixed(1));


    //                     }
    //                 });
    //             });
    //         }
    //     }
    // });

    ////////////////////////

    $(document).ready(function() {
        function countUpFirstItem() {

            $('.count-0').each(function() {
                var counter = $(this);
                // countTo = 2016;

                $({
                    countNum: 2022
                }).animate({
                        countNum: 2016
                    },

                    {
                        duration: 4000,
                        easing: "swing",
                        step: function() {
                            counter.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            counter.text(this.countNum);
                            // alert("finished");
                        }

                    });

            });
        }


        function countUpSecondItem() {

            $('.count-1').each(function() {
                var counter = $(this);
                // countTo = 100

                $({
                    countNum: 0
                }).animate({
                        countNum: 100
                    },

                    {
                        duration: 4000,
                        easing: "swing",
                        step: function() {
                            counter.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            counter.text(this.countNum);
                            // alert("finished");
                        }

                    });

            });
        }

        function countUpThirdItem() {

            $('.count-2').each(function() {
                var counter = $(this);
                // countTo = 100

                $({
                    countNum: 0
                }).animate({
                        countNum: 700
                    },

                    {
                        duration: 4000,
                        easing: "swing",
                        step: function() {
                            counter.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            counter.text(this.countNum);
                            // alert("finished");
                        }

                    });

            });
        }

        function countUpLastItem() {

            $('.count-3').each(function() {
                var counter = $(this);
                // countTo = 4.7;

                $({
                    countNum: 0
                }).animate({
                        countNum: 4.7
                    },

                    {

                        duration: 4000,
                        easing: "swing",
                        step: function() {
                            counter.text((this.countNum).toFixed(1));
                        },
                        complete: function() {
                            counter.text((this.countNum).toFixed(1));
                        }

                    });

            });
        }

        const counterNumbers = document.querySelectorAll('.count');

        observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {

                    countUpFirstItem();
                    countUpSecondItem();
                    countUpThirdItem();
                    countUpLastItem();
                    observer.disconnect();

                } else {
                    var allCounters = document.querySelectorAll(".count");
                    [].forEach.call(allCounters, function(allCounters) {
                        allCounters.innerHTML = "0";
                    });
                }
            });
        });

        counterNumbers.forEach(number => {
            observer.observe(number);
        });

    });
    </script>
    <!-- <script>

    function isScrolledIntoView($elem) {
  runAnimations();

    }


// How long you want the animation to take, in ms
const animationDuration = 2000;
// Calculate how long each ‘frame’ should last if we want to update the animation 60 times per second
const frameDuration = 1000 / 60;
// Use that to calculate how many frames we need to complete the animation
const totalFrames = Math.round( animationDuration / frameDuration );
// An ease-out function that slows the count as it progresses
const easeOutQuad = t => t * ( 2 - t );



// The animation function, which takes an Element
const animateCountUp = el => {
    let frame = 0;
    const countTo = parseInt( el.innerHTML, 10 );
    // Start the animation running 60 times per second
    const counter = setInterval( () => {
        frame++;
        // Calculate our progress as a value between 0 and 1
        // Pass that value to our easing function to get our
        // progress on a curve
        const progress = easeOutQuad( frame / totalFrames );
        // Use the progress value to calculate the current count
        const currentCount = Math.round( countTo * progress );

        // If the current count has changed, update the element
        if ( parseInt( el.innerHTML, 10 ) !== currentCount ) {
            el.innerHTML = currentCount;
        }

        // If we’ve reached our last frame, stop the animation
        if ( frame === totalFrames ) {
            clearInterval( counter );
        }
    }, frameDuration );
};


// Run the animation on all elements with a class of ‘countup’
const runAnimations = () => {
    const countupEls = document.querySelectorAll( '.count' );
    countupEls.forEach( animateCountUp );
};

</script> -->

    <script>
    // var offset = 80;

    // $('.navbar li a').click(function(event) {
    //     event.preventDefault(event);
    //     $($(this).attr('href'))[0].scrollIntoView();
    //     scrollBy(0, -offset);
    // });


    //     $('.nav-szkolenia').mouseenter(function() {
    //         if ($(window).width() > 960) {

    //             $(".navigation__box").show();
    //             $(".navbar-expand-lg").css('margin-top', '-268px');
    //             $("#mainslider_").css('filter', 'blur(3px)');
    //             $(".navbar-expand-lg").css('filter', 'blur(3px)');
    //             $(window).scrollTop(0);

    //         } else {}
    //     });
    //     $('.navigation__box').mouseleave(function() {
    //         $(".navigation__box").hide();
    //         $(".navbar-expand-lg").css('margin-top', '0px');
    //         $("#mainslider_").css('filter', 'blur(0px)');
    //         $(".navbar-expand-lg").css('filter', 'blur(0px)');
    //     });

    //                            $('.certificates__icons').scroll(function(){
    //     $(".certificates__icons--image").css('opacity','1');
    // });
    // $(".certificates__icons--image").css('opacity','1');
    </script>
    <!-- <script>
    $(function() {
        $('.accordion-collapse:first').addClass('show');
        $('.accordion-collapse:first').removeClass('collapse');
    })
    $('.nav-link').click(function() {
        $(".navbar-collapse").hide();

    });
    $('.navbar-toggler').click(function() {
        $(".navbar-collapse").show();
    });
    </script> -->
    <script>
    $('.menu-shadow-btn').click(function() {
        $('.menu-shadow').toggleClass('shadow-active')
    })

    $('.nav-item').click(function() {
        $('.menu-shadow').removeClass('shadow-active')
        $('.navbar-collapse').removeClass('show')
        $('.menu-shadow-btn').addClass('collapsed')
    })
    </script>
    <!-- <script type="text/javascript">
         // speed in milliseconds
         var scrollSpeed = 70;

         // set the default position
         var current = 0;

         // set the direction
         var direction = 'h';

         function bgscroll() {

             // 1 pixel row at a time
             current -= 1;

             // move the background with backgrond-position css properties
             $('.offer__row').css("backgroundPosition", (direction == 'h') ? current + "px 0" : "0 " + current + "px");

         }

         //Calls the scrolling function repeatedly
         setInterval("bgscroll()", scrollSpeed);



    </script> -->

    <!-- ODLICZANIE DNI DO STARTU SZKOLENIA -->
    <!-- 	    <script>
    const countDownDate = new Date("09.15.2022").getTime();

    const dateCount = setInterval(function() {
        const now = new Date().getTime();

        const distance = countDownDate - now;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60);
        let minutes = (distance % (1000 * 60 * 60)) / (1000 * 60);

        if (days >= 2) {
            document.querySelector('.training-countdown').textContent = 'Start już za ' + ++days + ' dni!';
        } else if (days >= 1 || hours > 24) {
            document.querySelector('.training-countdown').textContent = 'Start już za 2 dni!';
        } else if (days == 0 && hours < 24) {
            document.querySelector('.training-countdown').textContent = 'Start już jutro!';
        } else if (days == -1) {
            document.querySelector('.training-countdown').textContent = "Szkolenie już dziś!";
        } else if (distance < 0) {
            document.querySelector('.training-countdown').textContent = "Zakończone";

        }

    }, 1000);
    </script> -->
</footer>
</body>

</html>
<style>
.footer__gp {
    margin-top: 5px;
    max-width: 41px;
}

a.violet {
    color: #96004C;
}

.powered {
    position: absolute;
    bottom: 27px;
    right: -137%;
    padding-bottom: 2%;
}

a.nextcourse {
    color: white !important;
}

.question__button {
    position: relative;
}

.wpcf7-response-output {
    font-size: 1.25vw;
}

#tabs {
    position: relative;
}

@media (max-width:992px) {
    .footer__gp {
        margin-top: inherit !important;
        max-width: 41px !important;
        ;
    }

    #lottie {
        display: none;
    }

    .wpcf7-list-item {
        padding-left: inherit !important;
        text-indent: inherit !important;
        margin: 0 0 0 1em !important;
    }

    .powered-footer {
        max-width: 210px;
    }

    .wpcf7-response-output {
        font-size: 15px;
    }
}
</style>