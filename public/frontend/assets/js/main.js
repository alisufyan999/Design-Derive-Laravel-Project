setTimeout(function() 
        {
            $(".poppup-form").show();
            $(".popup-bg").show();

        }, 3000);


        $('.close-btn').click(function()
        {
            $('.poppup-form').hide();
            $(".popup-bg").hide();
        });


        document.addEventListener('DOMContentLoaded', function () {
            const dropdownItems = document.querySelectorAll('.nav-item.dropdown');
    
            dropdownItems.forEach(item => {
                item.addEventListener('mouseenter', function () {
                    this.querySelector('.mega-box').style.display = 'block';
                });
    
                item.addEventListener('mouseleave', function () {
                    this.querySelector('.mega-box').style.display = 'none';
                });
            });
        });

        $(document).ready(function() {
            var header = $(".desktopheader");
            setHeader();
            $(window).on("resize", function() {
                setHeader();
            });

            $(document).on("scroll", function() {
                setHeader();
                if (screen.width < 576) {
                    setheadermobile();
                } else {
                    setHeader();
                }
            });
         

        //     function setheadermobile() {
        //         if ($(window).scrollTop() > 50) {
        //             header.addClass("shrink-nav");
        //             $(".headerlogoimg").attr(
        //                 "src",
        //                 "https://ik.imagekit.io/designmanhattan/assets/img/home/logo-clr-01.svg?updatedAt=1633703824260"
        //             );
        //         } else {
        //             header.removeClass("shrink-nav");
        //             $(".headerlogoimg").attr(
        //                 "src",
        //                 "https://ik.imagekit.io/designmanhattan/assets/img/home/footer-logo.webp?updatedAt=1633614558688"
        //             );
        //         }
        //     }

            function setHeader() 
            {
                if ($(window).scrollTop() > 50) 
                {
                    header.addClass("shrink-nav");
                    // $(".headerlogoimg").attr(
                    //     "src",
                    //     "https://ik.imagekit.io/designmanhattan/assets/img/home/logo-clr-01.svg?updatedAt=1633703824260"
                    // );
                } else {
                    header.removeClass("shrink-nav");
                    // $(".headerlogoimg").attr(
                    //     "src",
                    //     "https://ik.imagekit.io/designmanhattan/assets/img/home/footer-logo.webp?updatedAt=1633614558688"
                    // );
                }
            }
        });
        
        // way point
        

        $(window).scroll(function() 
        {
            if ($(this).scrollTop() > 50) 
            {
                $(".scrolltop:hidden").stop(true, true).fadeIn();
            } 
            else 
            {
                $(".scrolltop").stop(true, true).fadeOut();
            }
        });
        
            $(".scrolltop").on('click', function(e) 
            {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, '300');
            });

        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "share",
                "zoom",
                "fullScreen",
                "thumbs",
                "close",
            ],
        });

        $(".portfoliobanner").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 3000,
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            smartSpeed: 600,
            paginationSpeed: 400,
            dots: false,
        });
        
        $(".client-logo").owlCarousel({
            items: 6,
            loop: true,
            margin: 50,
            autoplay: true,
            autoplayTimeout: 3000,
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            smartSpeed: 600,
            paginationSpeed: 400,
            dots: false,
            responsive:{
              0:{
                items:3
              },
              600:{
                items:2
              },
              1000:{
                items:6
              }
            }
        });

        $(".carouselsolutionforipad").owlCarousel({
            items: 2,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 600,
            paginationSpeed: 400,
            dots: false,
        });

        $(function() {
            $("#accordion").accordion();
        });

        $("#accordion h3").click(function() {
            $(this)
                .parents(".ui-accordion")
                .find(".fa-minus")
                .removeClass("fa-minus");
            $(this).children(".fa-plus").toggleClass("fa-minus");
        });

        $(window).scroll(function() {
            // if($( window ).scrollTop() > 10){   scroll down abit and get the action
            $(".progress-bar").each(function() {
                each_bar_width = $(this).attr("aria-valuenow");
                $(this).width(each_bar_width + "%");
            });

            //  }
        });

        document.getElementById('video-overlay').addEventListener('click', function() {
            this.style.display = 'none';
            var iframe = document.getElementById('youtube-video');
            iframe.src += "&autoplay=1";
        });

        $(".headerclickweb").click(function() {
            $("#webservice-tab").addClass("active");
            $("#webservice").addClass("show active");
            $("#logoservice-tab").removeClass("active");
            $("#logoservice").removeClass("show active");
        });


        (function($) {
            $("#contact_form").on("submit", function(e) {
                e.preventDefault();

                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "home/send_mail",
                    data: {
                        name: name,
                        email: email,
                        subject: subject,
                        message: message,
                    },
                    success: function(result) {
                        console.log(result);
                        if (result == "fail") {
                            $(".error-box").css({
                                display: "block",
                                "margin-top": "20px",
                            });
                            $(".error-box").delay(5000).fadeOut(400);
                        } else {
                            $(".success-box").css({
                                display: "block",
                                "margin-top": "20px",
                            });
                            $(".success-box").delay(5000).fadeOut(400);
                            $("#contact_form")[0].reset();
                        }
                    },
                });
            });
        })(jQuery);