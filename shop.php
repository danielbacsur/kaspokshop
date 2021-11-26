<!doctype html>
<html class="no-js" lang="en">
    <?php
		include("head.php");
        include("includes/db.php");
	?>
    <body data-mobile-nav-style="classic">
		<?php
			include("header.php");
		?>
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
                            <?php
                                global $db;
                                $get_products = "select * from products order by 1 DESC LIMIT 0,8";
                                $run_products = mysqli_query($con,$get_products);
                                while($row_products=mysqli_fetch_array($run_products)){
                                    $pro_id = $row_products['product_id'];
                                    $pro_title = $row_products['product_title'];
                                    $pro_price = $row_products['product_price'];
                                    $pro_img1 = $row_products['product_img1'];
                                    $pro_img2 = $row_products['product_img2'];
                                    $pro_label = $row_products['product_label'];
                                    $manufacturer_id = $row_products['manufacturer_id'];
                                    $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
                                    $run_manufacturer = mysqli_query($con,$get_manufacturer);
                                    $row_manufacturer = mysqli_fetch_array($run_manufacturer);
                                    $manufacturer_name = $row_manufacturer['manufacturer_title'];
                                    $pro_psp_price = $row_products['product_psp_price'];
                                    $pro_url = $row_products['product_url']; ?>
                                    <!-- start shop item -->
                                    <li class="grid-item wow animate__fadeIn">
                                        <div class="product-box paddingtop margin-45px-bottom lg-margin-25px-bottom xs-no-margin-bottom">
                                            <!-- start product image -->
                                            <div class="product-image border-radius-6px">
                                                <a href="<?php echo $pro_url; ?>">
                                                    <img class="default-image" src="admin/product_images/<?php echo $pro_img1; ?>" alt=""/>
                                                    <img class="hover-image" src="admin/product_images/<?php echo $pro_img2; ?>" alt=""/>
                                                    <?php if($pro_label != "NaN") { ?>
                                                        <span class="product-badge orange"><?php echo $pro_label; ?></span>
                                                    <?php } ?>
                                                </a>
                                                <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                                <div class="product-hover-bottom text-center padding-30px-tb">
                                                    <a href="<?php if($pro_label != "HAMAROSAN") echo $pro_url; ?>" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kosárhoz adás"><i class="feather icon-feather-shopping-cart"></i></a>
                                                    <a href="<?php if($pro_label != "HAMAROSAN") echo $pro_url; ?>" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Megtekintés"><i class="feather icon-feather-zoom-in"></i></a>
                                                    <a href="<?php if($pro_label != "HAMAROSAN") echo $pro_url; ?>" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Kívánságlista"><i class="feather icon-feather-heart"></i></a>
                                                </div>
                                            </div>
                                            <!-- end product image -->
                                            <!-- start product footer -->
                                            <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                                <a href="<?php echo $pro_url; ?>" class="text-extra-dark-gray font-weight-500 d-inline-block"><?php echo $pro_title; ?></a>
                                                <div class="product-price text-medium">
                                                    <?php if($pro_psp_price != $pro_price) { ?>
                                                        <del><?php echo $pro_price; ?></del>
                                                    <?php } ?>
                                                    <?php echo $pro_psp_price; ?>
                                                </div>
                                            </div>
                                            <!-- end product footer -->
                                        </div>
                                    </li>
                                    <!-- end shop item -->
                                <?php } ?>
                            <?php?>
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
