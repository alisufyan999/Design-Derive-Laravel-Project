@extends('frontend.layouts.master')
@section('content')

<!--------------------------Main banner start---------------------------->
<section class="mainbannersec logoherosection">
    <div class="container height-100">
        <div class="row justify-content-center height-100">
            <div class="col-md-6 col-sm-6 text-center my-auto">
                <div class="mainbannercontent mainbannercontentmob">
                    <h1 class="text-white">Client Reviews</h1>
                    <p class="text-white">Welcome to our Client Reviews page, where we showcase the 
                        experiences and feedback of those who have partnered with us. At DesignDerive, 
                        we pride ourselves on delivering top-notch AI logo making, digital marketing, 
                        and video animations. See what our clients have to say about their journey 
                        with us!</p>
                </div>
            </div>
               <div class="col-md-6 col-sm-6 text-center my-auto">
                   <img class="editorbar" src="{{ asset('frontend/assets/images/client-reviews/banner/1.webp') }}" alt="" />
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

{{-- Testimonial start --}}

<section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>What Our Client Said</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                        We believe that the best measure of our success is the satisfaction of our clients. Here are some of the wonderful things they have shared about working with us:
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
                         "Exceptional service! The AI logo they created was beyond our expectations."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>John Doe</span><br />CEO of Tech Innovators</p>
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
                        "Their digital marketing strategies significantly boosted our online presence."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Jane Smith</span><br />Marketing Director at Green Ventures</p>
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
                        "The video animations were stunning and truly brought our brand to life."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span> Emily Johnson</span><br />Brand Manager at Fashion Forward</p>
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
                         "Professional and creative team. Highly recommended for logo design."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Michael Brown</span><br />Founder of Startup Hub</p>
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
                        "Our social media engagement has skyrocketed thanks to their efforts."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Sarah Davis</span><br />Social Media Manager at Foodies Inc</p>
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
                        "Impressed by their ability to deliver high-quality animations on time."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>David Wilson</span><br />Creative Director at Media Minds</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
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
                        "Their AI-generated logos are unique and perfectly fit our brand identity."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Lisa Martinez</span><br />Owner of Chic Boutique</p>
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
                         "Top-notch digital marketing services that drive real results."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Mark Lee</span><br />Head of Marketing at Health Haven</p>
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
                        "The animated videos they produced have been a hit with our audience."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Karen Garcia</span><br />Content Creator at Travel Tales</p>
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
                         "Outstanding creativity and attention to detail in their work."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Robert Taylor</span><br />Product Manager at Gadget World</p>
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
                         "Our brand recognition has improved tremendously with their help."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Jennifer Anderson</span><br />CEO of Wellness Works</p>
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
                        "They created an AI logo that perfectly captures our company’s essence."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Brian Harris</span><br />Co-founder of Eco Solutions</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
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
                         "Their digital marketing expertise is unmatched in the industry."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Rachel White</span><br />Marketing Consultant at Business Boosters</p>
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
                         "The animations they designed are engaging and visually stunning."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Thomas Robinson</span><br />Visual Artist at Creative Canvas</p>
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
                        "Highly recommend their services for any business looking to grow."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>essica Young</span><br />Entrepreneur at Startup Sparks</p>
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
                         "Their innovative approach to logo design is truly impressive."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Daniel Hall</span><br />Director at Tech Trends</p>
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
                         "Effective digital marketing strategies that deliver on promises."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Laura King</span><br />Marketing Executive at Retail Revamp</p>
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
                        "Our promotional videos have never looked better thanks to them."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Jason Scott</span><br />Media Specialist at Film Focus</p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
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
                         "The AI logo they created has received fantastic feedback from clients."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Megan Clark</span><br />Designer at Artistic Ventures</p>
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
                         "Their digital marketing has been a game-changer for our business."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Anthony Lewis</span><br />Owner of Fresh Eats</p>
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
                        "Visually appealing and engaging video animations that captivate."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Olivia Walker</span><br />Content Strategist at Storytellers Inc</p>
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
                        "Their service is reliable, creative, and tailored to our needs."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Kevin Turner</span><br />Manager at Tech Solutions</p>
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
                        "A pleasure to work with, and the results speak for themselves."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Sophie Mitchell</span><br />PR Specialist at Brand Builders</p>
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
                         "Innovative solutions and exceptional customer service."

                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Jack Perez</span><br />CEO of InnovateX</p>
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