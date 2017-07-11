<?php
/**
 * Template Name: Shop
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
				<div class="hero text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/shop-hero.jpg);">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</div><!-- .entry-header -->

				<div class="callout l-padding-vx">
					<div class="l-constrained l-padding-tm l-padding-hl text-center">
						<h3 class="heading--script l-margin-vn text-tawny">With all this talk about healthy, delicious food, how could we not make it easy to indulge?</h3>
						<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="460" height="19" alt="divider">
					</div>
				</div>

				<div id="shop-brands" class="l-constrained--desktop-wide">
					<div class="l-three">
						&nbsp;
						<img class="img__pull-left" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/shop-eat-smart.jpg">
					</div>
					<div class="l-three border--right text-center l-padding-al">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/eat-smart-logo.jpg" height="99" width="135">
						<p class="l-margin-tm"><a href="https://eatsmart.net/" title="Eat Smart" target="_blank" class="btn btn--outline">Learn more</a></p>
					</div>
					<div class="l-three text-center l-padding-al">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/o-olive-oil-logo.jpg">
						<p class="l-margin-tm"><a href="http://www.ooliveoil.com/" title="O Olive Oil" target="_blank" class="btn btn--outline">Learn more</a></p>
					</div>
					<div class="l-three">
					&nbsp;
						<img class="img__pull-right" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/shop-ooo.jpg">
					</div>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
