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

			<div class="callout l-padding-vx">
				<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
					<?php the_content(); ?>
				</div>
			</div>

			<?php if( have_rows('content_sections') ) : $i = 0; ?>
			<div class="story--values">
				<h3 class="heading--section">We Take Pride</h3>

				<?php while( have_rows('content_sections') ) : the_row(); $i++; 
					$args = array(
						'image_id' => get_sub_field('background_image'),
						'size'	   => 'full',
						'path'     => true
					);
					$bg      = get_sub_field('background_image') ? _s_get_image( $args ) : '';
					$content = get_sub_field('card_content') ? get_sub_field('card_content') : ''; ?>

					<div class="story l-padding-vx" style="background-image:url(<?php echo $bg; ?>);">
						<div class="l-constrained l-padding-tm l-padding-bx">
							<?php if( $i == 2 ) : ?>
								<div class="l-split">&nbsp;</div>
								<div class="l-split">
							<?php else : ?>
								<div class="l-third">
							<?php endif; ?>
								<div class="card text-center">
									<div class="l-padding-hm">
										<?php echo $content; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>

			
			<?php
				$args_left = array(
					'image_id' => get_field('overflow_image_left'),
					'size'	   => 'full'
				);
				$args_right = array(
					'image_id' => get_field('overflow_image_right'),
					'size'	   => 'full'
				);
				$bg_left      = get_field('overflow_image_left') ? _s_get_image( $args_left ) : '';
				$bg_right     = get_field('overflow_image_right') ? _s_get_image( $args_right ) : '';

				$overflow_content = get_field('overflow_content');

			if( $overflow_content ) : ?>
				<div id="sus-bottom" class="callout l-padding-vx">
					<div class="l-constrained--desktop-wide bgwrap__container">
						<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
							<?php echo $overflow_content; ?>
						</div>
						<div class="l-constrained--desktop-wide bgwrap__wrap">
							<img src="<?php echo $bg_left[0]; ?>" class="img__pull-left" width=""<?php echo $bg_left[1]; ?>" height=""<?php echo $bg_left[2]; ?>">
							<img src="<?php echo $bg_right[0]; ?>" class="img__pull-right" width="<?php echo $bg_right[1]; ?>" height="<?php echo $bg_right[2]; ?>">
						</div>
					</div>
				</div>
			<?php endif; ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
