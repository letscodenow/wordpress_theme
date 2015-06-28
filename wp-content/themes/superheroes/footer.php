<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package superheroes
 */

?>
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-lg-offset-1">
                        <div class="footer-wid">
                            <h2 class="wid-title">A<span>vengers</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan,</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-wid">
                            <h2 class="wid-title">Newsletter</h2>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

                            <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="copyright-text">
                                        <p>© 2015 Avengers - All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-links footer-social-links">
                                        <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-facebook"></i> <div class="ripple-wrapper"></div></a>
                                        <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-twitter"></i> <div class="ripple-wrapper"></div></a>
                                        <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-google-plus"></i> <div class="ripple-wrapper"></div></a>
                                        <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-youtube"></i> <div class="ripple-wrapper"></div></a>
                                        <a class="btn social-link" href="javascript:void(0)"><i class="fa fa-linkedin"></i> <div class="ripple-wrapper"></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>


</body>
</html>
