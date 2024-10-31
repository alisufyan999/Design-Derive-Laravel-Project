@extends('frontend.layouts.master')
@section('content')

<style>
.editorbar 
{
    max-width: 70%;
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
                     Premier Video Production Animation Company
                    </h1>
                    <p class="text-white">
                        At DesignDerive, we are a leading video production animation company dedicated to bringing your vision to life through captivating storytelling and cutting-edge technology. Our video production animation services blend creativity and innovation, ensuring your message is communicated effectively and memorably. 
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
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/startupvideo-animation01.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Why Choose Our Video Production Studio in USA</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">Our team of seasoned professionals brings years of experience and creativity to every project. We pride ourselves on understanding your unique needs and delivering tailor-made solutions. Our state-of-the-art studio is equipped with the latest technology, ensuring high-quality production and seamless post-production processes. We believe in transparency, collaboration, and exceeding expectations, making us the best video production animation firm for clients nationwide.</p>
                        <a href="" class="main moreportfoliobtn">Get Started</a>
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
                        <h2>Our Comprehensive Animation Services</h2>
                        <div class="bar"></div>
                        <p>
                            From concept to execution, we provide a full range of animation services that include scriptwriting, storyboarding, character design, animation, voice-over, and editing. Our holistic approach ensures a cohesive narrative that aligns with your brand's objectives. Whether you are a startup looking to make an impact or an established corporation aiming to refresh your visual content, our expert team is equipped to handle projects of all sizes and complexities.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Storyboarding</li>
                          <li class="py-1">Character Design</li>
                          <li class="py-1">Voice-over</li>
                          <li class="py-1">Editing</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/startupvideo02.png') }}" />
                </div>
            </div>
    </div>
      
    </section>
    
<!-- Logo About start -->
<section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/startupvideo-animation02.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Our Unique Video Production Approach</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">We take pride in our comprehensive and client-focused process, ensuring every project aligns with your brand's objectives and resonates with your audience. From initial concept development to final delivery, our unique approach emphasizes collaboration, creativity, and quality. By utilizing cutting-edge technology and proven storytelling techniques, we craft animations that capture attention and drive engagement. Our commitment to understanding your vision and transforming it into a visual masterpiece is what makes us a top choice for video production animation services.</p>
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
                        <h2>Tailored Solutions for Every Need</h2>
                        <div class="bar"></div>
                        <p>
                            Understanding your goals is our priority. We tailor our services to align with your brand's identity and messaging, creating a cohesive and compelling narrative that resonates with your audience. From animated logos to full-length videos, we provide solutions that elevate your brand and drive engagement.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Animated Logos</li>
                          <li class="py-1">Full-length Videos</li>
                          <li class="py-1">Custom Narratives</li>
                          <li class="py-1">Brand Alignment</li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/startupvideo-animation03.png') }}" />
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
                        We have worked with diverse clients across various industries, delivering exceptional results that speak for themselves. 
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
                                        <a href="https://www.youtube.com/embed/LoqTzou4LnA" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/2d/03.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/j4eR12qIJEY" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/2d/04.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/5NP4Owz4agk" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/2d/05.jpg') }}">
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
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/explainer/07.jpg') }}">
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
                                        <a href="https://www.youtube.com/embed/Z3nLF1IRFWw" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/portfolio/explainer/04.jpg') }}">
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
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/embed/SfLDN9Bgvdc" data-fancybox="gallery">
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
                        We offer various packages tailored to different budgets, providing value and quality in every project. Contact us today for a personalized quote and experience the difference of working with the best video production animation firm.
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
                        What are custom video production animation services?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Custom video production animation services are tailored solutions designed to meet the specific needs and goals of your brand. At DesignDerive, we create personalized animations that align with your vision and effectively convey your message to your target audience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I hire a video production animator?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        You can hire a video production animator through our easy and transparent process. Simply contact us with your project requirements, and we'll match you with the right animator from our talented team to bring your vision to life.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why should I hire a video production animation team?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Hiring a video production animation team ensures a collaborative approach to your project, leveraging the skills and expertise of professionals in scriptwriting, animation, design, and editing. This teamwork leads to high-quality results that effectively communicate your brand's message.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        What industries benefit from video production animation services?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Video production animation services are beneficial for various industries, including healthcare, education, technology, retail, and entertainment. Our services help businesses enhance their marketing efforts, educate audiences, and drive engagement.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How long does a typical animation project take?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The duration of an animation project depends on its complexity and scope. Project durations typically range from a few weeks to a couple of months. We work closely with clients to establish timelines that meet their needs and ensure timely delivery.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        What types of animations do you offer?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        We offer a wide range of animation types, including explainer videos, promotional videos, product demos, corporate videos, animated commercials, and social media videos. Our custom video production animation services cater to various needs and preferences.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        How do I get started with a video production project?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Getting started with a video production project is simple. Contact us through our website, and our team will guide you through the process, from initial consultation to final delivery. We'll discuss your goals, budget, and timeline to ensure a seamless experience.

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        What makes DesignDerive's animation services stand out?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        DesignDerive's animation services stand out due to our commitment to creativity, quality, and client satisfaction. Our team uses state-of-the-art technology and proven storytelling techniques to craft engaging animations that resonate with your audience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        Can animations be used for social media marketing?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, animations are highly effective for social media marketing. They capture attention quickly and convey information engagingly and memorably. Our custom video production animation services can create content specifically tailored for platforms like Instagram, Facebook, and TikTok.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        How do you ensure the quality of your animations?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        We ensure the quality of our animations through a meticulous process that includes concept development, storyboarding, design, animation, and editing. Our experienced team follows industry best practices and collaborates closely with clients to ensure the final product meets or exceeds expectations.
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
                       DesignDerive is more than just a video production animation company we are storytellers at heart. Our passion for animation and dedication to client satisfaction set us apart. We are committed to delivering excellence in every project, ensuring your brand's story is told in the most compelling way possible. With a focus on innovation, quality, and collaboration, we continue to lead the industry as a trusted partner for all your animation needs.
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
                       Our clients are at the core of everything we do, and their satisfaction is our greatest reward. Hear from those who have experienced the impact of our video production animation services firsthand. 
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
                        "DesignDerive exceeded our expectations with their attention to detail and creativity. The explainer video they produced helped simplify our complex services, and we've seen a noticeable boost in customer engagement."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sarah M</span><br />Tech Solutions</p>
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
                        "Working with DesignDerive was a game-changer. Their team delivered a stunning animated commercial that captured our brand perfectly. We couldn't be happier with the results!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>John R</span><br />Retail Brand Manager</p>
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
                        "The professionalism and collaboration at DesignDerive are unmatched. Their corporate video helped convey our company’s values and culture in a way that truly resonated with both our employees and clients."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emily T</span><br />HR Director</p>
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
                        "From concept to execution, DesignDerive made the entire process seamless. Their promotional video brought our vision to life, and the final product was nothing short of amazing!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Michael P</span><br />Marketing Director</p>
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
                        "The social media videos created by DesignDerive were exactly what we needed to capture attention and drive engagement on our platforms. Their team really understands how to create content that resonates with audiences."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Jessica L</span><br />Digital Marketing Specialist</p>
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
                        "DesignDerive's creativity and expertise turned our product demo into a powerful sales tool. The animation was spot-on, and the quality was top-notch. We’re excited to work with them again in the future!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>David S</span><br />Product Manager</p>
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