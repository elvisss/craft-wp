<div class="float-box">
  <div class="float-box-content">
    <figure>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cotizador_icon.svg" alt=""/>
      <figcaption>Solicita una cotización</figcaption>
    </figure>
  </div>
</div>
<div class="float-form">
  <div class="float-form-content">
    <div class="float-close js-close-form">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
    </div>
    <div class="float-triangle d-none d-md-block"></div>
    <div class="float-form-wrap">
      <div class="float-body-form">
        <?php echo do_shortcode( '[contact-form-7 id="84" title="Solicita una cotización"]' ); ?>
      </div>
    </div>
  </div>
</div>