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
                        Creative Packaging Design Agency
                    </h1>
                    <p class="text-white">
                        Confirm your packaging reflects your brand’s core values with our top-notch creative packaging design agency. Improve your brand image with innovative and sustainable designs tailored to your product.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/pack-heroimg.png') }}" alt="" />
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
                        <h2>Types of Packaging Design</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                            At Design Derive, we specialize in creating visually stunning and impactful graphic designs for various types of packaging, for your brand's unique needs.
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
                                <h4>Flexible Packaging Design</h4>
                                <p class="mb-4">
                                    We create graphic designs for pouches, bags, and wraps that are lightweight and cost-effective.
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
                                <h4>Rigid Packaging Design</h4>
                                <p class="mb-4">
                                    Our graphic designs enhance sturdy containers like bottles and cans, providing a premium look and feel.
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
                                <h4>Eco-Friendly Packaging Design</h4>
                                <p class="mb-4">
                                    We specialize in sustainable graphic designs using materials like recycled paper and biodegradable plastics.
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
                                <h4>Luxury Packaging Design</h4>
                                <p class="mb-4">
                                    Our high-quality graphic designs incorporate intricate details to give an upscale look and feel.
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
                                <h4>Blister Packaging Design</h4>
                                <p class="mb-4">
                                    We design graphics for pre-formed plastic cavities, ensuring excellent visibility and protection for your products.
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
                                <h4>Custom Packaging Design</h4>
                                <p class="mb-4">
                                    Unique graphic designs specifically to your brand’s needs and identity, setting your product apart from the competition.
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
                        <h2 class="contactusheading">Boost Your Brand with Custom Packaging Solutions</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">Custom packaging solutions are designed to reflect your brand's unique identity, helping to attract and engage your target audience. Effective packaging combines aesthetics, functionality, and sustainability. It should be visually appealing to catch the consumer's eye, practical to protect and present the product, and eco-friendly to align with modern consumer values. By leveraging the expertise of a creative packaging design agency, you can ensure your packaging stands out on the shelves and leaves a lasting impression, driving brand loyalty and increasing sales.</p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/pack-img1.png') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About us start ------------------------------>
<section class="aboutmainsec p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/pack-img2.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>Best <span class="darkh2">Sustainable Packaging Designs for a Better Tomorrow</h2>
                        <div class="bar"></div>
                        <p>
                            As a leading sustainable packaging design agency, we prioritize eco-friendly materials and processes, ensuring your packaging is both beautiful and environmentally responsible. Our commitment to sustainability helps your brand stand out as a responsible and forward-thinking company.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Eco-friendly materials</li>
                          <li class="py-1">Innovative design</li>
                          <li class="py-1">Consumer appeal</li>
                          <li class="py-1">Market differentiation</li>
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
                        <h2 class="contactusheading">Experience Top-Notch Packaging Design Services</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">Comprehensive packaging solutions improve your product's market presence by combining aesthetics with functionality. Effective packaging should be visually appealing to attract consumers and practical to protect the product. Utilizing sustainable materials can further enhance your brand’s appeal. The right packaging can significantly impact consumer perceptions, fostering brand loyalty and driving sales. Working with a top packaging design agency ensures your product stands out in a competitive market and leaves a lasting impression.</p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/packagingdesign01.png') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About us start ------------------------------>
<section class="aboutmainsec p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/packagingdesign02.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>Comprehensive <span class="darkh2">Branding Solutions</h2>
                        <div class="bar"></div>
                        <p>
                            Our services extend beyond packaging. As a full-service brand packaging design agency, we provide complete branding solutions that include logo design, brand strategy, and more. Our integrated approach ensures your brand maintains a consistent and professional image across all platforms.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Logo design</li>
                          <li class="py-1">Brand strategy</li>
                          <li class="py-1">Marketing collateral</li>
                          <li class="py-1">Consistent branding</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--------------------------- Workflow start ------------------------------>
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
                        Explore our portfolio to see how we've transformed products with innovative packaging designs. Our work highlights our adaptability across various industries, demonstrating our commitment to excellence and ability to capture your brand’s essence through unique and effective solutions.
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-1.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-1.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-2.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-2.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-3.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-3.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-4.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-4.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-5.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-5.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-6.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-6.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-7.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-7.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-8.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-8.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-9.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-9.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-10.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-10.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-11.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-11.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/pd-12.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/pd-12.jpg') }}" alt="" />
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
                    <h2>Affordable and Competitive Pricing</h2>
                    <div class="bar"></div>
                    <p>
                        We believe in offering top-quality design services at economical prices. Our competitive pricing ensures you receive excellent value for your investment, making us a preferred choice among businesses seeking cost-effective packaging solutions.
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

<!--------------------------- About us start ------------------------------>
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
                        Design Derive is a leading product packaging design agency known for creativity and innovation. Our experienced team delivers innovative solutions with a customer-centric approach, consistently exceeding client expectations. With a proven track record, we transform your vision into reality, growing your brand through comprehensive packaging design services. Partner with us to see your brand truly reflected in our designs.
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
                        What services does a packaging design agency near me offer? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p> A local packaging design agency offers services like custom packaging design, brand strategy, and sustainable packaging solutions tailored to your needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Why should I choose Design Derive as my design agency packaging?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Design Derive specializes in innovative and creative packaging designs that effectively communicate your brand’s essence and attract your target audience.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What makes a luxury packaging design agency different?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>A luxury packaging design agency focuses on high-end materials, sophisticated designs, and premium finishes to promote the perceived value of your product.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        How do I know if Design Derive is one of the best packaging design agencies for my needs?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Design Derive has a proven track record of delivering exceptional packaging designs that meet and exceed client expectations, making us a top choice in the industry.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        What factors influence the cost of packaging design?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The cost of packaging design is influenced by factors such as the complexity of the design, materials used, production volume, and any additional features like embossing or custom shapes.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Can Design Derive handle packaging design for different industries?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, our versatile portfolio showcases our ability to create effective packaging designs for a wide range of industries, from food and beverage to cosmetics and electronics.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        What is the typical timeline for a packaging design project?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The timeline for a packaging design project varies depending on the complexity and specific requirements, but it typically ranges from a few weeks to a couple of months.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Do you offer sustainable packaging design options?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Absolutely, we prioritize sustainability and offer eco-friendly packaging solutions that minimize environmental impact while maintaining aesthetic appeal.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        How does the packaging design process work at Design Derive?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our process involves initial consultations, concept development, design refinement, and final production, ensuring that your vision is realized at every step.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        Can I see examples of your previous packaging design work?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, you can explore our creative portfolio on our website to see how we have transformed products with our innovative packaging designs.</p>
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
                    <h5>What Our Client Said</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Hear from our satisfied clients who have experienced the transformative power of our creative packaging design solutions. Discover how our designs have elevated their brands and resonated with their audiences.
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
                        "Outstanding creativity and attention to detail. Our new packaging design has received rave reviews from customers!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Michael Reynolds</span><br />CEO at EcoWave</p>
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
                        "Exceptional design work! The luxury packaging has significantly elevated our brand’s image."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Olivia Harper</span><br />Marketing Manager at PureLux Cosmetics</p>
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
                        "The team nailed our vision perfectly. The eco-friendly designs align with our brand’s values and look fantastic."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Ethan Brooks</span><br />Product Manager at GreenDelight Foods</p>
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
                        "Impressed with the innovative and functional packaging designs. Our products stand out on the shelves now."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sophia Turner</span><br />Founder at TechEdge Solutions</p>
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
                        "Professional and efficient service. The custom packaging designs have greatly improved our market presence."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Lucas Bennett</span><br />Brand Director at VitalHealth</p>
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
                        "Creative and unique designs that truly reflect our brand’s essence. Highly recommend their services!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Ava Mitchell</span><br />Owner at CraftElegance</p>
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