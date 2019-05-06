<!DOCTYPE html <?php language_attributes(); ?>>

    <head <?php do_action('add_head_attributes'); ?>>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
<header>
<nav class="nav-collapse">
<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
</nav>
<section>
<div>
<?php the_custom_logo();?>
</div>
</section>
</header>

   
   <div class="sidebar_item">
  
   
