<?php
/*
*   Template Name: Pricing Table
*/

?>
<?php get_header(); ?>



<?php get_template_part("left-sidebar"); ?>


<div class="main-wrapper" <?php body_class(); ?>>

    <div class="container-fluid">
        <h2>
            <?php $pricing = get_post_meta(get_the_ID(), "_divdev_pt_pricing_table", true);
            ?>
        </h2>
        <div class="row ">
            <?php
            foreach ($pricing as $ptc) {
            ?>
                <div class="col-md-4 ">
                    <h2 class="th fw-bold">
                        <?php echo esc_html($ptc["_divdev_pt_package_name"]);  ?>
                    </h2>
                    <ul class="price">
                        <?php foreach ($ptc["_divdev_pt_pricing_option"] as $pto) {  ?>
                            <li class="grey"><?php echo esc_html($pto);  ?></li>
                        <?php }  ?>
                    </ul>
                    <h3 class="fw-bold">
                        <?php echo esc_html($ptc["_divdev_pt_pricing"]);  ?>
                    </h3>
                </div>
            <?php }  ?>


        </div>
    </div>

    <pre>
        <?php print_r($pricing);  ?>
        
    </pre>

    <section class="pricing-section p-3 p-lg-3">
        <div class="container single-col-max-width">
            <h3 class="text-center mb-4">Service Packages</h3>
            <!--//pricing-mobile-tabs-->
            <div class="row position-relative">
                <?php
                foreach ($pricing as $ptc) {
                ?>

                    <div class="col-md-4">
                        <h2 class="th fw-bold border p-2">
                            <?php echo esc_html($ptc["_divdev_pt_package_name"]);  ?>
                        </h2>
                        <ul class="price">
                            <?php foreach ($ptc["_divdev_pt_pricing_option"] as $pto) {  ?>
                                <li class="grey p-2"><?php echo esc_html($pto);  ?></li>
                            <?php }  ?>
                        </ul>
                        <h3 class="fw-bold position-absolute">
                            <?php echo esc_html($ptc["_divdev_pt_pricing"]);  ?>
                        </h3>
                    </div>

                <?php }  ?>
            </div>
            <!--//pricing-table-->

        </div>
        <!--//container-->
    </section>







    <section class=" theme-bg-light py-5 text-center">
        <div class="container">
            <h2 class="title">Promo Section Heading</h2>
            <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
            <figure class="promo-figure">
                <a href="https://made4dev.com" target="_blank"><img class="img-fluid" width="80%" src="<?php echo get_template_directory_uri() . '/assets/images/promo-banner.jpg" alt="image' ?>"></a>
            </figure>
        </div>
    </section>
    <!--//promo-section-end-->

    <?php get_footer(); ?>