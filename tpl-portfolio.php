<?php
/**
 * Template Name: Brand Portfolio
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
				<div class="hero text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/brands-hero.jpg);">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</div><!-- .entry-header -->

				<div class="callout l-padding-vx">
					<div class="l-constrained--desktop-wide l-padding-tm l-padding-hl text-center">
						<h3 class="heading--script l-margin-vn text-tawny">Curation Foods cultivates a collection of innovative brands<br>that reimagine the way fresh, healthy food is grown, prepared, and delivered.</h3>
						<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="460" height="19" alt="divider">
					</div>
				</div>

				<div class="l-constrained--desktop-wide flex__wrap">
					<div class="l-split l-padding-hn">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/brand-1.jpg" width="960" height="570">
					</div>
					<div class="l-split l-padding-hn flex__box">
						<div class="l-padding-vx l-padding-hl flex__box--center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/eat-smart-logo.jpg">
							<h4 class="subheading text-accent">Innovation for Smarter Eating</h4>
							<p class="text-accent">Eat Smart is all about using innovative technology to provide healthy, convenient fresh vegetable for everyday meals.</p>
							<p><a href="https://eatsmart.net/" title="Eat Smart" target="_blank" class="btn btn--outline">Learn more</a></p>
						</div>
					</div>
				</div>

				<div class="l-constrained--desktop-wide flex__wrap">
					<div class="l-split l-padding-hn flex__box">
						<div class="l-padding-vx l-padding-hl flex__box--center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/o-olive-oil-logo.jpg">
							<h4 class="subheading text-accent">Crushed to Perfection</h4>
							<p class="text-accent">O Olive Oil &amp; Vinegar is the premier producer of California specialty olive oils and wine vinegars.</p>
							<p><a href="/o-olive-oil/" title="O Olive Oil" class="btn btn--outline">Learn more</a></p>
						</div>
					</div>
					<div class="l-split l-padding-hn">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/brand-2.jpg" width="960" height="570">
					</div>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
