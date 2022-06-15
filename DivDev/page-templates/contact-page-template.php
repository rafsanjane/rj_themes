<?php

/*
* Template Name: Contact Page Template
*/


get_header(); ?>



<?php get_template_part("left-sidebar"); ?>


<div class="main-wrapper">
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>


    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading">
                <a class="text-link" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="intro">
                <p>Interested in hiring me for your project or just want to say hi? You can fill in the contact form below or send me an email to <a class="text-link" href="mailto:#">rafsan@rafsanjane.com</a></p>
                <p>Want to get connected? Follow me on the social channels below.</p>
                <ul class="list-inline mb-0">


                    <li class="list-inline-item mb-3"><a class="linkedin" href="https://www.linkedin.com/in/md-rafsanjani/"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
                    <li class="list-inline-item mb-3"><a class="github" href="https://github.com/rafsanjane"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
                    <li class="list-inline-item mb-3"><a class="twitter" href="#"><i class="fab fa-twitter fa-fw fa-lg"></i></a></li>
                    <li class="list-inline-item"><a class="instagram" href="https://www.instagram.com/rafsanhoby/"><i class="fab fa-instagram fa-fw fa-lg"></i></a></li>
                    <li class="list-inline-item mb-3"><a class="stack-overflow" href="#"><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
                    <!-- <li class="list-inline-item mb-3"><a class="medium" href="#"><i class="fab fa-medium-m fa-fw fa-lg"></i></a></li> -->
                    <!-- <li class="list-inline-item mb-3"><a class="codepen" href="#"><i class="fab fa-codepen fa-fw fa-lg"></i></a></li> -->
                    <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw fa-lg"></i></a></li>-->
                </ul>
                <!--//social-list-->
            </div>
            <!--//container-->
    </section>
    <section class="contact-section px-3 py-5 p-md-5 ">
        <div class="container row mx-md-auto mx-sm-auto">
            <form id="contact-form" class="contact-form col-lg-7" method="post" action="">
                <h3 class="text-center mb-3">Get In Touch</h3>
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="sr-only" for="cname">Name</label>
                        <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" aria-required="true">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="sr-only" for="cemail">Email</label>
                        <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" aria-required="true">
                    </div>
                    <div class="col-12">
                        <select id="services" class="form-select" name="services">
                            <option selected>Select a service package you're interested in...</option>
                            <option value="basic">Basic</option>
                            <option value="standard">Standard</option>
                            <option value="premium">Premium</option>
                            <option value="not sure">Not sure</option>
                        </select>
                        <div class="mt-2">
                            <small class="form-text text-muted pt-1"><i class="fas fa-info-circle me-2 text-primary"></i>Want to know what's included in each package? Check the <a class="text-link" href="services.php" target="_blank">Services &amp; Pricing</a> page.</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="sr-only" for="cmessage">Your message</label>
                        <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-block btn-primary py-2">Send Now</button>
                    </div>
                </div>
                <!--//form-row-->
            </form>

            <!--Google map-->
            <div class="intro col-lg-5 pt-lg-5 ">

                <div class="mx-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14613.866155976837!2d90.4473608!3d23.6950281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabc7ded56e1b710c!2sAl-Furqan%20IT%20Firm!5e0!3m2!1sen!2sbd!4v1647370753478!5m2!1sen!2sbd" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!--Google Maps-->
            </div>







        </div>
        <!--//container-->
    </section>





    <?php get_footer(); ?>