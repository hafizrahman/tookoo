<?php
/**
 * The main homepage template file.
 *
 * @package tookoo
 * @since tookoo 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="feature" >
				<div id="slideshow">
					<ul id="nav">
						<li id="prev"><a href="#">Previous</a></li>
						<li id="next"><a href="#">Next</a></li>
					</ul>

					<ul id="slides">
						<li>
							<a href="single.html"><div class="feature-image">
								<img src="images/mu-away-feature.jpg" />
							</div>
							<div class="feature-text">
								<h3 class="feature-title">Manchester United Away 2012/2013</h3>			
								<div><span class="feature-meta-1">IDR 160.000</span> | <span class="feature-meta-2">Availibility: S, M, XL<span></div>			
							</div>
							</a>
						</li>
						<li>
							<a href="single.html"><div class="feature-image">
								<img src="images/arsenal-away-1213-feature.jpg" />
							</div>
							<div class="feature-text">
								<h3 class="feature-title">Arsenal Away 2012/2013</h3>			
								<div><span class="feature-meta-1">IDR 160.000</span> | <span class="feature-meta-2">Availibility: S, M, XL<span></div>			
							</div>
							</a>
						</li>
					</ul>
				</div>
				<div style="clear:both"></div>
			</div> <!-- end feature -->
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php tookoo_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'homepage' );
					?>

				<?php endwhile; ?>

				<?php tookoo_content_nav( 'nav-below' ); ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>