<?php
/**
 * Template Name: Portafolio
 */
  get_header();
?>

<div class="content-page">
  <div class="container">
    <div class="d-none d-md-block" id="portfolio">
      <div class="row">
        <div class="col-12 col-md-3">
          <aside id="main-sidebar">
            <div class="sidebar-content">
              <div class="widget-filter">
                <div class="js-categories">
                  <button class="btn btn-block btn-white" id="js-architecture" data-value="architecture"><span>ARQUITECTURA</span></button>
                  <button class="btn btn-block btn-white" id="js-construction" data-value="construction"><span>CONSTRUCCIÓN</span></button>
                </div>
              </div>
              <div class="widget-filter">
                <h2 class="title-widget">PROYECTO</h2>
                <select class="form-control" id="js-names">
                  <option value="ALL">A - Z</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</option>
                  <option value="G">G</option>
                  <option value="H">H</option>
                  <option value="I">i</option>
                  <option value="J">J</option>
                  <option value="K">K</option>
                  <option value="L">L</option>
                  <option value="M">M</option>
                  <option value="N">N</option>
                  <option value="O">O</option>
                  <option value="P">P</option>
                  <option value="Q">Q</option>
                  <option value="R">R</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                  <option value="U">U</option>
                  <option value="V">V</option>
                  <option value="W">W</option>
                  <option value="X">X</option>
                  <option value="Y">Y</option>
                  <option value="Z">Z</option>
                </select>
              </div>
              <div class="widget-filter">
                <h2 class="title-widget">SERVICIO</h2>
                <div class="js-service">
                  <ul class="list-bullet">
                    <li id="js-office" data-value="office"><span>OFICINAS</span></li>
                    <li id="js-retail" data-value="retail"><span>RETAIL</span></li>
                    <li id="js-project" data-value="project"><span>PROYECTO</span></li>
                    <li id="js-design" data-value="design"><span>DISEÑO</span></li>
                    <li id="js-development" data-value="development"><span>DESARROLLO</span></li>
                    <li id="js-ejecution" data-value="ejecution"><span>EJECUCIÓN</span></li>
                  </ul>
                </div>
              </div>
              <div class="widget-filter">
                <h2 class="title-widget">ÁREA</h2>
                <div class="js-areas">
                  <ul class="list-bullet">
                    <li data-value="low"><span>0 - 500</span></li>
                    <li data-value="high"><span>500 - 1000</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </aside>
        </div>
        <div class="col-12 col-md-9">
          <div class="shape-portfolio">
            <div class="row no-gutters shape-shuffle-container js-shuffle">

            	<?php
            	  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            	  $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'proyecto', 'orderby' => 'date', 'order' => 'ASC' );
            	  $postslist = new WP_Query( $args );
                $idc = 0;

            	  if ( $postslist->have_posts() ) :
            	    while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;

                    $types = get_field('project_type');
                    $architecture = 'architecture';
                    $construction = 'construction';
                    $types_string = '';

                    if ($types) {
                      $types_string = implode(',', $types);
                    }

                    $pos_arch = strpos($types_string, $architecture);
                    $pos_cons = strpos($types_string, $construction);

                    if ($pos_arch === false) {
                        $architecture = '';
                    }

                    if ($pos_cons === false) {
                        $construction = '';
                    }

                    $services = get_field('project_services');
                    $office = 'office';
                    $retail = 'retail';
                    $project = 'project';
                    $design = 'design';
                    $development = 'development';
                    $ejecution = 'ejecution';
                    $services_string = '';

                    if ($services) {
                      $services_string = implode(',', $services);
                    }

                    $pos_office = strpos($services_string, $office);
                    $pos_retail = strpos($services_string, $retail);
                    $pos_project = strpos($services_string, $project);
                    $pos_design = strpos($services_string, $design);
                    $pos_development = strpos($services_string, $development);
                    $pos_ejecution = strpos($services_string, $ejecution);

                    if ($pos_office === false) {
                        $office = '';
                    }

                    if ($pos_retail === false) {
                        $retail = '';
                    }

                    if ($pos_project === false) {
                        $project = '';
                    }

                    if ($pos_design === false) {
                        $design = '';
                    }

                    if ($pos_development === false) {
                        $development = '';
                    }

                    if ($pos_ejecution === false) {
                        $ejecution = '';
                    }

                    $area_string = 'low';
                    $area = get_field('project_area');

                    if ($area > 500) {
                      $area_string = 'high';
                    }

            	?>

                <div class="single-project col-6 col-md-4 col-lg-2" data-architecture="<?php echo $architecture; ?>" data-construction="<?php echo $construction; ?>" data-category="<?php the_field('project_type'); ?>" data-name="<?php echo strtoupper(get_the_title()[0]); ?>" data-client="<?php echo get_the_title(); ?>" data-services="[<?php the_field('project_services'); ?>]" data-conceptualizacion="conceptualizacion" data-distribucion="distribucion" data-date-created="<?php the_time('Y-m-j'); ?>" data-area="<?php echo $area_string; ?>" data-process="<?php the_field('project_processes') ?>" data-office="<?php echo $office; ?>" data-retail="<?php echo $retail; ?>" data-project="<?php echo $project; ?>" data-design="<?php echo $design; ?>" data-development="<?php echo $development; ?>" data-ejecution="<?php echo $ejecution; ?>">
                  <div class="aspect" data-target=".modal-project-<?php echo $idc; ?>" data-toggle="modal" style="background-image: url('<?php the_field('project_logo'); ?>')">
                    <div class="media-container">
                      <div class="media-content">
                        <div class="media" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                        <div class="media-detail"><span><?php echo get_the_title(); ?></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="single-title"><?php the_field('project_short_title'); ?></div>
                </div>

            	<?php
            	    endwhile;
            	  endif;
            	?>

              <div class="the-sizer col-1"></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-md-none" id="portfolio-2">
    <div class="grid-projects">
      <div class="row no-gutters my-shuffle-container" id="grid-portfolio">

        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'proyecto', 'orderby' => 'date', 'order' => 'ASC' );
          $postslist = new WP_Query( $args );
          $idc = 0;

          if ( $postslist->have_posts() ) :
            while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;

              $types = get_field('project_type');
              $architecture = 'architecture';
              $construction = 'construction';
              $types_string = '';

              if ($types) {
                $types_string = implode('","', $types);
                $types_string = '"'.$types_string.'"';
              }

              $pos_arch = strpos($types_string, $architecture);
              $pos_cons = strpos($types_string, $construction);

              if ($pos_arch === false) {
                  $architecture = '';
              }

              if ($pos_cons === false) {
                  $construction = '';
              }
        ?>

        <div class="box-portfolio col-12 col-md-1 picture-item" data-groups='[<?php echo $types_string; ?>]' data-date-created="<?php the_time('Y-m-j'); ?>" data-client="<?php echo get_the_title(); ?>" data-area="<?php the_field('project_area'); ?>" data-services="[<?php the_field('project_services'); ?>]" data-name="<?php echo strtoupper(get_the_title()[0]); ?>">
          <div class="box-content" data-target=".modal-project-<?php echo $idc; ?>" data-toggle="modal">
            <div class="box-images">
              <div class="box-img top"><img src="<?php the_field('project_logo') ?>"></div>
            </div>
            <div class="box-description">
              <div class="box-client"><?php echo get_the_title(); ?></div>
              <div class="box-project"><?php echo get_the_excerpt(); ?></div>
            </div>
          </div>
        </div>

        <?php
            endwhile;
          endif;
        ?>

        <div class="my-sizer-element col-1"></div>
      </div>
    </div>
    <div class="actions-projects">
      <div class="filter-projects">
        <div class="filter-options clearfix"><a href="javascript:void(0)" data-group="architecture">ARQUITECTURA</a><a href="javascript:void(0)" data-group="construction">CONSTRUCCIÓN</a><a class="d-none d-md-inline-block" href="javascript:void(0)" data-group="all">MOSTRAR TODOS</a></div>
      </div>
      <div class="sort-projects">
        <div class="sort-options">
          <div class="sort-option">
            <label>
              <input type="radio" name="sort-value" value="date-created">CRONOLÓGICO
            </label>
          </div>
          <div class="sort-option">
            <label>
              <input type="radio" name="sort-value" value="name">CLIENTE
            </label>
          </div>
          <div class="sort-option">
            <label>
              <input type="radio" name="sort-value" value="services">SERVICIO
            </label>
          </div>
          <div class="sort-option">
            <label>
              <input type="radio" name="sort-value" value="area">ÁREA
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  $idc = 0;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'proyecto', 'orderby' => 'date', 'order' => 'ASC' );
  $postslist = new WP_Query( $args );

  if ( $postslist->have_posts() ) :
    while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;

    $field_service = get_field_object('project_services');
    $services = $field_service['value'];
    $numServices = count($services);

    $processes = get_field('project_processes');
    $conceptualization = 'conceptualization';
    $distribution = 'distribution';
    $planimetry = 'planimetry';
    $selection = 'selection';
    $engineering = 'engineering';
    $ejecution = 'ejecution';
    $implementation = 'implementation';
    $planification = 'planification';
    $control = 'control';
    $close = 'close';

    $processes_string = '';

    if ($processes) {
      $processes_string = implode(',', $processes);
    }

    $pos_conceptualization = strpos($processes_string, $conceptualization);
    $pos_distribution = strpos($processes_string, $distribution);
    $pos_planimetry = strpos($processes_string, $planimetry);
    $pos_selection = strpos($processes_string, $selection);
    $pos_engineering = strpos($processes_string, $engineering);
    $pos_ejecution = strpos($processes_string, $ejecution);
    $pos_implementation = strpos($processes_string, $implementation);
    $pos_planification = strpos($processes_string, $planification);
    $pos_control = strpos($processes_string, $control);
    $pos_close = strpos($processes_string, $close);

    if ($pos_conceptualization === false) {
      $conceptualization = '';
    } else {
      $conceptualization = 'active';
    }

    if ($pos_distribution === false) {
      $distribution = '';
    } else {
      $distribution = 'active';
    }

    if ($pos_planimetry === false) {
      $planimetry = '';
    } else {
      $planimetry = 'active';
    }

    if ($pos_selection === false) {
      $selection = '';
    } else {
      $selection = 'active';
    }

    if ($pos_engineering === false) {
      $engineering = '';
    } else {
      $engineering = 'active';
    }

    if ($pos_ejecution === false) {
      $ejecution = '';
    } else {
      $ejecution = 'active';
    }

    if ($pos_implementation === false) {
      $implementation = '';
    } else {
      $implementation = 'active';
    }

    if ($pos_ejecution === false) {
      $ejecution = '';
    } else {
      $ejecution = 'active';
    }

    if ($pos_planification === false) {
      $planification = '';
    } else {
      $planification = 'active';
    }

    if ($pos_control === false) {
      $control = '';
    } else {
      $control = 'active';
    }

    if ($pos_close === false) {
      $close = '';
    } else {
      $close = 'active';
    }

    $is = 0;
?>

<div class="modal fade modal-portfolio modal-project-<?php echo $idc; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-xl">
    <div class="modal-content">
      <div class="modal-body">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="wrap-portfolio">
          <div class="portfolio-slider swiper-container" id="project-slider-<?php echo $idc; ?>">
            <div class="swiper-wrapper">
              <?php if( get_field('project_gallery') ): ?>
                  <?php while ( has_sub_field('project_gallery') ) : ?>
                    <div class="swiper-slide">
                      <figure class="portfolio-banner-bg" style="background-image: url(<?php the_sub_field('project_image') ?>);">
                        <img class="d-md-none" src="<?php the_sub_field('project_image') ?>">
                      </figure>
                    </div>
                  <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="project-top">
            <div class="project-logo">
              <img src="<?php the_field('project_logo') ?>">
            </div>
            <div class="project-summary">
              <div class="project-title"><?php echo get_the_title(); ?></div>
              <div class="project-review"><?php echo get_the_excerpt(); ?></div>
            </div>
          </div>
          <div class="portfolio-description">
            <div class="project-container">
              <div class="project-content">
                <div class="project-wrap">
                  <div class="project-boxes">
                    <div class="project-box">
                      <h4>SERVICIO
                        <div class="project-box-desc">
                          <?php foreach( $services as $service ): ?>
                            <?php echo $field_service['choices'][ $service ]; ?>
                            <?php if(++$is !== $numServices): ?>, <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                      </h4>
                    </div>
                    <div class="project-box">
                      <h4>ÁREA
                        <div class="project-box-desc"><?php the_field('project_area'); ?> M<sup>2</sup></div>
                      </h4>
                    </div>
                  </div>
                  <ul class="project-services clearfix">
                    <li class="project-service <?php echo $conceptualization ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso1.svg" title="Conceptualización" alt="Conceptualización">
                      <div class="project-service-text">Conceptualización</div>
                    </li>
                    <li class="project-service <?php echo $distribution ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso2.svg" title="Distribución Espacial" alt="Distribución Espacial">
                      <div class="project-service-text">Distribución Espacial</div>
                    </li>
                    <li class="project-service <?php echo $planimetry ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso3.svg" title="Planimetría arquitectónica" alt="Planimetría arquitectónica">
                      <div class="project-service-text">Planimetría arquitectónica</div>
                    </li>
                    <li class="project-service <?php echo $selection ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso4.svg" title="Selección de Acabados" alt="Selección de Acabados">
                      <div class="project-service-text">Selección de Acabados</div>
                    </li>
                    <li class="project-service <?php echo $engineering ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso5.svg" title="Ingenierias de detalle" alt="Ingenierias de detalle">
                      <div class="project-service-text">Ingenierias de detalle</div>
                    </li>
                    <li class="project-service <?php echo $ejecution ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso6.svg" title="Construcción" alt="Construcción">
                      <div class="project-service-text">Construcción</div>
                    </li>
                    <li class="project-service <?php echo $implementation ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso7.svg" title="Implementación" alt="Implementación">
                      <div class="project-service-text">Implementación</div>
                    </li>
                    <li class="project-service <?php echo $planification ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso8.svg" title="Planificación" alt="Planificación">
                      <div class="project-service-text">Planificación</div>
                    </li>
                    <li class="project-service <?php echo $control ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso9.svg" title="Control de Calidad" alt="Control de Calidad">
                      <div class="project-service-text">Control de Calidad</div>
                    </li>
                    <li class="project-service <?php echo $close ?>"><img class="d-none d-md-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/process/proceso10.svg" title="Cierre" alt="Cierre">
                      <div class="project-service-text">Cierre</div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="project-toggle d-none d-md-block"><a class="summary-toggle" href="#"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    endwhile;
  endif;
?>

<?php get_footer(); ?>