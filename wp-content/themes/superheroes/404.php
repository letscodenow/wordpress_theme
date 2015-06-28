<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package superheroes
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
                                  <article class="post">
                                    <header class="article-title text-center">
                                        <h2>404 :(</h2>
                                        <p class="post-meta">Seems like there is nothing to show.</p>
                                    </header>
                                </article>



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
