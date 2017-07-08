<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- Hero -->
	<header class="entry-header text-center">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2>We believe that access to real food is a basic human right.</h2>
		<a class="btn-primarybtn ">Read More</a>
	</header><!-- .entry-header -->

	<hr>

	<div class="l-constrained">
		<div class="four columns"> </div>
		<div class="four columns">
			<h3>Clean. Fresh. Real.</h3>
			<p>Curation Foods reimagines the way fresh, healthy food is grown, prepared, and delivered.</p>
			<p>Our mission is to bring sustainable, delicious, nutritious food choices to every body, every day.</p>
			<h4><em>Bring it to the table.</em></h4>
		</div>
		<div class="four columns"> </div>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

