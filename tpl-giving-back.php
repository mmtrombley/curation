<?php
/**
 * Template Name: Giving Back
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
				<div class="hero text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/giving-back-hero.jpg);">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</div><!-- .entry-header -->

				<div class="callout l-padding-vx">
					<div class="l-constrained l-padding-tm l-padding-hl text-center">
						<h3 class="heading--script l-margin-vn text-tawny">As part of our mission to give more people access to real food, we are focusing our resources to bring fresh produce to the food deserts of the U.S.</h3>
						<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="460" height="19" alt="divider">
						<p class="text-accent">The food deserts are geographic areas where residents don’t have access to healthy food options, specifically fresh vegetables.</p>
					</div>
				</div>

				<div class="story--values">

					<div class="story l-padding-vx" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/giving-back-1.jpg);">
						<div class="l-constrained l-padding-tm l-padding-bx">
							<div class="l-split">
								<div class="card text-center">
									<div class="l-padding-hm">
										<h2 class="card__heading h1">Delivering<br>Goodness</h2>
										<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
										<p class="text-light">We have access to an abundance of fresh vegetables in California—often more than can even be harvested and distributed.  </p>
										<p class="text-light">We have the unique ability to use our trucks and fresh food supply chain—not only to deliver nationwide to our retail partners—but also directly to communities in need. </p>
									</div>
								</div>
							</div>
							<div class="l-split">&nbsp;</div>
						</div>
					</div>
					<div class="story l-padding-vx" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/giving-back-2.jpg);">
						<div class="l-constrained l-padding-tm l-padding-bx">
							<div class="l-split">&nbsp;</div>
							<div class="l-split">
								<div class="card text-center">
									<div class="l-padding-hm">
										<h2 class="card__heading h1">The Last Mile</h2>
										<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
										<p class="text-light">We are partnering with <strong>Feeding America</strong> to get fresh food to communities in need. Each year, they will drive the final mile to communities in the food deserts, delivering fresh food directly to 1 in 7 people.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="callout l-padding-vx">
					<div class="l-constrained l-padding-tm l-padding-hl text-center">
						<h3 class="heading--script l-margin-vn text-tawny">Food for Thought</h3>
						<p class="text-accent">Learn more about food deserts, the communities we serve and how you can get involved.</p>
					</div>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
