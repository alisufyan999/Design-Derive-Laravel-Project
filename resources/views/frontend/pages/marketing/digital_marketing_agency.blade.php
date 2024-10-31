@extends('frontend.layouts.master')
@section('content')

<style>
    section.aboutmainsec .sectionheadingdiv h2, section.aboutmainsec p {
    color: #fff;
}

section.aboutmainsec .bar {
    background-image: linear-gradient(to right, #ffffff94 20%, #ffffff);
}
.faqs .accordion-button:not(.collapsed) {
    color: #222;
    background-color: transparent;
    box-shadow: unset;
}

.faqs .accordion-item {
    padding: 10px 0;
    border-right: unset;
    border-left: unset;
    background-color: transparent;
}
.faqs .accordion-item h2 button {
    background-color: transparent;
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
    section.about-section .aboutsidecontent > h3 
    {
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 600;
    }
    section.about-section .aboutsidecontent > h3
    {
        color: #fff;
        font-family: 'Larsseit-Bold', sans-serif;
        font-size: 35px;
        font-weight: 600;
    }
    section.about-section .aboutsidecontent > h4
    {
        color: #fff;
        font-family: 'Larsseit-Bold', sans-serif;
        font-size: 20px;
        font-weight: 600;
        width: 480px;
    }
    section.about-section .aboutlist1
    {
        column-count: auto;
    }
    section.about-section ul.pointsul.financiallist 
    {
        column-count: auto;
    }
    section.about-section a.moreportfoliobtn
    {
        border: 2px solid #fff;
        color: #fff;
    }
    section.about-section a.moreportfoliobtn:hover
    {
        color: #f15874;
    }
    section.portfolio-section .smallheading1
    {
        color: #f15874;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }
    section.about-section .smallheading1
    {
        color: #f15874;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }
    section.testing-section .smallheading1
    {
        color: #f15874;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }
    .faq-section .smallheading1
    {
        color: #f15874;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }
    .aboutmainsec .portfoliotab > li > a.active
    {
         background-color: unset !important;
    }
    .black_belt_portfolio{
        height: 51%;
    }
    
    @media (min-width: 1200px){
        .faqs .accordion-button{
            font-size: 1.225rem;
        }
        .faqs .accordion-body p{
            font-size: 1.125rem;
        }
        .close-btn {
            right: 15px;
            top: 15px;
        }
    }
    
    @media (min-width: 1900px){
        .aboutsidecontent {
            padding: 40px 0px;
        }
        .abousideimgdiv > img {
            min-height: 573px;
        }
    }
    
</style>

<!--------------------------- Main banner start ------------------------------>
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                     Best Digital Marketing Company in USA
                    </h1>
                    <p class="text-white">
                       Discover exclusive digital marketing solutions with the best digital marketing company in the USA. Our expert team is dedicated to boost your brand and connect you with your target audience through innovative strategies.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/digital-agency-heroimg.png') }}" alt="" />
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
                    <img class="editorbar" src="{{ asset('frontend/assets/images/expand-digital.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Transform Your Business with the Best Digital Marketing Agency USA</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                              Improve your business with cutting-edge strategies from the best digital marketing agency USA. We specialize in creating digital marketing plans that drive engagement, boost conversions, and increase your online presence. Our team is committed to delivering exceptional results through innovative approaches and proven techniques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec about-section mb-5 p-5">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <!--<h5>Now Low Budgets Will Boost Your Brand</h5>-->
                    <h2>Achieve Superior Results with Our Expert Digital Marketing Services</h2>
                    <div class="bar"></div>
                    <p>
                         Drive significant growth and maximize your return on investment with our top-tier digital marketing services. As the best digital marketing firm in USA, we offer customized and affordable solutions designed to meet the unique needs of businesses of all sizes.

                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <ul class="nav nav-tabs portfoliotab mb-5" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="logopricing-tab" data-bs-toggle="tab"
                            href="#logopricing" role="tab" aria-controls="logopricing"
                            aria-selected="true">SEO</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="brandpricing-tab" data-bs-toggle="tab" href="#brandpricing"
                            role="tab" aria-controls="brandpricing" aria-selected="false">PPC</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="websitepricing-tab" data-bs-toggle="tab"
                            href="#websitepricing" role="tab" aria-controls="websitepricing"
                            aria-selected="false">SMM</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="videopricing-tab" data-bs-toggle="tab" href="#videopricing"
                            role="tab" aria-controls="videopricing" aria-selected="false">
                            Email Marketing</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contentwriting-tab" data-bs-toggle="tab" href="#contentwriting"
                            role="tab" aria-controls="contentwriting" aria-selected="false">Content Writing</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="logopricing" role="tabpanel"
                        aria-labelledby="logopricing-tab">
                        <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/da-tabs1.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h3>Boost Your <span class="darkh2">Online Visibility</h3>
                        <h4>Optimize Your Website with a Digital Marketing Expert in the USA</h4>                        
                                                
                        <div class="bar"></div>
                        
                        <p>Effective SEO is essential for online visibility. Our team of experts uses the latest techniques to improve your search engine rankings and drive organic traffic to your website. As one of the best digital marketing firms in the USA, we ensure your business gets the attention it deserves.</p>
                        
                        <ul class="pointsul financiallist aboutlist1">
                          <li class="py-1">Creative strategies</li>
                          <li class="py-1">Custom SEO plans</li>
                          <li class="py-1">Data-driven results</li>
                          <li class="py-1">100% transparency</li>
                        </ul>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="tab-pane fade" id="brandpricing" role="tabpanel"
                        aria-labelledby="brandpricing-tab">
                        <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/digitalmarketing/ppc.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h3>Immediate <span class="darkh2">Results with PPC</h3>
                        <h4>Hire a Top PPC Specialist in USA</h4>
                        <p> For immediate outcomes, pay-per-click (PPC) advertising is an effective method. Our skilled PPC specialists design targeted campaigns that maximize your ad spend and increase conversions.You can hire a digital marketing expert in USA, to boost your online presence.</p>
                        
                        <div class="bar"></div>
    
                        <ul class="pointsul financiallist aboutlist1">
                          <li class="py-1">Targeted campaigns</li>
                          <li class="py-1">Cost-effective solutions</li>
                          <li class="py-1">Detailed analytics</li>
                          <li class="py-1">Proven ROI</li>
                        </ul>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="tab-pane fade" id="websitepricing" role="tabpanel"
                        aria-labelledby="websitepricing-tab">
                        <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/digitalmarketing/smm.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h3>Grow Your <span class="darkh2"> Reach with Social Media</h3>
                        <h4>Engage Your Audience with a Social Media Expert in USA</h4>
                        <p> Social Media Marketing (SMM) connects your brand with a larger audience. Our creative and strategic social media campaigns engage your followers and expand your reach. As a leading digital marketing agency in USA, we help you utilizing the social media.</p>
                        
                        <div class="bar"></div>
    
                        <ul class="pointsul financiallist aboutlist1">
                          <li class="py-1">Engaging content</li>
                          <li class="py-1">Platform-specific strategies</li>
                          <li class="py-1">Audience growth</li>
                          <li class="py-1">Brand loyalty</li>
                        </ul>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="tab-pane fade" id="videopricing" role="tabpanel"
                        aria-labelledby="videopricing-tab">
                        <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/digitalmarketing/email-marketing.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h3>Connect Directly <span class="darkh2">to Customers</h3>
                        <h4>Drive Sales with Expert Email Marketing in USA</h4>
                        <p> One of the best methods for reaching your customers is still email marketing. Our personalized email campaigns are designed to nurture leads and drive sales. Partner with the best digital marketing company in USA to make the most of your email marketing efforts.</p>
                        
                        <div class="bar"></div>
    
                        <ul class="pointsul financiallist aboutlist1">
                          <li class="py-1">Customized templates</li>
                          <li class="py-1">Automated campaigns</li>
                          <li class="py-1">Performance tracking</li>
                          <li class="py-1">High conversion rates</li>
                        </ul>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="tab-pane fade" id="contentwriting" role="tabpanel"
                        aria-labelledby="contentwriting-tab">
                        <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img class="financialipad" src="{{ asset('frontend/assets/images/digitalmarketing/content-writing.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-left my-auto">
                    <div class="aboutsidecontent">
                        <h3>Engage with<span class="darkh2">Quality Content</h3>
                        <h4>Enhance Your Brand Voice with a Content Expert in the USA</h4>
                        <p> Any successful marketing plan relies heavily on high-quality content. Our talented writers create compelling content that resonates with your audience and supports your marketing goals. As an affordable digital marketing agency in USA, we deliver top-notch content that drives engagement.</p>
                        
                        <div class="bar"></div>
    
                        <ul class="pointsul financiallist aboutlist1">
                          <li class="py-1">SEO-friendly content</li>
                          <li class="py-1">Creative storytelling</li>
                          <li class="py-1">Brand-aligned messaging</li>
                          <li class="py-1">Consistent quality</li>
                        </ul>
                    </div>
                </div>
            </div>
                    </div>
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

 <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Expand Your Brand with Our Creative Marketing Solutions</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                             Creativity and innovation are key to making your brand stand out. Our creative marketing solutions include everything from website design to graphic design, ensuring that your brand captures and retains the attention of your target audience. As the best digital marketing agency in USA, we combine creativity with strategy to deliver impactful and memorable visuals.
                        </p>
                        <ul class="pointsul financiallist">
                          <li >Innovative designs</li>
                          <li >Tailored visual identity</li>
                          <li >Engaging graphics</li>
                          <li >Memorable branding</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/digitalmarketing/3.webp') }}" />
                </div>
            </div>
        </div>
    </section>
    
     <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/digitalmarketing/4.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Reach Your Potential with Our Digital Marketing Strategies</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p> Utilize our all-inclusive digital marketing strategies to maximize the potential of your business. We provide an in-depth approach to digital marketing, integrating various channels and tactics to ensure maximum impact. Our strategies are designed to drive growth, grow brand awareness, and achieve your business objectives.</p>
                        <ul class="pointsul financiallist">
                          <li >Integrated marketing plans</li>
                          <li >Multi-channel approach</li>
                          <li >Data-driven tactics</li>
                          <li >Continuous optimization</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<!--------------------------- Portfolio start ------------------------------>
<section class="pt-5 pb-5 section-padding-1920 portfolio-section" style="background-color: #f2f2f2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h2 class="smallheading1">Showcase The Creativity</h2>
                    <h2>Our Creative Portfolio</h2>
                    <div class="bar"></div>
                    <p>
                        Design Derive has consistently demonstrated digital excellence in a competitive marketplace. Browse through our innovative portfolio to see why we are providing the best of digital marketing services for USA.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 mb-4">
                <ul class="nav nav-tabs portfoliotab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="allportfolio-tab" data-bs-toggle="tab"
                            href="#allportfolio" role="tab" aria-controls="allportfolio"
                            aria-selected="true">All</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="logoportfolio-tab" data-bs-toggle="tab" href="#logoportfolio"
                            role="tab" aria-controls="logoportfolio" aria-selected="false">Logo Design</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="brandingportfolio-tab" data-bs-toggle="tab"
                            href="#brandingportfolio" role="tab" aria-controls="brandingportfolio"
                            aria-selected="false">Branding</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="websiteportfolio-tab" data-bs-toggle="tab"
                            href="#websiteportfolio" role="tab" aria-controls="websiteportfolio"
                            aria-selected="false">Website</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="videoportfolio-tab" data-bs-toggle="tab" href="#videoportfolio"
                            role="tab" aria-controls="videoportfolio" aria-selected="false">Video
                            Animation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 mt-4 mb-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="allportfolio" role="tabpanel"
                    aria-labelledby="allportfolio-tab">
                    <div class="row">
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/1.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/1.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/6.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/6.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/4.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/4.webp') }}" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/5.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/5.jpg" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-img black_belt_portfolio">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/11.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/11.jpg" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/9.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/9.jpg" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/7.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/7.jpg" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/website/6-big.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/3.jpg" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/2.jpg?updatedAt=1632988707947"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/2.jpg?updatedAt=1632988707947" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/8.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/all/8.jpg" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/logo/2.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/logo/2.jpg" />
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
                                        <a href="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/logo/6.jpg"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="https://ik.imagekit.io/desginmanhattan/images/portfolio-new/logo/6.jpg" />
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
                <div class="tab-pane fade" id="logoportfolio" role="tabpanel"
                    aria-labelledby="logoportfolio-tab">
                    <div class="row">
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/1.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/1.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/5.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/5.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/9.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/9.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/2.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/2.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/6.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/6.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/10.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/10.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/3.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/3.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/7.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/7.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/11.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/11.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/4.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/4.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/8.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/8.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/logodesign/12.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/logodesign/12.webp') }}" />
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
                <div class="tab-pane fade" id="brandingportfolio" role="tabpanel"
                    aria-labelledby="brandingportfolio-tab">
                    <div class="row">
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/1.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/1.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/2.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/2.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/3.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/3.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img ">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/4.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/4.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/5.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/5.webp') }}">
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/6.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/6.webp') }}">
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/7.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/7.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/8.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/8.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/9.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/9.webp') }}">
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img ">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/10.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/10.webp') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/11.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/11.webp') }}">
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
                                        <a href="{{ asset('frontend/assets/images/portfolio/branding/12.webp') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/branding/12.webp') }}">
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
                <div class="tab-pane fade" id="websiteportfolio" role="tabpanel"
                    aria-labelledby="websiteportfolio-tab">
                    <div class="row">
                        <div class="col-md-4 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/dm-p1.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p1.png') }}" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4 portfoliotabcol">
 
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/dm-p2.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p2.png') }}" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/dm-p3.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p3.png') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/dm-p4.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p4.png') }}" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/dm-p5.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p5.png') }}" />
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
                                        <a href="{{ asset('frontend/assets/images/dm-p6.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p6.png') }}" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/dm-p7.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p7.png') }}" />
                                            <div class="content-details fadeIn-top">
                                                <i class="fa fa-plus plusicon" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="{{ asset('frontend/assets/images/dm-p8.png') }}"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/dm-p8.png') }}" />
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
                <div class="tab-pane fade" id="videoportfolio" role="tabpanel"
                    aria-labelledby="videoportfolio-tab">
                    <div class="row">
                        <div class="col-md-3 portfoliotabcol">
                            <div class="portfolio-img">
                                <div class="maincontent">
                                    <div class="content">
                                        <a href="https://www.youtube.com/watch?v=msAOI_E9TxM"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/1.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=7ASYiLR4r8k"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/2.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=nkd9k968g4o"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/3.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=qFdcyCpnhqQ"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/4.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=2iiJWpxV1Xk"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/5.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=P1vhtskqB2E"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/6.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=nKZ5MLc3z2s"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/7.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=GsT4WLMFQcA"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/8.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=cJs_8l8qtUk"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/9.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=ddJGk-yBH8U&t=1s"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/10.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=JXQABQZd3wk"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/11.webp') }}" />
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
                                        <a href="https://www.youtube.com/watch?v=s_4mJq8fonU"
                                            data-fancybox="gallery">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                src="{{ asset('frontend/assets/images/portfolio/videoanimtion/12.webp') }}" />
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
                <a href="#" class="main moreportfoliobtn">Our More Creative Work</a>
            </div>
        </div>
    </div>
</section>

<!--------------------------- FAQs start ------------------------------>
<section class="pt-5 pb-5 section-padding-1920 faqs faq-section" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            
             <div class="col-md-12 col-sm-12 text-center mb-4">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Which advantages are included in hiring a digital marketing agency?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Hiring a digital marketing agency provides expert strategies, saves time, and ensures your brand stays ahead in a competitive market.</p>                        
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do I choose a reliable digital marketing firm in the USA?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Look for a digital marketing firm USA with proven results, client testimonials, and a comprehensive range of services customized to your needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What sets your services apart from other top digital marketing agencies in USA?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our unique approach combines creativity, data-driven strategies, and personalized service, making us stand out among the top digital marketing agencies USA.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Why should I work with one of the top digital marketing companies in USA?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Working with a leading digital marketing company in USA ensures access to advanced tools, experienced professionals, and effective marketing strategies that drive results.</p>                        
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                       What services does your digital marketing company in the USA offer?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our digital marketing company in the USA offers SEO, PPC, SMM, email marketing, content writing, and comprehensive digital marketing strategies.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        How can digital marketing service companies in the USA help my business grow?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Digital marketing service companies in USA can increase your online visibility, drive traffic, and enhance customer engagement to boost business growth.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        What is the typical turnaround time for digital marketing campaigns?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>The turnaround time varies based on the complexity and scope of the campaign but generally ranges from a few weeks to several months for optimal results.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                            How is the effectiveness of a digital marketing effort defined?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p>Success is measured through key performance indicators (KPIs) such as website traffic, conversion rates, return on investment (ROI), and engagement metrics.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                            Can you customize digital marketing strategies for my business?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            <p>Yes, we make our digital marketing strategies to meet the unique needs and goals of your business, ensuring maximum impact and success.</p>
                      </div>
                    </div>
                  </div>
                   <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                            Do you offer support and maintenance for ongoing campaigns?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Absolutely, we provide continuous support and maintenance to ensure your campaigns stay effective and adapt to any changes in the market.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<!--------------------------- About Us start ------------------------------>
<section class="aboutmainsec about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img src="{{ asset('frontend/assets/images/aboutus-gang.png') }}" />
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h2 class="smallheading1">About Us</h2>
                    <h2>What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p>
                        At Design Derive, we provide innovative digital marketing services to promote brands. Our commitment to providing significant benefits and advantages makes sure your company grows in the digital era. Partner with us, and experience why we are recognized as one of the best digital marketing companies in the USA.
                    </p>
                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()">Live Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------- Testimonial start ------------------------------>
<section class="pt-5 pb-5 section-padding-1920 testing-section" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h2 class="smallheading1">What Our Clients Say</h2>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our client’s success stories speak for themselves. Hear from businesses that have succeeded with our expert digital marketing services, and learn why we are the preferred choice for many.
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
                        "Outstanding results! Our online presence has significantly improved thanks to their innovative strategies."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>James Carter</span><br />CEO of Innovate Tech</p>
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
                        "Impressive work! The team helped us increase our engagement and drive more traffic to our site."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Ashley Thompson</span><br />Marketing Director at Greenfields</p>
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
                        "Excellent service and great results. Our sales have seen a noticeable boost since partnering with them."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Robert Evans</span><br />Owner of Evans Bakery</p>
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
                        "Highly professional and effective. Their tailored approach has been key to our marketing success."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Olivia Martinez</span><br />Founder of Martinez Fitness</p>
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
                        "Remarkable improvement in our digital campaigns. We saw immediate results and a significant ROI."
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Daniel Scott</span><br />COO of Future Bright</p>
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
                        "Their expertise in SEO and PPC has transformed our online visibility. Highly recommended!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Emily Johnson</span><br />Head of Marketing at Fresh Finds</p>
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