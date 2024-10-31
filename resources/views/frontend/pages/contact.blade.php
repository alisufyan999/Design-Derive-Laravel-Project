@extends('frontend.layouts.master')
@section('content')

<style>
    
    section.commonpagebanner 
    {
        height: 378px;
    }
    .mainbannercontent > h1
    {
        text-align:left;        
    }
    .mainbannercontent > p 
    {
        font-size: 15px;
        font-weight: lighter;
        text-align:left;
        margin-top:13px;
    }
    .absolute-center 
    {
        position: absolute;
        top: 34%;
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
    @media(max-width:1900px)
    {
        .absolute-center 
        {
            top: 26%;
        }
        section.commonpagebanner 
        {
            height: 450px;
        }
    }
    @media(max-width:1600px)
    {
        section.commonpagebanner 
        {
            height: 350px;
        }
        .absolute-center 
        {
            top: 34%;
        }
    }
    
</style>

 <!-- Main banner start -->
 <section class="commonpagebanner">
        <div class="container absolute-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-12 text-center my-auto">
                    <div class="mainbannercontent">
                        <h1 class="text-white text-center">Contact Us</h1>
                        <p class="text-white text-center">
                            At Design Derive, we integrate your specific logo design preferences with cutting-edge Artificial Intelligence technology to craft unique and impactful designs.Our advanced AI-driven approach ensures that every logo we create is not only visually appealing but also tailored to meet your brand's unique identity and requirements.We believe in blending creativity with technology to deliver logos that stand out in the market and resonate with your target audience.
                        </p>
                    </div>
                </div>
                <!--<div class="col-lg-6 col-md-6 col-12">-->
                <!--    <div class="commonpagebanner-image">-->
                <!--        <img src="assets/images/stationaryhero.webp" class="img-fluid" alt=""/>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>

    <!-- Contact form start -->
    <section class="contactpagemainsec mb-4">
        <div class="contactmaindivinner">
            <div class="container pt-5 pb-2">
                <div class="row justify-content-center ipadcontactheadingrow">
                    <div class="col-md-12 col-sm-12 text-center mb-3">
                        <div class="sectionheadingdiv">
                            <h2>Having Questions?</h2>
                            <h2>Reach Out to Us Now</h2>
                            <div class="bar"></div>
                            <p>
                                We are here to assist you with any inquiries or support you may need. Whether you have questions about our services or need help with your design projects, feel free to contact us.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 col-sm-12 text-start contactformleftcol mb-4">
                        <!--<div class="sectionheadingdiv">
                                          <h5>Any Queries?</h5>
                                          <h2 class="contactusheading">Contact Us Now</h2>
                                          <div class="bar"></div>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                      </div>-->
                        <div class="sectionheadingdiv ipadhidecontactdiv">
                            <h5>Having Questions?</h5>
                            <h2>Reach Out to Us Now</h2>
                            <div class="bar" style="margin: 13px 0px"></div>
                            <p>
                                We are here to assist you with any inquiries or support you may need. Whether you have questions about our services or need help with your design projects, feel free to contact us.
                            </p>
                        </div>
                        <div class="row g-3 contactusinfoipad">
                            <div class="col-md-5 col-sm-12">
                                <div class="contactusinfo">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>
                                        <span>Call us At:</span><br /><a href="tel:347-781-5954">347-781-5954</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="contactusinfo">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p>
                                        <span>Email Us On:</span><br /><a
                                            href="mailto:info@designmanhattan.com">info@designmanhattan.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="contactusinfo">
                                    <i class="fa fa-map-marker" aria-hidden="true" style="padding: 12px 15px"></i>
                                    <p>
                                        <span>Our Location:</span><br /><span class="contact-font">Mailing Address - 99
                                            Hudson Street, 5th Floor,
                                            Manhattan, New York City 10013</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--<div class="row g-3">
                                              <div class="col-md-5 col-sm-12">
                                                  <div class="contactusinfo">
                                                      <i class="fa fa-phone" aria-hidden="true"></i>
                                                      <p><span>Call us At:</span><br><a href="tel:347-781-5954">347-781-5954</a></p>
                                                  </div>
                                              </div>
                                              <div class="col-md-7 col-sm-12">
                                                  <div class="contactusinfo">
                                                      <i class="fa fa-envelope" aria-hidden="true"></i>
                                                      <p><span>Email Us On:</span><br><a href="mailto:info@designmanhattan.com">info@designmanhattan.com</a></p>
                                                  </div>
                                              </div>
                                              <div class="col-md-12 col-sm-12">
                                                  <div class="contactusinfo">
                                                      <i class="fa fa-map-marker" aria-hidden="true" style="padding: 12px 15px;"></i>
                                                      <p><span>Our Location:</span><br>Mailing Address - 99 Hudson Street, 5th Floor, Manhattan, NY 10013</p>
                                                  </div>
                                              </div>
                                          </div>-->
                    </div>
                    <div class="col-md-6 col-sm-12 contactformcoldiv">

                    <form class="row g-3 contactform" id="contactformpages">
                 @csrf
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="Your Name*" />
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Email*" />
                    </div>
                    <div class="col-md-12">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone*" />
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <div id="response"></div>

                    </div>

                    <!--<div class="col-md-6 col-sm-12 my-auto">
                                          <div class="row g-3">
                                              <div class="col-md-5 col-sm-12">
                                                  <div class="contactusinfo">
                                                      <i class="fa fa-phone" aria-hidden="true"></i>
                                                      <p><span>Call us At:</span><br><a href="tel:347-781-5954">347-781-5954</a></p>
                                                  </div>
                                              </div>
                                              <div class="col-md-7 col-sm-12">
                                                  <div class="contactusinfo">
                                                      <i class="fa fa-envelope" aria-hidden="true"></i>
                                                      <p><span>Email Us On:</span><br><a href="mailto:info@designmanhattan.com">info@designmanhattan.com</a></p>
                                                  </div>
                                              </div>
                                              <div class="col-md-12 col-sm-12">
                                                  <div class="contactusinfo">
                                                      <i class="fa fa-map-marker" aria-hidden="true" style="padding: 12px 15px;"></i>
                                                      <p><span>Our Location:</span><br>Mailing Address - 99 Hudson Street, 5th Floor, Manhattan, NY 10013</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-sm-12">

                                      </div>-->
                </div>
            </div>
        </div>
    </section>

    <!-- Map form start -->
    <section class="pt-2 pb-5">
        <div class="container pt-5 pb-2">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>Need Assistance?</h5>
                        <h2>Contact Our Team Now</h2>
                        <div class="bar"></div>
                        <p>
                            Our dedicated team is ready to provide you with the best customer service. Don't hesitate to get in touch for any design-related queries or support.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <div id="accordion">
                        <h3>
                            How can I check the status of my logo design project?
                            <i class="fa fa-plus fa-minus" aria-hidden="true"></i>
                        </h3>
                        <div>
                            <p>
                                You can check the status of your project by contacting your project manager via email or phone. We provide regular updates to keep you informed.
                            </p>
                        </div>
                        <h3>
                            What information do I need when contacting customer support?
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </h3>
                        <div>
                            <p>
                                Please have your project details, order number, or any relevant information ready to help us assist you quickly and efficiently.
                            </p>
                        </div>
                        <h3>
                            How quickly can I expect a response to my inquiry?
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </h3>
                        <div>
                            <p>
                                We try to respond to all inquiries as quickly as possible, usually within 24 hours.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div>
                        <iframe class="mapiframe" width="100%" height="300" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=99%20Hudson%20Street,%205th%20Floor,%20Manhattan,%20NY%2010013+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection