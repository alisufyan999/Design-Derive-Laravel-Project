<section class="pt-5 pb-4 section-padding-1920" style="background-color: #fef8fa">
    <div class="container">
        <div class="row justify-content-center ipadcontactheadingrow">
            <div class="col-md-12 col-sm-12 text-center mb-3">
                <div class="sectionheadingdiv">
                    <h5>Any Queries?</h5>
                    <h2>Contact Us Now</h2>
                    <div class="bar"></div>
                    <p>
                        Now brands have digital liberty to connect with Design Manhattan
                        and have all the queries and solutions for their digital
                        problems quickly.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6 col-sm-12 text-start contactformleftcol">
                <div class="sectionheadingdiv ipadhidecontactdiv">
                    <h5>Any Queries?</h5>
                    <h2 class="contactusheading">Contact Us Now</h2>
                    <div class="bar" style="margin: 13px 0px"></div>
                    <p>
                        Now brands have digital liberty to connect with Design Manhattan
                        and have all the queries and solutions for their digital
                        problems quickly.
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
                                <span>Our Location:</span><br />
                                <span class="contact-font">Mailing Address - 99 Hudson Street, 5th Floor,
                                    Manhattan,
                                    New York City 10013</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 my-auto">
                
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
        </div>
    </div>
</section>