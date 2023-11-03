<?php
// Template name:Page
?>
<?php get_header() ?>
    <!--MAIN SECTION -->
<section class="main_section">
    <div class="container-wrapper">
        <?php if( get_field('main_img_right') ): ?>
            <img class="float-end main_img_right" src="<?php the_field('main_img_right'); ?>" />
        <?php endif; ?>
        <?php if( get_field('main_img_left') ): ?>
            <img class="float-start main_img_left" src="<?php the_field('main_img_left'); ?>" />
        <?php endif; ?>
        <div class="container">
            <?php the_field('main_title'); ?>
            <?php the_field('main_subtitle'); ?>
            <!-- main button -->
            <?php the_field ('main_btn');?> 
            <!-- items about profit --> 
             <div class="justify-content-between profit_items">
                <?php the_field('profit_items'); ?>
            </div>
        </div> 
    </div> 
</section>     

    <!--CASE STUDIES SECTION -->
    <section class="case_studies_section">
    <div class="container">
        <div class="tab">
            <button class="tablinks"  id="tab-1">All</button>
            <button class="tablinks"  id="tab-2">Marketing</button>
            <button class="tablinks"  id="tab-3">Branding</button>
            <button class="tablinks"  id="tab-4">Seo</button>
            <button class="tablinks"  id="tab-5" >Web</button>
        </div>
    </div>              
        <div id="content-1" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side d-flex align-items-start flex-column mb-5">
                    <?php the_field('case_studies_all'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider')) : ?>
                            <?php while (have_rows('slider')) : the_row();
                                $attachment_id = get_sub_field('tab_all');
                                $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                                $images = get_sub_field('tab_all');
                            ?>
                            <?php // Output the image itself using HTML img tag ?>
                                <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="content-2" class="tabcontent">
            <div class="case_studies_wrapper ">
                <div class="left-side  d-flex align-items-start flex-column mb-5">
                    <?php the_field('case_studies_all'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider')) : ?>
                        <?php while (have_rows('slider')) : the_row();
                            $attachment_id = get_sub_field('tab_marketing');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('tab_marketing');
                            $saze = get_sub_field('saze') ? get_sub_field('saze') : '486px'; 
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                            <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="content-3" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side  d-flex align-items-start flex-column mb-5">
                    <?php the_field('case_stadies_all'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider')) : ?>
                        <?php while (have_rows('slider')) : the_row();
                            $attachment_id = get_sub_field('tab_brand');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('tab_brand');
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                        <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="content-4" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side  d-flex align-items-start flex-column mb-5">
                    <?php the_field('case_studies_all'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider')) : ?>
                        <?php while (have_rows('slider')) : the_row();
                            $attachment_id = get_sub_field('tab_seo');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('tab_seo');
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                        <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="content-5" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side  d-flex align-items-start flex-column mb-5">
                    <?php the_field('case_studies_all'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider')) : ?>
                        <?php while (have_rows('slider')) : the_row();
                            $attachment_id = get_sub_field('tab_web');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('tab_web');

                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                        <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>       
</section> 

    <!--DIGITAL EXPERIENCE SECTION -->
<section class="digital_experience_section">
    <div class="container-wrapper">
        <div class="digital_experience_wrapper_left-side">
            <img class="float-start digital_experience_images_big" src="<?php the_field('digital_experience_images_big'); ?>" />
            <img class="digital_experience_images_small"  src="<?php the_field('digital_experience_images_small'); ?>" />
        </div>
    </div>
    <div class="container">
        <div class="col">
            <div class="digital_experience_wrapper_right-side">
                <?php the_field('digital_experience_inner'); ?>
            </div>
        </div>   
    </div>
</section> 

    <!--QUOTE SECTION -->
<section class="quote_section">
    <div class="container">
        <?php the_field('quote_title'); ?>
        <div class="float-end quetion_wrapper">
            <?php the_field('quote_wrapper'); ?>
        </div>   
     </div> 
</section>

    <!--FORM SECTION -->
<section class="form_section">
    <div class="container">
        <?php the_field('form'); ?>
        <div class="companies_wrapper">
            <?php the_field('comp_title'); ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 text-center comp_logo">
                <?php the_field('logo'); ?>     
            </div> 
        </div>
    </div>
</section>

<?php get_footer() ?>