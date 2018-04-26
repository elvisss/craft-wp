<?php
/**
 * Template Name: Contacto
 */
  get_header();
?>

<section class="fluid-full-section">
  <div class="main-wrapper main-sm-wrapper">
    <div id="googlemaps"></div>
    <div id="box-contact">
      <div class="body-contact">
        <h4>CONTÁCTANOS</h4>
        <div class="box-contact-wrap">
          <?php include (TEMPLATEPATH . '/partials/contact.php'); ?>
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
        <div class="contact-body-form valid-body-form">
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
        <div class="contact-body-form">
          <?php echo do_shortcode( '[contact-form-7 id="68" title="Trabaja con nosotros"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>