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
section.section-padding-1920 .editorbar
{
    width: 93%;
    margin-left: auto;
    display: block;
}
    @media(max-width:1900px)
    {
        section.mainbannersec
        {
            margin-top:0px;
            
        }
        section.mainbannersec.logoherosection
        {
            height:auto;
            min-height:auto;
            padding: 160px 0 60px;
        }
        .mainbannersec .row.logos-row
        {
            left: 104vh;
            top: 68px;
        }
    }
    @media(max-width:1600px)
    {
        section.mainbannersec
        {
            margin-top:0px;
        }
        .mainbannersec .row.logos-row
        {
            top: 10px;
            left: 92vh;
        }
        ul.pointsul > li::before
        {
            left:0px;
        }
        ul.pointsul
        {
            padding:0px;
        }
        ul.pointsul > li 
        {
            padding: 0 0 0 26px;
        }
    }
    @media(max-width:1366px)
    {
        section.mainbannersec.logoherosection
        {
            padding: 100px 0 60px;
        }
        .mainbannersec .row.logos-row 
        {
           top: 0;
           left: 78vh;
        }
        
    }
    
</style>

<!--------------------------------- Main banner start -------------------------------------->
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row height-100">
            <div class="col-md-5 col-sm-5 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                        Top 3D Logo Design Company
                    </h1>
                    <p class="text-white">
                        Build up your brand with our unique 3d logo design solutions. At Design Derive, we specialize in designing customized 3D logo design that captures your brand's nature and helps it stand out in a competitive market.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 text-center my-auto">
                   <div class="row logos-row">
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/1.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/2.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/3.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/3.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/5.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/6.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
                        </div>
                      </div>
                      <div class="column">
                        <div class="ItemCard">
                          <a class="ItemCard__dest cover"></a>
                            <figure class="ItemCard__thumb"> 
                                <img src="{{ asset('frontend/assets/images/3dlogos/new/7.webp') }}" height="340" width="510" alt=""> 
                                <span class="shadow cover"></span> 
                            </figure>
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
                        <h2>Types of 3D Logo Designs</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                            We offer various types of 3D logo designs that add depth, dimension, and a modern touch to your brand identity. From bold extruded logos to sophisticated transparent designs, our 3D logos are made to grow your brand's visual impact and appeal.
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
                                <h4>Extruded 3D Logos</h4>
                                <p class="mb-4">
                                    Extruded 3D logos add depth by extending the design along the z-axis, creating a bold, impactful look.
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
                                <h4>Layered 3D Logos</h4>
                                <p class="mb-4">
                                    Layered 3D logos use multiple overlapping layers to create depth and complexity, conveying innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/whychooseus/3/3.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Metallic 3D Logos</h4>
                                <p class="mb-4">
                                    Metallic 3D logos feature metal-like textures for a stylish, modern appearance, ideal for tech and industrial brands.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/images/aboutus/whychooseus/4/4.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Transparent 3D Logos</h4>
                                <p class="mb-4">
                                    Transparent 3D logos use translucence to add sophistication and versatility across various backgrounds.
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
                                <h4>Sculpted 3D Logos</h4>
                                <p class="mb-4">
                                    Sculpted 3D logos have a perfectly decorated design, highlighting quality and creativity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-c enter p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/6/6.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Animated 3D Logos</h4>
                                <p class="mb-4">
                                    Animated 3D logos bring static designs to life through motion, perfect for digital and interactive media.
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
                        <h2 class="contactusheading">Engage and Impress with Custom 3D Logo Designs</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <!--<ul class="pointsul">-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Cost</strong> Good Business Consultants are Excellent-->
                        <!--        Communicators-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Corporate</strong> At the End of a Project, Good-->
                        <!--        Business Consultants-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>SEO</strong> Good Business Consultants are Willing to-->
                        <!--        Travel Where-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Company</strong> Write a Business Plan that Clearlys-->
                        <!--        Following-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Business</strong> Assertively embrace technically-->
                        <!--        sound action-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Quickly</strong> architect customer directed portals-->
                        <!--        with Is-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Cost</strong> Good Business Consultants are Excellent-->
                        <!--        Communicators-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>Corporate</strong> At the End of a Project, Good-->
                        <!--        Business Consultants-->
                        <!--    </li>-->
                        <!--    <li class="py-1">-->
                        <!--        <strong>SEO</strong> Good Business Consultants are Willing to-->
                        <!--        Travel Where-->
                        <!--    </li>-->
                        <!--</ul>-->
                        <p>
                            A captivating logo is crucial for brand recognition and engagement in almost every rapidly growing market. At Design Derive, we offer top-notch 3d logo design services designed to your unique needs. Our creative team crafts original and dynamic 3D logos that connects with your audience and improve your brand's visual identity. Whether you're a startup or an established business, our 3d logo design solutions will set you apart from the competition.
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

{{-- About us start --}}

<section class="aboutmainsec  p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/conveylogos.webp') }}" >
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h2>Affordable <span class="darkh2">3D Logo Design Services for All Businesses</h2>
                    <div class="bar"></div>
                    <p>
                        As a leading 3D logo design company in the USA, Design Derive provides high-quality, affordable logo design solutions to businesses of all sizes. Our team of experienced designers delivers logos that not only look stunning but also communicate your brand's message effectively. Our comprehensive 3d logo design services include:
                    </p>
                    <ul class="pointsul financiallist">
                      <li class="py-1">Developing custom 3D logo concepts</li>
                      <li class="py-1">Crafting visually impactful, custom 3D logos</li>
                      <li class="py-1">Efficiently refining and finalizing logo designs</li>
                      <li class="py-1">Low cost custom 3d logo design packages</li>
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
                        <h2 class="contactusheading">Expert 3D Logo Design Solutions for a Strong Brand Identity</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            A well-designed 3D logo is more than just a visual element; it's a important component of your brand's identity. Our <B>3d logo design services</B> make sure that your logo is not only visually appealing but also meaningful and memorable. We focus on creating designs that align with your brand's vision and values, making us the <B>top 3d logo design company</B> for businesses looking to improve their visual presence.
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
                    <h2>Comprehensive <span class="darkh2">3D Logo Design Packages for a Full-Brand Experience</h2>
                    <div class="bar"></div>
                    <p>
                        At Design Derive, we go beyond basic logo design to offer a complete brand experience. Our 3d logo design services are designed to represent your brand's identity and goals fully. Our offerings include:
                    </p>
                    <ul class="pointsul financiallist">
                      <li class="py-1">Providing cost-effective 3d logo design services</li>
                      <li class="py-1">Strengthening your brand's presence with unique 3D logos</li>
                      <li class="py-1">Developing comprehensive branding strategies</li>
                      <li class="py-1">Creating clear, impactful designs with measurable results</li>
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

{{-- Portfolio start --}}

<section class="mb-5 pt-5 pb-5 section-padding-1920" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h5>Showcase Our Creativity</h5>
                    <h2>Our Creative Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        Explore our innovative portfolio to see the exceptional 3D logo designs we've created for a wide range of clients.
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/1.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/1.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/2.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/2.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/3.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/3.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/4.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/4.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/5.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/5.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/6.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/6.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/7.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/7.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/8.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/8.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/9.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/9.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/10.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/10.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/11.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/11.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/12.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/12.webp') }}" />
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
                        Design Derive offers an eco-friendly pricing range to accommodate businesses of all sizes. Our customer-centric approach ensures you receive high-quality digital services at a price that fits your budget.
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
                    <h2>What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p>
                        We grow brands with our cutting-edge digital design services, adding significant value to your business. Our commitment to high-quality 3d logo design solutions has made us a trusted partner for businesses aiming to stand out and grow.
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
                        What makes your company the best custom 3D logo design provider? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our expert designers create unique and innovative 3D logos for your brand's identity, making us the best in custom 3D logo design USA.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What services are included in your 3D logo design services provider package? 
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our package includes concept development, design revisions, and final 3D logo delivery in various formats suitable for all your branding needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do you ensure affordable 3D logo design cost without compromising quality?  
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We shorten our design process and leverage advanced tools to offer competitive pricing while maintaining top-notch design quality.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Can I hire 3D logo designer for a custom project? 
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, you can hire a dedicated 3D logo designer to work exclusively on your project, ensuring personalized attention and custom designs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Why should I choose your 3D logo design firm over others?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our firm stands out due to our experienced team, cutting-edge design techniques, and commitment to delivering exceptional 3D logos.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        What is the turnaround time for a custom 3D logo design?  
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Typically, our turnaround time ranges from 7 to 14 days, depending on the complexity of the design and client feedback.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Do you offer revisions for 3D logo designs? 
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, our services include multiple revisions to ensure your 3D logo meets your expectations and brand requirements.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        What file types will I receive once my 3D logo design is completed?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>You will receive your 3D logo in various formats, including PNG, JPEG, and vector files, suitable for both digital and print use.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        How does the design process work at your 3D logo design firm?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our process involves an initial consultation, concept development, design creation, client feedback, and final delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        What makes a 3D logo design different from a traditional logo?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>A 3D logo design adds depth and dimension, making your brand more visually engaging and memorable compared to traditional flat logos.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<!----------------------------- Testimonial start -------------------------------->
<section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>What Our Clients Say</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients consistently commend the transformative impact of our 3d logo design services. From boosting brand visibility to creating engaging visual identities, their feedback highlights our dedication to delivering exceptional, tailored solutions for each business.
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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