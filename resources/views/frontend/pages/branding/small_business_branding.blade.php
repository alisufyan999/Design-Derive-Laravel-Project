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

<!--------------------------- Main banner start ------------------------------>
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                        Custom Branding Services for Small Businesses
                    </h1>
                    <p class="text-white">
                        Boost your brand identity and recognition with our specialized branding services for small business With attractive, memorable designs, we create comprehensive branding solutions that represent your brand.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/smallbusinessheroimg.png') }}" alt="" />
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

<!-- Solutions start -->
    <section class="mb-5 pt-5 pb-5 aboutsolutionsec section-padding-1920">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-5">
                    <div class="sectionheadingdiv">
                        <h5>How it Works</h5>
                        <h2>Types of Branding Services for Small Businesses</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                            <B>Small business branding services </B> come in various forms, each designed to convey unique aspects of a brand. Here are some different types of branding solutions:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-3 aboutpagesolutionrow">
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-01.png?updatedAt=1633615707340"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h3>Visual Brand Identity</h3>
                                <p class="mb-4">
                                    Visual brand identity involves creating strong visual elements like logos, color schemes, and typography to ensure a consistent brand presence.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-02.png?updatedAt=1633615707650"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h3>Brand Messaging</h3>
                                <p class="mb-4">
                                    Brand messaging focuses on developing a clear and compelling narrative that communicates your brand's values and mission to your audience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-03.png?updatedAt=1633615708988"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h3>Digital Branding</h3>
                                <p class="mb-4">
                                    Digital branding includes creating and managing your brand’s presence across digital platforms such as websites, social media, and online advertisements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-04.webp?updatedAt=1633615707301"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h3>Brand Audit and Refresh</h3>
                                <p class="mb-4">
                                    It involves improving your current brand identity and strategy, then updating and refining them to better align with your business goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-05.webp?updatedAt=1633615723506"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h3>Website Branding</h3>
                                <p class="mb-4">
                                    Website branding ensures your site is visually appealing, user-friendly, and reflective of your brand’s identity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-06.webp?updatedAt=1633615722973"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h3>Social Media Branding</h3>
                                <p class="mb-4">
                                    This involves creating a consistent brand presence on social media through profile design, content creation, and engagement strategies.
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
                        <h2 class="contactusheading">Crafting Unique Identities with Branding Services for Small Businesses</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            A unique and memorable brand identity is important for establishing your business in present competitive market. Our services focus on generating designs that attracts your target audience. This process involves creating a strong visual and strategic representation of your business. It includes elements like logo design, color schemes, typography, and brand messaging, all working together to convey your brand's core values. A well-crafted brand identity not only makes your business visually appealing but also helps communicate your core message and build trust with your audience.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/smallcreativity.png') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/smallsolutions.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>Affordable  <span class="darkh2">Small Business Branding Services for Every Budget</h2>
                        <div class="bar"></div>
                        <p>
                            As a leading branding agency for small businesses, we provide high-quality, cost-effective solutions designed to various budgets. Our services help create visually appealing and strategically effective branding packages that improve your business's presence. Here are the key components of our comprehensive services:
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Branding concepts</li>
                          <li class="py-1">Aligned designs</li>
                          <li class="py-1">Refined elements</li>
                          <li class="py-1">Industry solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- Logo About start -->
    <section class="mb-5 pt-5 section-padding-1920 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Boosting Brand Recognition for Small Businesses</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            To ensure your brand stands out and leaves a lasting impression, it’s important to focus on designs that align with your brand's style and goals. This involves maintaining consistency across all platforms, which helps in building recognition and trust with your audience. Effective branding includes strong visual elements, clear messaging, and strategic placement, all working together to reinforce your brand's identity and make it easily recognizable.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto ">
                    <img class="financialipad" src="{{ asset('frontend/assets/images/smallbusiness02.png') }}" />                
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv  my-auto">
                <img class="editorbar" src="{{ asset('frontend/assets/images/smallbusiness01.png') }}" />

                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>Comprehensive <span class="darkh2"> Branding Package for Small Businesses</h2>
                        <div class="bar"></div>
                        <p>
                            A comprehensive branding package for small businesses includes more than just logo design. It surrounds all elements necessary to create a consistent and strong brand image across various platforms. This includes cost-effective strategies that utilize market research and competitive analysis to ensure your brand stands out. A complete branding package also focuses on delivering measurable results, allowing you to track and refine your branding efforts effectively.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Cost-effective branding</li>
                          <li class="py-1">Cohesive branding</li>
                          <li class="py-1">Comprehensive strategies</li>
                          <li class="py-1">Measurable results</li>
                        </ul>
                    </div>
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
                        Explore our innovative portfolio and see why businesses choose us for their small business branding needs. Our creative ability is demonstrated through our diverse and impactful designs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 mt-4 mb-5">
            <div class="tab-pane fade show active" id="allportfolio" role="tabpanel"
                    aria-labelledby="allportfolio-tab">
                    <div class="row">
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-1.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-1.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-2.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-2.png') }}" alt="" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img portfolio-img-full">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-3.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-3.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-4.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-4.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-5.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-5.png') }}" alt="" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img portfolio-img-full">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-6.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-6.png') }}" alt="" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img portfolio-img-full">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-7.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-7.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-8.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-8.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-9.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-9.png') }}" alt="" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img portfolio-img-full">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-10.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-10.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-11.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-11.png') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/small-12.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/small-12.png') }}" alt="" />
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 text-center mb-2">
                <a href="portfolio.html" class="main moreportfoliobtn">Our More Creative Work</a>
            </div>
        </div>
    </div>
</section>

<!--------------------------- Pricing start ------------------------------>
<section class="mb-5 section-padding-1920">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <!--<h5>Now Low Budgets Will Boost Your Brand</h5>-->
                    <h2>Check Our Economical Pricing</h2>
                    <div class="bar"></div>
                    <p>
                        We understand that the small business full branding services cost can be a concern. That’s why we provide transparent and affordable pricing for your specific needs.
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
                                                <h3>Basic Kit</h3>
                                                <p><span>2</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing01.webp?updatedAt=1633439731075"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$59.00</b>
                                        <p><del>$69.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>Business Card Design</li>
                                        <li>Letterhead Design</li>
                                        <li>Envelope Design</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Startup Kit</h3>
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
                                        <li>Business Card Design</li>
                                        <li>Letterhead Design</li>
                                        <li>Envelope Design</li>
                                        <li>Email Signature Design</li>
                                        <li>2 Social Media Covers</li>
                                        <li>2 Website Banners</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Pro Kit</h3>
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
                                        <li>Business Card Design</li>
                                        <li>Letterhead Design</li>
                                        <li>Envelope Design</li>
                                        <li>Email Signature Design</li>
                                        <li>4 Social Media Covers</li>
                                        <li>4 Website Banners</li>
                                        <li>T-Shirt Design</li>
                                        <li>Bag Design</li>
                                        <li>Car Sticker Design</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="pricingmaindiv">
                                    <div class="pricingheadingstuff">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <h3>Ultimate Kit</h3>
                                                <p><span>6</span> Logo Concept</p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/pricing/pricing04.webp?updatedAt=1633439733541"
                                                    alt="Pricing icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricingpricediv text-center">
                                        <b>$299.00</b>
                                        <p><del>$309.00</del></p>
                                    </div>

                                    <div class="pricingbtndiv text-center">
                                        <a href="payment/paynow/pay_now_link/">Order Now</a>
                                        <h6>What You Will Get?</h6>
                                    </div>

                                    <ul class="">
                                        <li>Business Card Design</li>
                                        <li>Letterhead Design</li>
                                        <li>Envelope Design</li>
                                        <li>Email Signature Design</li>
                                        <li>4 Social Media Covers</li>
                                        <li>4 Website Banners</li>
                                        <li>T-Shirt Design</li>
                                        <li>Invoice Design</li>
                                        <li>Bag Design</li>
                                        <li>Car Sticker Design</li>
                                        <li>Mug Design</li>
                                        <li>Door Hanger Design</li>
                                        <li>Mouse pad design</li>
                                        <li>Fax Template Design</li>
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
                    <h2>What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p>
                        We boost brands with our innovative digital and branding design services, adding value to your business and engaging your customers. Our dedication to delivering high-quality strategies has made us a preferred partner for businesses aiming for growth.
                    </p>
                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()">Live Chat</a>
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
                        What is the branding and identity services for small business price range? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our branding and identity services for small businesses start at competitive rates to fit various budgets.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What does your small business branding package include? 
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our small business branding package includes logo design, brand identity development, marketing collateral, and website branding.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why should I choose Design Derive for small business branding services? 
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Design Derive offers comprehensive and strategic small business branding services to grow your brand’s presence in the market.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        How can your branding solutions for small businesses help my company grow?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our branding solutions for small businesses create a strong, consistent brand identity that attracts customers and drives growth.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        What is included in your company branding for small businesses?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our company branding for small businesses includes a thorough brand strategy, custom logo design, and consistent brand messaging across all platforms.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        How do I find the best branding companies for small businesses?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Look for branding companies with a strong portfolio, positive client testimonials, and a track record of delivering innovative and effective branding strategies.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        How long does it take to complete a small business branding project?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The timeline for a small business branding project typically ranges from 4 to 8 weeks, depending on the project's scope.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                       Do you offer custom branding solutions for small businesses? 
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we provide customized branding solutions for small businesses to meet specific needs and goals.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                       Can you help with rebranding my small business? 
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Absolutely, we offer rebranding services to refresh and revitalize your small business’s brand identity.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                       What makes your small business branding services stand out? 
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our small business branding services stand out due to our strategic approach, creative designs, and commitment to delivering results that align with your business goals.</p>
                      </div>
                    </div>
                  </div>
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
                    <h5>What Our Client Say</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients consistently praise the transformational impact of our branding services. From boosting online visibility to driving increased engagement, their feedback underscores our commitment to delivering high-quality, effective strategies.
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
                        "Our brand identity has never been stronger. The team captured our vision perfectly!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Jane Smith</span><br />Owner of Smith's Bakery</p>
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
                        "Exceptional service and attention to detail. Our rebranding was a huge success."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>John Doe</span><br />CEO of Tech Innovators</p>
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
                         "Professional, creative, and efficient. Our new brand image resonates well with our audience."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emily Johnson</span><br />Marketing Manager at GreenEarth</p>
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
                        "Outstanding work on our logo and branding. Customers love our new look!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Michael Brown</span><br />Founder of FitLife Gym</p>
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
                        "From start to finish, the process was smooth and the results were amazing. Highly recommended!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sarah Davis</span><br />Director at Urban Style</p>
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
                        "Their comprehensive branding strategy significantly boosted our market presence."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>David Wilson</span><br />Co-founder of EcoHomes</p>
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