@extends('layouts.app')

@section('content')
      <!-- Swiper-->
      <section id="home">
        <div class="swiper-container swiper-slider swiper-slider_fullheight" data-simulate-touch="false" data-loop="true" data-autoplay="4500" data-slide-effect="fade">
          <div class="swiper-wrapper">
            <div class="swiper-slide context-dark bg-overlay-darker" data-slide-bg="images/slider-slide-1-1920x1080.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <h1 data-caption-animate="fadeInUpSmall"><span>Are you missing opportunities because of your website?</span></h1>
                  <!-- <h3 data-caption-animate="fadeInUpSmall" data-caption-delay="200">Quality Business Advisory</h3> -->
                  <div class="group-lg group-middle"><a class="btn-anis" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#features" data-custom-scroll-to="features">View Services</a><a class="btn-anis" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#contacts" >Contact Us</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide context-dark bg-overlay-darker" data-slide-bg="images/slider-slide-2-1920x1080.jpg">
              <div class="swiper-slide-caption">
                <div class="container">
                  <h2 data-caption-animate="fadeInLeftSmall">Professional Business<br class="d-none d-lg-block"> Consulting Services</h2><a class="btn-anis" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#contacts" >Contact us</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide context-dark bg-overlay-darker" data-slide-bg="images/slider-slide-3-1920x1080.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-9">
                      <h2 data-caption-animate="fadeInUpSmall">Welcome to LDCC-Agency</h2>
                      <h5 class="text-width-2 block-centered" data-caption-animate="fadeInUpSmall" data-caption-delay="200">Our company provides services for small and medium businesses located worldwide.</h5>
                      <div class="group-lg group-middle"><a class="btn-anis" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#features" data-custom-scroll-to="features">View Services</a><a class="btn-anis" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#contacts" >Contact Us</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!-- Swiper Navigation-->
          <div class="swiper-button-prev linear-icon-chevron-left"></div>
          <div class="swiper-button-next linear-icon-chevron-right"></div>
        </div>
      </section>
      <!-- Call to Action-->
      <section class="section section-sm context-dark bg-gray-dark section-cta">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-xl-8 text-xl-left">
              <h4><span class="font-weight-bold">LDCC-Agency</span><span class="font-weight-normal">provides quality business solutions worldwide</span></h4>
              <p>We are always ready to help you make your business more profitable.</p>
            </div>
            <div class="col-xl-2 text-xl-right"><a class="btn-anis" href="#contacts">Get in touch</a></div>
          </div>
        </div>
      </section>
      <!-- Impressive Features-->
      <section class="section-md" id="features">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
              <h4 class="heading-decorated">What We Offer</h4>
              <p>We focus on delivering quantifiable results for our customers, based on a well-tested methodology and solid experience. Our team guarantees the best results for your company’s success as we apply our skills and unmatched expertise within your own organization to help you achieve more.</p>
            </div>
          </div>
          <div class="row justify-content-md-center flex-lg-row-reverse align-items-lg-start justify-content-lg-between row-50">
            <div class="col-md-9 col-lg-6">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-rocket"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="#">15+ Years of experience</a></p>
                    <p>Our company has been working for more than 15 years delivering successful business solutions.</p>
                  </div>
                </div>
              </article>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-equalizer"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="#">Qualified team</a></p>
                    <p>We specialise in custom web design and development for leading brands, not-for-profits and innovative startups.</p>
                  </div>
                </div>
              </article>
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-arrow-down-square"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="#">Tailored approach</a></p>
                    <p>We use the unique approach tailored to your requirements to achieve the best results for your company.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-7 col-lg-5">
              <figure class="image-sizing-1"><img src="images/before.jpg" alt=""></figure>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-gray-lighter object-wrap" id="about">
        <div class="section-lg">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <h4 class="heading-decorated">About us</h4>
                <p>We are a result driven, customer focused digital agency with over 15 years of combined digital experience. </p>
                <p>
                    We use leading development platforms, engaging website design and a deep understanding of our customers key objectives to deliver premium results which both our agency and clients are extremely proud of. 
                </p>
                <p>With a studio based on Lotte Center Hanoi, we are constantly inspired by the creative culture that surrounds us.</p>
                <p>There is a common buzz when you float around our studio, you'll sense that people are genuinely enjoying themselves and that there's a real passion for the quality of our craft. </p>
                <div class="row row-30">
                  <div class="col-xl-6">
                    <!-- Blurb minimal-->
                    <article class="blurb blurb-minimal">
                      <div class="unit flex-column unit-spacing-sm">
                        <div class="unit-left">
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-menu3"></span></div>
                        </div>
                        <div class="unit-body">
                          <p class="blurb__title heading-6"><a href="#">Lots of happy clients</a></p>
                          <p>Since our establishment, most of our clients have become our returning customers.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-xl-6">
                    <!-- Blurb minimal-->
                    <article class="blurb blurb-minimal">
                      <div class="unit flex-column unit-spacing-sm">
                        <div class="unit-left">
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-users2"></span></div>
                        </div>
                        <div class="unit-body">
                          <p class="blurb__title heading-6"><a href="#">Qualified Employees</a></p>
                          <p>Our team consists of more than 40 qualified and experienced business consultants.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <!-- <div class="row justify-content-md-center">
                  <div class="col-md-12">
                    <div class="progress-linear progress-linear-modern">
                      <div class="progress-header">
                        <p>Risk Assurance</p><span class="progress-value">49</span>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"></div>
                      </div>
                    </div>
                    <div class="progress-linear progress-linear-modern">
                      <div class="progress-header">
                        <p>Audit</p><span class="progress-value">29</span>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"></div>
                      </div>
                    </div>
                    <div class="progress-linear progress-linear-modern">
                      <div class="progress-header">
                        <p>Financial Modeling</p><span class="progress-value">86</span>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url(images/bg-image-1.jpg)"></div>
      </section>
      <!-- Our Features-->
      <section class="section-md text-center" id="services">
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-10 col-xl-8">
              <h4 class="heading-decorated">Our Services</h4>
              <p>Our company offers expert business advisory services to small and medium businesses worldwide to help make the world better. Our solutions are designed to assist your company in achieving superior results and gaining more profit while also attracting potential customers.</p>
            </div>
          </div>
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-feather"></span></div>
                <p class="blurb__title">Business planning</p>
                <p>We can create an efficient and reliable business plan designed to fit your company.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-menu3"></span></div>
                <p class="blurb__title">Web design & development</p>
                <p>Web design is the strategic digital offering of a brand that results in looking good, feeling good and fostering growth.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-bag2"></span></div>
                <p class="blurb__title">Digital Strategy</p>
                <p>We want to help traditional organisations realise the potential and successes to be had in investing in digital.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-rocket"></span></div>
                <p class="blurb__title">Mobile applications</p>
                <p> We thoroughly enjoy the creative process and thrive in constructive involvement to innovate</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-equalizer"></span></div>
                <p class="blurb__title">E-commerce</p>
                <p>Rooted in an experience-led approach, we replicate what consumers love about the real-life interaction, and then simplify it into a seamless digital experience.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon linear-icon-file-search"></span></div>
                <p class="blurb__title">Online Marketing - SEO</p>
                <p>From the balance of a strategic vision and a creative direction, this is the digital experience that connects the brand to the user.</p>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="section-md bg-gray-lighter">
        <div class="container">
          <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
            <div class="col-md-8 col-lg-6">
              <div id="accordion" role="tablist">
                
                <div class="card card-custom">
                  <div class="card-custom-heading" id="accordionHeading1" role="tab">
                    <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">What are the advantages of purchasing a website template?</a>
                    </h5>
                  </div>
                  <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                    <div class="card-custom-body">
                      <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                    </div>
                  </div>
                </div>
               
                <div class="card card-custom">
                  <div class="card-custom-heading" id="accordionHeading2" role="tab">
                    <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">Do you provide any scripts with your templates or could you do some custom programming?</a>
                    </h5>
                  </div>
                  <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                    <div class="card-custom-body">
                      <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at zemez.io If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                    </div>
                  </div>
                </div>
               
                <div class="card card-custom">
                  <div class="card-custom-heading" id="accordionHeading3" role="tab">
                    <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">In what formats are your templates available?</a>
                    </h5>
                  </div>
                  <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                    <div class="card-custom-body">
                      <p>Website templates are available in Photoshop and HTML formats. Fonts are included with Photoshop file. In most templates HTML is compatible with Adobe® Dreamweaver® and Microsoft Frontpage®.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-5">
              <figure><img src="images/after.jpg" alt=""></figure>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Call to Action-->
      <section class="rd-parallax text-center bg-accent">
        <section class="section parallax-container context-dark" data-parallax-img="images/bg-image-8.jpg">
          <div class="parallax-content">
            <div class="section-md text-center">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-md-11 col-lg-9 col-xl-8">
                    <h3 class="heading-decorated">We provide unique solutions for your business</h3><a class="btn-anis" href="#contacts">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- portfolio-->
      <section class="section-md bg-default text-center" id="portfolio">
        <div class="container">
          <h4 class="heading-decorated">Portfolio</h4>
          <div class="isotope-wrap row row-70">
            <div class="col-sm-12">
              <ul class="list-nav isotope-filters isotope-filters-horizontal">
                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Projects</a></li>
                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Solutions</a></li>
              </ul>
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1">
                  <div class="thumb thumb--effect-julia"><img src="images/portfolio-1-418x315.jpg" alt="">
                    <div class="thumb__overlay">
                      <h4 class="thumb__title">Business <span class="text-bold">Planning</span>
                      </h4>
                      <div>
                        <p>LDCC-Agency offers</p>
                        <p>High-quality products and</p>
                        <p>Business solutions</p>
                      </div><a class="thumb__overlay__link" href="#">View more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1">
                  <div class="thumb thumb--effect-julia"><img src="images/portfolio-2-418x315.jpg" alt="">
                    <div class="thumb__overlay">
                      <h4 class="thumb__title">Cost <span class="text-bold">Reduction</span>
                      </h4>
                      <div>
                        <p>LDCC-Agency offers</p>
                        <p>High-quality products and</p>
                        <p>business solutions</p>
                      </div><a class="thumb__overlay__link" href="#">View more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1">
                  <div class="thumb thumb--effect-julia"><img src="images/portfolio-3-418x315.jpg" alt="">
                    <div class="thumb__overlay">
                      <h4 class="thumb__title">Risk <span class="text-bold">Assurance</span>
                      </h4>
                      <div>
                        <p>LDCC-Agency offers</p>
                        <p>High-quality products and</p>
                        <p>business solutions</p>
                      </div><a class="thumb__overlay__link" href="#">View more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 1">
                  <div class="thumb thumb--effect-julia"><img src="images/portfolio-4-418x315.jpg" alt="">
                    <div class="thumb__overlay">
                      <h4 class="thumb__title">Internal <span class="text-bold">Audit</span>
                      </h4>
                      <div>
                        <p>LDCC-Agency offers</p>
                        <p>High-quality products and</p>
                        <p>business solutions</p>
                      </div><a class="thumb__overlay__link" href="#">View more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2">
                  <div class="thumb thumb--effect-julia"><img src="images/portfolio-5-418x315.jpg" alt="">
                    <div class="thumb__overlay">
                      <h4 class="thumb__title">Tax <span class="text-bold">Management</span>
                      </h4>
                      <div>
                        <p>LDCC-Agency offers</p>
                        <p>High-quality products and</p>
                        <p>business solutions</p>
                      </div><a class="thumb__overlay__link" href="#">View more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category 2">
                  <div class="thumb thumb--effect-julia"><img src="images/portfolio-6-418x315.jpg" alt="">
                    <div class="thumb__overlay">
                      <h4 class="thumb__title">Financial <span class="text-bold">Modeling</span>
                      </h4>
                      <div>
                        <p>LDCC-Agency offers</p>
                        <p>High-quality products and</p>
                        <p>business solutions</p>
                      </div><a class="thumb__overlay__link" href="#">View more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="rd-parallax text-center">
        <section class="section parallax-container context-dark" data-parallax-img="images/parallax-3.jpg">
          <div class="parallax-content">
            <div class="section-lg text-center">
              <div class="container">
                <div class="row justify-content-sm-center row-60">
                  <div class="col-md-4 col-xl-3">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.45" data-gradient="#ed1c24, #ed1c24" data-empty-fill="#fff" data-size="141" data-thickness="5"><span></span></div>
                    <div class="progress-bar-circle-title">New Services</div>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.60" data-gradient="#ed1c24, #ed1c24" data-empty-fill="#fff" data-size="141" data-thickness="5"><span></span></div>
                    <div class="progress-bar-circle-title">Unique Solutions</div>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <!-- Circle Progress Bar-->
                    <div class="progress-bar-circle" data-value="0.95" data-gradient="#ed1c24, #ed1c24" data-empty-fill="#fff" data-size="141" data-thickness="5"><span></span></div>
                    <div class="progress-bar-circle-title">Satisfied customers</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- Meet Our Team-->
      <section class="section-md bg-default text-center" id="our-team">
        <div class="container">
          <h4 class="heading-decorated">Meet Our Team</h4>
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <article class="thumb-flat">
                <div class="thumb thumb--effect-winston"><img src="images/team-1-418x315.jpg" alt="">
                  <div class="thumb__overlay">
                    <ul class="inline-list">
                      <li><a href="#"><span class="icon icon-sm fa-commenting"></span></a></li>
                      <li><a href="#"><span class="icon icon-sm fa-eye"></span></a></li>
                      <li><a href="#"><span class="icon icon-sm fa-heart-o"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="thumb-flat__body">
                  <p class="heading-6"><a href="#">Choi Jong Pil</a></p>
                  <p class="thumb-flat__subtitle">CEO, Managing Director</p>
                  <p>In his role as Managing Director, Choi serves as a trusted business advisor to Business Owners, CEOs, CFOs and Boards of Advisors, driving value and accountability in the following strategic areas: succession & ownership planning, strategic planning, owners agreement structures, compensation planning, family business advisory & issue mediation.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <article class="thumb-flat">
                <div class="thumb thumb--effect-winston"><img src="images/team-2-418x315.jpg" alt="">
                  <div class="thumb__overlay">
                    <ul class="inline-list">
                      <li><a href="#"><span class="icon icon-sm fa-commenting"></span></a></li>
                      <li><a href="#"><span class="icon icon-sm fa-eye"></span></a></li>
                      <li><a href="#"><span class="icon icon-sm fa-heart-o"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="thumb-flat__body">
                  <p class="heading-6"><a href="#">Eddy Nguyen</a></p>
                  <p class="thumb-flat__subtitle">Consultant Manager</p>
                  <p>As a Consultant Manager, Eddy brings a wide variety of industry and public accounting experience to the firm. This experience includes corporate tax provisions, tax planning and compliance for corporate and flow through entities, as well as managing both federal and state audits. She is a well of experience in tax management, which is proven by dozens of client testimonials.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <article class="thumb-flat">
                <div class="thumb thumb--effect-winston"><img src="images/team-3-418x315.jpg" alt="">
                  <div class="thumb__overlay">
                    <ul class="inline-list">
                      <li><a href="#"><span class="icon icon-sm fa-commenting"></span></a></li>
                      <li><a href="#"><span class="icon icon-sm fa-eye"></span></a></li>
                      <li><a href="#"><span class="icon icon-sm fa-heart-o"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="thumb-flat__body">
                  <p class="heading-6"><a href="#">Kam Nguyen</a></p>
                  <p class="thumb-flat__subtitle">Sales manager</p>
                  <p>As a Sales manager, Kam helps our team focus on developing and growing their skills and expertise. She also works closely with clients to ensure that their financial statements are accurate, organized and positioned as a tool for helping to achieve both short and long-term goals that are set in cooperation with our team.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      
      
      <section class="section parallax-container context-dark" data-parallax-img="images/bg-image-2.jpg">
        <div class="parallax-content">
          <div class="container section-lg text-center" id="testimonials">
            <h4 class="heading-decorated">WHAT PEOPLE SAY</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-nav="true" data-autoplay="true">
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/deborah-quagmire-120x120.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">My cooperation with your team helped me understand that you really care about your clients – it has already been proven by a lot of positive reviews – and that's why I chose you. Your reliable solutions helped me improve my business plan in no time!</p>
                  </div>
                  <p class="quote-default__cite">Jane Smith</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/benedict-arnold-120x120.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">I was impressed by the quality of what your specialists did. They quickly found out what was the main problem of my company and helped me form a correct strategy for my future business development. I definitely recommend this team.</p>
                  </div>
                  <p class="quote-default__cite">James Wilson</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="images/testimonials-3-120x120.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">I appreciate what you’ve done to help my small company develop and thrive in the market niche that we specialize in. Your business consulting experts are the best! Your experience and unique approach to your clients are exceptional.</p>
                  </div>
                  <p class="quote-default__cite">Ann Williams</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- get a quote-->
      <section class="bg-gray-lighter object-wrap" id="contacts">
        <div class="section-lg">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-lg-5">
                <h4 class="heading-decorated">Get a Quote</h4>
                <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-name">Your name</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="contact-email">Your e-mail</label>
                  </div>
                  <div class="form-wrap">
                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    <label class="form-label" for="contact-message">Your message</label>
                  </div>
                  <div class="form-wrap form-wrap-recaptcha">
                    <!-- Google captcha-->
                    <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                  </div>
                  <button class="btn-anis btn-anis-primary" type="submit">send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url(images/bg-image-3.jpg)"></div>
      </section>
@endsection
