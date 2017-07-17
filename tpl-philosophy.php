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

			<!-- Hero -->
			<?php
				$args = array(
					'image_id' => get_field('card_background_image'),
					'size'	   => 'full',
					'path'     => true
				);
				
				$bg_image    = _s_get_image( $args );
				$headline    = get_field('hero_headline') ? get_field('hero_headline') : get_the_title();
				$hero_card   = get_field('hero_card_content') ? get_field('hero_card_content') : '';
				$hero_class  = get_field('hero_card_content') ? ' hero--card ' : '';
			?>
			<div class="hero <?php echo $hero_class; ?> text-center" style="background-image:url(<?php echo $bg_image; ?>);">
			
				<div class="l-constrained--desktop-wide">
					<h1 class="entry-title"><?php echo $headline; ?></h1>

					<?php if( get_field('hero_card_content') ) : ?>
						<div class="l-constrained">
							<div class="l-three">&nbsp;</div>
							<div class="l-six l-padding-hd">
								<div class="card card--hero">
									<?php echo $hero_card; ?>
								</div>
							</div>
							<div class="l-three">&nbsp;</div>
						</div>
					<?php endif; ?>
				</div>
			</div><!-- .entry-header -->

			<?php if( have_rows('content_blocks') ) : ?>
				<div class="callout l-padding-vx text-center">
					<h3 class="heading--script l-margin-vn text-tawny">We Believe</h3>
					<div class="l-constrained grid grid--equal">
						<?php while( have_rows('content_blocks') ) : the_row();
							$args = array(
								'image_id' => get_sub_field('icon'),
								'size'	   => 'full'
							);
							$icon      = get_sub_field('icon') ? _s_get_image( $args ) : '';

							$text       = get_sub_field('text') ? '<p class="text-light text-accent">' . get_sub_field('text') . '</p>' : '';
							$button_url = get_sub_field('button_url') ? '<p><a href="' . get_sub_field('button_url') . '" class="btn btn--outline">Learn More</a></p>' : '';
						?>
							<div class="l-third grid__item border--bottom border--right">
								<p><img src="<?php echo $icon[0]; ?>" width="<?php echo $icon[1]; ?>" height="<?php echo $icon[2]; ?>" alt=""></p>
								<?php echo $text; ?>
								<?php echo $button_url; ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
