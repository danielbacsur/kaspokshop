<!doctype html>
<html class="no-js" lang="en">
    <?php
		include("head.php");
	?>
    <body data-mobile-nav-style="classic">
		<?php
			include("header.php");
		?>
        <!-- start subscription popup -->
        <div id="subscribe-popup" class="mfp-hide subscribe-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-10 bg-white modal-popup-main">
                        <div class="row">
                            <div class="col-12 col-sm-7 order-2 order-sm-1 newsletter-popup padding-6-rem-all lg-padding-4-rem-all xs-padding-3-rem-all">
                                <span class="text-extra-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Iratkozz fel hírlevelünkre!</span>
                                <p class="margin-30px-bottom xs-margin-20px-bottom">Iratkozz fel hírlevelünkre és havi egy emailben küldjük majd az újdonságokat és a projekttel kapcsolatos híreket.</p>
                                <form action="email-templates/subscribe-newsletter.php" method="post">
                                    <div class="newsletter-style-03 position-relative margin-25px-bottom xs-margin-15px-bottom">
                                        <input class="medium-input bg-white m-0 required" name="email" placeholder="Add meg az email címedet" type="email">
                                        <input type="hidden" name="redirect" value="">
                                        <button class="btn no-border text-medium submit" type="submit"><i class="feather icon-feather-mail m-0"></i></button>
                                        <div class="form-results position-absolute d-none"></div>
                                    </div>
                                </form>
                                <input id="newsletter-off" class="d-none" type="checkbox" name="newsletter-off" />
                                <label for="newsletter-off" class="text-small"><span></span>Ne jelenjen meg mégegyszer</label>
                            </div>
                            <div class="col-12 col-sm-5 cover-background order-1 order-sm-2 xs-h-150px" style="background-image:url('images/newsletter.png');">
                                <button title="Bezárás (Esc)" type="button" class="mfp-close">×</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end subscription popup -->
        <div class="main-content">
        <!-- start section -->
        <section class="fix-background bg-light-gray gb-light-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center z-index-0">
                        <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                            <div class="margin-20px-bottom d-block"><span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase text-small letter-spacing-1px d-inline-block padding-20px-lr padding-5px-tb">Üdv a shopban! Valamit vegyél, ne csak legyél!</span></div>
                            <span class="title-extra-large alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('images/header-fill.png')">Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="padding-8-half-rem-lr border-top border-width-1px border-color-medium-gray xl-padding-3-rem-lr md-no-padding-lr" style="background-image: url(images/flower-tl-corner.png), url(images/flower-br-corner.png); background-repeat: no-repeat, no-repeat; background-size: auto 20vw, auto 20vw; background-position-x: left, right; background-position-y: top, bottom;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 text-center margin-5-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                        <span class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Kaspóink & dekortárgyak</span>
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Legújabb termékeink</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 shopping-content">
                        <ul class="product-listing shop-wrapper grid grid-loading grid-5col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start shop item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="product-box paddingtop margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/shop-skull-a.png" alt=""/>
                                            <img class="hover-image" src="images/shop-skull-b.png" alt=""/>
                                            <span class="product-badge orange">hot</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-30px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kosárhoz adás"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Megtekintés"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kívánságlista"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Koponya</a>
                                        <div class="product-price text-medium">1990 FT</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="product-box margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/shop-hexa-a.png" alt=""/>
                                            <img class="hover-image" src="images/shop-hexa-b.png" alt=""/>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kosárhoz Adás"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Megtekintés"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kívánságlista"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Hexa</a>
                                        <div class="product-price text-medium"><del>1990 FT</del>1490 FT</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="product-box margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/shop-missing-a.gif" alt=""/>
                                            <img class="hover-image" src="images/shop-missing-b.gif" alt=""/>
                                            <span class="product-badge orange">Hamarosan</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <!--
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kosárhoz Adás"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Megtekintés"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kívánságlista"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    -->
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Cilinder</a>
                                        <div class="product-price text-medium"></div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="product-box margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/shop-missing-a.gif" alt=""/>
                                            <img class="hover-image" src="images/shop-missing-b.gif" alt=""/>
                                            <span class="product-badge orange">Hamarosan</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <!--
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kosárhoz Adás"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Megtekintés"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kívánságlista"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    -->
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Négyzet</a>
                                        <div class="product-price text-medium"></div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.8s">
                                <div class="product-box margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/shop-missing-a.gif" alt=""/>
                                            <img class="hover-image" src="images/shop-missing-b.gif" alt=""/>
                                            <span class="product-badge orange">Hamarosan</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <!--
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kosárhoz Adás"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Megtekintés"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kívánságlista"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    -->
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Hexa Mono</a>
                                        <div class="product-price text-medium"></div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        </div>
        <?php
			include("footer.php");
		?>
    </body>
</html>
