<?php

/**
 * The main template for basic-content
 *
 * @package POPS
 *
 */

?>

	<section class="row main-container text-center">
			<div class="header-container">
				<h1><?php the_title(); ?></h1>
				<p class="header__ingress"> <?= get_the_excerpt(); ?> </p>
				<span class="font-size-p"><?= get_the_date(); ?></span>
			</div>
		</section>
</header>

<svg preserveAspectRatio="xMinYMax meet" fill="#ffffff" width="100%" height="96" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
	<path d="M-12.5,-59.471l0,68.509l0.609,0c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.983,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.986,7.675c5.992,0 5.992,-7.675 11.979,-7.675c5.987,0 5.987,7.675 11.98,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.991,0 5.991,7.675 11.984,7.675c5.992,0 5.992,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.994,0 5.994,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.986,-7.675l-0.497,0l0.497,0l0.609,0c5.992,0 5.992,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.991,0 5.991,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.979,-7.675c5.988,0 5.988,7.675 11.981,7.675c5.992,0 5.992,-7.675 11.983,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.983,7.675c5.994,0 5.994,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.984,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.986,7.675c5.993,0 5.993,-7.675 11.985,-7.675l-0.496,0l0,-68.509l-575.967,0Z" stroke="#F5A3C7" fill="#F5A3C7" />
</svg>

<article class="blog__item text-center">
	<section class="blog__video"><?php the_field( 'video' ) ?></section>
	<?php the_content(); ?>
</article>