<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <!-- Favicon -->

<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_url(); ?>/wp-content/themes/Marketeros-Theme/images/favicon/favicon_16x16.png"> 
<link rel="shortcut icon" href="<?php echo get_site_url(); ?>/wp-content/themes/Marketeros-Theme/images/favicon/favicon.ico" />
<!--/Favicon -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    
      
    <header>
    <div class="top-bar">
        <div class="col-sm-4">
        <?php wp_nav_menu( array( 'theme_location' => 'top_menu' ) ); ?>
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-5">
             <?php dynamic_sidebar('Telefonos-Top'); ?>
        </div>
    </div>
    <div class="container container-mk">

        <div class="row head-mk">
            <div class="col-sm-4"></div>
        <div class="col-sm-4 logo-mk wow fadeIn">    
            <a href="<?php echo get_site_url(); ?>" title="Marketerosweb Colombia"><img class="alignnone size-full wp-image-32 logo-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/10/Logo-marketerosweb.png" alt="logo-marketerosweb" width="254" height="79" /> </a>
        </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row head-mk">
            <div class="col-sm-1"></div>
        <div class="col-sm-10 menu-mk wow fadeIn">    
            <nav class="menu-principal">
              <div class="main-nav">
                 <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
            </div>
            </nav>
        </div> 
            <div class="col-sm-1"></div>
    </div>

        </div>
    </div>
    </header>
      