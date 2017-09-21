<?php
/* Template Name: Home */

get_header(); ?>
	
	<!-- start Content -->
	
	<div id="main-content" class="home-page">
		
		<div id="home-video">
			<video autoplay="autoplay" muted="muted" loop="loop">
				<source src="<?php echo get_template_directory_uri(); ?>/img/DBI_video_english-v1.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
		<!-- Suscribe line -->
		
		<div id="rrss-home" class="rrss-wrap">
			<div class="container">
				<div class="row">
					<?php if ( has_nav_menu( 'social' ) ) : ?>	
					<div class="col-sm-4 col-xs-12">
                        <div class="rrss-white">
                            <?php 
								// Social navigation menu.
								wp_nav_menu( array(
									'menu_class'     => 'rrss-wrap',
									'theme_location' => 'social',
								) );
							?>	
                        </div>                            	
					</div>					
					<?php endif; ?>
					<div class="col-sm-8 col-xs-12">
						<?php echo do_shortcode('[contact-form-7 id="4" title="Suscribe form" html_class="newsletter-form"]'); ?>		
					</div>
				</div>
			</div>
		</div>
		
		<!-- Services -->
		
		<div id="services-box" class="content-box">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="services-container">
							
						<?php 
						$args = array(
						  'post_type'   => 'solution',
						  'post_status' => 'publish',
						  'post_per_page' => 5
						);
						// the query
						$the_query = new WP_Query( $args ); ?>
						
						<?php if ( $the_query->have_posts() ) : ?>						
							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="service-box">
								<?php echo do_shortcode('[types field="icon" size="full"]'); ?>
								<?php 
									$solutiontitle = rtrim(get_the_title()); 
																		
									$whitespacepos = strripos($solutiontitle, ' ');
									$firststring = substr($solutiontitle, 0, $whitespacepos);
									$laststring = strrchr($solutiontitle, ' ');
									$solutiontitle = $firststring . '<br>' . $laststring;
								?>
								<h3 class="service-title"><?php echo $solutiontitle; ?></h3>	
							</div>
							<?php endwhile; ?>
							<!-- end of the loop -->						
							<?php wp_reset_postdata(); ?>
						
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

						</div>						
					</div>
				</div>
			</div>			
		</div>
		
		<!-- Working -->
		<div id="working-box" class="content-box">
			<div id="home-works-slider" class="swiper-container">							
				<!-- Wrapper for slides -->
				<div class="swiper-wrapper">	
						
					<?php 
					$args_solution = array(
					  'post_type'   => 'case-study',
					  'post_status' => 'publish',
					  'post_per_page' => 5
					);
					// the query
					$the_querysol = new WP_Query( $args_solution ); ?>
					
					<?php if ( $the_querysol->have_posts() ) : ?>						
						<!-- the loop -->
						<?php while ( $the_querysol->have_posts() ) : $the_querysol->the_post(); ?>
						<div class="swiper-slide">
							<figure class="wrap_image">
								<?php the_post_thumbnail(); ?>								
							</figure>
							<div  class="carousel-caption">
								<h3 class="slide-text"><span><?php _e( 'Case Study', 'dbi' ); ?></span><b><?php echo do_shortcode('[types field="brand"]'); ?></b></h3>
								<a href="<?php the_permalink(); ?>" class="icon-link"></a>	
							</div>	
						</div>
						<?php endwhile; ?>
						<!-- end of the loop -->						
						<?php wp_reset_postdata(); ?>
					
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>	
				</div>				
				<!-- If we need navigation buttons -->
			    <div class="swiper-button-prev swiper-button-white"></div>
			    <div class="swiper-button-next swiper-button-white"></div>
			</div>
		</div>
		
		<!-- Socials -->
		<div id="rrss-box" class="content-box">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-sm-12">
						<div class="rrss-container">
							<h2 class="mg-right-white"><?php _e( 'Twitter', 'dbi' ); ?></h2>
							<div class="rrss-content">
								<div class="rrss-scroll-zone">
									<a class="twitter-timeline" data-tweet-limit="1" data-chrome="noheader transparent nofooter noborders" data-lang="en" data-link-color="#0098C3" href="https://twitter.com/DBiUK"></a> 
									<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</div>
							</div>
						</div>			
					
						<div class="rrss-container">
							<h2><?php _e( 'News', 'dbi' ); ?></h2>	
							<div class="rrss-content no-mg-left">
								<div class="rrss-scroll-zone">
									<?php 
									$args_post = array(
										'post_type'   => 'post',
										'orderby' => 'post_date',
										'order' => 'DESC',
										'post_status' => 'publish',
										'posts_per_page' => 1,
									);
									// the query
									$the_query_post = new WP_Query( $args_post ); ?>
									
									<?php if ( $the_query_post->have_posts() ) : ?>						
										<!-- the loop -->
										<?php while ( $the_query_post->have_posts() ) : $the_query_post->the_post(); ?>
										<div class="post-blog">
											<h4 class="post-title"><?php the_title(); ?></h4>	
											<div class="post-image">
												<a href="<?php the_permalink(); ?>">
													<?php 
													// Post thumbnail.
													if (get_the_post_thumbnail()) {
														the_post_thumbnail();
													} else {
														echo '<img src="/wp-content/themes/dbi/img/bg/img_default_post.jpg">';
													} 
													?>
												</a>
												<div class="post-link">
													<a href="<?php the_permalink(); ?>" class="icon-link"></a>							
												</div>	
											</div>
										</div>
										<?php endwhile; ?>
										<!-- end of the loop -->						
										<?php wp_reset_postdata(); ?>
									
									<?php else : ?>
										<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
									<?php endif; ?>
								</div>
							</div>	
						</div>	
					</div>
				</div>
			</div>	
		</div>
		
		
	</div>


<?php get_footer(); ?>
