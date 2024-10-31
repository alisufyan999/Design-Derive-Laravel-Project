@extends('frontend.layouts.master')
@section('content')

<style>
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

  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row height-100">
            <div class="col-md-5 col-sm-5 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                        Custom Monogram Logo Design Services
                    </h1>
                    <p class="text-white">
                        At Design Derive, we specialize in creating stunning custom monogram logo designs that make your brand unique. Our logo designs integrate creativity and proficiency, ensuring that your brand makes a lasting impact.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
            <!--<div class="col-md-6 col-sm-6 text-center my-auto hero-imagecol">-->
            <!--       <div class="heroimage-box">-->
            <!--          <img src="assets/images/mongramlogo1.png" />-->
            <!--          <img src="assets/images/mongramlogo2.png" />-->
            <!--       </div>-->
            <!--       <div class="heroimage-box box2">-->
            <!--           <img src="assets/images/mongramlogo3.png" />-->
            <!--           <img src="assets/images/mongramlogo4.png" />-->
            <!--       </div>-->
            <!--   </div>-->
            <div class="col-md-6 col-sm-6 text-center my-auto">
                   <div class="row logos-row">
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/1.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/2.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/3.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/4.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/5.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/6.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/monogram-logo-design/7.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
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
    <section class="mb-5 pt-5 pb-5 aboutsolutionsec section-padding-1920">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-5">
                    <div class="sectionheadingdiv">
                        <h5>How it Works</h5>
                        <h2>Types of Monogram Logos</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                            Monogram logos come in various styles, each serving a unique purpose. Understanding these types helps you choose the perfect design for your brand.
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
                                <h4>Initial-Based Logos</h4>
                                <p class="mb-4">
                                    Initial-based logos utilize the initials of a brand or individual to create a unique and memorable logo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/whychooseus/2/2.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Overlapping Logos</h4>
                                <p class="mb-4">
                                    The overlapping logos intricately weave initials or symbols together, creating a cohesive and elegant design.
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
                                <h4>Interlocking Logos</h4>
                                <p class="mb-4">
                                     Interlocking logos feature letters or symbols that intertwine seamlessly, symbolizing unity and connection.
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
                                <h4>Shield Logos</h4>
                                <p class="mb-4">
                                    Shield logo encases the initials within a shield or emblem, adding a sense of tradition and strength.
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
                                <h4>Calligraphic Logos</h4>
                                <p class="mb-4">
                                    Calligraphic logos use artistic, handwritten styles to add a touch of elegance and sophistication.
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
                                <h4>Geometric Logos</h4>
                                <p class="mb-4">
                                    Geometric logos incorporate shapes and lines to create a modern, abstract look.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Logo About start -->
<section class="mb-5 pt-5 section-padding-1920 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/mongramframe.webp') }}" />
                </div>
                
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Customized solutions for your unique brand</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                       <p>
                            We prioritize your brand’s unique needs and vision. Our user-centric approach ensures that every monogram logo design reflects your brand’s identity and connects with your target audience. We take the time to understand your goals and preferences, creating designs that not only look stunning but also effectively communicate your brand’s message. With a focus on modern monogram logo designs, we aim to deliver logos that are both timeless and impactful.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="aboutmainsec mb-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Our <span class="darkh2"> Proven Monogram Design Methods</h2>
                        <div class="bar"></div>
                        <p>
                            We follow a structured design process to deliver exceptional results. Our procedure begins with a detailed consultation to understand your brand’s vision and requirements. Our design team then creates initial concepts, refining them based on your feedback to ensure the final design meets your expectations. The completed logo monogram design is delivered in various formats for versatile use across different platforms.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Consultation</li>
                          <li class="py-1">Conceptualization</li>
                          <li class="py-1">Refinement</li>
                          <li class="py-1">Finalization</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv my-auto">
                <img class="financialipad" src="{{ asset('frontend/assets/images/monogram1.webp') }}" />
                </div>
            </div>
        </div>
    </section>

 <!-- Logo About start -->
<section class="mb-5 section-padding-1920 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/monogram2.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">User-Centric Design Philosophy</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            At Design Derive, we place our clients at the heart of our design process. Every design is created to meet your specific needs and preferences, making sure the final product truly represents your brand. We believe in open communication and collaboration, allowing your vision to guide the creative process. This user-centric approach guarantees a logo fulfills all the requirements of the target audience and strengthens your brand identity.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="aboutmainsec p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>Benefits <span class="darkh2"> of a Custom Monogram Logo</h2>
                        <div class="bar"></div>
                        <p>
                            A custom monogram logo offers several benefits that make it an excellent choice for branding. It provides a unique identity, allowing your brand to stand out with a logo that is uniquely yours. These logos are highly versatile and adaptable for use across various mediums and platforms. They also offer timeless appeal, ensuring that your brand remains relevant and recognizable over time.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Unique Identity</li>
                          <li class="py-1">Versatility</li>
                          <li class="py-1">Timeless Appeal</li>
                          <li class="py-1">Professional Image</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/monogram3.webp') }}" />
                </div>
            </div>
        </div>
    </section>




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

{{-- Portfolio start --}}

<section class="mb-5 pt-5 pb-5 section-padding-1920" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h5>Showcase The Creativity</h5>
                    <h2>Our Creative Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        Explore our creative portfolio to see examples of our custom monogram logo designs. Each design showcases our commitment to excellence and creativity.
                    </p>
                </div>
            </div>
        </div>
    </div>
<div class="row mb-5">
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/1.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/1.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/2.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                             <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/2.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/3.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/3.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/4.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/4.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/5.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/5.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/6.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/6.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/7.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/7.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/8.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/8.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/9.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/9.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/10.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/10.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/11.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/11.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/monogram/12.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/monogram/12.webp') }}" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
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
                        We offer competitive pricing for our services. Get a high-quality graphic design logo monogram without breaking the bank. Affordable excellence is our promise to you, ensuring you get the best value for your investment.
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
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"
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
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing02.png?updatedAt=1633439731884"
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
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing03.webp?updatedAt=1633439732705"
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
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"
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
                    <h2>What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p>
                        At Design Derive, we pride ourselves on delivering exceptional services. Our team of experienced designers is dedicated to creating logos that not only look great but also convey your brand’s message effectively. We focus on understanding your brand’s unique identity and values, ensuring that every design element aligns with your vision. Our commitment to quality and creativity sets us apart, making us the ideal partner for your branding needs.
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
                </div>
            </div>
             <div class="col-md-12 col-sm-12 text-center mb-4">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is a custom monogram logo design? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>A custom monogram logo design is a unique logo created by combining initials or symbols to represent a brand or individual distinctively.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How long does it take to design a monogram logo?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The design process typically takes 1-2 weeks, depending on the complexity and your feedback during the revisions.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I use my monogram logo on various platforms?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, your monogram logo will be provided in multiple formats suitable for print, digital, and social media use.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        What is the difference between a monogram name logo design and a regular logo?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>A monogram name logo design specifically uses initials or letters to create a unique and stylish representation, unlike regular logos which can include various elements like images and text.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How to design a monogram logo that stands out?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our designers focus on creativity, consistency, and readability to ensure your monogram logo stands out and effectively represents your brand.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Can you incorporate specific design elements into my monogram logo?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We can incorporate specific design elements, colors, and styles based on your preferences to create a personalized monogram logo.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Is a monogram design logo suitable for all types of businesses?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, monogram design logos are versatile and can be adapted to suit any business or personal brand.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        What is the cost of a custom monogram logo design?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Cost varies based on the design's complexity and the quantity of changes made. Contact us for a detailed quote.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        Can we request revisions for my monogram logo design?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we offer multiple revisions to ensure the final design meets your expectations.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        Why should I choose Design Derive for my logo design monogram?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Design Derive offers expert designers, personalized service, and a commitment to quality, ensuring your logo design monogram perfectly captures your brand's essence.</p>
                      </div>
                    </div>
                  </div>
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
                    <h5>What Our Client Say</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients love our work! Here’s what they have to say about our <B>custom monogram logo design</B> services
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
                        "Absolutely thrilled with my new monogram logo! It perfectly represents my brand."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Emily R</span><br />Creative Director</p>
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
                         "The design process was smooth and the final product exceeded my expectations."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>James P</span><br />C.E.O</p>
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
                         "Excellent work! My monogram logo looks professional and unique."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Sarah M</span><br />Marketing Manager</p>
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
                        "The team understood my vision and delivered a fantastic logo."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Michael T</span><br />Entrepreneur</p>
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
                        "Impressed by the creativity and attention to detail. Highly recommended!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Laura B</span><br />Fashion Designer</p>
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
                        "Great service and outstanding monogram design. Very satisfied!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>David K</span><br />Small Business Owner</p>
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