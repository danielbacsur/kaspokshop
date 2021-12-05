<!doctype html>
<html class="no-js" lang="en">
    <?php
        include("includes/db.php");
		include("head.php");
        include("functions/functions.php");
	?>
    <body data-mobile-nav-style="classic">
		<?php
			include("header.php");
			$product_id = @$_GET['pro_id'];
			$get_product = "select * from products where product_url='$product_id'";
			$run_product = mysqli_query($con,$get_product);
			$check_product = mysqli_num_rows($run_product);
			if($check_product == 0) {
			    echo "<script> window.open('index.php','_self') </script>";
			}
			$row_product = mysqli_fetch_array($run_product);
			$p_cat_id = $row_product['p_cat_id'];
			$pro_id = $row_product['product_id'];
			$pro_title = $row_product['product_title'];
			$pro_price = $row_product['product_price'];
			$pro_desc = $row_product['product_desc'];
			$pro_img1 = $row_product['product_img1'];
			$pro_img2 = $row_product['product_img2'];
			$pro_img3 = $row_product['product_img3'];
			$pro_label = $row_product['product_label'];
			$pro_psp_price = $row_product['product_psp_price'];
			$pro_features = $row_product['product_features'];
			$pro_video = $row_product['product_video'];
			$status = $row_product['status'];
			$pro_url = $row_product['product_url'];
            $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
            $run_p_cat = mysqli_query($con,$get_p_cat);
            $row_p_cat = mysqli_fetch_array($run_p_cat);
            $p_cat_title = $row_p_cat['p_cat_title'];
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
        <section class="big-section wow animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 shopping-content d-flex flex-column flex-lg-row align-items-md-center">
                        <div class="w-60 md-w-100">
                            <div class="product-images-box lightbox-portfolio row">
                                <div class="col-12 col-lg-9 position-relative px-lg-0 order-lg-2 product-image md-margin-10px-bottom">
                                    <div class="swiper-container product-image-slider" data-slider-options='{ "spaceBetween": 10, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "auto", "spaceBetween": 15, "direction": "vertical", "navigation": { "nextEl": ".swiper-thumb-next", "prevEl": ".swiper-thumb-prev" } } } }' data-thumb-slider-md-direction="horizontal">
                                        <div class="swiper-wrapper">
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="admin/product_images/<?php echo $pro_img1; ?>"><img class="w-100" src="admin/product_images/<?php echo $pro_img1; ?>" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="admin/product_images/<?php echo $pro_img2; ?>"><img class="w-100" src="admin/product_images/<?php echo $pro_img2; ?>" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="admin/product_images/<?php echo $pro_img3; ?>"><img class="w-100" src="admin/product_images/<?php echo $pro_img3; ?>" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                        </div>
                                    </div>
                                    <div class="slider-product-next swiper-button-next text-extra-dark-gray"><i class="fa fa-chevron-right"></i></div>
                                    <div class="slider-product-prev swiper-button-prev text-extra-dark-gray"><i class="fa fa-chevron-left"></i></div>
                                </div>
                                <div class="col-12 col-lg-3 order-lg-1 position-relative single-product-thumb md-margin-50px-bottom sm-margin-40px-bottom">
                                    <div class="swiper-container product-image-thumb slider-vertical padding-15px-lr padding-45px-bottom md-no-padding left-0px">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="w-100" src="admin/product_images/<?php echo $pro_img1; ?>" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="admin/product_images/<?php echo $pro_img2; ?>" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="admin/product_images/<?php echo $pro_img3; ?>" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="swiper-thumb-next-prev text-center">
                                        <div class="swiper-button-prev swiper-thumb-prev"><i class="fa fa-chevron-up"></i></div>
                                        <div class="swiper-button-next swiper-thumb-next"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-40 md-w-100 product-summary padding-7-rem-left lg-padding-5-rem-left md-no-padding-left">
                            <div class="d-flex align-items-center margin-3-half-rem-tb md-margin-1-half-rem-tb">
                                <div class="flex-grow-1">
                                    <div class="text-extra-dark-gray font-weight-500 text-extra-large alt-font margin-5px-bottom"><?php echo $pro_title; ?></div>
                                    <span class="product-price text-extra-medium">
										<?php if($pro_psp_price != $pro_price) { ?>
											<del><?php echo $pro_price; ?> FT</del>
										<?php } ?>
										<?php echo $pro_psp_price; ?> FT
									</span>
                                </div>
                                <div class="text-end line-height-30px">
                                    <div><a href="#" class="letter-spacing-3px"><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i></a></div>
                                    <span class="text-small"><span class="text-extra-dark-gray">ID: </span><?php echo $pro_id; ?></span>
                                </div>
                            </div>
                            <div class="last-paragraph-no-margin">
                                <p><?php echo $pro_features; ?></p>
                            </div>
                            <form id="order_form" class="margin-4-rem-top" action="" method="post">
                                <div class="margin-20px-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Szín A</label>
                                    <ul class="alt-font shop-color">
                                        <li>
                                            <input class="d-none" type="radio" id="color-11" name="color1" value="Fekete" checked />
                                            <label for="color-11" class="width-80"><span style="background-color: black "></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-12" name="color1" value="Fehér"/>
                                            <label for="color-12" class="width-80"><span style="background-color: lemonchiffon"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-13" name="color1" value="Kék"/>
                                            <label for="color-13" class="width-80"><span style="background-color: dodgerblue"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-14" name="color1" value="Piros"/>
                                            <label for="color-14" class="width-80"><span style="background-color: indianred"></span></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="margin-20px-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Szín B</label>
                                    <ul class="alt-font shop-color">
                                        <li>
                                            <input class="d-none" type="radio" id="color-21" name="color2" value="Fekete" checked />
                                            <label for="color-21" class="width-80"><span style="background-color: black"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-22" name="color2" value="Fehér"/>
                                            <label for="color-22" class="width-80"><span style="background-color: lemonchiffon"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-23" name="color2" value="Kék"/>
                                            <label for="color-23" class="width-80"><span style="background-color: dodgerblue"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-24" name="color2" value="Piros"/>
                                            <label for="color-24" class="width-80"><span style="background-color: indianred"></span></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="quantity margin-15px-right">
                                    <label class="screen-reader-text">Mennyiség</label>
                                    <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="quantity">
                                    <input class="input-text qty-text" type="number" name="quantity" value="1">
                                    <input type="button" value="+" class="qty-plus qty-btn" data-quantity="plus" data-field="quantity">
                                </div>
                                <a href="#" onclick="document.getElementById('order_form').submit();" class="btn btn-dark-gray btn-medium">Kosárhoz adás</a>
                                <input type="hidden" name="add_to_cart">
                                <div hidden class="margin-25px-top">
                                    <a href="#" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="feather icon-feather-heart align-middle margin-5px-right"></i>Kívánságlista</a>
                                    <a href="#" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="feather icon-feather-shuffle align-middle margin-5px-right"></i>Megosztás</a>
                                </div>
                                <input type="hidden" id="pro_id" name="pro_id" value="<?php echo $pro_id; ?>">
                            </form>
                            <?php
                                if(isset($_POST['add_to_cart'])){
                                    $ip_add = getRealUserIp();
                                    $p_id = $_POST['pro_id'];
                                    $product_qty = $_POST['quantity'];
                                    $product_size = $_POST['color1'];
                                    $product_color = $_POST['color2'];
                                    $get_price = "select * from products where product_id='$p_id'";
                                        $run_price = mysqli_query($con,$get_price);
                                        $row_price = mysqli_fetch_array($run_price);
                                        $pro_price = $row_price['product_psp_price'];
                                        $query = "insert into cart (p_id,ip_add,qty,p_price,size,color) values ('$p_id','$ip_add','$product_qty','$pro_price','$product_size', '$product_color')";
                                        $run_query = mysqli_query($db,$query);
                                        echo "<script>alert('A teméket hozzáadtuk a kosárhoz!')</script>";
                                        echo "<script>window.open('shop.php','_self')</script>";
                                }
                            ?>
                            <div class="d-flex alt-font margin-4-rem-top align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-uppercase text-extra-small font-weight-500 text-extra-dark-gray d-block">#: <a href="shop-wide.html" class="font-weight-400"><?php echo $p_cat_title; ?></a></span>
                                </div>
                                <div class="text-end social-icon-style-02 w-50">
                                    <ul class="extra-small-icon">
										<li><a class="text-extra-dark-gray facebook" href="https://www.instagram.com/kaspokshop" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a class="text-extra-dark-gray twitter" href="http://www.facebook.com/kaspokshop" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="text-extra-dark-gray facebook" href="https://www.tiktok.com/@kaspokshop?" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="border-top border-width-1px border-color-medium-gray pt-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0 tab-style-07">
                        <ul class="nav nav-tabs justify-content-center text-center alt-font font-weight-500 text-uppercase margin-9-rem-bottom border-bottom border-color-medium-gray md-margin-50px-bottom sm-margin-35px-bottom">
                            <li class="nav-item"><a data-bs-toggle="tab" href="#description" class="nav-link active">Leírás</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <div id="description" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <?php echo $pro_desc; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="border-top border-width-1px border-color-medium-gray wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5 col-md-6 text-center margin-4-rem-bottom sm-margin-2-rem-bottom">
                        <span class="alt-font font-weight-500 text-uppercase d-inline-block margin-5px-bottom">Szerintünk ezeket is szeretnéd</span>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Ajánlott termékek</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="product-listing shop-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <ul class="product-listing shop-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <?php
                                $get_products = "select * from products order by rand() LIMIT 0,4";
                                $run_products = mysqli_query($con,$get_products);
                                while($row_products = mysqli_fetch_array($run_products)) {
                                    $pro_id = $row_products['product_id'];
                                    $pro_title = $row_products['product_title'];
                                    $pro_price = $row_products['product_price'];
                                    $pro_img1 = $row_products['product_img1'];
                                    $pro_img2 = $row_products['product_img2'];
                                    $pro_label = $row_products['product_label'];
                                    $manufacturer_id = $row_products['manufacturer_id'];
                                    $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
                                    $run_manufacturer = mysqli_query($db,$get_manufacturer);
                                    $row_manufacturer = mysqli_fetch_array($run_manufacturer);
                                    $manufacturer_name = $row_manufacturer['manufacturer_title'];
                                    $pro_psp_price = $row_products['product_psp_price'];
                                    $pro_url = $row_products['product_url'];
                                    ?>
                                    <!-- start shop item -->
                                    <li class="grid-item">
                                        <div class="product-box">
                                            <!-- start product image -->
                                            <div class="product-image border-radius-6px">
                                                <a href="single-product.html">
                                                    <img class="default-image" src="admin/product_images/<?php echo $pro_img1; ?>" alt=""/>
                                                    <img class="hover-image" src="admin/product_images/<?php echo $pro_img2; ?>" alt=""/>
                                                    <?php if($pro_label != 'NaN') { ?>
                                                        <span class="product-badge green"><?php echo $pro_label; ?></span>
                                                    <?php } ?>
                                                </a>
                                                <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                                <div class="product-hover-bottom text-center padding-35px-tb">
                                                    <a href="<?php echo $pro_url; ?>" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                                    <a href="<?php echo $pro_url; ?>" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                                    <a href="<?php echo $pro_url; ?>" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
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
    	</div>
        <?php
			include("footer.php");
		?>
    </body>
</html>
