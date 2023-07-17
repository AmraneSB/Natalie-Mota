<div id="modal" class="modal">
  
  <div class="modal-content">
  <img src="<?php echo get_template_directory_uri() . '/images/modale.png'; ?>">
    <?php
    // Code pour aller chercher le formulaire de contact
    echo do_shortcode('[contact-form-7 id="31" title="Contact"]');
    ?>
  </div>

</div>