@extends('frontend.layouts.master')
@section('content')

<style>
        .largepricingmaindiv {
            border: 1px solid #f15874;
            border-radius: 6px;
            position: relative;
            background-color: #fff;
            overflow: hidden;
        }

        .largepricingheadingdiv {
            position: relative;
            background: #fef8fa;
            border-right: 1px solid #f15874;
            height: 100%;
            padding: 38px 0 54px 0px;
        }

        .largepricingheadingdiv::before {
            content: "";
            position: absolute;
            right: -4%;
            top: 46%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 3px solid #000;
            border-radius: 50%;
            width: 9px;
            height: 9px;
        }

        .largepricingheadingdiv>a {
            text-decoration: none;
            color: #fff !important;
            background: linear-gradient(to right, #f15874 40%, #fe7b95);
            font-size: 12px;
            padding: 10px 36px;
            border-radius: 25px;
        }

        .largepricingpointsmainrow {
            padding-top: 32px;
        }

        .largepricingheadingdiv>h3 {
            font-size: 23px;
            font-weight: 600;
        }

        .largepricingheadingdiv>h1 {
            color: #f15874;
            font-weight: 600;
            font-size: 40px;
            margin-bottom: 15px;
        }

        .largepricingcontentdiv>h4 {
            font-size: 18px;
            color: #f15874;
            padding-left: 30px;
        }

        .largepricingcontentdiv>ul {
            list-style-type: none;
            font-size: 14px;
            line-height: 1.8;
            color: #807e7e;
            padding-left: 56px;
        }

        .largepricingcontentdiv ul>li {
            position: relative;
        }

        .largepricingcontentdiv ul>li::before {
            font-family: "FontAwesome";
            content: "\f00c";
            position: absolute;
            top: 0;
            left: -26px;
            color: #f15874;
        }

        .largepricingheadingdiv>img {
            max-width: 78px;
            margin-bottom: 12px;
        }

        .largericingbtn {
            display: none;
        }

        @media (max-width: 576px) {
            .largepricingheadingdiv {
                border-right: 0;
                border-bottom: 1px solid #f15874;
            }

            a.largericingbtn {
                display: inline-grid;
                margin-bottom: 38px;
                text-decoration: none;
                color: #fff !important;
                background: linear-gradient(to right, #f15874 40%, #fe7b95);
                font-size: 12px;
                padding: 10px 36px;
                border-radius: 25px;
            }

            .guaranteeimg,
            .largepricingheadingdiv>a {
                display: none;
            }

            .largepricingcontentdiv {
                margin-bottom: 25px;
            }

            .largepricingheadingdiv::before {
                left: 50%;
                bottom: -10px;
                right: auto;
                top: auto;
            }
        }
    </style>

    <!-- Main banner start -->
    <section class="commonpagebanner">
        <div class="container height-100">
            <div class="row justify-content-center height-100">
                <div class="col-md-7 col-sm-12 text-center my-auto">
                    <div class="mainbannercontent innerpagebannerdiv">
                        <h1 class="text-white">Pricing</h1>
                        <p class="text-white">
                            We combines your logo design prefernces with Artificial
                            Intelligence
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main banner start -->
    <!--<section class="logodesignbannersec">
                    <div class="container height-100">
                        <div class="row height-100">
                            <div class="col-lg-6 col-sm-12 my-auto">
                                <div class="logodesignbannerdiv">
                                    <h1>Pricing</h1>
                                    <p>We combines your logo design prefernces with Artificial Intelligence</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 bannerrightimgdiv my-auto displaynonemobile">
                                <img src="img/pricing/banner1.png" width="100%">
                            </div>
                        </div>
                    </div>
                  </section>-->

    <!-- Logo Design Pricing start -->
    <section class="mb-5 mt-5" id="logo-design">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>Logo Design</h5>
                        <h2>Logo Design</h2>
                        <div class="bar"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                    <h3>Basic Logo</h3>
                                    <p><span>2</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$49.00</h1>
                            <p><del>$59.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>2 Logo Concepts</li>
                            <li>By 1 Designer</li>
                            <li>3 Rounds Of Revisions</li>
                            <li>Online Purpose Files (JPG, PNG)</li>
                            <li>No Master Ai File of Logo</li>
                            <li>No Printing Purpose Files</li>
                            <li>100% Ownership</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Startup Logo</h3>
                                    <p><span>4</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$99.00</h1>
                            <p><del>$109.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>4 Logo Concepts</li>
                            <li>By 2 Designer</li>
                            <li>6 Rounds Of Revisions</li>
                            <li>Online Purpose Files (JPG, PNG)</li>
                            <li>Only Small Size Printing File</li>
                            <li>No Master Ai File of Logo</li>
                            <li>100% Ownership</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Pro Logo</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$149.00</h1>
                            <p><del>$169.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>6 Logo Concepts</li>
                            <li>By 4 Designer</li>
                            <li>Unlimited Revisions</li>
                            <li>Online Purpose Files (JPG, PNG)</li>
                            <li>Both Large and Small Size</li>
                            <li>Printing Files (PDF, EPS)</li>
                            <li>No Master Ai File of Logo</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Ultimate</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$199.00</h1>
                            <p><del>$210.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Unlimited Logo Concepts</li>
                            <li>By Team Of Designers</li>
                            <li>Unlimited Revisions</li>
                            <li>Online Purpose Files (JPG, PNG)</li>
                            <li>Both Large and Small Size</li>
                            <li>Printing Files (PDF, EPS)</li>
                            <li>Master AI File of Logo included</li>
                            <li>100% Ownership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Branding Pricing start -->
    <section class="mb-5 mt-5 pt-5 pb-5" id="branding-kit" style="background-color: #f2f2f2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>Branding</h5>
                        <h2>Branding Kits</h2>
                        <div class="bar"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                    <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$59.00</h1>
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
                                    <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$99.00</h1>
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
                                    <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$149.00</h1>
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
                                    <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$299.00</h1>
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
        </div>
    </section>

    <!-- Website Pricing start -->
    <section class="mb-5 mt-5" id="website-design">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>Website Design</h5>
                        <h2>Website Design</h2>
                        <div class="bar"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                    <h3>Static</h3>
                                    <p><span>2</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$499.00</h1>
                            <p><del>$959.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>5 Custom Pages</li>
                            <li>5 Stock Images</li>
                            <li>5 Banner Designs</li>
                            <li>Multi-page Navigation</li>
                            <li>Contact Us Form Integration</li>
                            <li>Social Media Integration</li>
                            <li>SEO Friendly Sitemap</li>
                            <li>Mobile Responsive</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Dynamic</h3>
                                    <p><span>4</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$999.00</h1>
                            <p><del>$1009.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Easily customizable by anyone</li>
                            <li>10 Custom Pages</li>
                            <li>10 Stock Images</li>
                            <li>5 Banner Designs</li>
                            <li>Advanced UI Effects</li>
                            <li>Multi-page Navigation</li>
                            <li>Contact Us Form Integration</li>
                            <li>Social Media Integration</li>
                            <li>SEO Friendly Sitemap</li>
                            <li>Mobile Responsive</li>
                            <li>Google Analytics Integration</li>
                            <li>On Page Optimization</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>E-Commerce</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$1499.00</h1>
                            <p><del>$1699.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Unlimited Pages</li>
                            <li>Unlimited Products</li>
                            <li>Unlimited Categories</li>
                            <li>Product Reviews</li>
                            <li>Cart Integration</li>
                            <li>Payment Merchant Integration</li>
                            <li>15 Stock Images</li>
                            <li>15 Banner Designs</li>
                            <li>Advanced UI Effects</li>
                            <li>Multi-page Navigation</li>
                            <li>Contact Us Form Integration</li>
                            <li>Social Media Integration</li>
                            <li>SEO Friendly Sitemap</li>
                            <li>Mobile Responsive</li>
                            <li>Google Analytics Integration</li>
                            <li>On Page Optimization</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Portal</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$2999.00</h1>
                            <p><del>$3999.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Any One:</li>
                            <li>Dating Portal</li>
                            <li>Job Portal</li>
                            <li>Professional Network</li>
                            <li>Social Network</li>
                            <li>Media Portal</li>
                            <li>Real Estate Portal</li>
                            <li>Medical Portal</li>
                            <li>News Portal</li>
                            <li>Enterprise Portal</li>
                            <li>Client/User Dashboard</li>
                            <li>Custom Coding</li>
                            <li>Module-wise Architecture</li>
                            <li>Extensive Admin Panel</li>
                            <li>Complete Deployment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Animation Pricing start -->
    <section class="mt-5 pt-5 pb-5" id="video-animation" style="background-color: #f2f2f2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>Video Animation</h5>
                        <h2>Video Animation</h2>
                        <div class="bar"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                    <h3>Basic Plan</h3>
                                    <p><span>2</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$499.00</h1>
                            <p><del>$699.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>60 seconds</li>
                            <h6>Custom Work</h6>
                            <li>Script Writing</li>
                            <li>Detail Storyboard</li>
                            <li>Professional Voice over</li>
                            <li>Impressive Animation</li>
                            <li>Royalty free BG & SFX</li>
                            <h6>More Features</h6>
                            <li>File Delivered in HD 720p</li>
                            <li>3 round of revisions in each phase</li>
                            <li>4 weeks Deadline</li>
                            <li>100% satisfaction</li>
                            <li>100% Ownership Rights</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Startup Plan</h3>
                                    <p><span>4</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$799.00</h1>
                            <p><del>$999.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>60 seconds</li>
                            <h6>Custom Work</h6>
                            <li>Script Writing</li>
                            <li>storyboarding</li>
                            <li>Detail illustrations</li>
                            <li>Professional Voice over</li>
                            <li>Impressive Animation</li>
                            <li>Royalty free BG & SFX</li>
                            <h6>More Features</h6>
                            <li>File Delivered in HD 720p</li>
                            <li>3 round of revisions in each phase</li>
                            <li>3 weeks Deadline</li>
                            <li>100% satisfaction</li>
                            <li>100% Ownership Rights</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Pro Plan</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$1999.00</h1>
                            <p><del>$1199.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>60 seconds</li>
                            <h6>Custom Work</h6>
                            <li>Script Writing</li>
                            <li>storyboarding</li>
                            <li>Detail illustrations</li>
                            <li>Professional Voice over</li>
                            <li>Impressive Animation</li>
                            <li>Royalty free BG & SFX</li>
                            <h6>More Features</h6>
                            <li>File Delivered in HD 1080p</li>
                            <li>Multiple Revisions in each phase</li>
                            <li>2 weeks Deadline</li>
                            <li>Dedicated Project Manager</li>
                            <li>100% satisfaction</li>
                            <li>100% Ownership Rights</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Ultimate Plan</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$1499.00</h1>
                            <p><del>$1699.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>60 seconds</li>
                            <h6>Custom Work</h6>
                            <li>2 Concepts + premium scriptwriting</li>
                            <li>storyboarding</li>
                            <li>Detail illustrations</li>
                            <li>Professional Voice over</li>
                            <li>Impressive Animation</li>
                            <li>Royalty free BG & SFX</li>
                            <h6>More Features</h6>
                            <li>File Delivered in HD 1080p</li>
                            <li>Unlimited revisions</li>
                            <li>6 weeks Deadline</li>
                            <li>Dedicated Project Manager</li>
                            <li>100% satisfaction</li>
                            <li>100% Ownership Rights</li>
                            <li>Source File</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2 IN 1 BUNDLE Pricing start -->
    <section class="mb-5 mt-5" id="two-one-bundle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>LOGO + BRANDING KIT</h5>
                        <h2>2 In 1 Bundles</h2>
                        <div class="bar"></div>
                        <p>
                            Get The Best Of Both The Worlds At The Best Price. Choose From
                            Our Exclusive Packages Listed Below.
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
                                    <h3>Basic Bundle</h3>
                                    <p><span>2</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$99.00</h1>
                            <p><del>$100.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Basic Logo <b>$49</b></li>
                            <li>Basic Branding Kit <b>$59</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Startup Bundle</h3>
                                    <p><span>4</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$149.00</h1>
                            <p><del>$189.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Startup Logo <b>$99</b></li>
                            <li>Startup Branding Kit <b>$99</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Pro Bundle</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$199.00</h1>
                            <p><del>$290.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Pro Logo <b>$149</b></li>
                            <li>Pro Branding Kit <b>$149</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Ultimate Bundle</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$299.00</h1>
                            <p><del>$490.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Ultimate Logo <b>$199</b></li>
                            <li>Ultimate Branding Kit <b>$299</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 IN 1 BUNDLE Pricing start -->
    <section class="mt-5 pt-5 pb-5" id="three-one-bundle" style="background-color: #f2f2f2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center mb-3">
                    <div class="sectionheadingdiv">
                        <h5>LOGO + BRANDING KIT + WEBSITE</h5>
                        <h2>3 In 1 Bundles</h2>
                        <div class="bar"></div>
                        <p>
                            Dominate The Digital Landscape Without Breaking A Sweat. We Have
                            A Wide Range Of Affordable Packages To Choose From.
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
                                    <h3>Basic Bundle</h3>
                                    <p><span>2</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/1.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$499.00</h1>
                            <p><del>$697.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Startup Logo <b>$99</b></li>
                            <li>Startup Branding Kit <b>$99</b></li>
                            <li>Startup Website <b>$499</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Startup Bundle</h3>
                                    <p><span>4</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/2.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$999.00</h1>
                            <p><del>$1347.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Ultimate Logo <b>$199</b></li>
                            <li>Pro Branding Kit <b>$149</b></li>
                            <li>Dynamic Website <b>$999</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Pro Bundle</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/3.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$1499.00</h1>
                            <p><del>$2197.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Award Winning Logo Package <b>$399</b></li>
                            <li>Ultimate Branding Kit <b>$299</b></li>
                            <li>E-commerce Website <b>$1499</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pricingmaindiv">
                        <div class="pricingheadingstuff">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <h3>Ultimate Bundle</h3>
                                    <p><span>6</span> Logo Concept</p>
                                </div>
                                <div class="col-4 text-center">
                                    <img src="{{ asset('frontend/assets/images/pricing/4.webp') }}"
                                        alt="Pricing icon" />
                                </div>
                            </div>
                        </div>
                        <div class="pricingpricediv text-center">
                            <h1>$2999.00</h1>
                            <p><del>$3697.00</del></p>
                        </div>

                        <div class="pricingbtndiv text-center">
                            <a href="payment/paynow/pay_now_link/">Order Now</a>
                            <h6>What You Will Get?</h6>
                        </div>

                        <ul class="">
                            <li>Award Winning Logo Package <b>$399</b></li>
                            <li>Ultimate Branding Kit <b>$299</b></li>
                            <li>Portal <b>$2999</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection