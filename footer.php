 <?php include(get_template_directory() . '/template_parts/modale.php'); ?> <!-- code permettant d'aller chercher le template de la modale -->
<?php include(get_template_directory() . '/template_parts/lightbox.php'); ?> <!-- code permettant d'aller chercher le template de la lightbox -->

<!-- code permettant d'aller chercher le menu footer se trouvant dans wordpress -->
<?php wp_nav_menu([
    'theme_location' => 'footer',
    'menu-class' => 'menu_footer'
]) ?>

<?php wp_footer() ?>
</body>

</html>