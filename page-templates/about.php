<?php
/**
 * Template Name: Customizer About
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
</head>
<body>
<div class="section banner">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mission section">
                <h1 class="heading" id="about-heading">
                    <?php
                    echo esc_html(get_theme_mod('cust_about_heading', __('About Page Heading', 'customizer')));
                    ?>
                </h1>
                <div id="about-description">
                    <?php
                        echo apply_filters('the_content', get_theme_mod('cust_about_description'));
                    ?>
                    <?php
                    echo get_theme_mod('test_image');
                    ?>
                    <br>
                    <?php
                    $attachment_id =  attachment_url_to_postid(get_theme_mod('test_image'));//Get Image Id
                    echo wp_get_attachment_image($attachment_id, 'large');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section footer">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque esse nobis recusandae ullam
        unde.
    </p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Facebook</a></li>
        <li class="list-inline-item"><a href="#">Twitter</a></li>
        <li class="list-inline-item"><a href="#">Github</a></li>
    </ul>
</div>
</body>
<?php wp_footer(); ?>
</html>
