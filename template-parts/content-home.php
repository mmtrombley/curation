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
	<div class="hero hero--home text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-hero.jpg);">
		<div class="l-constrained">
			<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/logo--white.png" width="381" height="134" alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>">
			<h2 class="hero__title">We believe that access to real food<br>is a basic human right.</h2>
			<a class="btn btn--primary btn--oval" href="/our-story">Read More</a>
		</div>
	</div><!-- .entry-header -->

	<div id="home-2" class="callout callout--home">
		<div class="l-half" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-section-1.jpg);">&nbsp;</div>
		<div class="l-half" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-section-2.jpg);">&nbsp;</div>

		<div class="l-constrained text-center">
			<div class="l-three">&nbsp;</div>
			<div class="l-six">
				<div class="card card--home">
					<div class="card__content">
						<div class="card__pre"></div>
						<h3 class="card__heading l-margin-bn">Clean. Fresh. Real.</h3>
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-tawny.png" width="248" height="10" alt="divider">
						<p class="l-margin-td">Curation Foods reimagines<br>the way fresh, healthy food is grown,<br>prepared, and delivered.</p>
						<p>Our mission is to bring sustainable,<br>delicious, nutritious food choices to<br>every body, every day.</p>
						<h4 class="card__subheading"><em>Bring it to the table.</em></h4>
					</div>
					<div class="card__post"></div>
				</div>
			</div>
			<div class="l-three">&nbsp;</div>
		</div>
	</div>

	<div id="home-3" class="callout callout--home-split">
		<div class="l-constrained text-center">
			<div class="l-split l-padding-tx l-padding-bm">
				
				<h4 class="subheading">Growing Connections</h4>
				<p class="l-padding-hx">We know our growers. This direct relationship to the people and places that cultivate our food enables us to monitor and ensure the quality of our products from field to fork.</p>
				<p><a href="/sustainability" class="btn btn--outline">Our Sustainability</a></p>
			</div>
			<div class="l-split l-padding-tx l-padding-bm">
				<h4 class="subheading">Selective by Nature</h4>
				<p class="l-padding-hx">Every brand in the Curation Foods portfolio meets or exceeds our strict standards of excellence and integrity for clean food ingredients. Selectivity is our namesake, after all.</p>
				<p><a href="/brand-portfolio" class="btn btn--outline">Our Brands</a></p>
				
			</div>
		</div>
		<div class="l-constrained--desktop-wide">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-3-left.jpg" class="img__pull-left" width="408" height="672">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-3-center.jpg" class="img__pull-center" width="362" height="144">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/home-3-right.png" class="img__pull-right" width="600" height="541">
		</div>
	</div>

	<div id="home-4" class="bg-mariner l-padding-vl">
		<div class="l-constrained--tablet-landscape text-center l-padding-hd">
			<h3 class="text-white heading--script l-margin-vn">Seeds of Change</h3>
			<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/divider-white.png" width="474" height="17" alt="divider">
			<p class="text-white text-accent l-margin-td">Doing good and doing well go hand in hand at Curation Foods.<br>We measure our success not only on our bottom line, but also on the benefit we provide to the planet and the people we employ, partner with and serve. That’s what it means to be a Public Benefit Corporation—and that’s just good business.</p> 
		</div>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</main><!-- #post-## -->