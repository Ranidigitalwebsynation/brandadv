<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/header-bg-1-1.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Contact Information    
    ==============================-->
<section class=" space-top">
    <div class="contact-map">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1200&amp;height=600&amp;hl=en&amp;q=Brandvocates, Paradise, Ff03, D12, Acharyaniketan, Mayur Vihar Phase1 Delhi 110091&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections NYT</a></div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 1440px;
                    height: 600px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 1440px;
                    height: 600px;
                }

                .gmap_iframe {
                    width: 1440px !important;
                    height: 600px !important;
                }
            </style>
        </div>
    </div>
    <div class="container">
        <div class="row gx-0">
            <div class="col-md-4 contact-box wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-box__icon"><img src="<?php echo base_url(); ?>assets/img/icon/contact-1-1.png" alt="icon"></div>
                <h3 class="contact-box__title h5">Office Address:</h3>
                <p class="contact-box__text">Brandvocates, Paradise, Ff03, D12, Acharyaniketan, Mayur Vihar Phase1 Delhi 110091</p>
            </div>
            <div class="col-md-4 contact-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="contact-box__icon"><img src="<?php echo base_url(); ?>assets/img/icon/contact-1-2.png" alt="icon"></div>
                <h3 class="contact-box__title h5">Call Us For Help:</h3>
                <p class="contact-box__text mt-3"><a href="<?php echo base_url(); ?>tel:+91 7011019691">+91 7011019691</a> (or) <br><a href="<?php echo base_url(); ?>tel:++91 7011019691">+91 7011019691</a></p>
            </div>
            <div class="col-md-4 contact-box wow fadeInUp" data-wow-delay="0.5s">
                <div class="contact-box__icon"><img src="<?php echo base_url(); ?>assets/img/icon/contact-1-3.png" alt="icon"></div>
                <h3 class="contact-box__title h5">Mail info:</h3>
                <p class="contact-box__text"><a href="<?php echo base_url(); ?>mailto:info@brandvocatesindia.com">info@brandvocatesindia.com</a> (or) <a href="<?php echo base_url(); ?>mailto:director@brandvocatesindia.com">director@brandvocatesindia.com</a></p>
            </div>
        </div>
    </div>
</section>
<!--==============================
      Contact Form Area
    ==============================-->
<section class=" pt-20 space-bottom">
    <div class="container">
        <div class="row gx-60 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <img src="<?php echo base_url(); ?>assets/img/about/faq-1-1.png" alt="image">
            </div>
            <div class="col-lg-7 pt-5 pt-xl-0 wow fadeInUp" data-wow-delay="0.4s">
                <form action="mail.php" method="POST" class="ajax-contact">
                    <span class="sec-subtitle">For Any Query</span>
                    <h2 class="sec-title mb-4 pb-2">Send Us a Message</h2>
                    <div class="row gx-20">
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Name" name="name" id="name" class="form-control style4" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Last Name" name=" last name" id=" last name" class="form-control style4" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" placeholder="Your Email" name="email" id="email" class="form-control style4" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="number" placeholder="Phone No" name="number" id="number" class="form-control style4" required>
                        </div>

                        <div class="form-group col-12">
                            <textarea placeholder="Message" name="message" id="message" class="form-control style4"></textarea required>
                        </div>
                        <div class="col-12">
                            <button class="vs-btn" type="submit">Submit Now</button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </div>
    </div>
</section>