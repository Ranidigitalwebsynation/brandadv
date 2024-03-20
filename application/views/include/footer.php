<!--==============================
			Footer Area
	==============================-->
<footer class="footer-wrapper footer-layout1" style="background-color: #075f89;">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between ">
                <!-- <div class="col-lg-auto col-xl-4">
                        <div class="widget  footer-widget">
                            <h4 class="widget_title">Connect With Us</h4>
                            <form class="newsletter-form">
                                <p class="form-title">Subscribe Our Newsletter For Getting Quick Updates and news.</p>
                                <input type="email" placeholder="Enter Your Email">
                                <button type="submit" class="vs-btn">Subscribe Now</button>
                            </form>
                        </div>
                    </div> -->
                <div class="col-md-4 col-xl-4">
                    <div class="widget footer-widget">
                        <img src="assets/img/logo.png" alt="Brand">
                        <div class="vs-widget-about mt-5">
                            <p>BRANDVOCATES INDIA PVT LTD acts as a PROFESSIONAL VENTURE and advocates CORPORATE GOVERNANCE through awareness campaigns, educational activities </p>
                        </div>
                        <div class="header-links">
                            <ul>
                                <li><i class="fal fa-envelope-open-text"></i><a href="mailto:info@brandvocatesindia.com">info@brandvocatesindia.com</a></li>
                                <li><i class="far fa-phone "></i> <a href="tel:91+7011019691,91+9810300876">91+7011019691, 91+9810300876 </a></li>
                            </ul>
                        </div>
                        <div class="header-social mt-4">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Useful Links</h3>
                        <div class="row gy-4">
                            <div class="col-xl-4 col-md-4 col-auto">
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li><a href="<?php echo base_url(); ?>about">About </a></li>
                                        <li><a href="<?php echo base_url(); ?>#">Service</a></li>
                                        <li><a href="<?php echo base_url(); ?>event">Event</a></li>
                                        <li><a href="<?php echo base_url(); ?>report">Report</a></li>
                                        <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8  col-auto">
                                <div class="menu-all-pages-container">
                                    <ul class="menu">

                                        <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                        <li><a href="<?php echo base_url(); ?>privacy-policy"> Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-4">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Service</h3>
                        <div class="row gy-4">
                            <div class="col-auto">
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="<?php echo base_url(); ?>public-policy-studies">Public Policy Studies</a></li>
                                        <li><a href="<?php echo base_url(); ?>opinion-and-image-building-campaigns">Opinion and Image Building Campaigns </a></li>
                                        <li><a href="<?php echo base_url(); ?>organizational-behavior-and-management-research">Organizational Behavior and Management z</a></li>
                                        <li><a href="<?php echo base_url(); ?>product-evaluation-brand-studies-assessment-and-analysis">Product Evaluation, Brand Studies,<br><span class="footertxt "> Assessment and Analysis </span></a></li>
                                        <li><a href="<?php echo base_url(); ?>management-development-training-programmes">Management Development Training
                                                <span class="footertxt "> Programmes</span> </a></li>
                                        <li><a href="<?php echo base_url(); ?>strategy-development-management-workshops">Strategy Development Management <br> <span class="footertxt ">Workshops </span> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-auto">
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        

                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="<?php echo base_url(); ?>">Brandadv</a> - All Rights Reserved By <a href="<?php echo base_url(); ?>">Brandadv</a>.</p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="header-social">
                        <p class="copyright-text">Designed by Digital Websynation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 
<div id="wp-stickybar">
   <a href="https://wa.me/+917011019691" target="_blank" class="vs-btn wp-btn">What's App<i class="fab fa-whatsapp"></i></a>
</div>
<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>


<script>
    window.addEventListener('scroll', function () {
        var aboutHome = document.getElementById('about-home');
        var stickyBar = document.getElementById('wp-stickybar');

        // Calculate the distance between the top of the page and the top of the about-home section
        var aboutHomeTop = aboutHome.offsetTop;

        // Calculate the current scroll position
        var scrollPosition = window.scrollY || window.pageYOffset;

        // If the scroll position is greater than or equal to the about-home section top, show the sticky bar
        if (scrollPosition >= aboutHomeTop) {
            stickyBar.style.display = 'block';
        } else {
            stickyBar.style.display = 'none';
        }
    });
</script>


<!-- Jquery -->
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Slick Slider -->
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<!-- <script src="assets/js/app.min.js"></script> -->
<!-- Layerslider -->
<script src="<?php echo base_url(); ?>assets/js/layerslider.utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layerslider.transitions.js"></script>
<script src="<?php echo base_url(); ?>assets/js/layerslider.kreaturamedia.jquery.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope Filter -->
<script src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<!-- WOW.js Animation -->
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<!-- Main Js File -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>