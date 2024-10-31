

<footer class="footer pt-5 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="footercontent">
                    <img src="{{ asset('frontend/assets/images/designderive-logowhite.svg') }}" width="100%" />
                    <p>
                        At DesignDerive, we believe in creating effective designs that enhance your brand. Our team of experts is committed to providing innovative and personalized solutions to meet your specific needs. Let's make your vision a reality.
                    </p>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="footerlinks">
                    <h4>Our Services</h4>
                    <div class="bar"></div>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li>
                            <a href="logo-design.html">Logo Design</a>
                        </li>
                        <li>
                            <a href="website-design.html">Website Design</a>
                        </li>
                        <li>
                            <a href="video-animation.html">Video Animation</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="footerlinks">
                    <h4>Useful Links</h4>
                    <div class="bar"></div>
                    <ul>
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Contact Us</a>
                        </li>
                        <li>
                            <a href="">Pricing</a>
                        </li>
                        <li>
                            <a href="">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="connecteddiv">
                    <h4>Get Connected</h4>
                    <div class="bar"></div>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>
                            <span>Call us at:</span><br />
                            <a href="tel:111-222-3333">111-222-3333</a>
                        </p>
                    </div>

                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p>
                            <span>Email us on:</span><br />
                            <a href="mailto:someone@someemail.com">
                                someone@someemail.com
                            </a>
                        </p>
                    </div>

                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>
                            <span>Mailing Address:</span>
                            Somewhere, Somewhere, Somewhere
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-6 col-sm-12 copyrightdiv">
                <p>
                    Copyright © 2021 <span>DesignManhattan</span>. All rights reserved
                </p>
            </div>

            <div class="col-lg-6 col-sm-12 text-end footertermsdiv">
                <a href="privacy-policy.html">privacy policy</a>
                &nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;
                <a href="terms-condition.html">Terms &amp; Condition</a>
            </div>
        </div>
    </div>
</footer>

    <div class="popup-bg"></div>
    <div class="poppup-form">
        <div class="row popup-body">
                <div class="col-lg-6 col-md-6 col-12 p-0 display-none">
                <div class="popup-column">
                    <div class="special-offer"><h3>special offers</h3></div>
                    <p class="modal_promote">Promote</p>
                    <h1 class="m-0">
                        <span class="modal_heading">
                            <span class="regular">your</span> 
                            <span>brand <img src="{{ asset('frontend/assets/images/yellow-line.webp') }}" class="img-fluid" alt=""></span>
                        </span><br/> TO NEW HEIGHTS</h1>
                    <p class="modal_text">Build a strong foundation for your brand's success with personalized strategies.</p>
                    <img src="{{ asset('frontend/assets/images/laptop-mockup.webp') }}" class="img-fluid laptop-mockup" alt="">
                    <div class="discout-text">
                        <img src="{{ asset('frontend/assets/images/right-arrow.webp') }}" class="img-fluid" alt="">
                        <h4>20% off</h4>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 p-0">
                    <div class="form h-100">
                        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <h2 class="title01">Claim 20% OFF <br/> Your First Order!</h2>
                        <p>Receive exclusive first-time discounts and gain access to high-quality branding services at an unmatched price.</p>
                        <form id="popupform">
                        @csrf
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number *</label>
                                <input type="tel" class="form-control" name="phone" placeholder="111 222 333">
                            </div>
                            <div class="form-group">
                                <label>what can we help with you? *</label>
                                <input type="text" class="form-control" name="requirement">
                            </div>
                            <button type="submit" class="submit">submit your request</button>
                        </form>
                        <div id="popupresponse"></div>
                    </div>
                </div>
            </div>
    </div>
    



