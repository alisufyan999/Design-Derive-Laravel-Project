<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex, nofollow" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://vjs.zencdn.net/8.10.0/video-js.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
   
    <title>Home</title>

    <style>
.navbar .container {
    position: relative;
}

.nav-item.dropdown .mega-box {
    display: none;
    position: fixed; 
    top: 60px;  
    left: 7vw;  
    width: 85vw;  
    background-color: #fff;
    z-index: 1000;
    padding: 40px 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px 1px #cecece;
}

.nav-item.dropdown:hover .mega-box {
    display: block;
}

li.nav-item.dropdown {
    position: static;
}
.sub-box {
    display: flex;
    flex-flow: row;
    justify-content: space-between;
    padding-bottom: 25px;
    align-items: flex-start;
}

.sub-box img {
    width: 33%;
}

.sub-box .sub-details {
    width: 64%;
}

.sub-details h5 {
    margin-bottom: 0;
    color: #f15874;
    font-size: 16px;
}

.sub-details p {
    margin-bottom: 0;
    font-size: 13px;
    color: #222;
}

.megainner-box a {
    text-decoration: none;
}

.alignclass {
    position: relative;
    display: flex;
    align-items: flex-start;
}

.second-col:after, .second-col:before {
    content: '';
    width: 3px;
    height: 90%;
    background-color: #cecece;
    position: absolute;
    top: 0%;
}

.second-col:before {
    left: 0;
}

.second-col:after {
    right: 0;
}

.megaimg-box {
    display: flex;
    flex-flow: row;
    justify-content: flex-start;
    align-items: center;
    margin-bottom: 15px;
}

.megaimg-box img {
    margin-right: 15px;
    max-width: 95px;
}
.megainner-box .connecteddiv > div > p, .megainner-box .connecteddiv > h4, .megainner-box .connecteddiv > div > p > a {
    color: #000;
}
.megainner-box .connecteddiv > div > i {
    border-color: #000;
}
.blacklogo
{
    display:none;
}
.shrink-nav .blacklogo
{
    display:block;
}
.shrink-nav .whitelogo
{
    display:none;
}
.emailchat a
{
    margin-right: 17px;
}
.emailchat a:last-child 
{
    margin: 0px;
}
.shrink-nav .navbar-brand > img
{
    margin-top:0px !important;
}
.navbar-brand > img
{
    margin-top:16px;
}
.shrink-nav .navbar-brand > img 
{
    margin-top: 16px !important;
}
.shrink-nav
{
    height: 66px !important;
}

/*modal form taha*/

@font-face 
{ 
    font-family: 'Larsseit-Regular'; 
    src: url('assets/fonts/Larsseit-Regular/LarsseitRegular.ttf')
} 


.title01
{
    position:relative;
    font-size: 42px;
    font-family: 'Larsseit-Bold';
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 20px;
}
.poppup-form
{
    position: fixed;
    left:50%;
    top:50%;
    transform: translate(-50%, -50%) scale(0.7);
    width: 90%;
    display: none;
    z-index: 1050;
}
.popup-body
{
    /*background: #fff;*/
    background: transparent;
    border-radius: 18px;
}
.poppup-form .form
{
    position: relative;
    padding: 38px 44px 38px 30px;
    background-color: #fff;
}
.poppup-form .form:before
{
    content:'';
    position: absolute;
    right: -12px;
    top:50%;
    width: 90%;
    height:100%;
    transform: translateY(-50%);
    background:url('../../../../frontend/assets/images/shape1.webp') no-repeat;
    background-size: cover;
}
.poppup-form .form p
{
    position:relative;
    color: #000;
    font-family: "Poppins", sans-serif;
    margin-bottom: 26px;
    font-size:22px;
}
.poppup-form .form form
{
    position: relative;
    z-index:1;
}
.poppup-form .form form .submit
{
    width: 100%;
    padding: 18px 30px;
    border-radius: 100px;
    background: #F15874;
    border: 0px;
    color: #fff;
    text-transform: capitalize;
    font-family: "Poppins", sans-serif;
    font-size: 22px;
    font-weight: 500;
}
.poppup-form .form form input
{
    border-radius: 100px;
    height:60px;
    padding:10px 23px;
    border: 1px solid #000;
    margin-bottom: 22px;
    font-family: "Poppins", sans-serif;
    font-size:24px;
}
.poppup-form .form form input:focus
{
    border: 1px solid #000;
    outline: 0px;
    box-shadow: none;
}
.poppup-form .form form select
{
    border-radius: 100px;
    border: 1px solid #000;
    margin-bottom: 24px;
    font-family: "Poppins", sans-serif;
}
.poppup-form .form form select:focus
{
    border: 1px solid #000;
    outline: 0px;
    box-shadow: none;
}
.poppup-form .form form textarea
{
    border-radius: 100px;
    border: 1px solid #000;
    font-family: "Poppins", sans-serif;
}
.poppup-form .form form textarea:focus
{
    border: 1px solid #000;
    outline: 0px;
    box-shadow: none;
}
label
{
    position:relative;
    font-size:22px;
    margin-bottom: 12px;
    font-family: "Poppins", sans-serif;
    text-transform: capitalize;
}
.poppup-form .form form ::placeholder
{
    font-family: "Poppins", sans-serif;
    font-size:20px;
}
.popup-column
{
    position: relative;
    background-size: cover;
    display: flex;
    flex-direction: column;
    height:100%;
    padding: 27px 56px;
    margin-bottom: 15px;
}
.popup-column .special-offer
{
    position: relative;
    background: url('../../../../frontend/assets/images/special-tag.webp') no-repeat;
    background-size: cover;
    width: 244px;
    margin: auto;
}
.popup-column h3
{
    text-transform: uppercase;
    color: #000;
    font-family: 'Larsseit-Bold';
    text-align: center;
    font-size: 30px;
    margin: 0 auto;
}
.poppup-form .popup-column h1
{
    text-transform: capitalize;
    font-size: 68px;
    color: #fff;
    font-family: 'Larsseit-Bold';
    margin-top: 8px;
    line-height: 1.1;
}
.poppup-form .popup-column h1 span.regular
{
    font-family: 'Larsseit-Regular'; 
    color: #fff;
}
.poppup-form .popup-column h1 span
{
    width: fit-content;
    position: relative;
    color:#000;
    text-transform: uppercase;
}
.poppup-form .popup-column h1 span img
{
    width: 250px;
    position: absolute;
    left: 0;
    bottom: -8px;
}
.poppup-form .popup-column p
{
    color: #fff;
    font-size: 24px;
    margin-top: 20px;
    max-width: 34rem;
}
.poppup-form .popup-column .laptop-mockup
{
    margin-top: 20px;
}
.discout-text
{
    position: absolute;
    bottom: 22px;
    right: 38px;
}
.discout-text h4
{
    position: relative;
    color:#fff;
    font-family: 'Larsseit-Bold';
    font-size: 45px;
    text-transform: uppercase;
    margin-left: 25px;
}
.discout-text img
{
    max-width: 70px;
    position: absolute;
    bottom: -11px;
    left: -27px;
    transform: translateX(-50%);
}
.modal_promote {
    font-size: 3rem !important;
    font-weight: 300;
    margin: 0px;
}
.close-btn 
{
    position: absolute;
    right: 15px;
    top: 15px;
    cursor: pointer;
    font-size: 25px;
}
.close-btn i
{
    font-size:30px;
}
.popup-bg 
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    z-index: 200;
}
.modal_heading{
    font-size: 82px;
}
@media(max-width:1900px)
{
    .close-btn
    {
        top: 20px;
    }
    .poppup-form .popup-column h1
    {
        /*font-size:114px;*/
        font-size: 66px;
    }
    .popup-body 
    {
        border-radius: 26px;
        overflow: hidden;
    }
    .mainbannersec 
    {
        height: calc(122vh + 80px);
    }
}
@media(max-width:1600px)
{
     .poppup-form .popup-column h1
    {
        font-size: 62px;        
    } 
    .close-btn
    {
     top: 20px;   
    }
    .popup-body
    {
        border-radius: 25px;
    }
    .mainbannersec 
    {
        height: calc(100vh + 80px);
    }
}
@media (max-width: 1366px) 
{
    .modal_heading {
    font-size: 73px;
    }
    .poppup-form
    {
         transform: translate(-50%, -50%) scale(0.6);
    }
    .poppup-form .popup-column h1 
    {
        font-size: 56px;
    }
     .close-btn
    {
     top: 20px;   
    }
}
@media(max-width:1280px)
{
     .close-btn
    {
     top: 20px;   
    }
    .poppup-form .popup-column h1 
    {
        font-size: 52px;
    }
        .modal_heading {
        font-size: 68px;
    }
}
@media(min-width:1900px)
{
    .popup-column{
        border-radius: 25px 0px 0px 25px;
    }
    .poppup-form .form {
        border-radius: 0px 25px 25px 0px;
    }
}
@media(max-width:1024px)
{
    .title01  
    {
        font-size: 37px;
    }
    .popup-column
    {
        padding: 27px 30px;
    }
    .poppup-form .popup-column h1
    {
        font-size: 69px;
    }
    .popup-column .special-offer
    {
        margin: 40px auto 20px;
    }
}
@media(max-width:768px)
{
    .title01  
    {
        font-size: 26px;
    }
    .popup-column
    {
        padding: 27px 30px;
    }
    .poppup-form .popup-column h1
    {
        font-size: 49px;
    }
    .popup-column .special-offer
    {
        margin:40px 0; 
    }
    .close-btn
    {
        top: 36px;
    }
}
@media(max-width:576px)
{
    .display-none
    {
        display: none;
    }
    .title01 
    {
        font-size: 26px;
    }
    .poppup-form
    {
        width:100%;
    }
    .poppup-form .form p
    {
        font-size:16px;
    }
    .poppup-form .form form label
    {
        font-size: 16px;
    }
    .poppup-form .form form input
    {
        height:50px;
        font-size:16px;
    }
}
@media(max-width:280px)
{
    .display-none
    {
        display: none;
    }
    .title01  
    {
        font-size: 29px;
    }
    .poppup-form .form
    {
        padding: 38px 15px 38px 15px;
    }
}

    </style>

  </head>
  <body>
    
    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    <div class="scrolltop" style="display: none">
        <div class="scroll icon">
            <i class="fa fa-4x fa-angle-up" aria-hidden="true"></i>
        </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-youtube/2.6.0/Youtube.min.js"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#contactformpages').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/contactform',
                data: $(this).serialize(),
                success: function(response) {
                    $('#response').html('<div>' + response.success + '</div>');
                    $('#contactformpages')[0].reset(); // Reset the form
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '';
                    for (let key in errors) {
                        errorHtml += `<div>${errors[key][0]}</div>`;
                    }
                    $('#response').html('<div>' + errorHtml + '</div>');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#popupform').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/popupform',
                data: $(this).serialize(),
                success: function(response) {
                    $('#popupresponse').html('<div>' + response.success + '</div>');
                    $('#popupform')[0].reset(); // Reset the form
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '';
                    for (let key in errors) {
                        errorHtml += `<div>${errors[key][0]}</div>`;
                    }
                    $('#popupresponse').html('<div>' + errorHtml + '</div>');
                }
            });
        });
    });
    </script>

  </body>
</html>