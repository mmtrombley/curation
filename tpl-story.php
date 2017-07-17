<?php
/**
 * Template Name: Our Story
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

				<div class="hero__nav">
					<div class="l-constrained--tablet">
						<ul class="main">
							<li class="main__item">
								<a class="main__link js-scroll-to" href="#public-benefit-corp">Public Benefit Corp
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-white.png" width="474" height="17" alt="divider"></a>
							</li>
							<li class="main__item">
								<a class="main__link js-scroll-to" href="#core-values">Core Values
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-white.png" width="474" height="17" alt="divider"></a>
							</li>
							<li class="main__item">
								<a class="main__link js-scroll-to" href="#our-history">Our History
								<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-white.png" width="474" height="17" alt="divider"></a>
							</li>
						</ul>
					</div>
				</div>
			
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
				<div id="public-benefit-corp" class="callout l-padding-vx">
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

			<?php if( have_rows('core_value_cards') ) : ?>
				<div id="core-values" class="story--values">
					<h3 class="heading--section">Core Values</h3>
					<div class="text-center flip__container">

					<?php while( have_rows('core_value_cards') ) : the_row(); 
						$title   = get_sub_field('title');
						$content = get_sub_field('content');
						$args    = array(
							'image_id' => get_sub_field('background_image'),
							'size'	   => 'full',
							'path'     => true
						);
						$bg      = _s_get_image( $args ); ?>

						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo $bg; ?>);">
								<div class="flip__front">
									<p class="flip__heading"><?php echo $title; ?></p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center" style="background-image:url(<?php echo $bg; ?>);">
									<div class="flip__content">
										<?php echo $content; ?>
									</div>
									<div class="flip__content">
										<span class="flip__icon"></span>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if( have_rows('timeline') ) : ?>
				<div id="our-history" class="l-padding-vx">
					<div class="l-constrained--desktop-wide">
						<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
							<h3 class="heading--script l-margin-vn text-tawny">Our History</h3>
						</div>

						<div class="l-constrained timeline">
							<?php while( have_rows('timeline') ) : the_row();
								$date    = get_sub_field('date');
								$title   = get_sub_field('title');
								$content = get_sub_field('content'); ?>

								<div class="timeline__content">
									<p class="timeline__date"><?php echo $date; ?></p>
									<h4 class="timeline__title"><?php echo $title; ?></h4>
									<p class="timeline__desc"><?php echo $content; ?></p>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>


		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
