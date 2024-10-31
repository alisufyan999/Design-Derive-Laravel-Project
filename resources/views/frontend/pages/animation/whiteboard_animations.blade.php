@extends('frontend.layouts.master')
@section('content')

<style>

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

<!--------------------------- Main banner start ------------------------------>
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                     Best Whiteboard Animation Services
                    </h1>
                    <p class="text-white">
                        At Design Derive, we offer the best whiteboard animation services that captivate audiences and convey messages effectively. 
                        Our team of creative professionals specializes in crafting custom whiteboard animation videos tailored to your needs. 
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
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/whiteboard-animation-image04.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Why Choose Our Whiteboard Animation Services?</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">Design Derive is recognized as the best whiteboard animation company for several reasons. We blend creativity with technical expertise to produce animations that stand out. Our services are designed to be both engaging and cost-effective, ensuring you get the most value for your investment.</p>
                        <a href="#" class="main moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec greysection mb-5 p-5">
     <div class="container">
        
         <div class="row">
               
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Best <span class="darkh2">Custom Whiteboard Animation Video Solutions</h2>
                        <div class="bar"></div>
                        <p>
                            We understand that every project is unique, which is why we offer custom whiteboard animation video solutions. Our team works closely with you to understand your goals and create animations that reflect your brand's voice and message. With our comprehensive approach, you can receive a video that meets your specific needs.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Creativity</li>
                          <li class="py-1">Engagement</li>
                          <li class="py-1">Customization</li>
                          <li class="py-1">Quality</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/whiteboard-animation-image03.png') }}" />
                </div>
            </div>
    </div>
      
    </section>
    
     <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/whiteboard-animation-image02.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Transparent Whiteboard Animation Video Pricing</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">We believe in transparency, which is why our whiteboard animation video pricing is straightforward and competitive. We provide detailed cost breakdowns so you know exactly what you're paying for. Whether you have a small project or a large campaign, we have pricing options that suit your budget.</p>
                        <a href="#" class="main moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec pinksection p-5">
     <div class="container">
        
         <div class="row">
               
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Best <span class="darkh2">Our Proven Process</h2>
                        <div class="bar"></div>
                        <p>
                            Our process is designed to ensure the highest quality in every project we undertake. From initial consultation to final delivery, we maintain open communication and collaboration with our clients. This approach helps us to consistently deliver top-notch whiteboard animations.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Initial Consultation</li>
                          <li class="py-1">Storyboarding & Scripting</li>
                          <li class="py-1">Animation Production</li>
                          <li class="py-1">Final Review & Delivery</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/whiteboard-animation-image01.png') }}" />
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
                    <h2>Our Creative Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        Our portfolio showcases a wide range of projects that highlight our creativity and technical expertise. Each animation we create is a testament to our commitment to quality and innovation. Take a look at our portfolio to see how we can bring your ideas to life.
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
                                        <a href="https://www.youtube.com/embed/r24WuSauCZo" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/01.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/KP53l9ijXgA" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/02.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/7i1lEz8IxVE" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/03.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/HH9lPRG1EYw" data-fancybox="gallery">
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
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/jqKzBviQ8cs" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/05.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/TAXZV604XMw" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/06.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/Hj-RbANQaa4" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/07.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/XhGmQmzZBnE" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/whiteboard/08.jpg') }}">
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
                        We understand the importance of budget in any project. The cost of whiteboard animation videos can be a concern, 
                        but our economical pricing ensures that you receive high-quality animations without breaking the bank. 
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
                        What makes your company the best whiteboard animation services provider?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       
                            Our company excels in delivering the best whiteboard animation services 
                            by combining creativity, technical expertise, and a customer-centric approach to produce engaging and high-quality animations.
                       
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do you offer affordable whiteboard animation services?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       Yes, we provide affordable whiteboard animation services with transparent pricing options to suit various budgets without compromising on quality.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why should I choose a whiteboard animation agency for my project?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Choosing a whiteboard animation agency ensures you receive professional and customized animations created by experts who understand the meaning of storytelling and visual engagement.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        How do you compare to the best whiteboard animation companies?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       We stand out among the best whiteboard animation companies by delivering unique, high-quality animations tailored to our client's specific needs and objectives.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        What are the benefits of a professional whiteboard animation video?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       A professional whiteboard animation video effectively communicates complex ideas, engages viewers, and enhances brand messaging with visually appealing and memorable content.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        How do you determine your whiteboard animation price?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       Our whiteboard animation price is determined based on factors such as video length, complexity, and customization requirements. We offer detailed cost breakdowns to ensure transparency.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Do you offer revisions for your whiteboard animation videos?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       Yes, we offer revisions to ensure that the final whiteboard animation video meets your expectations. We work closely with our clients throughout the process to make necessary adjustments and deliver a polished, professional product.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        What industries do you serve with your whiteboard animation services?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our whiteboard animation services cater to a wide range of industries, including education, healthcare, technology, finance, and more. We tailor each animation to effectively communicate your message to your specific audience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        How do I get started with your whiteboard animation services?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Getting started is easy. Simply contact us for an initial consultation, and we’ll guide you through our process, from storyboarding to final delivery, ensuring a smooth and collaborative experience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        What can I expect in terms of turnaround time for a whiteboard animation video?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Turnaround times vary based on the complexity and length of the animation, but we strive to deliver projects promptly while maintaining the highest quality standards. We’ll provide a timeline during the initial consultation.
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
                    <h5 class="text-light">About Us</h5>
                    <h2 class="text-light">What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p class="text-light">
                        Design Derive stands out as a leading whiteboard animation provider because of our dedication to excellence. Our team of skilled animators and storytellers is passionate about creating animations that make an impact. We are committed to delivering animations that not only meet but exceed our client’s expectations.
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
                        Our clients consistently praise the impact of our whiteboard animation services. From simplifying complex ideas to boosting viewer engagement, the feedback highlights our dedication to creating effective, high-quality animations.
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
                        "The whiteboard animations transformed our training materials. Clear, engaging, and effective."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sarah Johnson</span><br />HR Manager</p>
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
                        "Incredible service! The animations helped us explain complex concepts to our clients effortlessly."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Mike Thompson</span><br />C.E.O</p>
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
                        "Highly professional and creative team. The animations exceeded our expectations."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emily Roberts</span><br />Marketing Director</p>
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
                        "The custom whiteboard animation videos boosted our social media engagement significantly."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>David Lee</span><br />Social Media Manager</p>
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
                        "Efficient and affordable service. The whiteboard animations are top-notch!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Anna Kim</span><br />Small Business Owner</p>
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
                        "Our website traffic and user interaction improved dramatically thanks to the engaging animations."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>James Miller</span><br />Product Manager</p>
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