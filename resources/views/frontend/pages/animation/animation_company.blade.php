@extends('frontend.layouts.master')
@section('content')

<style>


section.aboutmainsec .bar 
{
    height: 4px;
    width: 70px;
    background-image: linear-gradient(to right, #F15874 20%, #FE7B95);
    position: relative;
    border-radius: 30px;
}
section.aboutmainsec .bar:before
{
    content: '';
    position: absolute;
    left: 0;
    top: -3.2px;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background: #fff;
    border: 3px solid #000;
}
section.pinksection
{
    background-color: #fcf1f3;
}
ul.pointsul.financiallist li.py-1 
{
    color: #000;
}
ul.pointsul.financiallist li.py-1:before
{
    color:#f15874;
}
.about-img1 
{
    Width:100%;
    max-width: 525px;
    display: block;
    margin: auto;
}
section.greysection
{
    background:#f5f5f5;
}
.aboutsidecontent > h2
{
    color:#000;
}
.aboutsidecontent > p
{
    color:#000;
}
.service-banner-video {
  position: relative;
  margin-right: 1rem;
  z-index: 1;
}

.service-banner-video {
  position: relative;
  margin-right: 1rem;
  z-index: 1;
}
.service-banner-video > video {
  width: 100%;
  max-height: 21.875rem;
  object-fit: cover;
}
.service-banner-video:after,
.service-banner-video:before {
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 1rem;
  left: 0.625rem;
  width: 50%;
  top: 80%;
  max-width: 18.75rem;
  background: 0 0;
  -webkit-box-shadow: 0 1.25rem 0.6875rem rgba(40, 40, 40, 0.7);
  -moz-box-shadow: 0 1.25rem 0.6875rem rgba(40, 40, 40, 0.7);
  box-shadow: 0 1.25rem 0.6875rem rgba(40, 40, 40, 0.7);
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
  opacity: 0;
  transition: 0.3s;
}
.video-js 
{
  width: 100%;
  height: 100%;
  border-radius: 1rem;
  background: 0 0;
}
.video-js .vjs-tech 
{
  position: relative;
  border-radius: 1rem;
  max-height: 21.875rem;
  background: var(--dark-text-color);
  margin-bottom: -2px;
}
.service-banner-video .video-js .vjs-tech 
{
  height: 100%;
}
.video-js .vjs-poster img 
{
  border-radius: 1rem;
  object-fit: cover;
}
.vjs-audio-only-mode .vjs-control-bar,
.vjs-has-started .vjs-control-bar 
{
  border-radius: 0 0 1rem 1rem;
  background: var(--primary);
  opacity: 0.6;
}
.video-js .vjs-big-play-button,
.video-js:hover .vjs-big-play-button 
{
  border: 0;
  background-color: transparent;
  border-radius: 0;
  width: 5.625rem;
  height: 5.625rem;
  transform: translate(-50%, -50%);
  margin: 0;
}
.video-js .vjs-control-bar * 
{
  color: #000;
}
.video-js:not(.vjs-playing) .vjs-big-play-button::before 
{
  content: url("assets/images/play-btn.png");
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.vjs-icon-placeholder
{
    display:none;
}
.vjs-audio-only-mode .vjs-control-bar, .vjs-has-started .vjs-control-bar 
{
    border-radius: 0 0 1rem 1rem;
    background: #f15874;
    opacity: 0.8;
}
 section.mainbannersec.logoherosection .mainbannercontent.mainbannercontentmob a.moreportfoliobtn
    {
        border:2px solid #fff;
        background:transparent;
        color:#fff;
    }
     section.mainbannersec.logoherosection .mainbannercontent.mainbannercontentmob a.moreportfoliobtn:hover
    {
         background:#fff;
         color:#f15874;
    }
    .mainbannercontent > p 
    {
        margin-bottom: 32px;
    }
    .sectionheadingdiv p
    {
        margin-bottom: 28px;
    }
    section.section-padding-1920 a.moreportfoliobtn:hover
    {
        background: linear-gradient(to right, #F15874 40%, #FE7B95);                
        color:#fff;
        border:2px solid transparent;
    }
    .section-padding-1920 a.main.moreportfoliobtn
    {
      border: 2px solid #f15874;
      background:transparent;  
    }

</style>

 <!--------------------------- Main banner start ------------------------------>
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                     Best video animation company in USA
                    </h1>
                    <p class="text-white">
                        Transform your brand’s message into compelling visual stories with our best video animation company in USA. Our custom video animation services make sure your brand is unique and attracts customers.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <div class="service-banner-video">
                  <video
                    class="video-js"
                    controls
                    muted
                    
                    preload="auto"
                    loop
                    width="640"
                    height="900"
                    poster="{{ asset('frontend/assets/images/animation-overlay.jpg') }}"
                    data-setup="{}"
                  >
                    <source
                      src="{{ asset('frontend/assets/video/1.mp4') }}"
                      type="video/mp4"
                    />
                    <p class="vjs-no-js">
                      To view this video please enable JavaScript, and consider
                      upgrading to a web browser that
                      <a
                        href="https://www.youtube.com/embed/UpZWKBif77E"
                      type="video/mp4"
                        target="_blank"
                        >supports HTML5 video</a
                      >
                    </p>
                  </video>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Logo slider start -->
    <section class=" section-padding-1920 pb-0-1920 client-logosection">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-sm-12 my-auto">
                    <div class="owl-carousel owl-theme client-logo">
                        <div class="item"> <img src="{{ asset('frontend/assets/images/cl1.png') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/cl2.png') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/cl3.png') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/cl4.png') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/cl5.png') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/cl6.png') }}" /> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/animation-company01.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Grow Your Brand with Our Leading Animation and Video Production Company</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">At our animation and video production company, we use visual storytelling to its full potential to produce stunning animations. Our expert team of animators and designers crafts animations that attracts your target audience, improving your brand's image and delivering your message effectively.</p>
                        <a href="#" class="main moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec greysection p-5">
     <div class="container">
        
         <div class="row">
               
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Get the Best Video Animation Services USA You Deserve</h2>
                        <div class="bar"></div>
                        <p>
                            Get the full potential of your brand with our best video animation services USA. Investing in professionally crafted animations can significantly grow your brand's success. Our custom video animation services make sure your animations are unique, engaging, and perfectly aligned with your brand's values.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Creative Concepts</li>
                          <li class="py-1">Custom Designs</li>
                          <li class="py-1">Elegant Visuals</li>
                          <li class="py-1">100% Ownership</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center my-auto">
                <img class="img-fluid about-img1" src="{{ asset('frontend/assets/images/animation-company02.png') }}" />
                </div>
            </div>
    </div>
      
    </section>
    
      <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/animation-company03.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Achieve Excellence with Our Comprehensive Animation and Video Production Services</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">Our animation and video production company offers a wide range of services designed to meet your business needs. From concept development to final delivery, we ensure every animation is of the highest quality. Whether you need explainer videos, promotional animations, or complex 3D animations, our custom services guarantee a final product that will boost your brand and leave a lasting impression.</p>
                        <a href="#" class="main moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="aboutmainsec pinksection p-5">
     <div class="container">
        
         <div class="row">
               
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Enhance <span class="darkh2"> Your Marketing Strategy with the Best Video Animation Agency</h2>
                        <div class="bar"></div>
                        <p>
                            Maximize your brand's potential with the expertise of the best video animation agency. We offer comprehensive video animation strategies that integrate with your overall marketing efforts. Our approach ensures your animations are not only visually stunning but also effectively deliver your brand message, driving engagement and results.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Custom Animation Solutions</li>
                          <li class="py-1">Seamless Integration with Marketing</li>
                          <li class="py-1">Targeted Audience Engagement</li>
                          <li class="py-1">Continuous Performance Enhancement</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center my-auto">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/animation-company04.png') }}" />
                </div>
            </div>
    </div>
      
    </section>

<!--------------------------- Portfolio start ------------------------------>
<section class="mb-5 pt-5 pb-5 section-padding-1920" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h5>Showcase The Creativity</h5>
                    <h2>Our Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        Explore our innovative animations that highlight our creativity and technical expertise. Our portfolio demonstrates why we offer the best video animation services USA, showcasing our commitment to quality and excellence in every project.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 mt-4 mb-5">
           <div class="row">
                       <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/TAXZV604XMw" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/3d/01.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/MJf0LK9WdVQ" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/3d/02.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/u1hOWAllq48" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/3d/03.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/R1z5LcXlhIw" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/startup/01.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/KsU-8hVRNj8" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/startup/02.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/vfgl-kFAxYU" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/startup/03.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/g1wpDZbNWrE" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/explainer/010.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/peACLyN0zeA" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/explainer/011.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/wejvHjrucYM" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/explainer/012.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/u2M76CMvzLM" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/01.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/V2qVq-jINHM" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/02.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/YPSHrR0DgSk" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/04.jpg') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 text-center mb-2">
                <a href="#" class="main moreportfoliobtn">Our More Creative Work</a>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 section-padding-1920">
    <div class='container'>
         <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <!--<h5>Now Low Budgets Will Boost Your Brand</h5>-->
                    <h2>Check Our Economical Pricing</h2>
                    <div class="bar"></div>
                    <p>
                        Our customer-centric approach make sure you receive exceptional value for our custom video animation services. We deliver what we promise, maintaining transparency and trust with our clients.
                    </p>
                </div>
            </div>
        </div>
         <div class="row g-3 pricingrowforipad">
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Basic Plan</h3>
                                                <p><span>2</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$499.00</b>
                                        <p><del>$699.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>60 seconds</li>
                                        <h6>Custom Work</h6>
                                        <li>Script Writing</li>
                                        <li>Detail Storyboard</li>
                                        <li>Professional Voice over</li>
                                        <li>Impressive Animation</li>
                                        <li>Royalty free BG & SFX</li>
                                        <h6>More Features</h6>
                                        <li>File Delivered in HD 720p</li>
                                        <li>3 round of revisions in each phase</li>
                                        <li>4 weeks Deadline</li>
                                        <li>100% satisfaction</li>
                                        <li>100% Ownership Rights</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Startup Plan</h3>
                                                <p><span>4</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing02.png?updatedAt=1633439731884"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$799.00</b>
                                        <p><del>$999.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>60 seconds</li>
                                        <h6>Custom Work</h6>
                                        <li>Script Writing</li>
                                        <li>storyboarding</li>
                                        <li>Detail illustrations</li>
                                        <li>Professional Voice over</li>
                                        <li>Impressive Animation</li>
                                        <li>Royalty free BG & SFX</li>
                                        <h6>More Features</h6>
                                        <li>File Delivered in HD 720p</li>
                                        <li>3 round of revisions in each phase</li>
                                        <li>3 weeks Deadline</li>
                                        <li>100% satisfaction</li>
                                        <li>100% Ownership Rights</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Pro Plan</h3>
                                                <p><span>6</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing03.webp?updatedAt=1633439732705"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$1999.00</b>
                                        <p><del>$1199.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>60 seconds</li>
                                        <h6>Custom Work</h6>
                                        <li>Script Writing</li>
                                        <li>storyboarding</li>
                                        <li>Detail illustrations</li>
                                        <li>Professional Voice over</li>
                                        <li>Impressive Animation</li>
                                        <li>Royalty free BG & SFX</li>
                                        <h6>More Features</h6>
                                        <li>File Delivered in HD 1080p</li>
                                        <li>Multiple Revisions in each phase</li>
                                        <li>2 weeks Deadline</li>
                                        <li>Dedicated Project Manager</li>
                                        <li>100% satisfaction</li>
                                        <li>100% Ownership Rights</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Ultimate Plan</h3>
                                                <p><span>6</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$1499.00</b>
                                        <p><del>$1699.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>
                                            60 seconds
                                            <h6>Custom Work</h6>
                                        </li>

                                        <li>2 Concepts + premium scriptwriting</li>
                                        <li>storyboarding</li>
                                        <li>Detail illustrations</li>
                                        <li>Professional Voice over</li>
                                        <li>Impressive Animation</li>
                                        <li>Royalty free BG & SFX</li>
                                        <h6>More Features</h6>
                                        <li>File Delivered in HD 1080p</li>
                                        <li>Unlimited revisions</li>
                                        <li>6 weeks Deadline</li>
                                        <li>Dedicated Project Manager</li>
                                        <li>100% satisfaction</li>
                                        <li>100% Ownership Rights</li>
                                        <li>Source File</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    </div>
</section>

<!--------------------------- FAQs start ------------------------------>
<section class="pt-5 pb-5 section-padding-1920 faqs" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>Faq's</h5>
                    <h2>FAQs Regarding Our Digital Agency That Clients Often Asks</h2>
                    <div class="bar"></div>
                    <p>
                        These are the main motives behind our every digital service. We will fight for your supermacy in the digital world through our creative design services.
                    </p>
                </div>
            </div>
             <div class="col-md-12 col-sm-12 text-center mb-4">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What makes your video production company animation studio unique?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our studio combines creativity and technical expertise to deliver high-quality animations that effectively communicate your brand's message.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do you ensure the quality of your animation projects?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We follow a strict process with multiple quality checks and a dedicated team to ensure each animation meets the highest standards.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What types of video production animation services do you offer?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We offer a wide range of services, including explainer videos, promotional animations, and 3D animations.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Why should I choose your professional video animation services?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our professional services guarantee top-notch animations designed to your brand's needs, ensuring maximum impact and engagement.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How can animations benefit my business?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Animations can effectively communicate your message, engage your audience, and grow your brand image through compelling visual content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        What is the average turnaround time for an animation project?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Turnaround times vary depending on the project's complexity, but we attempt to deliver high-quality animations within a reasonable timeframe.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Can you handle large-scale animation projects? 
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, our team is equipped to handle projects of all sizes, ensuring consistent quality and timely delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Do you offer custom video animation services?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Absolutely, we tailor our animation services to meet the unique needs of each client, ensuring personalized and effective results.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        How do you ensure the animations align with our brand? 
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We work closely with clients to understand their brand values and objectives, incorporating feedback throughout the process to ensure the final product accurately represents their brand.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        What sets you apart from other video animation production companies? 
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our dedication to innovation, quality, and client satisfaction separates us from other animation video production companies. We provide personalized service and exceptional results that truly resonate with your audience.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img src="{{ asset('frontend/assets/images/aboutus-gang.png') }}" />
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h5>About Us</h5>
                    <h2 class="text-light">What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p class="text-light">
                        Learn more about our process and what sets us apart in the video animation industry. We pride ourselves on delivering innovative video animation services that drive brand growth. Our expertise and commitment to excellence ensure your animations are impactful and memorable, establishing us as a trusted partner and one of the best video animation companies in the USA.
                    </p>
                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()">Live Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------- Testimonial start ------------------------------>
<section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>What Our Client Said</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our client’s success stories highlight the effectiveness of our services. Hear from businesses that have achieved significant results with our expert animation and video production company, and discover why we are their preferred choice.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4 mb-4 testimonial-margin-1920">
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/1.webp?updatedAt=1633439809741"
                            width="100%" alt="Testimonial Image" />
                        <div class="testimonialstar">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>
                        "Their animations truly brought our brand to life. Excellent quality and timely delivery!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Jane Doe</span><br />Marketing Director</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/2.webp?updatedAt=1633439810520"
                            width="100%" alt="Testimonial Image" />
                        <div class="testimonialstar">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>
                        "The team’s creativity and attention to detail were impressive. Our promotional videos turned out amazing!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Michael Johnson</span><br />Creative Manager</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/3.png?updatedAt=1633439811396"
                            width="100%" alt="Testimonial Image" />
                        <div class="testimonialstar">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>
                        "Exceptional service and stunning animations. They exceeded our expectations in every way."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Rachel Adams</span><br />C.E.O</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/4.webp?updatedAt=1633439812311"
                            width="100%" alt="Testimonial Image" />
                        <div class="testimonialstar">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>
                        "Professional and responsive. The custom animations perfectly aligned with our brand."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Paul Martinez</span><br />Product Manager</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/5.webp?updatedAt=1633439813131"
                            width="100%" alt="Testimonial Image" />
                        <div class="testimonialstar">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>
                        "Their video production services are top-notch. Highly recommend for engaging and effective animations."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Laura Chen</span><br />Brand Strategist</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/6.webp?updatedAt=1633439813932"
                            width="100%" alt="Testimonial Image" />
                        <div class="testimonialstar">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>
                        "Outstanding work! The animations were impactful and received great feedback from our audience."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Kevin Brown</span><br />Communications Specialist</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------------- Contact form start ---------------------->
@include('fix-components.contact')

@endsection