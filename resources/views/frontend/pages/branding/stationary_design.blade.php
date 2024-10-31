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
     
    a.moreportfoliobtn
    {
        background: #fff;
    }
    .mainbannercontent > p 
    {
        margin-bottom:35px;
    }
    
</style>

<!--------------------------------- Main banner start ----------------------------------->

  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                        Business Stationery Design Services
                    </h1>
                    <p class="text-white">
                        Boost your brand's professionalism with our business stationery design services. At Design Derive, we specialize in creating custom business cards, letterheads, and complete stationery packages that reflect your corporate identity and connect with your target audience.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/stationaryhero.webp') }}" alt="" />
                </div>
        </div>
    </div>
    </div>
</section>

<!------------------ Logo slider start ------------------->

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
                        <h2>Types of Business Stationery Designs</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                            Design Derive is your creative partner in transforming your brand's intent into actual assets. Our expert designers craft business stationery that not only looks stunning but also serves as a powerful tool for business communication and brand reinforcement.
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
                                <h4>Business Cards</h4>
                                <p class="mb-4">
                                    Our business card and stationery design services create impactful cards for professional networking, ensuring each design perfectly represents your brand, from classic to modern.
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
                                <h4>Letterheads</h4>
                                <p class="mb-4">
                                    Our professional stationery design includes creating elegant, functional letterheads that ensure your corporate documents reflect your brand's identity and attention to detail.
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
                                <h4>Envelopes</h4>
                                <p class="mb-4">
                                    We design custom envelopes that complement your business stationery, strengthen your brand with every piece of mail sent.
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
                                <h4>Notepads</h4>
                                <p class="mb-4">
                                    Our notepad designs integrate your brand into every page, making them an important tool for enhancing your branding strategy in all communications.
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
                                <h4>Folders</h4>
                                <p class="mb-4">
                                    Our corporate stationery design ensures that your folders are practical and beautifully elaborated with your brand's logo and colors, serving as effective brand ambassadors.
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
                                <h4>Complete Stationery Sets</h4>
                                <p class="mb-4">
                                    Our stationery package design ensures a consistent look across all office materials, including business cards and notepads, reflecting your brand's identity.
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
                        <h2 class="contactusheading">Improve Your Corporate Identity with Our Best Business Stationery Design Services</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                         <p>
                            Business stationery is more than just paper; it's a part of your brand's ongoing conversation with clients and partners. At Design Derive, our business stationery design services are customized to convey your brand's story effectively, ensuring that each interaction leaves a lasting impression.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/stationaryboosting.webp') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About us start ------------------------------>
<section class="aboutmainsec mb-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/stationaryimpressive.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>Cost-Effective <span class="darkh2">Business Stationery Design Packages for Every Need</h2>
                        <div class="bar"></div>
                        <p>
                            As a premier design agency, we understand the importance of balancing quality and affordability. Our business stationery design packages are designed to provide you with professional, high-quality stationery at a fraction of the cost of traditional design services. From startups to established enterprises, we cater to all businesses, ensuring your stationery reflects your brand's identity and professionalism.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Creative concepts</li>
                          <li class="py-1">Custom Designs</li>
                          <li class="py-1">Elegant visuals</li>
                          <li class="py-1">100% ownership</li>
                        </ul>
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
                        <h2 class="contactusheading">Expertise in Custom Business Stationery Design</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                         <p>
                            At Design Derive, our commitment to excellence extends beyond just affordable prices. We offer custom business stationery design services that are made to meet the unique needs of each client. Whether you need a minimalist design or a luxurious, detailed look, our team has the skills and experience to bring your vision to life.
                        </p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/stationarydesign01.webp') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About us start ------------------------------>
<section class="aboutmainsec p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/stationarydesign02.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>Best <span class="darkh2">Value with Our Stationery Design Services at Affordable Prices</h2>
                        <div class="bar"></div>
                        <p>
                            We believe every business deserves stunning stationery without going over budget. Our comprehensive stationery design services include everything from initial concepts to final delivery. We work closely with you to understand your brand's personality and values, translating them into stationery that speaks volumes about your business.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Creative concepts</li>
                          <li class="py-1">Custom Designs</li>
                          <li class="py-1">Elegant visuals</li>
                          <li class="py-1">100% ownership</li>
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
                        Design Manhattan has proudly proved its digital intelligence in
                        a world where brands are at digital war. Scroll down to see our
                        innovative portfolio to make your minds work with us once.
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/1.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/1.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/2.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/2.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/3.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/3.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/4.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/4.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/5.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/5.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/6.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/6.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/71.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/71.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/8.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/8.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/9.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/9.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/101.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/101.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/11.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/11.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/stationary/12.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/stationary/12.webp') }}" />
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
                        Design Manhattan exclusively goes through an eco-friendly
                        pricing range to facilitate businesses ranging from small to
                        giant ones. We allow our clients to utilize our customer-centric
                        digital services. We deliver what we promise as our words.
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
                    <h2>Your Trusted Partner in Business Stationery Design</h2>
                    <div class="bar"></div>
                    <p>
                        Design Derive is more than just a stationery design firm; we're your partners in branding success. Our approach combines creative skills with strategic thinking, ensuring that each piece of stationery we create not only looks fantastic but also improves your brand's communication strategy.
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
                        What are included in your business stationery design packages? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our packages offer a comprehensive range of items including business cards, letterheads, envelopes, notepads, and folders, all tailored to enhance your brand identity.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        In what amount of time does a project involving stationery design get finished? 
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The timeline varies based on the complexity and requirements of the project, but we typically deliver initial designs within 1-2 weeks.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I see samples of your creative stationery design work? 
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we have a portfolio showcasing various successful projects that demonstrate our creativity and skill in stationery design.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        What makes your custom stationery design services stand out? 
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We focus on understanding your brand's unique needs and crafting designs that effectively communicate your brand's values and personality.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How do I get started with your custom stationery design company? 
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Simply contact us through our website or phone, and our team will guide you through the process, starting with a detailed consultation.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        Are revisions included in your stationery design services? 
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we offer a set number of revisions to ensure the final product meets your complete satisfaction.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Do you work with businesses outside of Manhattan? 
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Absolutely, we offer our services to clients nationwide, ensuring quality and consistency regardless of location.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        What file formats will I receive my stationery designs in? 
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>You will receive your designs in multiple formats, including PDF, JPG, and editable source files, to suit various usage needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        How do you ensure quality in your stationery design companies? 
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We maintain high standards by employing experienced designers, using the latest design tools, and following a rigorous quality check process.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        Can I request a specific theme or color scheme for my stationery? 
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we work closely with you to incorporate any specific themes, colors, or branding elements into your stationery design.</p>
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
                    <h5>What Our Clients Say</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients often tell us how our business stationery design services have transformed their brand's image and communication effectiveness.
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
                        "Outstanding service! The stationery design perfectly captured our brand's essence and elevated our professional image."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>James Carter</span><br />CEO of Innovatech Solutions</p>
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
                        "The attention to detail and creativity in the design process was impressive. We've received numerous compliments on our new stationery."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Maria Rodriguez</span><br />Marketing Director at EcoGoods</p>
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
                        "Thanks to the team for their exceptional work. The custom stationery has truly made our business correspondence stand out."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Liam Chen</span><br />Founder of StartSmart Consulting</p>
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
                        "Professional, prompt, and proactive—everything we looked for in a design partner. The final products were beyond our expectations."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emma Wilson</span><br />Operations Manager at HealthPlus Clinics</p>
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
                        "Every piece of our event stationery was beautifully crafted. The colors and design matched our theme perfectly!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sophia Martin</span><br />Events Coordinator at Prestige Events</p>
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
                        "Efficient and effective, the design team delivered exactly what we needed in a very tight timeline. Highly recommend!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Ethan Taylor</span><br />CFO of TechAdvantage</p>
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