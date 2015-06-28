<?php
/*
* Template Name: Contact
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
                                <div class="entry-content">
                                    <div class="entry-title text-center">
                                        <p>want to know more?</p>
                                        <h2>Contact with us</h2>
                                    </div>

                                    <?php
                                      $thumb_id = get_post_thumbnail_id();
                                      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                      $thumb_url = $thumb_url_array[0];
                                    ?>

                                    <div id="map-canvas"></div>
                                    <!-- Google Maps API -->
                                    <script src="https://maps.googleapis.com/maps/api/js"></script>
                                    <script>
                                        function initialize() {
                                          var mapOptions = {
                                            zoom: 17,
                                            scrollwheel: false,
                                            center: new google.maps.LatLng(18.013764, -76.801992)
                                          };

                                          var map = new google.maps.Map(document.getElementById('map-canvas'),
                                              mapOptions);


                                          var marker = new google.maps.Marker({
                                            position: map.getCenter(),
                                            icon: '<?php echo $thumb_url; ?>',
                                            map: map
                                          });

                                        }

                                        google.maps.event.addDomListener(window, 'load', initialize);
                                    </script>


                                    <div class="contact-form shadow-z-1">
                                        <h2 class="contact-title">Get in touch</h2>
                                        <?php echo do_shortcode('[contact-form-7 id="80" title="Contact F"]'); ?>
                                    </div>


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
