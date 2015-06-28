<?php
/*
* Template Name: Home page
*/

get_header(); ?>



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
                                <?php
                                $paged = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
								// WP_Query arguments
                                $args = array (
                                 'post_type' => 'post',
                                 'posts_per_page' => 5,
                                 'paged' => $paged
                                 );

								// The Query
                                $query = new WP_Query( $args );
								// The Loop
                                if ( $query->have_posts() ) {
                                 while ( $query->have_posts() ) {
                                  $query->the_post();

                                  ?>
                                  <article class="post">
                                    <header class="article-title text-center">
                                        <p><?php the_category(" ");?></p>
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <p class="post-meta">by <?php the_author(); ?>  @ <?php echo get_the_date(); ?></p>
                                    </header>
                                    <div class="article-featured-content shadow-z-2">
                                        <?php if(get_field('video')){
                                            ?>

                                            <?php if (get_field('source')=="YouTube"):
                                            ?>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="http://youtube.com/embed/<?php echo get_field('video') ?>" width="500" height="281"></iframe>
                                            </div>

                                            <?php else:

                                            ?>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="https://player.vimeo.com/video/<?php echo get_field('video') ?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>

                                            <?php endif;
                                        } else { ?>
                                            <a href="<?php the_permalink(); ?>">
                                              <?php the_post_thumbnail('post-thumbnail', array(
                                                "class" => "img-responsive"
                                              )); ?>
                                            </a>
                                        <?php } ?>
                                    </div>

                                    <div class="post-summary">
                                        <p><?php the_content(); ?></p>
                                    </div>

                                    <div class="post-detail-link text-center">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-fab btn-raised btn-material-red">
                                            <i class="fa fa-plus"></i>
                                            <div class="ripple-wrapper"></div>
                                        </a>
                                    </div>
                                </article>
                                <?php


                            }
                        } else {
									// no posts found
                        }

                        ?>



                        <nav role="navigation" class="navigation posts-navigation">
                            <div class="nav-links">
                                <div class="nav-previous">
                                  <a href="<?php previous_posts(); ?>"></a>
                                </div>
                                <div class="nav-next">
                                  <a href="<?php next_posts(); ?>"></a>
                                </div>
                            </div>
                        </nav>
                        <?php
                        // Restore original Post Data
                                wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
</section>


<?php get_footer(); ?>
