<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <!--[if IE]>
      <script src=”http://html5shiv.googlecode.com/svn/trunk/html5.js”></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="main-header">
      <div class="full-width">
        <nav class="navbar navbar-expand-md p-0 <?php if( is_page('29') || ( is_page('38') ) ): ?>navbar-dark<?php endif; ?>">
          <div class="menu-logo <?php if( is_page('29') || ( is_page('38') ) ): ?>menu-inverse<?php endif; ?>">
            <a class="link-logo" href="<?php bloginfo('url'); ?>/">
              <?php include (TEMPLATEPATH . '/partials/logo.php'); ?>
            </a>
          </div>
          <div class="ml-auto d-block d-md-none collapsed" id="burger-menu" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <div class="nav-icon"><span></span><span></span><span></span></div>
          </div>
          <div class="collapse navbar-collapse" id="navbarMain">
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'items_wrap'  => '<ul class="navbar-nav navbar-custom justify-content-end align-items-center" id="nav">%3$s</ul>',
            )); ?>
            <div class="d-flex d-md-none justify-content-center">
              <nav class="menu-footer">
                <p>Síguenos en:</p>
                <ul class="social-links">
                  <li>
                    <a href="#" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/facebook.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/twitter.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/instagram.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/linkedin.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/google-plus.php'); ?>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </header>
