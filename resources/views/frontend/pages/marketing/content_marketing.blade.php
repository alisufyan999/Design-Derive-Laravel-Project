@extends('frontend.layouts.master')
@section('content')

<style>
ul.pointsul.financiallist {
    column-count: 1 !important;
}

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

</style>

<!--------------------------- Main banner start ------------------------------>
  <section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">
                     Content Marketing Agency Services
                    </h1>
                    <p class="text-white">
                        Boost your traffic, lead optimization, and sales with our effective content marketing strategy. We help your business grow and improve conversion rates.
                    </p>
                    <a href="#" class="moreportfoliobtn">Get Started Now</a>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/cm-heroimg.png') }}" alt="" />
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
                    <img class="editorbar" src="{{ asset('frontend/assets/images/cm-img1.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Attract And Convert Qualified Traffic With Content Marketing</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            Content marketing is essential for businesses, particularly startups that are in the process of establishing their identity. Our approach focuses on developing and sharing uniquely valuable content. This content is original, engaging, straightforward, and designed to inspire and captivate your audience. We ensure your message reaches a wide audience across various channels and platforms.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- Logo About start -->
    <section class=" section-padding-1920 pb-5 pt-5 pb-0-1920 " style="background-color: #f2f2f2">
        <div class="container">
            <div class="row  ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Affordable Full Service Content Marketing Agency</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            As a leading content marketing agency, we deliver high quality content marketing services to businesses. Our team of skilled writers creates content aimed at converting visitors into customers. Our services include:
                        </p>
                        <ul class="pointsul financiallist">
                          <li >Developing strategic content plans</li>
                          <li >Creating impactful content</li>
                          <li >Efficiently distributing and publishing content</li>
                          <li >Tailoring content for e-commerce</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/cm-img2.png') }}" />
                </div>
            </div>
        </div>
    </section>
    
     <!-- Logo About start -->
    <section class="mb-5 section-padding-1920 pt-5 pb-0-1920">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                 <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/contentmarketing/3.webp') }}" />
                </div>
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Expert Blog Content Marketing Services</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            A blog is more than a place to share thoughts in current times. It's a vital tool for establishing brand authority and boosting SEO. Our blog content marketing services keep your audience engaged and informed. We produce content that fits your brand's style and goals, ensuring readers return for more.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- Logo About start -->
    <section class=" section-padding-1920 pb-5 pt-5 pb-0-1920 " style="background-color: #f2f2f2">
        <div class="container">
            <div class="row  ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading">Best B2B Content Marketing Agency for a Full-Brand Experience</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            Design Derive goes beyond content to create a full brand experience. As a leading B2B content marketing agency, we ensure your content fully represents your brand's identity and strategy. Our focus includes:
                        </p>
                        <ul class="pointsul financiallist">
                          <li >Providing cost-effective solutions to enhance your business's value</li>
                          <li >Strengthening your brand's presence with effective corporate communication</li>
                          <li >Developing SEO strategies for better visibility</li>
                          <li >Creating clear business plans with measurable results</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                     <img class="img-fluid" src="{{ asset('frontend/assets/images/contentmarketing/4.webp') }}" />
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
                        What are the benefits of content marketing managed services? 
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Content marketing managed services ensure consistent quality and strategic alignment with your business goals, growing your brand's authority and online visibility.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do your content marketing copywriting services stand out? 
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our services improve your brand's online visibility by writing interesting facts that increase engagement and combine creativity with SEO expertise.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I access freelance content marketing services through your agency? 
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we partner with top freelancers to provide flexible, content solutions that meet your business needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        What makes your content marketing agency services exceptional? 
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We use deep industry insights and innovative strategies to deliver engaging, conversion-focused content that sets us apart.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Are your content marketing services in USA? 
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we offer localized solutions across the USA to meet regional and national business needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        How is the pricing structured for your content marketing services? 
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our content marketing services pricing is transparent and flexible, with options to suit various budgets and ensure value-driven results.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        How does your inbound marketing content agency drive results? 
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We optimize content for user intent and search engines to boost your inbound marketing efforts and ROI.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        How can I find a top content marketing agency near me? 
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our extensive network ensures access to top-tier expertise and personalized service, regardless of your location.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        What are key considerations when hiring a content marketing agency? 
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Check their industry experience, client success, brand understanding, and capable strategy for content creation, distribution, and measurement.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        What distinguishes you as a specialized content marketing agency? ten
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our specialization lies in strategies for diverse industries, innovation, and measurable results that drive brand growth and engagement.</p>
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
                    <h5>About Us</h5>
                    <h2>What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p>
                        We enhance brands with our innovative digital services, adding value to your customers' lives. Our commitment to delivering high-quality content has made us a preferred partner for many businesses' growth.
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
                    <h5>What Our Client Says</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        Our clients consistently praise the transformational impact of our content marketing services. From enhancing online visibility to driving increased engagement, the feedback underscores our commitment to delivering high-quality, effective strategies that cater to the unique needs of each business.
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
                            alt="Testimonial person image" />
                        <p><span>Meghan Christ</span><br />C.E.O</p>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <div class="testimonialbottom">
                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/testimonials/test.webp?updatedAt=1633439814783"
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