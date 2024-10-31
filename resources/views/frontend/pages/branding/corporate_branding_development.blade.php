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
                        Corporate Branding Services
                    </h1>
                    <p class="text-white">
                        Ensure your brand’s core values are effectively communicated with our top-notch corporate branding services in the USA. Improve your brand image and identity with our comprehensive corporate branding solutions.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/brandagency1hero.webp') }}" alt="" />
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
                        <h2>Types of Corporate Branding</h2>
                        <div class="bar"></div>
                        <!--<hr>-->
                        <p>
                             Design Derive serves as your creative partner, offering various types of corporate branding to transform your brand into something extraordinary. Our affordable corporate branding packages include services such as brand strategy, identity design, and marketing collateral development,
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-3 aboutpagesolutionrow">
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://ik.imagekit.io/designmanhattan/assets/img/about/about_us-01.png?updatedAt=1633615707650"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Brand Strategy Development</h4>
                                <p class="mb-4">
                                    Crafting a strategic plan that defines your brand’s positioning, messaging, and long-term goals, ensuring a strong and focused brand identity.
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
                                <h4>Logo and Identity Design</h4>
                                <p class="mb-4">
                                    Creating a visually compelling logo and brand identity that connects with your target audience and accurately reflects your brand’s values and mission.
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
                                <h4>Marketing Collaterals</h4>
                                <p class="mb-4">
                                    Designing business cards, brochures, and other marketing materials that consistently reflect your brand reputation and help communicate your message effectively.
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
                                <h4>Digital Branding</h4>
                                <p class="mb-4">
                                    Developing a strong online presence through website design, social media branding, and digital marketing strategies to engage with your audience and build brand loyalty.
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
                                <h4>Corporate Brand Refresh</h4>
                                <p class="mb-4">
                                    Updating and strenghten your existing brand to keep it relevant and competitive in the market, ensuring it continues to appeal to your target audience.
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
                                <h4>Employee Branding</h4>
                                <p class="mb-4">
                                    Aligning your internal branding efforts with your overall brand strategy to create a firm brand experience for your employees, directing loyalty and support.
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
                <div class="col-md-6 col-sm-12 text-start">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">The Importance of Corporate Branding</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4"> Corporate branding is crucial for creating a distinct and memorable impression. Our <B>branding and corporate identity services</B> help ensure that your brand not only attracts customers but also conveys long-term trust and loyalty. A well-designed brand identity sets you apart from competitors and establishes a strong connection with your audience, making your brand memorable and respected.</p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/cofee-house.webp') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec mb-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/mockup-branding.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <!--<h5>About Us</h5>-->
                        <h2>The <span class="darkh2"> Role of Logos in Corporate Branding</h2>
                        <div class="bar"></div>
                        <p>
                            Companies often underestimate the importance of corporate logos. Remember, all successful brands, whether SMEs or well-established enterprises, owe much of their success to a strong logo. Having a corporate graphic design logo from professionals makes your brand unique.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Brand Recognition</li>
                          <li class="py-1">Customer Loyalty</li>
                          <li class="py-1">Market Differentiation</li>
                          <li class="py-1">Professionalism</li>
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
                        <h2 class="contactusheading">Grow Your Brand with Our Expert Corporate Branding Consultancy</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4">At Design Derive, our corporate branding consultancy provides expert guidance to help your business develop a powerful and strong brand identity. We work closely with you to understand your unique vision and goals, offering strategic advice and creative solutions that align with your brand's core values. Our consultancy services ensure that every aspect of your branding, from logo design to marketing materials, effectively communicates your message and sets you apart in the competitive marketplace.</p>
                        <a href="#" class="moreportfoliobtn">Get Started</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/cafe-branding.webp') }}" />
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec mb-5 p-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-6 col-sm-12">
                <img class="img-fluid" src="{{ asset('frontend/assets/images/burger-branding.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h2>The <span class="darkh2"> Impact of Brand Consistency in Corporate Branding</h2>
                        <div class="bar"></div>
                        <p>
                            Maintaining brand consistency is crucial for establishing a strong and recognizable brand identity. Consistent branding ensures that your message is clear and firm across all platforms, helping to build trust and reliability with your audience. At Design Derive, we understand the importance of stability in brand presentation and work diligently to align all aspects of your corporate identity.
                        </p>
                        <ul class="pointsul financiallist">
                          <li class="py-1">Enhanced Credibility</li>
                          <li class="py-1">Customer Trust</li>
                          <li class="py-1">Recognition</li>
                          <li class="py-1">Efficiency</li>
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
                        Design Derive showcases its digital expertise in a competitive market. Explore our innovative portfolio to see how our creative solutions improves brands. Let our work inspire you to partner with us for exceptional results.
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-1.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-1.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-2.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-2.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-3.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-3.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-4.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-4.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-5.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-5.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-6.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-6.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-7.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-7.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-8.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-8.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-9.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-9.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-10.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-10.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-11.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-11.jpg') }}" alt="" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/cb-12.jpg') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                           <img class="editorbar" src="{{ asset('frontend/assets/images/portfolio/cb-12.jpg') }}" alt="" />
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
                        Design Derive offers eco-friendly pricing to accommodate businesses of all sizes.Explore our affordable corporate branding packages to find the perfect fit for your business needs.
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
                        We facilitate brands through innovative digital services, helping them generate more revenue by providing value and beneficial factors to their customers' lives.
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
                        What do your corporate branding design services include? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our services include logo creation, brand strategy development, marketing materials, and digital branding to create a cohesive and impactful brand identity.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Are your corporate branding services near me?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we offer corporate branding services nationwide, ensuring professional support and expertise wherever you are located.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why should I choose your company for corporate branding?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We are a leading corporate branding design service company known for our creative approach, tailored solutions, and commitment to upgrading your brand’s identity and market presence.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        How can a corporate branding consultant benefit my business?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our corporate branding consultants provide expert guidance to develop a strategic brand identity that aligns with your business goals and appeals to your target audience.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        What makes corporate branding firms different from traditional marketing agencies?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Corporate branding firms specialize in developing and enhancing brand identity, while traditional marketing agencies cover a broader range of advertising and promotional activities.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        What services does a corporate branding specialist provide? 
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our specialists offer brand strategy, logo design, visual identity development, and brand messaging to create a strong, cohesive brand presence.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        How long does the corporate branding process take?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The duration of the corporate branding process varies depending on the project scope but typically ranges from a few weeks to a few months.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Can you help rebrand an existing business?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we excel in rebranding existing businesses, ensuring your new brand identity is fresh, relevant, and aligned with your evolving goals.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        What industries do you specialize in for corporate branding? 
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We have experience across a wide range of industries, including technology, healthcare, finance, and retail, tailoring our approach to each sector’s unique needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        How do I get started with your corporate branding services?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>To get started, contact us through our website or call our office to schedule a consultation. We’ll discuss your needs and develop a customized branding plan for your business.</p>
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
                        Our clients appreciate our dedication, creativity, and the tangible results we deliver.
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
                        "The branding services transformed our business image. We now have a cohesive and professional brand identity that resonates with our customers."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Sarah L</span><br />Marketing Director</p>
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
                        "Our brand strategy and logo design exceeded expectations. The team's creativity and professionalism are outstanding."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>John D</span><br />C.E.O</p>
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
                        "We saw an immediate impact on customer engagement and loyalty after the rebranding. Highly recommend their services!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emily R</span><br />Business Owner</p>
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
                        "Their expertise in corporate branding helped us stand out in a crowded market. Our new brand identity is fantastic."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Michael B</span><br />Sales Manager</p>
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
                        "The team provided exceptional guidance and creative solutions for our branding needs. We couldn't be happier with the results."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Lisa K</span><br />Chief Marketing Officer</p>
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
                        "From start to finish, the branding process was smooth and efficient. Our new brand identity truly reflects our company's values."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Tom W</span><br />Operations Director</p>
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