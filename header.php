<!doctype html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <?php wp_head(); ?>
  </head>
  <body>
     <div id="wrapper">
        <header class="container-fluid">
           <div class="container">
             <div class="row justify-content-between padding25">
               <div id="logo" class="col col-lg-4 col-md-4 col-sm-12 align-self-center">
                  <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/layout/challengher-retouch-logo.png" alt="ChallengHer Retouch Logo"></a>
               </div>

               <div id="header-social" class="col col-lg-8 col-md-8 col-sm-12 align-self-end align-items-end d-flex justify-content-end flex-column">
                  <div class="social-section">
                     <a href="" class="social-icon"><img src="<?php bloginfo('template_url'); ?>/img/icons/facebook-icon.png" alt="facebook icon"></a>
                     <a href="" class="social-icon"><img src="<?php bloginfo('template_url'); ?>/img/icons/twitter-icon.png" alt="twitter icon"></a>
                     <a href="" class="social-icon"><img src="<?php bloginfo('template_url'); ?>/img/icons/linked-in-icon.png" alt="linked in icon"></a>
                     <a href="" class="social-icon"><img src="<?php bloginfo('template_url'); ?>/img/icons/google-plus-icon.png" alt="google plus icon"></a>
                     <a href="" class="social-icon"><img src="<?php bloginfo('template_url'); ?>/img/icons/instagram-icon.png" alt="instagram icon"></a>
                  </div>

                  <nav id="mainNav" class="main-nav padding40-0" role="navigation">
     	               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '' ) ); ?>
     	            </nav>

               </div>
             </div>
           </div>
        </header>

        <main>
