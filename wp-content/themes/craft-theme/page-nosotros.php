<?php
/**
 * Template Name: Nosotros
 */
  get_header();
?>

<div id="about-page">
  <div id="main-about">
    <div class="wrap-about">
      <div class="container-about">
        <div class="top-about">
          <div class="row align-items-center">
            <div class="col-lg-5 d-none d-lg-block">
              <figure><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg"></figure>
            </div>
            <div class="col-12 col-lg-7">
              <div class="about-desc">
                <p>Somos un equipo de arquitectos e ingenieros especializados en Arquitectura Corporativa y Comercial, desarrollamos los proyectos en un ambiente coloborativo el cual permite una mejor comunicación entre nuestras áreas, logrando objetivos para los proyectos que nos son confiados. Nuestra experiencia como equipo se ve reflejada en todos nuestros proyectos, los cuales son realizadas de manera personalizada según la necesidad de tiempo y costo.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="body-about">
            <div class="row">
              <div class="col-12 col-lg-8">
                <div class="about-list-boxes">
                  <div class="about-list-box">
                    <h4>MISIÓN</h4>
                    <p>Brindar una arquitectura innovadora y personalizada, identificándonos con las necesidades de cada uno de nuestros clientes convirtiéndonos así en parte importante de su crecimiento.</p>
                  </div>
                  <div class="about-list-box box-right">
                    <h4>VISIÓN</h4>
                    <p>Ser el líder en el mercado peruano de Arquitectura corporativa destacados por nuestra creatividad e innovación.</p>
                  </div>
                </div>
              </div>
              <div class="col-4 d-none d-lg-block">
                <div class="box-floating">
                  <div class="box-floating-content">
                    <p>Desarrollamos nuestros proyectos siempre pensando en potenciar la experiencia de los clientes frente a la marca.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="team-about">
    <div class="panel-team d-none d-lg-block">
      <div class="wrap-boxes-team">
        <h3>NUESTRO EQUIPO</h3>
        <div class="main-boxes-team">
          <div class="boxes-team clearfix">
            <div class="box-team"></div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team gray-1">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team gray-1"></div>
          </div>
          <div class="boxes-team clearfix">
            <div class="box-team gray-2">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team gray-1">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
          </div>
          <div class="boxes-team clearfix">
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team gray-2">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team gray-3"></div>
            <div class="box-team gray-2">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
          </div>
          <div class="boxes-team clearfix">
            <div class="box-team gray-2">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
            <div class="box-team gray-3"></div>
          </div>
          <div class="boxes-team clearfix">
            <div class="box-team gray-2 box-team-last">
              <div class="single-panel">
                <div class="box-team-name">CARMEN JIMENEZ</div>
                <div class="box-team-rol">ARQUITECTA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-team d-block d-lg-none">
      <h3>NUESTRO EQUIPO</h3>
      <div id="team-accordion" role="tablist">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'colaborador' );
          $postslist = new WP_Query( $args );
          $postCount = 0;

          if ( $postslist->have_posts() ) :
            while ( $postslist->have_posts() ) : $postslist->the_post(); $postCount++;
        ?>

              <div class="card">
                <div class="card-header" id="heading<?php echo get_the_ID(); ?>" role="tab">
                  <h2 class="mb-0">
                    <a data-toggle="collapse" href="#collapse<?php echo get_the_ID(); ?>" aria-expanded="<?php echo $postCount == 1 ? 'true' : 'false'?>" aria-controls="collapse<?php echo get_the_ID(); ?>" <?php echo $postCount > 1 ? 'class="collapsed"' : '' ?>>
                      <?php echo get_the_title(); ?> <span><?php the_field('collaborator_rol'); ?></span>
                      <div class="accordion-ico">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                      </div>
                    </a>
                  </h2>
                </div>

                <div class="collapse <?php echo $postCount == 1 ? 'show' : ''?>" id="collapse<?php echo get_the_ID(); ?>" role="tabpanel" aria-labelledby="heading<?php echo get_the_ID(); ?>" data-parent="#team-accordion">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3">
                        <figure><img src="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
                      </div>
                      <div class="col-9">
                        <?php echo get_the_content(); ?>
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
    </div>
  </div>
</div>

<?php get_footer(); ?>