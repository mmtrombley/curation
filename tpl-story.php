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

				<?php // get_template_part( 'template-parts/content', 'page' ); ?>

				<!-- Hero -->
				<div class="hero hero--card text-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-hero.jpg);">

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
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="l-constrained">
							<div class="l-three">&nbsp;</div>
							<div class="l-six l-padding-hd">
								<div class="card card--hero">
									<h2 class="card__heading">Good for people.<br>Good for the planet.</h2>
									<p>Bringing wholesome, real food to the table takes imagination.</p>
									<p>Curation Foods is committed to being an innovation leader, with every step forward designed to expand access to clean, delicious food.</p>
								</div>
							</div>
							<div class="l-three">&nbsp;</div>
						</div>
					</div>
				</div><!-- .entry-header -->

				<div id="public-benefit-corp" class="callout l-padding-vx">
					<div class="l-constrained--desktop-wide">
						<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
							<p class="text-accent l-margin-vn text-gray text-upper">A Healthy Balance</p>
							<h3 class="heading--script l-margin-vn text-tawny">Public Benefit Corporation</h3>
							<p class="text-accent">Becoming a Public Benefit Corporation was a conscious decision on our part. We are committed to a healthy balance of profitability and public benefit which, in our case, means providing more clean food to more people with less impact on our environment.</p>
						</div>
						<div class="l-constrained--desktop-wide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-bg-left.jpg" class="img__pull-left" width="550" height="654">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-bg-right.jpg" class="img__pull-right" width="611" height="591">
						</div>
					</div>
				</div>

				<div id="core-values" class="story--values">
					<h3 class="heading--section">Core Values</h3>

					<div class="l-constrained--desktop-wide text-center flip__container">
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-1.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Integrity</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-white text-accent l-margin-bs">We are honest and ethical.</p>
									<p class="text-white text-accent l-margin-bs">We are open and trustworthy.</p>
									<p class="text-white text-accent l-margin-bs">We are transparent with the consumer on product ingredients and sources of origin.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-2.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Respect</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-white text-accent l-margin-bs">We treat everyone with dignity.</p>
									<p class="text-white text-accent l-margin-bs">We listen and learn from each other.</p>
									<p class="text-white text-accent l-margin-bs">We value our customers and partners.</p>
									<p class="text-white text-accent l-margin-bs">We practice humility.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-3.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Innovation</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-accent text-white l-margin-bs">We encourage the entrepreneurial spirit.</p>
									<p class="text-accent text-white l-margin-bs">We continuously look for ways to “do it better”.</p>
									<p class="text-accent text-white l-margin-bs">We are committed to finding new ways to delight our customers.</p>
									<p class="text-accent text-white l-margin-bs">We embrace and drive change.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-4.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Belief in People</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-white text-accent l-margin-bs">We value our people.</p>
									<p class="text-white text-accent l-margin-bs">We believe in the development of our people and invest in their growth.</p>
									<p class="text-white text-accent l-margin-bs">We believe diversity leads to improved team results.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-5.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Accountability</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-accent text-white l-margin-bs">We take ownership of our actions and are committed to deliver results.</p>
									<p class="text-accent text-white l-margin-bs">We use data to make fact-based decisions.</p>
									<p class="text-accent text-white l-margin-bs">We contribute and engage each other to share ideas.</p>
									<p class="text-accent text-white l-margin-bs">Everyone has a voice.</p>
									<p class="text-accent text-white l-margin-bs">We believe in open and effective communication.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-6.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Passion</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-white text-accent l-margin-bs">We strive and exceed expectations.</p>
									<p class="text-white text-accent l-margin-bs">We are committed to providng the very best quality and service.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-7.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Commitment to<br>the Customer</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-accent text-white l-margin-bs">Fresh food is our world and we love what we do.</p>
									<p class="text-accent text-white l-margin-bs">We are passionate about creating delicious ways to eat healthy.</p>
									<p class="text-accent text-white l-margin-bs">We thrive on continuous learning to deliver superior results.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
						<div class="l-three">
							<div class="flip__card" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/dist/img/story-card-8.jpg);">
								<div class="flip__front">
									<p class="flip__heading">Sustainability</p>
									<span class="flip__icon"></span>
								</div>

								<div class="flip__back text-center">
									<p class="text-white text-accent l-margin-bs">We are committed to protecting and enhancing our planet for future generations through environmental and social responsibility programs.</p>
									<span class="flip__icon"></span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="our-history" class="l-padding-vx">
					<div class="l-constrained--desktop-wide">
						<div class="l-constrained--site l-padding-tm l-padding-hl text-center">
							<h3 class="heading--script l-margin-vn text-tawny">Our History</h3>
						</div>

						<div class="l-constrained timeline">

								<div class="timeline__content">
									<p class="timeline__date">1979</p>
									<h4 class="timeline__title">Founded</h4>
									<p class="timeline__desc">Apio, Inc. is founded by five celery growers in the Santa Maria Valley, CA. The name “Apio” means “celery” in Spanish.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">1982</p>
									<h4 class="timeline__title">Innovative Process</h4>
									<p class="timeline__desc">Apio builds a prototype broccoli-packing trailer, a revolutionary concept fueling growth to one of the largest broccoli shippers in the world.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">1990</p>
									<h4 class="timeline__title">Broccoligate</h4>
									<p class="timeline__desc">Apio receives worldwide exposure when President George Bush banned broccoli from Air Force One. In response, Apio sent a truckload of broccoli to the White House and asked the President to reconsider his decision. The gift resulted in an avalanche of press coverage.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">1996</p>
									<h4 class="timeline__title">Eat Smart Brand</h4>
									<p class="timeline__desc">Apio launches a full fresh-cut category including bagged vegetables and party trays processed at its Guadalupe, CA facility under the Eat Smart® brand.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">1999</p>
									<h4 class="timeline__title">Aqio Aquisition</h4>
									<p class="timeline__desc">Landec Corporation (NASDAQ: LNDC) acquires Apio. As the inventor of BreatheWay technology, Landec brings a differentiated solution to Eat Smart by extending the shelf life of its products and delivering unsurpassed quality produce. </p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2002</p>
									<h4 class="timeline__title">Packaging Innovation</h4>
									<p class="timeline__desc">Eat Smart introduces a revolutionary “flip-and-serve” party tray, leveraging the BreatheWay technology and offering superior merchandising efficiencies and consumer convenience.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2004</p>
									<h4 class="timeline__title">Breatheway Technology</h4>
									<p class="timeline__desc">Apio completes its first licensing agreement of its BreatheWay packaging technology to Chiquita for the Chiquita-to-go banana program. </p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2011</p>
									<h4 class="timeline__title">Windset Innovation</h4>
									<p class="timeline__desc">Apio and Landec invest in a 20% ownership of Windset Farms, the  leading hydroponic greenhouse grower in North America in a five year partnership agreement.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2012</p>
									<h4 class="timeline__title">GreenLine Aquisition</h4>
									<p class="timeline__desc">Apio broadens its packaged fresh vegetable offering to include a full line of green bean products and secures a national fresh food supply chain. Adding to its refrigerated processing center in California, Apio now has processing centers in Ohio, Pennsylvania and Florida; distribution centers in South Carolina and New York and a full fleet of refrigerated trucks to ensure excellent customer delivery and service throughout North America.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2012</p>
									<h4 class="timeline__title">Salad Kit Innovation</h4>
									<p class="timeline__desc">Eat Smart enters the flat to declining salad kit category with an innovative salad kit called the Sweet Kale Salad. The Sweet Kale Salad quickly disrupts the segment and becomes the number one selling salad kit in North America.  Apio launches an entire line of superfood vegetable salad kits that grows rapidly and spurs years of new innovations in the category.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2014</p>
									<h4 class="timeline__title">Windset Investment</h4>
									<p class="timeline__desc">Apio increases its stake in Windset to 27%</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2017</p>
									<h4 class="timeline__title">Windset Agreement</h4>
									<p class="timeline__desc">Apio extends its agreement with Windset for another five years.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2017</p>
									<h4 class="timeline__title">Landec Aquires O Olive Oil</h4>
									<p class="timeline__desc">O Olive Oil is a premium producer of California specialty olive oils and wine vinegars with 100% clean and fully traceable ingredients.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2017</p>
									<h4 class="timeline__title">Innovative Salad Packaging</h4>
									<p class="timeline__desc">Eat Smart enters the single-serve salad segment with Salad Shake Ups,™ featuring 100% clean ingredients, unique flavor profiles, plant proteins and a patented bowl design that makes it easy to eat with no mess.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2018</p>
									<h4 class="timeline__title">Eat Smart at Home</h4>
									<p class="timeline__desc">Eat Smart launches an online store that makes it easy for consumers to have access to fresh vegetables delivered straight to their home. Initially serves selected zip codes on the West Coast.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2018</p>
									<h4 class="timeline__title">Eat Smart 100% Clean Dressing Facility</h4>
									<p class="timeline__desc">Eat Smart builds its own clean dressing facility to deliver innovative all-natural dressings for its Eat Smart salad kit business.</p>
								</div>
								<div class="timeline__content">
									<p class="timeline__date">2018</p>
									<h4 class="timeline__title">Landec Launches Curation Foods</h4>
									<p class="timeline__desc">Landec launches Curation Foods, combining its packaged vegetable products, premium olive oils, specialty vinegars, dressings and future all-natural products under a single Public Benefit Corporation dedicated to innovating plant-based products with 100% clean ingredients. The Eat Smart and O Olive Oil brands are now a part of Curation Foods and Apio is discontinued as a legal entity.</p>
								</div>

						</div>
					</div>
				</div>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
