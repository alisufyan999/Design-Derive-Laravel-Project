@extends('frontend.layouts.master')
@section('content')
<style>
    
 section.commonpagebanner
{
    height:550px;
}
.mainbannercontent > h1
{
    text-align:left;        
}
.mainbannercontent > p 
{
    font-size: 16px;
    font-weight: lighter;
    text-align:left;
    margin-top:13px;
}
.absolute-center 
{
    position: absolute;
    top: 43%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.commonpagebanner-image img
{
    width: 100%;
    max-width: 450px;
    margin-left: auto;
    display: block;      
}
.aboutpagebannerdiv > p
{
    font-size:15px;
}
    
</style>

    <!-- Main banner start -->
    <section class="aboutpagebannersec">
        <div class="container absolute-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 text-center my-auto">
                    <div class="aboutpagebannerdiv">
                        <h1>About Us</h1>
                        <p>At Design Derive, our purpose is to use creativity and innovation to create extraordinary design solutions that inspire, engage, and drive success. With a passion for design and a dedication to perfection, we try to exceed our clients' expectations and bring their visions to life.</p>
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
                        <h5>Why Choose Us?</h5>
                        <h2>Delivering Excellence in Every Project</h2>
                        <div class="bar"></div>
                        <p>
                            Our commitment to expertise guarantees that each project we undertake meets the highest standards. We focus on delivering innovative solutions that meet your unique needs and drive your brand forward.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-3 aboutpagesolutionrow">
                <div class="col-md-4 col-sm-12 text-center p-0">
                    <div class="aboutpagesolutiondiv">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset('frontend/assets/images/aboutus/whychooseus/1/01.webp') }}"
                                    width="100%" />
                            </div>
                            <div class="col-8 text-start my-auto">
                                <h4>Years Of Experience</h4>
                                <p class="mb-4">
                                    With decades of experience, our team brings expertise and knowledge to every project, ensuring top-notch results.
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
                                <h4>Full-Service Studio</h4>
                                <p class="mb-4">
                                    From concept to completion, we offer a full range of design services to meet all your creative needs.
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
                                <h4>Quality Work</h4>
                                <p class="mb-4">
                                    We are dedicated to offering exceptional service that meets the highest levels of professionalism.
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
                                <h4>Affordable</h4>
                                <p class="mb-4">
                                    Our services are clearly priced to deliver outstanding value while maintaining high standards.
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
                                <h4>Quick Turnaround Time</h4>
                                <p class="mb-4">
                                    We understand the importance of time, which is why we prioritize quick turnaround times without sacrificing quality.
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
                                <h4>Latest Technology</h4>
                                <p class="mb-4">
                                    Utilizing the latest technology and tools, we ensure our designs are cutting-edge and ahead of the curve.
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
                        <h5>Activities And Skills</h5>
                        <h2 class="contactusheading">Comprehensive Expertise for Your Business Needs</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <ul class="pointsul">
                            <li class="py-1">
                                <strong>Cost Management: </strong> Excellent communicators, ensuring clarity and accuracy.
                            </li>
                            <li class="py-1">
                                <strong>Corporate Strategy: </strong> Delivering results that drive corporate growth and success.
                            </li>
                            <li class="py-1">
                                <strong>SEO Expertise: </strong> Willing to travel to ensure effective implementation.
                            </li>
                            <li class="py-1">
                                <strong>Business Planning: </strong> Creating business plans that outline your vision and strategy.
                            </li>
                            <li class="py-1">
                                <strong>Technical Proficiency: </strong> Leveraging the latest tools and technologies.
                            </li>
                            <li class="py-1">
                                <strong>Efficient Execution: </strong> Designing customer-directed portals with quality.
                            </li>
                            <li class="py-1">
                                <strong>Clear Communication: </strong> Facilitating smooth collaboration and project management.
                            </li>
                            <!--<li class="py-1">-->
                            <!--    <strong>Project Completion: </strong> Meeting deadlines and exceeding expectations.-->
                            <!--</li>-->
                            <!--<li class="py-1">-->
                            <!--    <strong>Client-Focused Service: </strong> Providing personalized and client-focused service.-->
                            <!--</li>-->
                        </ul>
                        <!--<a href="#" class="moreportfoliobtn">Order Now</a>-->
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="editorbar" src="{{ asset('frontend/assets/images/aboutus/whychooseus/1.webp') }}" />
                </div>
            </div>
        </div>
    </section>

    <!-- About us start -->
    <!--<section class="aboutmainsec mb-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                      <img src="img/team.png">
                  </div>
                  <div class="col-md-6 col-sm-12 text-left my-auto">
                      <div class="aboutsidecontent">
                          <h5>About Us</h5>
                          <h2>Innovation Makes Us Different</h2>
                          <div class="bar"></div>
                          <p>Our creative digital service places us on a digital ground where brands meet success. We empower brands under innovative digital service to make
                          them count more bucks by providing value and beneficial factors to customer lives.</p>
                          <a href="#">Live Chat</a>
                      </div>
                  </div>
              </div>
          </div>
        </section>-->

    <!-- Progress start -->
    <section class="mb-5 section-padding-1920 pb-0-1920">
        <div class="container">
            <div class="row mb-4 mb-0-1920">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h5>About Us</h5>
                        <h2 class="contactusheading">Our Commitment to Excellence</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p class="mb-4 parasidecontent">
                            Design Derive is built on the principles of creativity, innovation, and excellence. Our dedicated staff works continuously to bring your idea to reality.  We believe in the power of design to transform businesses and create lasting impressions. Our dedication to cost, quality, and client satisfaction differentiates us in the industry.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="sectionheadingdiv mb-4">
                        <h5>Professional Skills</h5>
                        <h2 class="contactusheading">Expertise That Drives Results</h2>
                        <!--<div class="bar" style="margin: 13px 0px;"></div>-->
                    </div>
                    <p class="progressbartext">Technical Marketing:</p>
                    <div class="progress">
                        <span>80%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="10"
                            aria-valuemax="100" style="width: 0%"></div>
                    </div>

                    <p class="progressbartext">Marketing:</p>
                    <div class="progress">
                        <span>70%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="10"
                            aria-valuemax="100" style="width: 0%"></div>
                    </div>

                    <p class="progressbartext">Web Consulting:</p>
                    <div class="progress">
                        <span>85%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="10"
                            aria-valuemax="100" style="width: 0%"></div>
                    </div>

                    <p class="progressbartext">Web Development:</p>
                    <div class="progress">
                        <span>55%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="10"
                            aria-valuemax="100" style="width: 0%"></div>
                    </div>

                    <p class="progressbartext">Creative Strategy:</p>
                    <div class="progress">
                        <span>75%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="10"
                            aria-valuemax="100" style="width: 0%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow start -->
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
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What services does Design Derive offer? 
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We offer a wide range of design services including custom corporate logo design, 3D logo design, brand identity development, graphic design, and web design and development.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How long has Design Derive been in business? 
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Design Derive has been providing exceptional design solutions for many years, backed by a team with decades of combined experience.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What makes Design Derive different from other design agencies? 
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our loyalty to high standards creativity, and customer satisfaction defines us. We focus on delivering high-quality work, quick turnaround times, and using the latest technology.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Can you handle projects of all sizes? 
                      </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Yes, we have the expertise and resources to handle projects of all sizes, from small businesses to large corporations.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        How do you ensure the quality of your work? 
                      </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We have a thorough quality assurance process in place, including multiple review stages and client feedback, to ensure the highest standards of excellence.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        What is your pricing structure? 
                      </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>Our services are competitively priced to provide exceptional value without compromising on quality. For detailed pricing, please contact us directly.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        How can I get started with Design Derive? 
                      </button>
                    </h2>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>You can get started by contacting us through our email (“Add email”) or phone ((Add Ph No). We look forward to discussing your design needs and how we can help bring your vision to life.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

    <!-- Testimonial start -->
    <section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-4">
                    <div class="sectionheadingdiv">
                        <h5>Client Experiences</h5>
                        <h2>What Our Clients Say</h2>
                        <div class="bar"></div>
                        <p>
                            Our clients consistently praise our creativity, attention to detail, and commitment to excellence. They appreciate our collaborative approach and the way we bring their visions to life with innovative design solutions. We value our clients' feedback and strive to exceed their expectations in every project we undertake.
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
                            "Design Derive brought our vision to life with exceptional creativity and professionalism."
                        </p>
                        <div class="testimonialbottom">
                            <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                                alt="Testimonial person image" />
                            <p><span>Sarah Johnson</span><br />Marketing Director at Atech Corp.</p>
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
                            "The team's attention to detail and commitment to quality is unparalleled. Highly recommended!"
                        </p>
                        <div class="testimonialbottom">
                            <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                                alt="Testimonial person image" />
                            <p><span>James Thompson</span><br />CEO of Xelios Ltd.</p>
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
                            "Their innovative approach and quick turnaround time have been a game-changer for our brand."
                        </p>
                        <div class="testimonialbottom">
                            <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                                alt="Testimonial person image" />
                            <p><span>Emily Brown</span><br />Creative Head at Creative Solutions.</p>
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
                            "Working with Design Derive was a great experience. They truly understand our needs."
                        </p>
                        <div class="testimonialbottom">
                            <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                                alt="Testimonial person image" />
                            <p><span>Michael Davis</span><br />Product Manager at Tech Innovations.</p>
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
                            "The designs exceeded our expectations and perfectly captured our brand's essence."
                        </p>
                        <div class="testimonialbottom">
                            <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                                alt="Testimonial person image" />
                            <p><span>Laura Wilson</span><br />Brand Manager at Fashion Forward.</p>
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
                            "We couldn't be happier with the results. Design Derive is our go-to design agency."
                        </p>
                        <div class="testimonialbottom">
                            <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                                alt="Testimonial person image" />
                            <p><span>David Anderson</span><br />Founder of Startup Inc.</p>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection