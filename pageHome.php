<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<?php
// Template name:Page
?>

    <!--TOP SECTION -->
<img class="top_image_right" src="<?php the_field('top_image_right'); ?>" />
<img class="top_image_left"  src="<?php the_field('top_image_left'); ?>" />
<div class="container-wrapper">
    <div class="top_wrapper">
        <h1 class="top_title title_section"><?php echo esc_html( get_field('top_title') ); ?></h1>
        <p class="top_subtitle subtitle_section"><?php echo esc_html( get_field('top_subtitle') ); ?></p>
    
        <!-- items about increase -->
        <div class="d-flex increase_box">
        <?php if (have_rows("increase_items")) : ?>
            <?php while (have_rows("increase_items")) : the_row(); ?>
            <div class="inrease_items">
                <h3 class="top_number_title title_section"><?php the_sub_field("number") ?> </h3>
                <p class="top_number_descr subtitle_section"> <?php the_sub_field("description") ?> </p>
        </div>    
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <button class="top_btn">
            <?php the_field ('top_btn');?>
        </button>

        <!-- items about profit -->
        <div class="profit_items">
        <?php if (have_rows('profit')) : ?>
            <?php while (have_rows('profit')) : the_row();
                $attachment_id = get_sub_field('images');
                $image_url = wp_get_attachment_image_src($attachment_id, 'medium');
                $images = get_sub_field('images');
            ?>
                <?php// Output the image itself using HTML img tag ?>
                <div class="d-grid profit_item">
                    <img class="top_icons" src="<?php echo $image_url[0]; ?>" alt="Image" />
                    <h3 class="profit_title title_section"><?php the_sub_field("titles") ?> </h3>
                    <div class="profit_descr subtitle_section"><?php the_sub_field("description") ?> </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>    
    </div>   
</div>     

    <!--CASE STUDIES SECTION -->
<section class="case_studies_section">
    <div class="container-wrapper">
        <?php the_field('case_studies_tabs'); ?>
        <div id="all" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side">
                    <?php the_field('case_studies_inner'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider_wrapper')) : ?>
                            <?php while (have_rows('slider_wrapper')) : the_row();
                                $attachment_id = get_sub_field('slider_images');
                                $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                                $images = get_sub_field('slider_images');
                                 ?>
                            <?php // Output the image itself using HTML img tag ?>
                            <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="market" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side">
                    <?php the_field('case_studies_inner'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider_wrapper')) : ?>
                        <?php while (have_rows('slider_wrapper')) : the_row();
                            $attachment_id = get_sub_field('slider_images');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('slider_images');
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                            <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="brand" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side">
                    <?php the_field('case_studies_inner'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider_wrapper')) : ?>
                        <?php while (have_rows('slider_wrapper')) : the_row();
                            $attachment_id = get_sub_field('slider_images');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('slider_images');
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                        <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="seo" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side">
                    <?php the_field('case_studies_inner'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider_wrapper')) : ?>
                        <?php while (have_rows('slider_wrapper')) : the_row();
                            $attachment_id = get_sub_field('slider_images');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('slider_images');
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                        <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
        <div id="web" class="tabcontent">
            <div class="case_studies_wrapper">
                <div class="left-side">
                    <?php the_field('case_studies_inner'); ?>
                </div>
                <div class="right-side">
                    <div class="team-slider">
                        <?php if (have_rows('slider_wrapper')) : ?>
                        <?php while (have_rows('slider_wrapper')) : the_row();
                            $attachment_id = get_sub_field('slider_images');
                            $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                            $images = get_sub_field('slider_images');
                        ?>
                        <?php // Output the image itself using HTML img tag ?>
                        <div><img src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>    
            </div>
        </div>               
    </div>
</section>

    <!--DIGITAL EXPERIENCE SECTION -->
<section class="digital_experience_section">
    <div class="container-wrapper">
        <div class="digital_experience_wrapper">
            <div class="digital_experience_wrapper_right-side">
                <?php the_field('digital_experience_inner'); ?>
            </div>
            <div class="digital_experience_wrapper_left-side">
                <img class="digital_experience_images_big" src="<?php the_field('digital_experience_images_big'); ?>" />
                <img class="digital_experience_images_small"  src="<?php the_field('digital_experience_images_small'); ?>" />
            </div>
        </div>   
    </div>
</section>

    <!--QUOTE SECTION -->
<section class="quote_section">
    <div class="container-wrapper">
        <h1 class="quote_title title_section title_section_white "><?php echo esc_html( get_field('quote_title') ); ?></h1>
        <div class="d-grid quetion_inner">
        <p class="quote_subtitle subtitle_section subtitle_section_white"><?php echo esc_html( get_field('quote_subtitle') ); ?></p>
        <p class="quote_author"><?php echo esc_html( get_field('quote_author') ); ?></p>
    </div>
   </div> 
</section>

    <!--FORM SECTION -->
<section class="form_section">
    <div class="container-wrapper">
        <?php the_field('form'); ?>
    </div>
    <div class="companies_wrapper">
    <div class="container-wrapper">
        <h1 class="title_section companies_title"><?php echo esc_html( get_field('companies_title') ); ?></h1>
            <div class="d-grid companies_items">
                <?php if (have_rows('companies_images')) : ?>
                <?php while (have_rows('companies_images')) : the_row();
                    $attachment_id = get_sub_field('comp_logo');
                    $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                    $images = get_sub_field('comp_logo');
                ?>
                <?php // Output the image itself using HTML img tag ?>
                <div class="companies_image"><img class="logo" src="<?php echo $image_url[0]; ?>" alt="Image" /></div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
     </div>   
    </div>
</section>