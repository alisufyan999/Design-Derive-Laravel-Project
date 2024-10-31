@extends('frontend.layouts.master')
@section('content')

<style>

section.mainbannersec.logoherosection.logomakersection
{
    min-height: 800px;
}
.absolute-center 
{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.mainbannercontent > h1 
{
    text-align: center;
}
.mainbannercontent > p 
{
    text-align: center;
    margin-bottom: 20px;
}
section.logos-section 
{
    margin-top: -280px;
    position: relative;
    z-index: 1;
}
section.logos-section .upper-logos-div 
{
    width: 100%;
    max-width: 180px;
    margin-right: auto;
    margin-bottom: 42px;
}
section.logos-section .bottom-logos-div 
{
    width: 100%;
    max-width: 180px;
    margin-left: auto;
}

section.whitesection1 
{
    padding: 90px 0 48px;
}
section.section-padding-1920 .editorbar 
{
    max-width: 400px;
    margin: auto;
    display: block;
}
.aboutpagesolutiondiv > img 
{
    margin-bottom: 15px;
}
.aboutpagesolutiondiv > h4 
{
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 15px;
}
.aboutpagesolutiondiv > p 
{
    font-size: 14px;
}
.getstarted-form-section
{
    background:#f5f5f5;
    position:relative;
    padding: 85px 0;
}
section.getstarted-form-section form .bannerformfield
{
    border-bottom:2px solid #000;
    color:#000;
}
section.getstarted-form-section form .formbtn
{
    background: linear-gradient(to right, #F15874 40%, #FE7B95);
    text-transform:capitalize;
    padding: 10px 17px !important;
}
section.getstarted-form-section form .formbtn:hover
{
    background: linear-gradient(to right, #F15874 40%, #FE7B95) !important;
    color:#fff !important;
}
section.getstarted-form-section form .bannerformfield::placeholder
{
     color:#000 !important;
}
section.getstarted-form-section form .input-group-text > img 
{
    max-width: 27px;
}
section.getstarted-form-section form .input-group-text
{
    border-bottom: 2px solid #000;
}
.sectionheadingdiv p
{
    margin-bottom: 34px;
}

.buttona
    {
        background: transparent;
        border: 2px solid #f15874;
        position: relative;
        text-decoration: none;
        color: #000;
        padding: 10px 28px;
        font-size: 15px;
        border-radius: 25px;
    }    
    .buttona:hover
    {
        background: linear-gradient(to right, #F15874 40%, #FE7B95);
        color: #fff;
        border: 2px solid transparent;        
    }
@media(max-width:1900px)
{
   
    section.mainbannersec.logoherosection.logomakersection 
    {
        min-height: 1000px;
    }
    section.logos-section 
    {
     margin-top: -322px;
    }
    section.logos-section .upper-logos-div 
    {
        max-width: 260px;
    }
    section.logos-section .bottom-logos-div
    {
        max-width: 260px;
    }
    section.logos-section .container-fluid
    {
        max-width: 100%;
    }
    section.whitesection1 
    {
        padding: 90px 0 0px !important;
    }
}

@media(max-width:1600px)
{
    .absolute-center 
    {
        top: 41%;
    }
    section.logos-section 
    {
        margin-top: -262px;
    }
     section.mainbannersec.logoherosection.logomakersection 
    {
         min-height: 750px;
    }
    section.logos-section .container-fluid 
    {
        margin: 0 auto;  
        width: 100%;     
        max-width: 100% !important; 
        padding: 0;      
    }
    section.logos-section .upper-logos-div 
    {
        width: 100%;
        max-width: 230px;
        margin-right: auto;
        margin-bottom: 42px;
    }
    section.logos-section .bottom-logos-div 
    {
        width: 100%;
        max-width: 230px;
        margin-left: auto;
    }
}

@media(max-width:1366px)
{
    section.logos-section .container-fluid 
    {
        max-width: 100% !important;
    }
    section.logos-section .upper-logos-div 
    {
        max-width: 180px;
    }
    section.logos-section .bottom-logos-div 
    {
        max-width: 180px;
    }
}

@media(max-width:576px)
{
    section.mainbannersec.logoherosection.logomakersection .formbtn 
    {
        width: fit-content;
        display: block;
        margin: auto;
    }
    section.logos-section .upper-logos-div
    {
        max-width: 100%;
        margin-right:unset;
    }
    .logos-div.upper-logos-div img 
    {
        margin: auto;
        display: block;
    }
    section.logos-section .bottom-logos-div
    {
        max-width:100%;
        margin-left:unset;
        margin-bottom: 42px;
    }
    section.logos-section .bottom-logos-div img 
    {
        margin: auto;
        display: block;
    }
    section.getstarted-form-section form .formbtn
    {
        width: fit-content;
        display: block;
        margin: auto;
    }
    section.whitesection1 
    {
        padding: 50px 0 0px;
    }
    section.aboutmainsec 
    {
        padding: 80px 0 0 !important;
    }
    section.whitesection1 h2
    {
        text-align:center;
    }
     section.whitesection1 h2.contactusheading2
    {
        text-align:left;
    }
    ul.pointsul.financiallist
    {
        column-count: 1 !important;
    }   
}

</style>

<section class="mainbannersec logoherosection logomakersection">
    <div class="container absolute-center">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 col-md-8 col-12">
                <div class="mainbannercontent mainbannercontentmob">
                 <h1 class="text-white">
                        The Ultimate AI Logo Maker with Copyright
                    </h1>
                    <p class="text-white">
                        Create stunning, professional logos in seconds with our 100% free logo maker.

                    </p>
                     <form action="brief/slogan.html">
                        <div class="form-row row align-items-center bannerform">
                            <div class="col-md-8 my-1">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <img src="https://ik.imagekit.io/designmanhattan/assets/img/home/pencil.webp?updatedAt=1633439654700"
                                            width="100%" />
                                    </div>
                                    <input type="text" class="form-control bannerformfield"
                                        placeholder="Enter Your Business Name" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <a href="#" type="submit" class="btn btn-primary formbtn">
                                    Get Started!
                                </a>

                            </div>
                        </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="logos-section">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div upper-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/1.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div upper-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/2.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div upper-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/3.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div upper-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/4.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div upper-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/5.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div upper-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/6.webp') }}" class="img-fluid"/>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div bottom-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/7.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div bottom-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/8.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div bottom-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/9.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div bottom-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/10.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div bottom-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/11.webp') }}" class="img-fluid"/>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 p-0">
                <div class="logos-div bottom-logos-div">
                    <img src="{{ asset('frontend/assets/images/logomaker/12.webp') }}" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding-1920 pb-0-1920 whitesection1">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading contactusheading2 ">How to Generate a Logo with Our AI Logo Maker</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                            Generating a logo with our AI based logo maker is simple and efficient. Click on the Generate Logo Designs button. Enter your brand name, industry, and any tagline you want included to help our AI understand your needs.Next, select from various design styles, color schemes, and font types that resonate with your brand identity. Our logo maker AI generated several logo options for you to choose from.

                        </p>
                        <p>
                            Review the designs and pick the one that best represents your business. Use our easy-to-use editing tools to tweak the logo to your liking by adjusting colors, fonts, and layouts until it's perfect. Once you are satisfied with your logo, save it to your account for easy access and future edits.

                        </p>
                        <a href="#" class="buttona">Genertae logo Designs</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/logomaker/concierges.webp') }}">
                </div>
            </div>
        </div>
    </section>
    
<section class="aboutmainsec mt-0 p-5">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/logomaker/leelegal.webp') }}">
        </div>
        <div class="col-md-6 col-sm-12 text-left my-auto">
            <div class="aboutsidecontent">
                <h2>How to Download Your AI-Generated Logo</h2>
                <div class="bar"></div>
                <p>
                    Make sure all adjustments are complete and you’re happy with the final design. Choose the file formats you need – we offer PNG, JPG, SVG, and PDF options for maximum flexibility. Click the download button. Your logo will be available immediately for download in the chosen formats. Your logos are stored in your account, so you can access and download them anytime.

                </p>
                <ul class="pointsul financiallist">
                  <li class="py-1">User-friendly interface </li>
                  <li class="py-1">Multiple file formats</li>
                  <li class="py-1">High-resolution images</li>
                  <li class="py-1">Secure storage of your logos</li>
                </ul>
            </div>
        </div>           
    </div>
</div>
</section>

<section class="getstarted-form-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-1">
            <div class="col-lg-9 col-md-9 col-12">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading mb-3">What Makes Our AI Logo Maker the Best Choice</h2>
                        <p>Enter your business name and we'll start creating stunning, professional logos in seconds...</p>
                    </div>
            </div>
        </div>
        <div class="row">
            <form action="brief/slogan.html">
                <div class="form-row row align-items-center bannerform">
                    <div class="col-md-8 my-1">
                        <div class="input-group">
                            <div class="input-group-text">
                                <img src="{{ asset('frontend/assets/images/logomaker/pencil.webp') }}" width="100%">
                            </div>
                            <input type="text" class="form-control bannerformfield" placeholder="Enter Your Business Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="https://designderive.com/manhattan/brief" type="submit" class="btn btn-primary formbtn">
                            create logos
                        </a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="section-padding-1920 pb-0-1920 whitesection1">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-9 col-md-9 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv text-center">
                        <h2 class="contactusheading">All the Amazing Features of Design Derive's Logo Maker</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon1.webp') }}" class="img-fluid">
                        <h4>Premium Logo Designs</h4>
                        <p>Get access to high-quality, professionally designed logos tailored to your brand's unique identity.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon2.webp') }}" class="img-fluid">
                        <h4>All The Files You Need</h4>
                        <p>Download your logo in various formats including PNG, JPG, SVG, and PDF to suit all your needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon3.webp') }}" class="img-fluid">
                        <h4>Color and Layout Variations</h4>
                        <p>Explore multiple color schemes and layout options to find the perfect match for your brand.</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon4.webp') }}" class="img-fluid">
                        <h4>Business Card Templates</h4>
                        <p>Create easy matching business cards, using our integrated templates for a cohesive brand look.</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon5.webp') }}" class="img-fluid">
                        <h4>Social Media Templates</h4>
                        <p>Receive ready-to-use social media templates that align with your new logo for consistent branding.</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon6.webp') }}" class="img-fluid">
                        <h4>Brand Identity Templates</h4>
                        <p>Utilize our brand identity templates to maintain a unified look across all your marketing materials.</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon7.webp') }}" class="img-fluid">
                        <h4>Unlimited Customization</h4>
                        <p>Enjoy limitless customization options to ensure your logo is exactly how you envision it.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon8.webp') }}" class="img-fluid">
                        <h4>Support</h4>
                        <p>Benefit from our dedicated support team available to assist you with any questions or needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-center">
                    <div class="aboutpagesolutiondiv">
                        <img src="{{ asset('frontend/assets/images/logomaker/icon9.webp') }}" class="img-fluid">
                        <h4>Royalty Free Logos</h4>
                        <p>All logos come with royalty-free licenses, giving you full ownership and rights to use them as you wish.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section-padding-1920 pb-0-1920 whitesection1">
        <div class="container">
            <div class="row mb-4 ipadactivitiesrow">
                <div class="col-md-6 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading contactusheading2">Benefits of Using Our AI Logo Maker</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                        <p>
                           Using our AI logo maker offers numerous benefits. Every logo created using our tool is automatically assigned a copyright, ensuring your design is protected. Our AI generates professional-quality logos that can compete with designs created by human experts. Save money by avoiding expensive design fees, as our service offers top-notch designs at a fraction of the cost. Generate and customize your logo in minutes rather than weeks.
 Enjoy a high degree of customization to ensure your logo perfectly matches your brand. Our tool is designed to be easy to use, even for those with no design experience. Create and download your logo anytime, anywhere, without any time restrictions.
 

                        </p>
                        <a href="#" class="buttona">Genertae logo Designs</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 my-auto">
                    <img class="img-fluid editorbar" src="{{ asset('frontend/assets/images/logomaker/autoventureusa.webp') }}">
                </div>
            </div>
        </div>
    </section>
    
<section class="section-padding-1920 pb-0-1920 whitesection1">
    <div class="container">
        <div class="row mb-4 ipadactivitiesrow">
             <div class="col-lg-12 col-md-12 col-sm-12 text-start my-auto">
                    <div class="sectionheadingdiv">
                        <h2 class="contactusheading contactusheading2">Why Our AI Logo Maker is the Best Choice for Your Business</h2>
                        <div class="bar" style="margin: 13px 0px"></div>
                    </div>
            <p>Discover why our AI logo maker is the best logo design maker for small businesses. It is suitable for all types of businesses, from startups to established brands. We use advanced AI technology to deliver cutting-edge designs. Our dedicated support team is always ready to assist you with any queries. Join a community of users who share their experiences and tips for getting the most out of our logo maker. We continuously improve our AI algorithms to ensure you always get the best designs.</p>
            <p>Our AI brand logo maker ensures that your logo is unique and stands out in a competitive market. The intuitive design process and user-friendly interface make it the best logo maker for small business owners who need professional results quickly and affordably.</p>
            <p>Moreover, our platform offers seamless integration with various marketing tools, allowing you to use your new logo across different media effortlessly. This feature makes maintaining brand consistency and building a strong visual identity easy.</p>
        </div>
    </div>
    </div>
</section>
    
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
                        What makes you the best company logo maker?
                      </button>
                    </p>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        We combine creativity with precision to deliver unique, high-quality logos that effectively represent your company's identity and values.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How does your custom business logo maker work?
                      </button>
                    </p>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our custom business logo maker allows you to choose from a variety of design elements to create a logo that perfectly aligns with your business brand and style.

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the benefits of using an online custom logo maker?
                      </button>
                    </p>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Using an online custom logo maker offers convenience and flexibility, enabling you to design and refine your logo from anywhere at any time.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Can I use a logo maker with a custom image?
                      </button>
                    </p>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, our logo maker allows you to upload and incorporate custom images, ensuring your logo is truly unique and personalized.

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        Why should I use a logo maker for my brand?
                      </button>
                    </p>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Using a logo maker for your brand helps you quickly create a professional-looking logo that captures the values of your business and enhances brand recognition.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingsix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        What features does your custom design logo maker offer?
                      </button>
                    </p>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our custom design logo maker includes a range of features like adjustable fonts, color schemes, and icons, allowing for full customization of your logo.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingseven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        How can I create my own logo with your logo maker?
                      </button>
                    </p>
                    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        With our 'logo maker create your own logo' feature, simply select your preferred design elements, customize your text and colors, and preview your creation in real time.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingeight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Does your brand name logo maker support different industries?
                      </button>
                    </p>
                    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, our brand name logo maker is versatile and supports a wide range of industries by offering industry-specific design templates and symbols.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingnine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        Is it possible to copy and paste elements with your logo maker?
                      </button>
                    </p>
                    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our copy and paste logo maker feature allows you to easily replicate and modify elements within your design for consistent branding across all your assets.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingten">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                       Where can I find the best professional logo maker near me?
                      </button>
                    </p>
                    <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Our service provides online access to the best professional logo makers, ensuring you receive expert design assistance no matter your location.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<section class="aboutmainsec ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center abousideimgdiv">
                <img src="{{ asset('frontend/assets/images/aboutus/team.webp') }}">
            </div>
            <div class="col-md-6 col-sm-12 text-left my-auto">
                <div class="aboutsidecontent">
                    <h5>About Us</h5>
                    <h2>What Makes Us Great?</h2>
                    <div class="bar"></div>
                    <p>
                        We boost brands with our innovative digital logo design services, adding value to your customers' lives. Our commitment to delivering high-quality logo design strategies has made us a preferred partner for many businesses aiming for growth.

                    </p>
                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()">Live Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-5 section-padding-1920" style="background-color: #f6f5fb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 text-center mb-4">
                <div class="sectionheadingdiv">
                    <h5>What Our Client Said</h5>
                    <h2>Testimonials</h2>
                    <div class="bar"></div>
                    <p>
                       Our clients consistently praise the transformational impact of our AI brand logo maker services. 

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
                        "Design Derive's AI logo maker is a game-changer! The ease of use and the professional quality of the logos exceeded my expectations."

                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>John Smith</span><br />CEO of Smith Enterprises</p>
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
                        "I was able to create a stunning logo for my startup in minutes. The customization options are fantastic. Highly recommended!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Lisa Johnson</span><br />Founder of Creative Minds</p>
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
                        "The variety of templates and the quality of the designs are unmatched. Our brand's new logo looks amazing across all platforms."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Michael Brown</span><br />Marketing Director at Brown Solutions</p>
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
                        "As a small business owner, I needed a cost-effective solution for a professional logo. Design Derive's AI logo maker was perfect!"
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Emily Davis</span><br />Owner of Davis Crafts</p>
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
                        "The support team was incredibly helpful, and the AI-generated logos are top-notch. We couldn't be happier with our new brand identity."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Robert Wilson</span><br />COO of Tech Innovations</p>
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
                        "I use Design Derive's logo maker for my clients, and they love the results. It's quick, easy, and delivers high-quality designs every time."
                    </p>
                    <div class="testimonialbottom">
                        <img src="{{ asset('frontend/assets/images/testimonials/client/1.webp') }}"
                            alt="Testimonial person image" />
                        <p><span>Sarah Thompson</span><br /> Freelance Graphic Designer</p>
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