<?php
function cetechz_styles(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('bootstrap',get_template_directory_uri()."/assets/bootstrap.min.css");
    wp_enqueue_style('fontawesome',get_template_directory_uri()."/assets/fontawesome/css/all.min.css");
    wp_enqueue_style('animate',get_template_directory_uri()."/assets/lib/animate/animate.min.css");
    wp_enqueue_style('owlcar',get_template_directory_uri()."/assets/lib/owlcarousel/assets/owl.carousel.min.css");
    wp_enqueue_style('lightbox',get_template_directory_uri()."/assets/lib/lightbox/css/lightbox.min.css");

    wp_enqueue_script('jquery',get_template_directory_uri()."/assets/js/jquery.min.js",array(),'1.0.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),'1.0.0',true);
    wp_enqueue_script('wow',get_template_directory_uri()."/assets/lib/wow/wow.min.js",array(),'1.0.0',true);
    wp_enqueue_script('typed',get_template_directory_uri()."/assets/lib/typed/typed.min.js",array(),'1.0.0',true);
    wp_enqueue_script('waypoint',get_template_directory_uri()."/assets/lib/waypoints/waypoints.min.js",array(),'1.0.0',true);
    wp_enqueue_script('easing',get_template_directory_uri()."/assets/lib/easing/easing.min.js",array(),'1.0.0',true);
    wp_enqueue_script('mainjs',get_template_directory_uri()."/assets/js/main.js",array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','cetechz_styles');
function get_body_content(){
    get_hero_section().
    get_about_section();
    get_service_section().
    get_experience_section().
    get_contact_section();
}

function get_hero_section(){
    ?>
    <!-- Hero section Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Charanjeet Singh</h1>
                            <h2></h2>
                            <div class="typed-text">Web Developer, Backend Developer, Front End Developer</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="#contact">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="<?= get_template_directory_uri()?>/assets/img/me3.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <?php
}

function get_about_section(){
    ?>
    <!-- About Start -->
    <div class="about wow fadeInUp mt-5" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="<?= get_template_directory_uri()?>/assets/img/exp.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Few Words For Me</p>
                            <h2>5+ Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Hi I'm Charanjeet Singh. I have 5+ years of experience in Web Developement with various technologies and frameworks. I worked on various types of projects eg. E-Commerce stores , CMS and Static websites.
                            </p>
                        </div>
                        <div class="skills">
                            <div class="skill-name">
                                <p><strong>Frontend</strong>(HTML,CSS,JS,Jquery,Bootstrap)</p><p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p><strong>Backend</strong>(PHP,Laravel)</p><p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p><strong>Ecommerce</strong>(Magento,Shopify)</p><p>70%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p><strong>CMS</strong>(Wordpress)</p><p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p><strong>Server</strong>(Nginx,Apache)</p><p>50%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a class="btn" href="" download="cv.pdf">Download CV</a>
                        <a class="btn" href="https://bio.link/charanjeet" >My Bio Links</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php
}
function get_service_section(){
    ?>
    <!-- Service Section Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>Unique Choice makes You Unique</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-text">
                            <h3>Web Design</h3>
                            <p>
                                I design the websites with latest and long term technologies. Designing Websites with animations and clean deliverablity of content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="service-text">
                            <h3>Web Development</h3>
                            <p>
                                Developing Web applications for all types of requirements. Specialist in Ecommerce solutions from Product listing to Product Shipping to the customer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fab fa-android"></i>
                        </div>
                        <div class="service-text">
                            <h3>Cloud Service</h3>
                            <p>
                                You are new in the industry, you need Cloud based solutions. Then you are at right place. I provide all types of cloud based services Domain name , Cloud Space , Hosting etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fab fa-apple"></i>
                        </div>
                        <div class="service-text">
                            <h3>Server Management</h3>
                            <p>
                                Management of all servers is on my fingertips. I majorly working with Nginx and Apache servers the fastest , reliable and most secure servers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services section End -->
    <?php
}
function get_experience_section(){
    ?>
    <!-- Experience section Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <h2>Working Experience At a Glance</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">Aug 2017- Aug 2018</div>
                        <h2>Associate Software Developer</h2>
                        <h4>Invent Infotech Pvt. Ltd.</h4>
                        <p>
                            At the starting point of my career I joined Invent Infotech as Associate Software Developer and worked in Visual Basic on Salary Management, School Management and Accounts Management Softwares
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">Aug 2018 - June 2021</div>
                        <h2>Web Developer</h2>
                        <h4>Evolvan Info Solutions Pvt. Ltd.</h4>
                        <p>
                            Here I worked on various types of online projects. Worked on Ecommerce solutions , Custom PHP web applications and CMS solutions.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">June 2021 - Present</div>
                        <h2>Magento Developer</h2>
                        <h4>RVS Media</h4>
                        <p>
                            My major responsibilty is here to manage Ecommerce projects based on Magento and understanding client requirements to making sure the delivery of the task. Custom Magento Modules , Themes , Upgrades and Migrations from Shopify to Magento , Wordpress to Magento and vice versa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Experience section End -->
    <?php
}
function get_contact_section(){

    ?>
    <!-- Contact Start -->

    <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <h2>Contact if you are looking for solution or have any idea</h2>
                            <?=
                                apply_shortcodes('[contact-form-7 id="6" title="Contact form 1"]');
                            ?>
                            <form name="sentMessage" id="contactForm" style="display: none;" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php
}
