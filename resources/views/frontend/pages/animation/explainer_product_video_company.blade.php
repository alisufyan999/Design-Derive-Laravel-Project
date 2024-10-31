@extends('frontend.layouts.master')
@section('content')

<style>

ul.pointsul.financiallist{
    column-count: 1;
}

.editorbar 
{
    max-width: 95%;
}
ul.pointsul.financiallist li.py-1 
{
    color: #000;
}
ul.pointsul.financiallist li.py-1:before
{
    color:#f15874;
}
.financialipad
{
    max-width:80%;
}
section.pinksection
{
    background-color: #fcf1f3;
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
 {{-- Main banner start  --}}

  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                     Explainer Product Video Company
                    </h1>
                    <p class="text-white">
                        Boost your brand with captivating explainer videos that effectively communicate your product's value. We create high-quality explainer videos that drive engagement, enhance brand recognition, and boost conversions. 
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
                    poster="{{ env('IMAGE_PATH') == '' ? asset('/assets/images/') : env('IMAGE_PATH') }}/animation-overlay.jpg"
                    data-setup="{}"
                  >
                    <source
                      src="{{ env('IMAGE_PATH') == '' ? asset('/assets/video') : env('IMAGE_PATH') }}/1.mp4"
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

               </div
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
                        <div class="item"> <img src="assets/images/cl1.png" /> </div>
                        <div class="item"> <img src="assets/images/cl2.png" /> </div>
                        <div class="item"> <img src="assets/images/cl3.png" /> </div>
                        <div class="item"> <img src="assets/images/cl4.png" /> </div>
                        <div class="item"> <img src="assets/images/cl5.png" /> </div>
                        <div class="item"> <img src="assets/images/cl6.png" /> </div>
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
                    <img class="img-fluid" src="assets/images/explainer-product-image01.png" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Engage and Convert with the Best Explainer Product Video Company</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">As a leading explainer product video company, Design Derive focuses on producing videos that are not only visually appealing but also strategically crafted to convert viewers into customers. Our expert team works closely with you to ensure your video reflects your brand’s message and reaches the right audience across various platforms, making your online presence strong.</p>
                        <a href="portfolio.html" class="main moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- About us start --}}

<section class="aboutmainsec greysection mb-5 p-5">
     <div class="container">
        
         <div class="row">
               
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Best <span class="darkh2">Professional Explainer Video Production Services Across the USA</h2>
                        <div class="bar"></div>
                        <p>
                            Our professional explainer video production company USA is designed to meet the unique needs of businesses of all sizes. As the best explainer product video agency, we deliver impactful, animated videos that highlight the strengths of your products and services. Our comprehensive production services include:
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Developing creative and strategic video concepts</li>
                          <li class="py-1">Crafting engaging and SEO-friendly video scripts</li>
                          <li class="py-1">Producing high-quality video animations </li>
                          <li class="py-1">Customizing video content for different platforms </li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center ">
                <img class="img-fluid" src="assets/images/explainer-product-image02.png" />
                </div>
            </div>
    </div>
      
    </section>
    
     <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid editorbar" src="assets/images/explainer-product-image03.png" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Work with the Best Explainer Video Animation Company for Maximum Impact</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">Our expertise goes beyond just creating videos, we aim to improve your brand’s visibility and authority. As the best explainer video animation company, Design Derive ensures that your videos not only look stunning but also drive results. Whether you need to hire explainer product animators or a full animation team, our experts work together to produce content that aligns with your brand's voice and goals, keeping viewers interested and driving them to take steps.</p>
                        <a href="portfolio.html" class="main moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
{{-- About us start --}}

<section class="aboutmainsec pinksection p-5">
     <div class="container">
        
         <div class="row">
               
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Best <span class="darkh2">Affordable Explainer Product Video Packages Tailored for Every Business</h2>
                        <div class="bar"></div>
                        <p>
                            Design Derive offers competitive and customizable explainer video packages to suit businesses of all sizes. Whether you are a startup or an established brand, our solutions are designed to provide you with the best value. Our affordable packages include:
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Budget-friendly video production services</li>
                          <li class="py-1">Comprehensive brand-focused video strategies</li>
                          <li class="py-1">End-to-end video production management</li>
                          <li class="py-1">Detailed performance analytics and optimization</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="assets/images/explainer-product-image04.png" />
                </div>
            </div>
    </div>
      
    </section> 

{{-- Portfolio start --}}

<section class="mb-5 pt-5 pb-5 section-padding-1920" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h5>Showcase The Creativity</h5>
                    <h2>Explore Our Dynamic Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        At Design Derive, creativity is at the core of everything we do. Our portfolio showcases a variety of explainer videos that have helped brands communicate their message effectively.
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
                                        <a href="https://www.youtube.com/embed/kRWU8M362Pw" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/images/portfolio/explainer/01.jpg">
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
                                        <a href="https://www.youtube.com/embed/Z3nLF1IRFWw" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/images/portfolio/explainer/02.jpg">
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
                                        <a href="https://www.youtube.com/embed/IiuLL3qHKHI" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/images/portfolio/explainer/04.jpg">
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
                                            <img class="content-image" src="assets/images/portfolio/explainer/09.jpg">
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
                                            <img class="content-image" src="assets/images/portfolio/explainer/07.jpg">
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
                                        <a href="https://www.youtube.com/embed/ojEzAJl-VEQ" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/images/portfolio/explainer/08.jpg">
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
                                        <a href="https://www.youtube.com/embed/wejvHjrucYM" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/images/portfolio/explainer/012.jpg">
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
                                            <img class="content-image" src="assets/images/portfolio/explainer/013.jpg">
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
                                        <a href="https://www.youtube.com/embed/8DcsWfSr-us" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="assets/images/portfolio/explainer/015.jpg">
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
                                            <img class="content-image" src="assets/images/portfolio/explainer/009.jpg">
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
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 text-center mb-2">
                <a href="portfolio.html" class="main moreportfoliobtn">Our More Creative Work</a>
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
                    <h2>Transparent Pricing for Professional Explainer Video Services</h2>
                    <div class="bar"></div>
                    <p>
                        We offer transparent pricing that allows businesses of all sizes to leverage our professional explainer video production services. Our customer-centric approach ensures that you get the most out of every dollar spent.

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

{{-- FAQs start --}}

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
                        What makes Design Derive the best explainer product video company?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Design Derive stands out due to our high-quality animations, strategic storytelling, and a team dedicated to delivering videos that drive results.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Where can I find professional explainer product video services near me?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Design Derive offers top-tier explainer video services across the USA, ensuring your brand's message reaches your target audience effectively.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How much does an explainer product video cost?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The cost of an explainer product video varies based on length, complexity, and specific requirements.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Why should I hire animation explainer video experts for my project?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Hiring animation experts ensures your video is professionally crafted, engaging, and effective in communicating your brand’s message.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Can I hire explainer product animation team at Design Derive?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, you can hire our dedicated animation team, experienced in creating custom explainer videos that align with your brand's goals.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        How long does it take to produce an explainer product video?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The production timeline typically ranges from 4 to 6 weeks, depending on the complexity and revisions required.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Which businesses can greatly benefit from explainer videos?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Businesses of all sizes and industries can benefit from explainer videos, as they effectively and engagingly convey complex ideas.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Do you offer customization in explainer video styles?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, we offer fully customizable video styles to match your brand’s unique identity and communication needs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                       What’s the process of creating an explainer product video?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our process includes concept development, scriptwriting, storyboarding, animation, and final editing, all tailored to your specific goals.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        Can explainer videos help increase my product sales?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Explainer videos are powerful tools for driving engagement, improving understanding of your product, and ultimately boosting sales.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>


{{-- About us start --}}

<section class="aboutmainsec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img src="assets/images/aboutus-gang.png" />
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h5>About Us</h5>
                    <h2>Why Choose Design Derive?</h2>
                    <div class="bar"></div>
                    <p>
                        Design Derive is dedicated to helping brands grow through innovative video solutions. Our commitment to excellence and customer satisfaction has made us the go-to explainer product video company for businesses across the USA. We take pride in achieving results that go beyond expectations.
                    </p>
                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()">Live Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Testimonial start --}}

<section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>What Our Client Said</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients often praise us for turning complex ideas into simple, easy-to-understand videos that make processes more clear. 
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
                        "Design Derive’s explainer videos brought our product to life in a way we never imagined. Outstanding work!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Jessica Lee</span><br />Marketing Director</p>
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
                        "Their creative approach and attention to detail made all the difference. We saw a significant boost in engagement."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Michael Adams</span><br />Product Manager</p>
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
                        "The team at Design Derive exceeded our expectations with their innovative video solutions. Highly recommended!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sara Thompson</span><br />Brand Strategist</p>
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
                        "Exceptional quality and clear communication. The explainer video has been a game-changer for our business."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>David Kim</span><br />C.E.O</p>
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
                        "From concept to execution, Design Derive delivered a video that truly captured our brand’s essence. Fantastic results!"

                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emily Carter</span><br />Head of Sales</p>
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
                        "Professional, efficient, and creative. Their explainer videos made our complex services easy to understand."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>John Smith</span><br />Operations Manager</p>
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