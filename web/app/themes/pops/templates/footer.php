<?php

/**
 * The main footer-template
 *
 * @package POPS
 */

wp_footer();

?>

<!--<svg class="svg--bottom" preserveAspectRatio="xMinYMax meet" fill="#0072C6" width="100%" height="96" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M-12.5,-59.471l0,68.509l0.609,0c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.983,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.986,7.675c5.992,0 5.992,-7.675 11.979,-7.675c5.987,0 5.987,7.675 11.98,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.991,0 5.991,7.675 11.984,7.675c5.992,0 5.992,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.994,0 5.994,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.986,-7.675l-0.497,0l0.497,0l0.609,0c5.992,0 5.992,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.991,0 5.991,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.979,-7.675c5.988,0 5.988,7.675 11.981,7.675c5.992,0 5.992,-7.675 11.983,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.983,7.675c5.994,0 5.994,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.984,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.986,7.675c5.993,0 5.993,-7.675 11.985,-7.675l-0.496,0l0,-68.509l-575.967,0Z" stroke="#0072C6" fill="#0072C6" />
</svg>-->

<style>
  .wave--footer {
    width: 100%;
    background-color: #0072C6;
    mask-image: url(<?php echo UTILS()->get_image_uri(); ?>/slice.svg);
    -webkit-mask-image: url(<?php echo UTILS()->get_image_uri(); ?>/slice.svg);
    -ms-mask-image: url(<?php echo UTILS()->get_image_uri(); ?>/slice.svg);
    mask-position: left;
    -webkit-mask-position: left;
    -ms-mask-position: left;
    height: 40px;
    transform: rotate(180deg);
  }
</style>

<div class="wave--footer"></div>

<footer class="footer text-center">
    <div class="row main-container">
      <div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri(); ?>/helsinki.svg" style="height: 80px;" />
      </div>
      <div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri(); ?>/oph.svg" style="height: 160px;" />
      </div>
      <div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri(); ?>/helsinki.svg" style="height: 80px;" />
      </div>
    </div>
    <nav class="footer__menu row">
      <?php pops_main_menu(); ?>
    </nav>
  </footer>
</body>
</html>

