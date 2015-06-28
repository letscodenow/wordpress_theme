<?php
/*
* Template Name: About
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
                                <div class="entry-title text-center">
                                    <p>who we are?</p>
                                    <h2>About the Avengers</h2>
                                </div>

                                <div class="entry-featured-content shadow-z-2">
                                  <?php
                                    the_post_thumbnail('post-thumbnail', array(
                                      "class" => "img-responsive"
                                    ));
                                  ?>
                                </div>

                                <div class="entry-content">
                                  <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                                       the_content();
                                  endwhile; endif; ?>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
