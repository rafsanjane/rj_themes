<?php

/*
 * Template Name: About Page Template
 */

get_header();?>

<?php get_template_part("left-sidebar");?>


<div class="main-wrapper">
    <?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading"><?php bloginfo("title")?></h2>
            <h4 class="intro"><?php bloginfo("description")?></h4>
            <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
            <!--//single-form-max-width-->
            <h3 class="title mb-1">
                <a class="text-link" href="<?php the_permalink();?>">
                    <?php the_title();?>

                </a>
            </h3>
        </div>
        <!--//container-->
    </section>



    <!------Post Start From here----->

    <article class="about-section py-5">
        <div class="container">
            <h2 class="title mb-3">About Me</h2>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
            <figure><img class="img-fluid" src="assets/images/about-me.jpg" alt="image"></figure>
            <h5 class="mt-5">About The Blog</h5>
            <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales
                sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida
                magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis
                sed, nonummy id, metus.</p>
            <h5 class="mt-5">My Skills and Experiences</h5>
            <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
            <h5 class="mt-5">Side Projects</h5>
            <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>

            <figure><a href="https://made4dev.com"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a></figure>
        </div>
    </article>
    <!--//about-section-->

    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">Newsletter</h2>
            <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
            <div class="single-form-max-width pt-3 mx-auto">
                <form class="signup-form row g-2 g-lg-2 align-items-center">
                    <div class="col-12 col-md-9">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail" placeholder="Enter email">
                    </div>
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
                <!--//signup-form-->
            </div>
            <!--//single-form-max-width-->
        </div>
        <!--//container-->
    </section>







    <?php get_footer();?>