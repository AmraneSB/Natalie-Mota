<!-- Code pour une lightbox  -->
<?php if (is_singular()) : ?>
  <div class="lightbox">
    <button class="lightbox__close"><i class="fa-solid fa-xmark fa-xl"></i></button> <!-- bouton permettant la fermeture de la lightbox -->
    <div class="lightbox__container">
      <img src="">
    </div>
  </div>
<?php else : ?>

  <!-- Code pour plusieurs lightbox -->
  <div class="lightbox">
    <button class="lightbox__close"><i class="fa-solid fa-xmark fa-xl"></i></button> <!-- bouton permettant la fermeture de la lightbox -->
    <button class="lightbox__next"><i class="fa-solid fa-chevron-right fa-xl"></i></button> <!-- bouton permettant la navigation vers la lightbox suivante -->
    <button class="lightbox__prev"><i class="fa-solid fa-chevron-left fa-xl"></i></button> <!-- bouton permettant la navigation vers la lightbox précédente -->
    <div class="lightbox__container">
      <img src="">
    </div>
  </div>
<?php endif; ?>