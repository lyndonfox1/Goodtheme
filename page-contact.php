<?php get_header();?>
<h1>Contact</h1>
<!-- <p>This is the contact page</P> -->

<?php
$blurb = get_theme_mod('good_theme_contact_blurb');
if($blurb || is_customize_preview()):
    // echo wpautop($blurb);
    echo $blurb;


endif;

get_template_part('template-parts/content');
 get_footer();?>