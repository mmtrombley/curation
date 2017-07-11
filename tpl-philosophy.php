<?php
/**
 * Template Name: Philosophy
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
				<div class="hero hero--card text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/philosophy-hero.jpg);">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="l-constrained">
						<div class="l-three">&nbsp;</div>
						<div class="l-six l-padding-hd">
							<div class="card card--hero">
								<h2 class="card__heading h1 l-margin-bn">Everything we do at <br>Curation Foods has <br>an impact.  </h2>
								<img class="l-margin-vd" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
								<p>On people who eat our food. On growers and grocers. On partners and investors. On the soil, the water and the air. In all our actions, we are guided by what it means to eat healthy and live healthy.</p>
							</div>
						</div>
						<div class="l-three">&nbsp;</div>
					</div>
				</div><!-- .entry-header -->

				<div class="callout l-padding-vx text-center">
					<h3 class="heading--script l-margin-vn text-tawny">We Believe</h3>
					<div class="l-constrained grid grid--equal">
						<div class="l-third grid__item border--bottom border--right">
							<p><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/believe-icon-1.jpg" alt=""></p>
							<p class="text-light text-accent">Access to real food is a <br>basic human right.</p>
							<p><a href="#" class="btn btn--outline">learn more</a></p>
						</div>
						<div class="l-third grid__item border--bottom border--right">
							<p><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/believe-icon-2.jpg" alt=""></p>
							<p class="text-light text-accent">Good food promotes<br>good health.</p>
							<p><a href="#" class="btn btn--outline">learn more</a></p>
						</div>
						<div class="l-third grid__item border--bottom">
							<p><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/believe-icon-3.jpg" alt=""></p>
							<p class="text-light text-accent">Clean, fresh, real food can be the most delicious option.</p>
							<p><a href="#" class="btn btn--outline">learn more</a></p>
						</div>
					</div>

					<div class="l-constrained grid grid--equal">
						<div class="l-third grid__item border--right">
							<p><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/believe-icon-4.jpg" alt=""></p>
							<p class="text-light text-accent">Knowing where our food <br>comes from starts with knowing our growers.</p>
							<p><a href="#" class="btn btn--outline">learn more</a></p>
						</div>
						<div class="l-third grid__item border--right">
							<p><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/believe-icon-5.jpg" alt=""></p>
							<p class="text-light text-accent">Bringing healthy food <br>to the table should be easy. </p>
							<p><a href="#" class="btn btn--outline">learn more</a></p>
						</div>
						<div class="l-third grid__item">
							<p><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/believe-icon-6.jpg" alt=""></p>
							<p class="text-light text-accent">Healthy people and <br>a healthy planet <br>go hand in hand.</p>
							<p><a href="#" class="btn btn--outline">learn more</a></p>
						</div>
					</div>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
