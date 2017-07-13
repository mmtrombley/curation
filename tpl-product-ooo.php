<?php
/**
 * Template Name: Product: O Olive Oil
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'template-parts/content', 'page' ); ?>

				<!-- Hero --> 
				<div class="hero text-center"">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ooo-hero.jpg" width="1920" height="460">
					<?php the_title( '<h1 class="entry-title screen-reader-text">', '</h1>' ); ?>

				</div><!-- .entry-header -->

				<div class="callout l-padding-vx">
					<div class="l-constrained l-padding-tm text-center">
						<h3 class="heading--script l-margin-vn">Artisanal olive oils and vinegars made from lush California olives, organic citrus and Sonoma Valley's best varietal wines.</h3>
						<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-oil.png" width="460" height="18" alt="divider">
						<p class="text-accent">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur..</p>
					</div>
				</div>

				<div class="callout bg-white">
					<div class="l-constrained--desktop-wide text-center">
						<div class="l-third">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ooo-1.jpg" width="640" height="537">
						</div>
						<div class="l-third">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ooo-2.jpg" width="640" height="537">
						</div>
						<div class="l-third">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ooo-3.jpg" width="640" height="537">
						</div>
					</div>
				</div>

				<div id="oil-bottom" class="callout l-padding-vx">
					<div class="l-constrained--desktop-wide bgwrap__container bgwrap__container">
						<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
							<p class="text-accent">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur..</p>
						</div>
						<div class="l-constrained--desktop-wide bgwrap__wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ooo-left.jpg" class="img__pull-left" width="362" height="457">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ooo-right.jpg" class="img__pull-right" width="362" height="457">
						</div>
					</div>
				</div>

				<div id="oil-links" class="text-center bg-alto l-padding-vl">
					<h4 class="subheading l-margin-bd">External Links</h4>
					<p>Visit the O website: <a href="http://ooliveoil.com">www.ooliveoil.com</a></p>
					<p>
						<a class="social__content" href="https://www.facebook.com/ooliveoilandvinegar/" target="_blank"><i class="icon-facebook"></i> @ooliveoilandvinegar</a>
						<a class="social__content" href="https://twitter.com/o_oliveoil" target="_blank"><i class="icon-twitter"></i> @o_oliveoil</a>
						<a class="social__content" href="https://www.instagram.com/o_olive_oil/" target="_blank"><i class="icon-instagram"></i> @o_olive_oil</a>
					</p>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
