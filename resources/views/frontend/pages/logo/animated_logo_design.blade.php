@extends('frontend.layouts.master')
@section('content')

<style>
    
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
  content:'';
  background:url("assets/images/Play-btn.png") no-repeat;
  background-size:cover;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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
.greysection
{
    background: #f5f5f5;
}
.portfoliotab 
{
    justify-content: space-between;
}
.portfoliotab > li 
{
    margin-right:15px;
    display: contents;
}
.portfoliotab > li:last-child
{
    margin-right:0px;
}
.portfoliotab > li > a
{
    font-size: 13px;
    padding: 8px 14px;
    text-transform:capitalize;
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
    section.section-padding-1920 .portfoliotab2
    {
        justify-content: center;
    }
    section.section-padding-1920 .portfoliotab2 > li
    {
        display: block;
    }
    section.section-padding-1920 .portfoliotab2 > li > a
    {
        font-size: 16px;
    }
    section.section-padding-1920 .portfoliotab2 > li > a
    {
        padding:8px 35px;
    }
    
</style>

 <!-------------------- Main banner start  -------------------------->
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                        Animated Logo Design Services
                    </h1>
                    <p class="text-white">
                        Boost your brand identity with dynamic and engaging animated logo design services. At Design Derive, we specialize in creating custom logo animations that leave a lasting impression and improve brand visibility across digital platforms.
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
                    poster="{{ asset('frontend/assets/images/banner-animation.jpg') }}"
                    data-setup="{}"
                  >
                    <source
                      src="{{ asset('frontend/assets/video/2.mp4') }}"
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

                  <!-- <video
                    class="video-js"
                    controls
                    muted
                    
                    preload="auto"
                    loop
                    width="640"
                    height="900"
                    poster="{{ env('IMAGE_PATH') == '' ? asset('/assets/images/') : env('IMAGE_PATH') }}/banner-animation.jpg"
                    data-setup="{}"
                  >
                    <source
                      src="{{ env('IMAGE_PATH') == '' ? asset('/assets/video') : env('IMAGE_PATH') }}/2.mp4"
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
                  </video> -->

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
                        <div class="item"> <img src="{{ asset('frontend/assets/images/logos/1.webp') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/logos/2.webp') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/logos/3.webp') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/logos/4.webp') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/logos/5.webp') }}" /> </div>
                        <div class="item"> <img src="{{ asset('frontend/assets/images/logos/6.webp') }}" /> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Solutions start -->
<section class="pt-5 pb-5 aboutsolutionsec section-padding-1920">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-5">
                    <div class="sectionheadingdiv">
                        <h5>How it Works</h5>
                        <h2>Our Creative Approach to Animated Logo Design</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                            At Design Derive, we specialize in creating dynamic and engaging animated logos that elevate your brand identity. Our approach combines creativity, technology, and strategic insight to deliver logos that captivate and communicate effectively.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-3 aboutpagesolutionrow">
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/whychooseus/1/01.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Customized Brand</h4>
                                <p class="mb-4">
                                    We create tailored animations that reflect your brand’s unique identity and values.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/2/2.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Top-Quality Animations</h4>
                                <p class="mb-4">
                                    Using advanced tools, we produce high-quality animations that enhance brand recognition.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/3/3.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Affordable and Timely</h4>
                                <p class="mb-4">
                                    Our services are competitively priced, with quick turnarounds to meet your needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/4/4.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Innovative Technology</h4>
                                <p class="mb-4">
                                    We utilize cutting-edge technology to ensure your logo is visually stunning and impactful.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/5/5.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Seamless Process</h4>
                                <p class="mb-4">
                                    From concept to delivery, our streamlined process ensures a smooth, efficient experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/6/6.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Versatile Solutions</h4>
                                <p class="mb-4">
                                    Our animations are adaptable across various media, making your logo stand out everywhere.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Attract Attention with Captivating Animated Logo Design Services</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            Our animated logo design services in USA are tailored to meet the unique needs of your brand, creating a memorable visual experience that resonates with your target audience. We combine creativity with strategic design to produce animated logos that not only look great but also convey your brand's message effectively.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/turn2dideas2.webp') }}" />
                </div>
            </div>
        </div>
    </section>

<!-- About Us start -->

<section class="aboutmainsec p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/conveylogos.webp') }}" >
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h2>Affordable <span class="darkh2">Affordable Animated Logo Design Services for Every Business</h2>
                    <div class="bar"></div>
                    <p>
                        As a leading animated logo firm, we understand that every brand has its own story to tell. Our custom logo animation services are crafted to reflect your brand’s identity and goals while staying within your budget. Whether you’re a startup or an established business, our team at Design Derive delivers top-notch animated logo designing that transforms your brand's logo into a powerful marketing tool. Our services include:
                    </p>
                    <ul class="pointsul financiallist">
                      <li class="py-1">Unique logo concepts</li>
                      <li class="py-1">Brand-aligned animations</li>
                      <li class="py-1">High-quality execution</li>
                      <li class="py-1">On-time delivery</li>
                    </ul>
                </div>
            </div>           
        </div>
    </div>
</section>

 <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Expert Animated Logo Design for a Dynamic Brand Presence</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            Animated logos are more than just a visual trend they are a powerful tool for reinforcing brand recognition and establishing a dynamic online presence. Our animated logo design services keep your audience engaged and ensure your brand remains top of mind. We focus on creating animations that are not only visually appealing but also strategically designed to improve your brand's visibility across all digital platforms.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/1.webp') }}" />
                </div>
            </div>
        </div>
    </section>

{{-- About us start --}}

<section class="aboutmainsec  p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/2.webp') }}" >
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h2>Comprehensive <span class="darkh2">Comprehensive Animated Logo Design Services for a Full-Brand Experience</h2>
                    <div class="bar"></div>
                    <p>
                        Design Derive is committed to providing more than just animated logo design we offer a complete branding experience. As a top provider of animated logo design services in USA, we ensure your animated logo fully represents your brand's essence. Our focus includes:
                    </p>
                    <ul class="pointsul financiallist">
                      <li class="py-1">Cost-effective solutions</li>
                      <li class="py-1">Professional brand animations</li>
                      <li class="py-1">Cross-media adaptability</li>
                      <li class="py-1">Boosting brand visibility</li>
                    </ul>
                </div>
            </div>           
        </div>
    </div>
</section>




{{-- Workflow start --}}

<!--<section class="mb-5 section-padding-1920">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8 col-sm-12 text-center mb-4">-->
<!--                <div class="sectionheadingdiv">-->
<!--                    <h5>How does It work?</h5>-->
<!--                    <h2>Our Creative Workflow</h2>-->
<!--                    <div class="bar"></div>-->
<!--                    <p>-->
<!--                        We undergo innovation ideas that give us wings to reach out to-->
<!--                        your actual digital hurdles and resolve them with empowering-->
<!--                        solutions that make brands more robust and valuable.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row creativedivrow">-->
<!--            <hr />-->
<!--            <div class="col-md-4 col-sm-12 text-center">-->
<!--                <div class="creativeworkdiv creativeworkplus">-->
<!--                    <img src="https://ik.imagekit.io/designmanhattan/assets/img/home/sd-2.webp?updatedAt=1633439657186"-->
<!--                        width="100%" alt="Creative Work" />-->
<!--                    <h6>Step <span>01</span></h6>-->
<!--                    <h3>Client Brief</h3>-->
<!--                    <p>-->
<!--                        We undergo our client briefs to understand them closely and-->
<!--                        deliver them the most outstanding digital services.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-12 text-center">-->
<!--                <div class="creativeworkdiv creativeworkequal">-->
<!--                    <img src="https://ik.imagekit.io/designmanhattan/assets/img/home/sd-3.webp?updatedAt=1633439657978"-->
<!--                        width="100%" alt="Creative Work" />-->
<!--                    <h6>Step <span>02</span></h6>-->
<!--                    <h3>Creative Design</h3>-->
<!--                    <p>-->
<!--                        Our designs are creative and innovative enough to grab more-->
<!--                        customers for your brands to make them witness digital services-->
<!--                        in one go.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-12 text-center">-->
<!--                <div class="creativeworkdiv">-->
<!--                    <img src="https://ik.imagekit.io/designmanhattan/assets/img/home/sd.webp?updatedAt=1633439656688"-->
<!--                        width="100%" alt="Creative Work" />-->
<!--                    <h6>Step <span>03</span></h6>-->
<!--                    <h3>Delivered</h3>-->
<!--                    <p>-->
<!--                        We always deliver top-notch digital service to our client base-->
<!--                        to elevate their brands digitally for continued success.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="pt-5 greysection">
    <div class="container">
        <div class='row justify-content-center text-center'>
                <div class='col-lg-8 col-md-8 col-12 text-center mb-3'>
                    <div class="sectionheadingdiv">
                            <h2>Our Animated Logo Services</h2>
                            <p>Our design and development teams have almost two decades of experience. We cover multiple business niches worldwide, which makes us proud in the digital industry.</p>
                    </div>
                </div>
        </div>
        <div class="row">
             <ul class="nav nav-tabs portfoliotab mb-5" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="twodlogoanim-tab" data-bs-toggle="tab"
                            href="#twodlogoanim" role="tab" aria-controls="twodlogoanim"
                            aria-selected="true">2d logo animation</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="threedlogoanim-tab" data-bs-toggle="tab" href="#threedlogoanim"
                            role="tab" aria-controls="threedlogoanim" aria-selected="false">3d logo animation</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="templatelogo-tab" data-bs-toggle="tab"
                            href="#templatelogo" role="tab" aria-controls="templatelogo"
                            aria-selected="false">template-based logo animation</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="voiceover-tab" data-bs-toggle="tab" href="#voiceover"
                            role="tab" aria-controls="voiceover" aria-selected="false">intro/outro animation voiceover</a>
                    </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" id="mascotlogoanim-tab" data-bs-toggle="tab" href="#mascotlogoanim"
                            role="tab" aria-controls="mascotlogoanim" aria-selected="false">mascot logo animation</a>
                    </li>
                </ul>
            
        </div>
        <div class="row">
            <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="twodlogoanim" role="tabpanel"
                        aria-labelledby="twodlogoanim-tab">
                 
                     <div class="row">
                         <div class='col-lg-6 col-md-6 col-1'>
                             <div class='sectionheadingdiv'>
                                <h2 class="mb-4">2d Logo Animation</h2>                             
                                <p>Adding motion, transitions, and effects to a static logo through 2D logo animation creates a more engaging and memorable experience for your audience in the digital globe. It infuses life and dynamism into your brand identity, crafting visually appealing content that resonates with viewers on various platforms.</p>
                             </div>
                         </div>
                         <div class='col-lg-6 col-md-6 col-1'>
                            <video src="https://www.tailoredlogo.com/assets-new/images/2d-logo-animation.mp4" muted="" autoplay="" loop="" style="width:100%;"></video>
                         </div>
                     </div>
                 
                 </div>
                 <div class="tab-pane fade" id="threedlogoanim" role="tabpanel">

                     <div class="row">
                             <div class="col-lg-6 col-md-6 col-12">
                                  <div class='sectionheadingdiv'>
                                <h2 class="mb-4">3d Logo Animation</h2>                             
                                <p>Creating a 3D logo animation is an incredible way to breathe life into a static logo. It adds depth, movement, and visual effects, giving your logo authenticity and vitality. This technique enhances the logo's visual appeal and makes it suitable for various digital media like videos and presentations. By using elements like motion, effects, transitions, timing, and sound, a memorable brand identity is crafted, ensuring a lasting impression.</p>
                             </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-12">
                                 <img loading="lazy" class="service-detail-img" src="https://www.tailoredlogo.com/assets-new/images/3d.gif" style="width:100%;" alt="Web Design And Development">
                             </div>
                     </div>

                 </div>
                  <div class="tab-pane fade" id="templatelogo" role="tabpanel">

                      <div class="row">
                             <div class="col-lg-6 col-md-6 col-12">
                                  <div class='sectionheadingdiv'>
                                <h2 class="mb-4">Template-Based Logo Animation</h2>                             
                                <p>Using template-based logo animation is a great way to create animated logos efficiently. These templates can be customized with your brand's logo and style preferences, providing a cost-effective and dynamic visual upgrade for your logos across digital platforms.</p>
                             </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-12">
                                    <img src="https://www.tailoredlogo.com/assets-new/images/Templatebased.gif" style="width:100%;">
                             </div>
                     </div>

                 </div>
                  <div class="tab-pane fade" id="voiceover" role="tabpanel">

                      <div class="row">
                             <div class="col-lg-6 col-md-6 col-12">
                                  <div class='sectionheadingdiv'>
                                <h2 class="mb-4">Intro/outro animation voiceover</h2>                             
                                <p>It's important to recognize the significant impact of intro and outro animations, along with voiceovers, in multimedia presentations. Intro animations are essential for creating engaging beginnings for videos or presentations and integrating branding or thematic elements. They build excitement and establish the mood for the content to come. On the other hand, outro animations are valuable for effectively concluding content, frequently incorporating closing credits, contact details, or calls to action to inspire viewer interaction.</p>
                             </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-12">
                                    <img src="https://www.tailoredlogo.com/assets-new/images/Intro.gif" style="width:100%;">
                             </div>
                     </div>

                 </div>
                  <div class="tab-pane fade" id="mascotlogoanim" role="tabpanel">
                   
                       <div class="row">
                             <div class="col-lg-6 col-md-6 col-12">
                                  <div class='sectionheadingdiv'>
                                <h2 class="mb-4">Mascot logo animation</h2>                             
                                <p>Mascot logo animations are a fantastic way to bring a brand's character to life and create a strong connection with viewers. Through animated movements, expressions, and interactions, these animations infuse the character with depth and emotion, making it more engaging and relatable. Whether it's for marketing videos, social media content, or website headers, mascot logo animations enable brands to express their identity and message delightfully and unforgettably, leaving a lasting impression on the audience.</p>
                             </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-12">
                                <video src="https://www.tailoredlogo.com/assets-new/images/Mascot-Logo-Animation.mp4" muted="" autoplay="" loop="" style="width:100%;"></video>
                             </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 pt-5 pb-5 section-padding-1920" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h5>Showcase The Creativity</h5>
                    <h2>Our Creative Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        At Design Derive, we pride ourselves on our ability to bring brands to life through innovative animated logo designs. Explore our portfolio to see how we've helped other businesses create memorable brand experiences with custom animations that engage and inspire.
                    </p>
                </div>
            </div>
        </div>
    </div>
   <div class="row mb-5">
            <div class="col-md-12 col-sm-12">
                <ul class="nav nav-tabs portfoliotab portfoliotab2 mb-5" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="twodlogo-tab" data-bs-toggle="tab"
                            href="#twodlogo" role="tab" aria-controls="twodlogo"
                            aria-selected="true">2d logo</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="threedlogo-tab" data-bs-toggle="tab" href="#threedlogo"
                            role="tab" aria-controls="threedlogo" aria-selected="false">3d logo</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="intro-tab" data-bs-toggle="tab"
                            href="#intro" role="tab" aria-controls="intro"
                            aria-selected="false">Intro</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="mascotlogo-tab" data-bs-toggle="tab" href="#mascotlogo"
                            role="tab" aria-controls="mascotlogo" aria-selected="false">Mascot</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    
                    <div class="tab-pane fade show active" id="twodlogo" role="tabpanel"
                        aria-labelledby="2dlogo-tab">
                        
                        <div class='row'>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=jLXXdB3Vpy8&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=1&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/1.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                           
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=laQb6bIYOI8&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=3&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/2.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=sNdZTYvp5pI&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=4&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/3.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=C6Yhp-LsDBM&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=10&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/4.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                              <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=nVdXNxyxSBQ&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=5&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/5.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=J-PWjI_XtL8&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=7&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/6.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                              <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=JNypHbVmNpQ&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=6&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/7.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=3hrAgESl8-E&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=2&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/8.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=ROSN5ddQAyE&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=8&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/9.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=ja_YuqOmL48&list=PL9O32s63QtcDYOq7SUIaK6flv_-aytf5j&index=9&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/2d/10.webp') }}">
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
                    
                    <div class="tab-pane fade" id="threedlogo" role="tabpanel"
                        aria-labelledby="threedlogo-tab">
                        
                        <div class='row'>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=LibV8fENKco&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=1&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/1.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=UGxx7DyYmdc&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=2&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/2.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=6X-byyeqI08&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=3&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/3.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=yvYDzAiDPFc&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=4&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/4.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=7lAJMEwj3nA&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=5&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/5.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=ka8cXNuqTRg&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=6&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/6.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=Cg0qQ-xgZtA&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=7&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/7.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=VFkzkfVOdj8&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=8&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/8.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=BvGm4RYoWJw&list=PL9O32s63QtcCyZ_UUdWUVjq8U8SaEv1Yo&index=10&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/3d/9.webp') }}">
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
                    
                    <div class="tab-pane fade" id="intro" role="tabpanel"
                        aria-labelledby="intro-tab">
                        
                        <div class='row'>
                            <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=Ues26tKLIrI&list=PL9O32s63QtcCpB18qewzg0vDdVRYuBymL&index=1&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/intro/1.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=EetPY-NojyQ&list=PL9O32s63QtcCpB18qewzg0vDdVRYuBymL&index=2&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/intro/2.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=nfO8gn54VTA&list=PL9O32s63QtcCpB18qewzg0vDdVRYuBymL&index=3&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/intro/3.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=VKUaMmKX3yY&list=PL9O32s63QtcCpB18qewzg0vDdVRYuBymL&index=4&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/intro/4.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=g1qTG-raIX4&list=PL9O32s63QtcCpB18qewzg0vDdVRYuBymL&index=5&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/intro/5.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=F_ozZD0ADgc&list=PL9O32s63QtcCpB18qewzg0vDdVRYuBymL&index=6&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/intro/6.webp') }}">
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
                    
                    <div class="tab-pane fade" id="mascotlogo" role="tabpanel"
                        aria-labelledby="mascotlogo-tab">

                        <div class='row'>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=86C5ehjaGBw&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=1&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/1.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=S20v_s1p2A0&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=2&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/2.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=52HUxKleOfI&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=3&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/3.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=_LD192iZqEE&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=4&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/4.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=nrnee7beHBI&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=5&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/5.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=VZs9oGWjtUc&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=6&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/6.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=Xfzo227sm20&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=7&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/7.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=pf9ziyE-TJU&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=8&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/8.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=pA2pip3t3mY&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=9&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/9.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <div class='col-lg-3 portfoliotabcol'>
                                <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=J9ER7_IeB28&list=PL9O32s63QtcCxm2y2Thp1O3y_ZNEwSFJV&index=10&pp=iAQB" data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="{{ asset('frontend/assets/images/animated-logodesign/mascot/10.jpg') }}">
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
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 text-center mb-2">
                <a href="portfolio.html" class="main moreportfoliobtn">Our More Creative Work</a>
            </div>
        </div>
    </div>
</section>

{{-- Pricing start --}}

<section class="mb-5 section-padding-1920">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <!--<h5>Now Low Budgets Will Boost Your Brand</h5>-->
                    <h2>Check Our Economical Pricing</h2>
                    <div class="bar"></div>
                    <p>
                        Design Derive offers competitive pricing options that allow you to take advantage of our premium services without breaking the bank. We deliver on our promises, ensuring that every dollar spent brings value to your brand.
                    </p>
                </div>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-md-12 col-sm-12">-->
        <!--        <ul class="nav nav-tabs portfoliotab mb-5" id="myTab" role="tablist">-->
        <!--            <li class="nav-item" role="presentation">-->
        <!--                <a class="nav-link active" id="logopricing-tab" data-bs-toggle="tab"-->
        <!--                    href="#logopricing" role="tab" aria-controls="logopricing"-->
        <!--                    aria-selected="true">Logo Design</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item" role="presentation">-->
        <!--                <a class="nav-link" id="brandpricing-tab" data-bs-toggle="tab" href="#brandpricing"-->
        <!--                    role="tab" aria-controls="brandpricing" aria-selected="false">Branding</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item" role="presentation">-->
        <!--                <a class="nav-link" id="websitepricing-tab" data-bs-toggle="tab"-->
        <!--                    href="#websitepricing" role="tab" aria-controls="websitepricing"-->
        <!--                    aria-selected="false">Website</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item" role="presentation">-->
        <!--                <a class="nav-link" id="videopricing-tab" data-bs-toggle="tab" href="#videopricing"-->
        <!--                    role="tab" aria-controls="videopricing" aria-selected="false">Video-->
        <!--                    Animation</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--        <div class="tab-content" id="myTabContent">-->
        <!--            <div class="tab-pane fade show active" id="logopricing" role="tabpanel"-->
        <!--                aria-labelledby="logopricing-tab">-->
        <!--                <div class="row g-3 pricingrowforipad">-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Basic Logo</h3>-->
        <!--                                        <p><span>2</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$49.00</h1>-->
        <!--                                <p><del>$59.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>2 Logo Concepts</li>-->
        <!--                                <li>By 1 Designer</li>-->
        <!--                                <li>3 Rounds Of Revisions</li>-->
        <!--                                <li>Online Purpose Files (JPG, PNG)</li>-->
        <!--                                <li>No Master Ai File of Logo</li>-->
        <!--                                <li>No Printing Purpose Files</li>-->
        <!--                                <li>100% Ownership</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Startup Logo</h3>-->
        <!--                                        <p><span>4</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing02.png?updatedAt=1633439731884"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$99.00</h1>-->
        <!--                                <p><del>$109.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>4 Logo Concepts</li>-->
        <!--                                <li>By 2 Designer</li>-->
        <!--                                <li>6 Rounds Of Revisions</li>-->
        <!--                                <li>Online Purpose Files (JPG, PNG)</li>-->
        <!--                                <li>Only Small Size Printing File</li>-->
        <!--                                <li>No Master Ai File of Logo</li>-->
        <!--                                <li>100% Ownership</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Pro Logo</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing03.webp?updatedAt=1633439732705"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$149.00</h1>-->
        <!--                                <p><del>$169.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>6 Logo Concepts</li>-->
        <!--                                <li>By 4 Designer</li>-->
        <!--                                <li>Unlimited Revisions</li>-->
        <!--                                <li>Online Purpose Files (JPG, PNG)</li>-->
        <!--                                <li>Both Large and Small Size</li>-->
        <!--                                <li>Printing Files (PDF, EPS)</li>-->
        <!--                                <li>No Master Ai File of Logo</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Ultimate Logo</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$199.00</h1>-->
        <!--                                <p><del>$210.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Unlimited Logo Concepts</li>-->
        <!--                                <li>By Team Of Designers</li>-->
        <!--                                <li>Unlimited Revisions</li>-->
        <!--                                <li>Online Purpose Files (JPG, PNG)</li>-->
        <!--                                <li>Both Large and Small Size</li>-->
        <!--                                <li>Printing Files (PDF, EPS)</li>-->
        <!--                                <li>Master AI File of Logo included</li>-->
        <!--                                <li>100% Ownership</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="tab-pane fade" id="brandpricing" role="tabpanel"-->
        <!--                aria-labelledby="brandpricing-tab">-->
        <!--                <div class="row g-3 pricingrowforipad">-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Basic Kit</h3>-->
        <!--                                        <p><span>2</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$59.00</h1>-->
        <!--                                <p><del>$69.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Business Card Design</li>-->
        <!--                                <li>Letterhead Design</li>-->
        <!--                                <li>Envelope Design</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Startup Kit</h3>-->
        <!--                                        <p><span>4</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing02.png?updatedAt=1633439731884"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$99.00</h1>-->
        <!--                                <p><del>$109.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Business Card Design</li>-->
        <!--                                <li>Letterhead Design</li>-->
        <!--                                <li>Envelope Design</li>-->
        <!--                                <li>Email Signature Design</li>-->
        <!--                                <li>2 Social Media Covers</li>-->
        <!--                                <li>2 Website Banners</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Pro Kit</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing03.webp?updatedAt=1633439732705"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$149.00</h1>-->
        <!--                                <p><del>$169.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Business Card Design</li>-->
        <!--                                <li>Letterhead Design</li>-->
        <!--                                <li>Envelope Design</li>-->
        <!--                                <li>Email Signature Design</li>-->
        <!--                                <li>4 Social Media Covers</li>-->
        <!--                                <li>4 Website Banners</li>-->
        <!--                                <li>T-Shirt Design</li>-->
        <!--                                <li>Bag Design</li>-->
        <!--                                <li>Car Sticker Design</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Ultimate Kit</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$299.00</h1>-->
        <!--                                <p><del>$309.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Business Card Design</li>-->
        <!--                                <li>Letterhead Design</li>-->
        <!--                                <li>Envelope Design</li>-->
        <!--                                <li>Email Signature Design</li>-->
        <!--                                <li>4 Social Media Covers</li>-->
        <!--                                <li>4 Website Banners</li>-->
        <!--                                <li>T-Shirt Design</li>-->
        <!--                                <li>Invoice Design</li>-->
        <!--                                <li>Bag Design</li>-->
        <!--                                <li>Car Sticker Design</li>-->
        <!--                                <li>Mug Design</li>-->
        <!--                                <li>Door Hanger Design</li>-->
        <!--                                <li>Mouse pad design</li>-->
        <!--                                <li>Fax Template Design</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="tab-pane fade" id="websitepricing" role="tabpanel"-->
        <!--                aria-labelledby="websitepricing-tab">-->
        <!--                <div class="row g-3 pricingrowforipad">-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Static</h3>-->
        <!--                                        <p><span>2</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$499.00</h1>-->
        <!--                                <p><del>$959.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>5 Custom Pages</li>-->
        <!--                                <li>5 Stock Images</li>-->
        <!--                                <li>5 Banner Designs</li>-->
        <!--                                <li>Multi-page Navigation</li>-->
        <!--                                <li>Contact Us Form Integration</li>-->
        <!--                                <li>Social Media Integration</li>-->
        <!--                                <li>SEO Friendly Sitemap</li>-->
        <!--                                <li>Mobile Responsive</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Dynamic</h3>-->
        <!--                                        <p><span>4</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing02.png?updatedAt=1633439731884"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$999.00</h1>-->
        <!--                                <p><del>$1009.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Easily customizable by anyone</li>-->
        <!--                                <li>10 Custom Pages</li>-->
        <!--                                <li>10 Stock Images</li>-->
        <!--                                <li>5 Banner Designs</li>-->
        <!--                                <li>Advanced UI Effects</li>-->
        <!--                                <li>Multi-page Navigation</li>-->
        <!--                                <li>Contact Us Form Integration</li>-->
        <!--                                <li>Social Media Integration</li>-->
        <!--                                <li>SEO Friendly Sitemap</li>-->
        <!--                                <li>Mobile Responsive</li>-->
        <!--                                <li>Google Analytics Integration</li>-->
        <!--                                <li>On Page Optimization</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>E-Commerce</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing03.webp?updatedAt=1633439732705"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$1499.00</h1>-->
        <!--                                <p><del>$1699.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Unlimited Pages</li>-->
        <!--                                <li>Unlimited Products</li>-->
        <!--                                <li>Unlimited Categories</li>-->
        <!--                                <li>Product Reviews</li>-->
        <!--                                <li>Cart Integration</li>-->
        <!--                                <li>Payment Merchant Integration</li>-->
        <!--                                <li>15 Stock Images</li>-->
        <!--                                <li>15 Banner Designs</li>-->
        <!--                                <li>Advanced UI Effects</li>-->
        <!--                                <li>Multi-page Navigation</li>-->
        <!--                                <li>Contact Us Form Integration</li>-->
        <!--                                <li>Social Media Integration</li>-->
        <!--                                <li>SEO Friendly Sitemap</li>-->
        <!--                                <li>Mobile Responsive</li>-->
        <!--                                <li>Google Analytics Integration</li>-->
        <!--                                <li>On Page Optimization</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Portal</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$2999.00</h1>-->
        <!--                                <p><del>$3999.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>Any One:</li>-->
        <!--                                <li>Dating Portal</li>-->
        <!--                                <li>Job Portal</li>-->
        <!--                                <li>Professional Network</li>-->
        <!--                                <li>Social Network</li>-->
        <!--                                <li>Media Portal</li>-->
        <!--                                <li>Real Estate Portal</li>-->
        <!--                                <li>Medical Portal</li>-->
        <!--                                <li>News Portal</li>-->
        <!--                                <li>Enterprise Portal</li>-->
        <!--                                <li>Client/User Dashboard</li>-->
        <!--                                <li>Custom Coding</li>-->
        <!--                                <li>Module-wise Architecture</li>-->
        <!--                                <li>Extensive Admin Panel</li>-->
        <!--                                <li>Complete Deployment</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="tab-pane fade" id="videopricing" role="tabpanel"-->
        <!--                aria-labelledby="videopricing-tab">-->
        <!--                <div class="row g-3 pricingrowforipad">-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Basic Plan</h3>-->
        <!--                                        <p><span>2</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$499.00</h1>-->
        <!--                                <p><del>$699.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>60 seconds</li>-->
        <!--                                <h6>Custom Work</h6>-->
        <!--                                <li>Script Writing</li>-->
        <!--                                <li>Detail Storyboard</li>-->
        <!--                                <li>Professional Voice over</li>-->
        <!--                                <li>Impressive Animation</li>-->
        <!--                                <li>Royalty free BG & SFX</li>-->
        <!--                                <h6>More Features</h6>-->
        <!--                                <li>File Delivered in HD 720p</li>-->
        <!--                                <li>3 round of revisions in each phase</li>-->
        <!--                                <li>4 weeks Deadline</li>-->
        <!--                                <li>100% satisfaction</li>-->
        <!--                                <li>100% Ownership Rights</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Startup Plan</h3>-->
        <!--                                        <p><span>4</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing02.png?updatedAt=1633439731884"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$799.00</h1>-->
        <!--                                <p><del>$999.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>60 seconds</li>-->
        <!--                                <h6>Custom Work</h6>-->
        <!--                                <li>Script Writing</li>-->
        <!--                                <li>storyboarding</li>-->
        <!--                                <li>Detail illustrations</li>-->
        <!--                                <li>Professional Voice over</li>-->
        <!--                                <li>Impressive Animation</li>-->
        <!--                                <li>Royalty free BG & SFX</li>-->
        <!--                                <h6>More Features</h6>-->
        <!--                                <li>File Delivered in HD 720p</li>-->
        <!--                                <li>3 round of revisions in each phase</li>-->
        <!--                                <li>3 weeks Deadline</li>-->
        <!--                                <li>100% satisfaction</li>-->
        <!--                                <li>100% Ownership Rights</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Pro Plan</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing03.webp?updatedAt=1633439732705"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$1999.00</h1>-->
        <!--                                <p><del>$1199.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>60 seconds</li>-->
        <!--                                <h6>Custom Work</h6>-->
        <!--                                <li>Script Writing</li>-->
        <!--                                <li>storyboarding</li>-->
        <!--                                <li>Detail illustrations</li>-->
        <!--                                <li>Professional Voice over</li>-->
        <!--                                <li>Impressive Animation</li>-->
        <!--                                <li>Royalty free BG & SFX</li>-->
        <!--                                <h6>More Features</h6>-->
        <!--                                <li>File Delivered in HD 1080p</li>-->
        <!--                                <li>Multiple Revisions in each phase</li>-->
        <!--                                <li>2 weeks Deadline</li>-->
        <!--                                <li>Dedicated Project Manager</li>-->
        <!--                                <li>100% satisfaction</li>-->
        <!--                                <li>100% Ownership Rights</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-3 col-sm-12">-->
        <!--                        <div class="pricingmaindiv">-->
        <!--                            <div class="pricingheadingstuff">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-8 my-auto">-->
        <!--                                        <h3>Ultimate Plan</h3>-->
        <!--                                        <p><span>6</span> Logo Concept</p>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-4 text-center">-->
        <!--                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"-->
        <!--                                            alt="Pricing icon" />-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="pricingpricediv text-center">-->
        <!--                                <h1>$1499.00</h1>-->
        <!--                                <p><del>$1699.00</del></p>-->
        <!--                            </div>-->

        <!--                            <div class="pricingbtndiv text-center">-->
        <!--                                <a href="payment/paynow/pay_now_link/">Order Now</a>-->
        <!--                                <h6>What You Will Get?</h6>-->
        <!--                            </div>-->

        <!--                            <ul class="">-->
        <!--                                <li>-->
        <!--                                    60 seconds-->
        <!--                                    <h6>Custom Work</h6>-->
        <!--                                </li>-->

        <!--                                <li>2 Concepts + premium scriptwriting</li>-->
        <!--                                <li>storyboarding</li>-->
        <!--                                <li>Detail illustrations</li>-->
        <!--                                <li>Professional Voice over</li>-->
        <!--                                <li>Impressive Animation</li>-->
        <!--                                <li>Royalty free BG & SFX</li>-->
        <!--                                <h6>More Features</h6>-->
        <!--                                <li>File Delivered in HD 1080p</li>-->
        <!--                                <li>Unlimited revisions</li>-->
        <!--                                <li>6 weeks Deadline</li>-->
        <!--                                <li>Dedicated Project Manager</li>-->
        <!--                                <li>100% satisfaction</li>-->
        <!--                                <li>100% Ownership Rights</li>-->
        <!--                                <li>Source File</li>-->
        <!--                            </ul>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="row g-3 pricingrowforipad">
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Basic Logo</h3>
                                                <p><span>2</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$49.00</b>
                                        <p><del>$59.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>2 Logo Concepts</li>
                                        <li>By 1 Designer</li>
                                        <li>3 Rounds Of Revisions</li>
                                        <li>Online Purpose Files (JPG, PNG)</li>
                                        <li>No Master Ai File of Logo</li>
                                        <li>No Printing Purpose Files</li>
                                        <li>100% Ownership</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Startup Logo</h3>
                                                <p><span>4</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$99.00</b>
                                        <p><del>$109.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>4 Logo Concepts</li>
                                        <li>By 2 Designer</li>
                                        <li>6 Rounds Of Revisions</li>
                                        <li>Online Purpose Files (JPG, PNG)</li>
                                        <li>Only Small Size Printing File</li>
                                        <li>No Master Ai File of Logo</li>
                                        <li>100% Ownership</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Pro Logo</h3>
                                                <p><span>6</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$149.00</b>
                                        <p><del>$169.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>6 Logo Concepts</li>
                                        <li>By 4 Designer</li>
                                        <li>Unlimited Revisions</li>
                                        <li>Online Purpose Files (JPG, PNG)</li>
                                        <li>Both Large and Small Size</li>
                                        <li>Printing Files (PDF, EPS)</li>
                                        <li>No Master Ai File of Logo</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Ultimate Logo</h3>
                                                <p><span>6</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$199.00</b>
                                        <p><del>$210.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>Unlimited Logo Concepts</li>
                                        <li>By Team Of Designers</li>
                                        <li>Unlimited Revisions</li>
                                        <li>Online Purpose Files (JPG, PNG)</li>
                                        <li>Both Large and Small Size</li>
                                        <li>Printing Files (PDF, EPS)</li>
                                        <li>Master AI File of Logo included</li>
                                        <li>100% Ownership</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 text-center mt-5 mb-2 mb-0-1920">
                <a href="pricing.html" class="moreportfoliobtn">Explore More Packages</a>
            </div>
        </div>
    </div>
</section>

{{-- About us start --}}

<section class="aboutmainsec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img src="{{ asset('frontend/assets/images/aboutus/1.webp') }}" />
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h5>About Us</h5>
                    <h2>Why Choose Design Derive?</h2>
                    <div class="bar"></div>
                    <p>
                        Design Derive is committed to enhancing brand identities with creative and bespoke animated logo design services. Our skilled team and dedication to excellence position us as the preferred choice for businesses aiming to make a significant impression with their branding. We transform your logo into a dynamic visual that ensures your brand stands out in a competitive market.
                    </p>
                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()">Live Chat</a>
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
                        What are animated logo services?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Animated logo services involve creating dynamic, moving versions of your brand's logo to enhance visual appeal and brand recognition.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How much does logo animation cost?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The cost of logo animation varies depending on the complexity and specific requirements of the project. Contact us for a personalized quote.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why should I consider an animated business logo?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        An animated business logo grabs attention, enhances brand identity, and can make your brand more memorable to your audience.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Can I see examples of your work as an animated logo studio?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Absolutely! Visit our portfolio to view examples of animated logos we’ve created for various brands.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How long does it take to complete an animated logo?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        The timeline for creating an animated logo typically ranges from one to two weeks, depending on the complexity of the design.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Can I hire logo animator from your team for ongoing projects?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, you can hire a logo animator from our team to work on multiple projects or for continuous support on your branding needs.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        What will be the delivery formats for my animated logo?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        We deliver animated logos in various formats such as MP4, GIF, and WebM, ensuring compatibility across all platforms.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Do I need a static logo before creating an animated version?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, having a static logo is necessary as it serves as the foundation for the animated version.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        What makes your hire logo animation team different?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our team is known for creativity, technical expertise, and delivering high-quality animations that align with your brand’s vision.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        Can an animated logo be used on all digital platforms?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       Yes, animated logos are versatile and can be used across websites, social media, video content, and more to enhance your brand’s presence.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<!--------------- Testimonial start ----------------->
<section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>What Our Client Said</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients have seen firsthand the transformative power of our animated logo design services.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4 mb-4 testimonial-margin-1920">
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="{{ asset('frontend/assets/images/testimonials/logos/1.webp') }}"
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
                        "Design Derive's animated logo completely revitalized our brand’s image. The quality and creativity exceeded our expectations!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Alex Johnson</span><br />Marketing Director</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="{{ asset('frontend/assets/images/testimonials/logos/2.webp') }}"
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
                        "The animated logo created by Design Derive was exactly what we needed to capture our brand's essence. Fantastic work!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Emily Carter</span><br />Brand Manager</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="{{ asset('frontend/assets/images/testimonials/logos/3.webp') }}"
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
                        "I was impressed by how Design Derive turned our static logo into a dynamic, engaging animation. It’s a game-changer for our marketing efforts."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Michael Lee</span><br />C.E.O</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="{{ asset('frontend/assets/images/testimonials/logos/4.webp') }}"
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
                        "Design Derive delivered a stunning animated logo that perfectly aligns with our brand. Their attention to detail is unparalleled."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Sophia Nguyen</span><br />Creative Lead</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="{{ asset('frontend/assets/images/testimonials/logos/5.webp') }}"
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
                        "The team at Design Derive provided exceptional service and delivered an animated logo that truly stands out. Highly recommended!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>David Brown</span><br />Founder</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="textimonialmaindiv">
                    <div class="testimoniallogodiv">
                        <img src="{{ asset('frontend/assets/images/testimonials/logos/6.webp') }}"
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
                        "Our new animated logo from Design Derive has significantly boosted our brand’s visibility and engagement. Outstanding job!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Rachel Adams</span><br />Digital Marketing Specialist</p>
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