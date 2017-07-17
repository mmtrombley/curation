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

				<?php if( get_the_content ) : ?>
					<div class="callout l-padding-vx">
						<div class="l-constrained--desktop-wide l-padding-tm l-padding-hl text-center">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endif; ?>

				
				<?php if( have_rows('brands') ) : $i = 0; ?>

					<?php while( have_rows('brands') ) : the_row(); $i++;
						$args = array(
							'image_id' => get_sub_field('image'),
							'size'     => array( 960, 570 )
						);
						$image   = get_sub_field('image') ? _s_get_image( $args ) : '';
						$content = get_sub_field('content'); ?>

						<div class="l-constrained--desktop-wide flex__wrap">
							<?php if( $i == 1 ) : ?>
								<div class="l-split l-padding-hn">
									<img src="<?php echo $image[0]; ?>" width="960" height="570">
								</div>
							<?php endif; ?>
							
							<div class="l-split l-padding-hn flex__box">
								<div class="l-padding-vx l-padding-hl flex__box--center">
									<?php echo $content; ?>
								</div>
							</div>

							<?php if( $i == 2 ) : ?>
								<div class="l-split l-padding-hn">
									<img src="<?php echo $image[0]; ?>" width="960" height="570">
								</div>
							<?php endif; ?>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
