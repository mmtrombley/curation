<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<main id="main" class="site-main" role="main">

	<!-- Hero -->
	<?php
		$args = array(
			'image_id' => get_field('image'),
			'size'	   => 'full'
		);
		
		$logo        = _s_get_image( $args );
		$headline    = get_field('headline') ? '<h2 class="hero__title">' . get_field('headline') . '</h2>' : '';
		$button_link = get_field('button_link') ? '<a class="btn btn--primary btn--oval" href="' . get_field('button_link') . '">Read More</a>' : '' ;
	?>
	<div class="hero hero--home text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-hero.jpg);">
		<div class="l-constrained--desktop-wide">
			<img class="" src="<?php echo $logo[0]; ?>" width="<?php echo $logo[1]; ?>" height="<?php echo $logo[2]; ?>" alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>">
			<?php echo $headline; ?>
			<?php echo $button_link; ?>
		</div>
	</div><!-- .entry-header -->

	<?php
		$args_left = array(
			'image_id' => get_field('background_image_left'),
			'size'	   => 'full',
			'path'     => true
		);
		$args_right = array(
			'image_id' => get_field('background_image_right'),
			'size'	   => 'full',
			'path'     => true
		);
		$bg_left      = get_field('background_image_left') ? _s_get_image( $args_left ) : '';
		$bg_right     = get_field('background_image_right') ? _s_get_image( $args_right ) : '';
		$card_content = get_field('card_content');

	if( $card_content ) : ?>
		<div id="home-2" class="callout callout--home">
			<div class="l-half" style="background-image:url(<?php echo $bg_left; ?>);">&nbsp;</div>
			<div class="l-half" style="background-image:url(<?php echo $bg_right; ?>);">&nbsp;</div>

			<div class="l-constrained--desktop-wide">
				<div class="l-constrained text-center">
					<div class="l-three">&nbsp;</div>
					<div class="l-six">
						<div class="card card--home">
							<div class="card__content">
								<div class="card__pre"></div>
								<?php echo $card_content; ?>
							</div>
							<div class="card__post"></div>
						</div>
					</div>
					<div class="l-three">&nbsp;</div>
				</div>
			</div>
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
		$bg_right      = get_field('overflow_image_right') ? _s_get_image( $args_right ) : '';
		$bg_left       = get_field('overflow_image_left') ? _s_get_image( $args_left ) : '';
		$content_left  = get_field('content_left');
		$content_right = get_field('content_right');

	?>
	<div id="home-3" class="callout callout--home-split">
		<div class="l-constrained--desktop-wide text-center bgwrap__container">
			<div class="l-constrained">
				<div class="l-split l-padding-tx l-padding-bm border--right border-accent">				
					<?php echo $content_left; ?>
				</div>
				<div class="l-split l-padding-tx l-padding-bm">
					<?php echo $content_right; ?>
				</div>
			</div>

			<div class="l-constrained--desktop-wide bgwrap__wrap">
				&nbsp;
				<img src="<?php echo $bg_left[0]; ?>" class="img__pull-left" width="<?php echo $bg_left[1]; ?>" height="<?php echo $bg_left[2]; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-3-center.jpg" class="img__pull-center" width="362" height="144">
				<img src="<?php echo $bg_right[0]; ?>" class="img__pull-right" width="<?php echo $bg_right[1]; ?>" height="<?php echo $bg_right[2]; ?>">
			</div>
		</div>
	</div>

	<?php
		$bg_color       = get_field('bottom_content_background_color');
		$bottom_content = get_field('bottom_content');
	?>
	<div id="home-4" class="l-padding-vl" style="background-color:<?php echo $bg_color; ?>">
		<div class="l-constrained--desktop-wide text-center l-padding-hd">
			<div class="l-constrained--tablet-landscape">
				<?php echo $bottom_content; ?>
			</div>
		</div>
	</div>
</main><!-- #post-## -->