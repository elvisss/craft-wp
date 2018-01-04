<?php
/**
 * Template Name: Contacto
 */
  get_header();
?>

<section class="fluid-full-section">
  <div class="main-wrapper">
    <div id="googlemaps"></div>
    <div id="box-contact">
      <div class="body-contact">
        <h4>CONTÁCTANOS</h4>
        <div class="box-contact-wrap">
          <div class="row no-gutters justify-content-between align-items-center single-contact">
            <div class="col-2 contact-address"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-address.svg"></div>
            <div class="col-9">
              <p>Av. Cotralmirante Montero<br /> N° 421 Of. 6D - Magdalena del Mar</p>
            </div>
          </div>
          <div class="row no-gutters justify-content-between align-items-center single-contact">
            <div class="col-2 contact-phone"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-phone.svg"></div>
            <div class="col-9">
              <p>(51) 01-715672</p>
            </div>
          </div>
          <div class="row no-gutters justify-content-between align-items-center single-contact">
            <div class="col-2 contact-email"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-email.svg"></div>
            <div class="col-9"><a href="mailto:jgalindo@craft.com.pe">jgalindo@craft.com.pe</a></div>
          </div>
          <div class="row no-gutters justify-content-between align-items-center single-contact">
            <div class="col-2 contact-web"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact-web.svg"></div>
            <div class="col-9">
              <p><a href="http://www.craft.com.pe">craft.com.pe</a></p>
            </div>
          </div>
          <div class="buttons-contact">
            <a class="btn btn-block btn-transparent" href="#">CALIFÍCANOS EN FACEBOOK</a>
            <a class="btn btn-block btn-transparent" href="#" data-target=".modal-contact" data-toggle="modal">CUÉNTANOS DE TU PROYECTO</a>
            <a class="btn btn-block btn-transparent" href="#" data-target=".work-us" data-toggle="modal">TRABAJA CON NOSOTROS</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-body-bg-black">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-body-form">
          <?php echo do_shortcode( '[contact-form-7 id="67" title="Cuéntanos tu proyecto"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade modal work-us" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-body-bg-black">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-body-form">
          <?php echo do_shortcode( '[contact-form-7 id="68" title="Trabaja con nosotros"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>