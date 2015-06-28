<?php
/**
 * Template part for displaying single posts.
 *
 * @package superheroes
 */

?>

<section class="maincontent-wrap">
		<div class="container">
				<div class="row">
						<div class="col-md-12">
								<div class="maincotnent shadow-z-1">
										<div class="mainmenu">
												<div class="navbar navbar-nobg">
													<div class="navbar-header">
															<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
																	<span class="sr-only">Toggle navigation</span>
																	<span class="icon-bar"></span>
																	<span class="icon-bar"></span>
																	<span class="icon-bar"></span>
															</button>
													</div>
													<div class="navbar-collapse collapse">
															<?php wp_nav_menu(array(
																'theme_location'  => 'primary',
																'menu_class'      => 'nav navbar-nav',
																'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
															)); ?>
														</div>
												</div>
										</div>

										<div class="row">
												<div class="col-md-10 col-md-offset-1">
														<div class="article-list">
																<div class="entry-title text-center">
																		<p><?php the_category(" ");?></p>
																		<h2><?php the_title(); ?></h2>
																</div>

																<div class="article-featured-content shadow-z-2">
																		<?php if(get_field('video')){ ?>

																				<?php if (get_field('source')=="YouTube"): ?>
																				<div class="embed-responsive embed-responsive-16by9">
																						<iframe class="embed-responsive-item" src="http://youtube.com/embed/<?php echo get_field('video') ?>" width="500" height="281"></iframe>
																				</div>

																				<?php else: ?>
																				<div class="embed-responsive embed-responsive-16by9">
																						<iframe src="https://player.vimeo.com/video/<?php echo get_field('video') ?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
																				</div>

																				<?php endif;
																			} else {
																				the_post_thumbnail('post-thumbnail', array(
																					"class" => "img-responsive"
																				));
																		} ?>
																</div>

																<div class="entry-content">
																	<?php the_content(); ?>
																</div>

																<div class="entry-bottom">
																		<p><span class="post-tags"><?php the_tags( '<strong><i class="fa fa-tags"></i> Tags: </strong>', ', ', '' ); ?></span> <span class="post-share"><i class="fa fa-share-alt"></i> Share with friends</span></p>
																</div>



																<div class="post-author-meta">
																		<div class="author-photo">
																				<?php echo get_avatar( get_the_author_meta( 'user_email' ), 150 ); ?>
																		</div>

																		<div class="author-right-info">
																				<h2><?php the_author(); ?></h2>
																				<p><?php the_author_meta( 'description' ); ?></p>
																				<p><a href="<?php the_author_url(); ?>"><?php the_author_url(); ?></a></p>
																		</div>
																</div>

																<?php
																	// If comments are open or we have at least one comment, load up the comment template.
																	if ( comments_open() || get_comments_number() ) :
																		comments_template();
																	endif;
																?>

														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
