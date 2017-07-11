<?php
/**
 * Template Name: Sustainability
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
				<div class="hero text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/sustainability-hero.jpg);">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</div><!-- .entry-header -->

				<div class="callout l-padding-vx">
					<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
						<h3 class="heading--script l-margin-vn text-tawny">We believe that healthy people and a healthy planet go hand in hand.</h3>
						<p class="text-accent">We work to optimize food and minimize waste in a way that preserves and protects our planet for future generations.</p>
						<p class="subheading">View Our</p>
						<p><a class="btn btn--primary btn--oval">Sustainability Handbook</a> <a class="btn btn--primary btn--oval">Sustainability Videos</a></p>
					</div>
				</div>

				<div class="story--values">
					<h3 class="heading--section">We Take Pride</h3>

					<div class="story l-padding-vx" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/sustainability-1.jpg);">
						<div class="l-constrained l-padding-tm l-padding-bx">
							<div class="l-third">
								<div class="card text-center">
									<div class="l-padding-hm">
										<h2 class="card__heading h1">Food<br>Responsibility</h2>
										<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
										<p class="text-light">Bringing wholesome, real food to the table takes imagination. Our brands provide clean, fresh, real delicious food in recyclable packaging.</p>
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="story l-padding-vx" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/sustainability-2.jpg);">
						<div class="l-constrained l-padding-tm l-padding-bx">
							<div class="l-split">&nbsp;</div>
							<div class="l-split">
								<div class="card text-center">
									<div class="l-padding-hm">
										<h2 class="card__heading h1">Environmental Responsibility</h2>
										<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
										<p class="text-light">We are committed to preserving the planets natural resources. We are designing environmental practices that reduce our impact and promote the sustainability of our planet for future generations.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="story l-padding-vx" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/sustainability-3.jpg);">
						<div class="l-constrained l-padding-tm l-padding-bx">
							<div class="l-third">
								<div class="card text-center">
									<div class="l-padding-hm">
										<h2 class="card__heading h1">Social<br>Responsibility</h2>
										<img class="l-margin-bd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
										<p class="text-light">Curation Foods is committed to be an innovation leader, with every step forward designed to expand access to clean, real food. Our outreach initiatives are designed to support community and employee well-being.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="sus-bottom" class="callout l-padding-vx">
					<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
						<h3 class="heading--script l-margin-vn text-tawny">Our Work Has Just Begun</h3>
						<p class="text-accent">We are always learning and trying to improve, because we know what we achieved yesterday is not good enough for tomorrow. So here is our promise to you:</p>
						<p class="text-accent">To be stewards of this earth, dedicated to enriching people’s lives on every dimension—from the foods we source, harvest, and deliver, to the people with whom we work and the trust we share with you, our community of customers and neighbors whom we cherish.</p>
					</div>
					<div class="l-constrained--desktop-wide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/sustainability-bg-left.jpg" class="img__pull-left" width="253" height="617">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/sustainability-bg-right.jpg" class="img__pull-right" width="598" height="687">
					</div>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
