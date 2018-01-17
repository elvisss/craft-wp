<?php get_header(); ?>

<section class="fluid-full-section" id="main-section">
  <div class="swiper-container swiper-button-white" id="main-slider">
    <div class="swiper-wrapper">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 'posts_per_page' => 4, 'paged' => $paged,'post_type' => 'banner' );
        $postslist = new WP_Query( $args );

        if ( $postslist->have_posts() ) :
          while ( $postslist->have_posts() ) : $postslist->the_post();
      ?>

            <div class="swiper-slide">
              <figure class="main-banner-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                <img class="d-md-none" src="<?php the_post_thumbnail_url(); ?>" />
              </figure>
              <div class="main-banner-content">
                <div class="main-banner-wrapper">
                  <div class="d-table">
                    <div class="d-table-cell">
                      <h3><?php echo get_the_title(); ?></h3>
                      <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      <?php
          endwhile;
        endif;
      ?>
    </div>
    <div class="swiper-button-next d-none d-md-block"></div>
    <div class="swiper-button-prev d-none d-md-block"></div>
  </div>
  <div class="top-triangle d-none d-md-block"></div>
</section>
<section class="fluid-section" id="review-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-2 text-center">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="d-block d-md-none">
              <div class="about-horizontal">
                <?php include (TEMPLATEPATH . '/partials/logo.php'); ?>
              </div>
            </div>
            <div class="d-none d-md-block">
              <div class="about-vertical">
                <?php include (TEMPLATEPATH . '/partials/logo.php'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-7">
        <div class="review-content">
          <p>Somos un equipo de arquitectos e ingenieros especializados en <b>Arquitectura Corporativa</b> y <b>Comercial</b>, desarrollamos los proyectos en un ambiente coloborativo el cual permite una mejor comunicación entre nuestras áreas, logrando objetivos para los proyectos que nos son confiados. Pertenecemos al grupo de <b>PGBC</b>, el ser socios estratégicos fomentamos y brindamos <b>soluciones que cuiden el medio ambiente</b> acortando el tiempo de retorno a la inversión realizada por cada proyecto. Nuestra experiencia como equipo se ve reflejada en todos nuestros proyectos, los cuales son realizadas de manera <b>personalizada</b> según la <b>necesidad de tiempo</b> y <b>costo</b>.</p>
        </div>
      </div>
      <div class="col-12 col-md-3 text-center">
        <div class="d-table">
          <div class="d-table-cell">
            <figure class="peru-green"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/peru-green.png"></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fluid-section" id="home-services">
  <div class="boxes-services">
    <div class="d-none d-lg-block title-section">
      <h5>SERVICIOS</h5>
    </div>
    <div class="box-service box-architecture">
      <div class="box-service-wrapper">
        <div class="box-service-wrap box-service-toggle">
          <div class="box-service-wrap-content left-space">
            <div class="row no-gutters align-items-center justify-content-md-end">
              <div class="col-2 offset-1 offset-md-0">
                <figure class="main-image">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/architecture.png">
                </figure>
              </div>
              <div class="col-3 col-md-4">
                <div class="number-service">
                  <h5>1</h5>
                </div>
              </div>
              <div class="col-5 col-md-6">
                <div class="desc-service">
                  <div class="title-service">
                    <h4>ARQUITECTURA</h4>
                  </div>
                  <div class="desc-service">
                    <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box-service box-construction">
      <div class="box-service-wrapper">
        <div class="box-service-wrap box-service-toggle">
          <div class="box-service-wrap-content right-space">
            <div class="row no-gutters align-items-center">
              <div class="col-2 offset-1 offset-md-0">
                <figure class="main-image">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/construction.png">
                </figure>
              </div>
              <div class="col-3 col-md-4">
                <div class="number-service">
                  <h5>2</h5>
                </div>
              </div>
              <div class="col-5 col-md-6">
                <div class="desc-service">
                  <div class="title-service">
                    <h4>CONSTRUCCIÓN</h4>
                  </div>
                  <div class="desc-service">
                    <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-none d-lg-block view-more">
      <a class="btn btn-black" href="./servicios">VER MÁS</a>
    </div>
  </div>
</section>
<section class="fluid-section" id="brands-section">
  <div class="wrap-brands">
    <div class="wrap-brands-container swiper-button-black">
      <div class="swiper-container" id="brands-slider">
        <div class="swiper-wrapper">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'cliente' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
              while ( $postslist->have_posts() ) : $postslist->the_post();
          ?>
                <div class="swiper-slide">
                  <div class="brand-slide">
                    <div class="d-table">
                      <div class="d-table-cell"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"></div>
                    </div>
                  </div>
                </div>
          <?php
              endwhile;
            endif;
          ?>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>
<section class="fluid-section" id="comunity-section">
  <div class="container">
    <div class="swiper-container" id="comunnity-slider">
      <div class="swiper-wrapper">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'testimonio' );
          $postslist = new WP_Query( $args );

          if ( $postslist->have_posts() ) :
            while ( $postslist->have_posts() ) : $postslist->the_post();
        ?>
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <figure class="comunnity-img"><img src="<?php the_post_thumbnail_url(); ?>"></figure>
                  </div>
                  <div class="col-12 col-md-8">
                    <div class="comunnity-wrapper">
                      <div class="comunnity-content">
                        <p><?php echo get_the_excerpt(); ?></p>
                      </div>
                      <div class="comunnity-desc">
                        <div class="comunnity-name"><?php the_field('testimonio_autor'); ?></div>
                        <div class="comunnity-role"><?php the_field('testimonio_rol'); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php
            endwhile;
          endif;
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<section class="fluid-section" id="contact-section">
  <div class="main-wrapper">
    <div id="googlemaps"></div>
    <div id="box-contact">
      <div class="body-contact">
        <h4>CONTÁCTANOS</h4>
        <div class="box-contact-wrap">
          <div class="row no-gutters justify-content-between align-items-center single-contact contact-address">
            <div class="col-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-address.svg"></div>
            <div class="col-10 contact-body">
              <p>Av. Cotralmirante Montero<br /> N° 421 Of. 6D - Magdalena del Mar</p>
            </div>
          </div>
          <div class="row no-gutters justify-content-between align-items-center single-contact contact-phone">
            <div class="col-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-phone.svg"></div>
            <div class="col-10 contact-body">
              <p>(51) 01-715672</p>
            </div>
          </div>
          <div class="row no-gutters justify-content-between align-items-center single-contact contact-email">
            <div class="col-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-email.svg"></div>
            <div class="col-10 contact-body"><a href="mailto:jgalindo@craft.com.pe">jgalindo@craft.com.pe</a></div>
          </div>
          <div class="row no-gutters justify-content-between align-items-center single-contact contact-web">
            <div class="col-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-web.svg"></div>
            <div class="col-10 contact-body">
              <p><a href="http://www.craft.com.pe">craft.com.pe</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>