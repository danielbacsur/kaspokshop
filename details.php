<!doctype html>
<html class="no-js" lang="en">
    <?php
    session_start();
		include("head.php");
    include("includes/db.php");
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
			} else {
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
		?>
        <div class="main-content">
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
                                                <a class="gallery-link" href="https://via.placeholder.com/600x765"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="https://via.placeholder.com/600x765"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="https://via.placeholder.com/600x765"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="https://via.placeholder.com/600x765"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="https://via.placeholder.com/600x765"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="https://via.placeholder.com/600x765"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></a>
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
                                            <div class="swiper-slide"><img class="w-100" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></div>
                                            <div class="swiper-slide"><img class="w-100" src="https://via.placeholder.com/600x765" alt=""></div>
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
                                <p><?php echo $pro_desc; ?></p>
                            </div>
                            <div class="margin-4-rem-top">
                                <div class="margin-20px-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Szín</label>
                                    <ul class="alt-font shop-color">
                                        <li>
                                            <input class="d-none" type="radio" id="color-1" name="color" checked />
                                            <label for="color-1" class="width-80"><span style="background-color: #363636"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-2" name="color" />
                                            <label for="color-2" class="width-80"><span style="background-color: #657fa8"></span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="color-3" name="color" />
                                            <label for="color-3" class="width-80"><span style="background-color: #936f5e"></span></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="margin-4-rem-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Méret</label>
                                    <ul class="text-extra-small shop-size">
                                        <li>
                                            <input class="d-none" type="radio" id="size-1" name="size" checked />
                                            <label for="size-1" class="width-80"><span>S</span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="size-2" name="size" />
                                            <label for="size-2" class="width-80"><span>M</span></label>
                                        </li>
                                        <li>
                                            <input class="d-none" type="radio" id="size-3" name="size" />
                                            <label for="size-3" class="width-80"><span>L</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="quantity margin-15px-right">
                                    <label class="screen-reader-text">Quantity</label>
                                    <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="quantity">
                                    <input class="input-text qty-text" type="number" name="quantity" value="1">
                                    <input type="button" value="+" class="qty-plus qty-btn" data-quantity="plus" data-field="quantity">
                                </div>
                                <a href="#" class="btn btn-dark-gray btn-medium">Kosárhoz adás</a>
                                <div class="margin-25px-top">
                                    <a href="#" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="feather icon-feather-heart align-middle margin-5px-right"></i>Kívánságlista</a>
                                    <a href="#" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="feather icon-feather-shuffle align-middle margin-5px-right"></i>Megosztás</a>
                                </div>
                            </div>
                            <div class="d-flex alt-font margin-4-rem-top align-items-center">
                                <div class="flex-grow-1">
                                    <span class="text-uppercase text-extra-small font-weight-500 text-extra-dark-gray d-block">#: <a href="shop-wide.html" class="font-weight-400">Lather bag</a></span>
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
                            <li class="nav-item"><a data-bs-toggle="tab" href="#description" class="nav-link active">Description</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#additionalinformation">Additional information</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#reviews">Reviews (2)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="description" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <div class="col-12 col-xl-5 col-lg-6 md-margin-50px-bottom">
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the ‘s standard dummy text. Lorem ipsum has been the industry’s standard dummy text ever since. Lorem ipsum is simply dummy text. Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-style-03">
                                    <li>Made from soft yet durable 100% organic cotton twill</li>
                                    <li>Front and back yoke seams allow a full range of motion</li>
                                    <li>Comfortable nylon-bound elastic cuffs seal in warmth</li> 
                                    <li>Hem adjusts by pulling cord in handwarmer pockets</li> 
                                    <li>Interior storm flap and zipper garage at chin for comfort</li> 
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6 offset-xl-1">
                                <img src="https://via.placeholder.com/800x800" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="additionalinformation" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <table class="table-style-02">
                                    <tbody>
                                        <tr>
                                            <th class="text-extra-dark-gray font-weight-500">Color</th>
                                            <td>Black, Blue, Brown, Red, Silver</td>
                                        </tr>
                                        <tr class="bg-light-gray">
                                            <th class="text-extra-dark-gray font-weight-500">Size</th>
                                            <td>L, M, S, XL</td>
                                        </tr>
                                        <tr>
                                            <th class="text-extra-dark-gray font-weight-500">Style/Type</th>
                                            <td>Sports, Formal</td>
                                        </tr>
                                        <tr class="bg-light-gray">
                                            <th class="text-extra-dark-gray font-weight-500">Lining</th>
                                            <td>100% polyester taffeta with a DWR finish</td>
                                        </tr>
                                        <tr>
                                            <th class="text-extra-dark-gray font-weight-500">Material</th>
                                            <td>Lather, Cotton, Silk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                                
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="reviews" class="tab-pane fade">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-10">
                                <ul class="blog-comment margin-5-half-rem-bottom">
                                    <li>
                                        <div class="d-block d-md-flex w-100 align-items-center align-items-md-start">
                                            <div class="w-75px sm-w-50px sm-margin-10px-bottom">
                                                <img src="https://via.placeholder.com/125x125" class="rounded-circle w-95 sm-w-100" alt=""/>
                                            </div>
                                            <div class="w-100 padding-25px-left last-paragraph-no-margin sm-no-padding-left">
                                                <a href="#" class="text-extra-dark-gray text-fast-blue-hover alt-font font-weight-500 text-medium">Herman Miller</a>
                                                <span class="text-orange text-extra-small float-end letter-spacing-2px"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                                <div class="text-medium text-medium-gray margin-15px-bottom">17 July 2020, 6:05 PM</div>
                                                <p class="w-85">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the make a type specimen book.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>                            
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 margin-4-rem-bottom ">
                                <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-5px-bottom">Add a review</h6>
                                <div class="margin-5px-bottom">Your email address will not be published. Required fields are marked <span class="text-radical-red">*</span></div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <form action="#" method="post">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label class="margin-15px-bottom" for="basic-name">Your name <span class="text-radical-red">*</span></label>
                                            <input id="basic-name" class="medium-input border-radius-4px bg-white margin-30px-bottom" type="text" name="name" placeholder="Enter your name">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label class="margin-15px-bottom">Your email address <span class="text-radical-red">*</span></label>                                    
                                            <input class="medium-input border-radius-4px bg-white margin-30px-bottom" type="text" name="email" placeholder="Enter your email">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 margin-30px-bottom">
                                            <label class="margin-15px-bottom">Your rating <span class="text-radical-red">*</span></label>                                    
                                            <span class="text-orange text-extra-small d-block"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="margin-15px-bottom">Your comment</div>
                                            <textarea class="medium-textarea border-radius-4px bg-white h-120px margin-2-half-rem-bottom" rows="6" name="comment" placeholder="Enter your comment"></textarea>
                                        </div>
                                        <div class="col-12 sm-margin-20px-bottom">
                                            <input class="btn btn-medium btn-dark-gray mb-0 btn-round-edge-small" type="button" name="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="border-top border-width-1px border-color-medium-gray wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5 col-md-6 text-center margin-4-rem-bottom sm-margin-2-rem-bottom">
                        <span class="alt-font font-weight-500 text-uppercase d-inline-block margin-5px-bottom">You may also like</span>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="product-listing shop-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="https://via.placeholder.com/600x765" alt=""/>
                                            <img class="hover-image" src="https://via.placeholder.com/768x979" alt=""/>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-30px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Merlon Jeans</a>
                                        <div class="product-price text-medium">$470.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="https://via.placeholder.com/600x765" alt=""/>
                                            <img class="hover-image" src="https://via.placeholder.com/600x780" alt=""/>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Cotton Jacket</a>
                                        <div class="product-price text-medium">$370.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="https://via.placeholder.com/600x765" alt=""/>
                                            <img class="hover-image" src="https://via.placeholder.com/600x765" alt=""/>
                                            <span class="product-badge orange">hot</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Outlaw Jacket</a>
                                        <div class="product-price text-medium">$400.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="https://via.placeholder.com/600x765" alt=""/>
                                            <img class="hover-image" src="https://via.placeholder.com/600x765" alt=""/>
                                            <span class="product-badge green">sale</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Cotton Dark Shirt</a>
                                        <div class="product-price text-medium">$370.00</div>
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
    	</div>
        <?php
			include("footer.php");
		?>
    </body>
</html>

<?php


$product_id = @$_GET['pro_id'];
$get_product = "select * from products where product_url='$product_id'";
$run_product = mysqli_query($con,$get_product);
$check_product = mysqli_num_rows($run_product);
if($check_product == 0) {
echo "<script> window.open('index.php','_self') </script>";
} else {
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

if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];




?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Product </span>View
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->





<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="row" id="productMain"><!-- row Starts -->

<div class="col-sm-6"><!-- col-sm-6 Starts -->

<div id="mainImage"><!-- mainImage Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<div class="item active">
<center>
<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">
</center>
</div>

</div><!-- carousel-inner Ends -->

<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div>

</div><!-- mainImage Ends -->

<?php echo $product_label; ?>

</div><!-- col-sm-6 Ends -->


<div class="col-sm-6" ><!-- col-sm-6 Starts -->

<div class="box" ><!-- box Starts -->

<h1 class="text-center" > <?php echo $pro_title; ?> </h1>

<?php


if(isset($_POST['add_cart'])){

$ip_add = getRealUserIp();

$p_id = $pro_id;

$product_qty = $_POST['product_qty'];

$product_size = $_POST['product_size'];


$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

$run_check = mysqli_query($con,$check_product);

if(mysqli_num_rows($run_check)>0){

echo "<script>alert('This Product is already added in cart')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else {

$get_price = "select * from products where product_id='$p_id'";

$run_price = mysqli_query($con,$get_price);

$row_price = mysqli_fetch_array($run_price);

$pro_price = $row_price['product_price'];

$pro_psp_price = $row_price['product_psp_price'];

$pro_label = $row_price['product_label'];

if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = $pro_psp_price;

}
else{

$product_price = $pro_price;

}

$query = "insert into cart (p_id,ip_add,qty,p_price,size) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";

$run_query = mysqli_query($db,$query);

echo "<script>window.open('$pro_url','_self')</script>";

}

}


?>

<form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->

<?php

if($status == "product"){

?>

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-5 control-label" >Product Quantity </label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_qty" class="form-control" >

<option>Select quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>


</select>

</div><!-- col-md-7 Ends -->

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-5 control-label" >Product Size</label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_size" class="form-control" >

<option>Select a Size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>


</select>

</div><!-- col-md-7 Ends -->


</div><!-- form-group Ends -->

<?php }else { ?>


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-5 control-label" >Bundle Quantity </label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_qty" class="form-control" >

<option>Select quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>


</select>

</div><!-- col-md-7 Ends -->

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-5 control-label" >Bundle Size</label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_size" class="form-control" >

<option>Select a Size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>


</select>

</div><!-- col-md-7 Ends -->


</div><!-- form-group Ends -->


<?php } ?>


<?php

if($status == "product"){




if($pro_label == "Sale" or $pro_label == "Gift"){

echo "

<p class='price'>

Product Price : <del> $$pro_price </del><br>

Product sale Price : $$pro_psp_price

</p>

";

}
else{

echo "

<p class='price'>

Product Price : $$pro_price

</p>

";

}

}
else{


if($pro_label == "Sale" or $pro_label == "Gift"){

echo "

<p class='price'>

Bundle Price : <del> $$pro_price </del><br>

Bundle sale Price : $$pro_psp_price

</p>

";

}
else{

echo "

<p class='price'>

Bundle Price : $$pro_price

</p>

";

}


}

?>

<p class="text-center buttons" ><!-- text-center buttons Starts -->

<button class="btn btn-danger" type="submit" name="add_cart">

<i class="fa fa-shopping-cart" ></i> Add to Cart

</button>

<button class="btn btn-warning" type="submit" name="add_wishlist">

<i class="fa fa-heart" ></i> Add to Wishlist

</button>


<?php

if(isset($_POST['add_wishlist'])){

if(!isset($_SESSION['customer_email'])){

echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}
else{

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

$run_wishlist = mysqli_query($con,$select_wishlist);

$check_wishlist = mysqli_num_rows($run_wishlist);

if($check_wishlist == 1){

echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else{

$insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

$run_wishlist = mysqli_query($con,$insert_wishlist);

if($run_wishlist){

echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

echo "<script>window.open('$pro_url','_self')</script>";

}

}

}

}

?>

</p><!-- text-center buttons Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- box Ends -->


<div class="row" id="thumbs" ><!-- row Starts -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->


</div><!-- row Ends -->


</div><!-- col-sm-6 Ends -->


</div><!-- row Ends -->

<div class="box" id="details"><!-- box Starts -->

<a class="btn btn-info tab" style="margin-bottom:10px;" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->

<?php

if($status == "product"){

echo "Product Description";

}
else{

echo "Bundle Description";

}

?>

</a><!-- btn btn-primary tab Ends -->

<a class="btn btn-info tab" style="margin-bottom:10px;" href="#features" data-toggle="tab"><!-- btn btn-primary tab Starts -->

Features

</a><!-- btn btn-primary tab Ends -->

<a class="btn btn-info tab" style="margin-bottom:10px;" href="#video" data-toggle="tab"><!-- btn btn-primary tab Starts -->

Sounds and Videos

</a><!-- btn btn-primary tab Ends -->

<hr style="margin-top:0px;">

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active" style="margin-top:7px;" ><!-- description tab-pane fade in active Starts -->

<?php echo $pro_desc; ?>

</div><!-- description tab-pane fade in active Ends -->

<div id="features" class="tab-pane fade in" style="margin-top:7px;" ><!-- features tab-pane fade in  Starts -->

<?php echo $pro_features; ?>

</div><!-- features tab-pane fade in  Ends -->

<div id="video" class="tab-pane fade in" style="margin-top:7px;" ><!-- video tab-pane fade in Starts -->

<?php echo $pro_video; ?>

</div><!-- video tab-pane fade in  Ends -->


</div><!-- tab-content Ends -->

</div><!-- box Ends -->

<div id="row same-height-row"><!-- row same-height-row Starts -->

<?php

if($status == "product"){



?>

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<div class="box same-height headline"><!-- box same-height headline Starts -->

<h3 class="text-center"> You may also like these Products: We provide you top 3 product items. </h3>

</div><!-- box same-height headline Ends -->

</div><!-- col-md-3 col-sm-6 Ends -->

<?php

$get_products = "select * from products order by rand() LIMIT 0,3";

$run_products = mysqli_query($con,$get_products);

while($row_products = mysqli_fetch_array($run_products)) {

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$manufacturer_id = $row_products['manufacturer_id'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

$run_manufacturer = mysqli_query($db,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$manufacturer_name = $row_manufacturer['manufacturer_title'];

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];


if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = "<del> $$pro_price </del>";

$product_psp_price = "| $$pro_psp_price";

}
else{

$product_psp_price = "";

$product_price = "$$pro_price";

}


if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<center>

<p class='btn btn-warning'> $manufacturer_name </p>

</center>

<hr>

<h3><a href='$pro_url' >$pro_title</a></h3>

<p class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-default' >View Details</a>

<a href='$pro_url' class='btn btn-danger'>

<i class='fa fa-shopping-cart'></i> Add To Cart

</a>


</p>

</div>

$product_label


</div>

</div>

";


}


?>

<?php }else{ ?>

<div class="box same-height"><!-- box same-height Starts -->

<h3 class="text-center"> Bundle Products </h3>

</div><!-- box same-height Ends -->

<?php

$get_bundle_product_relation = "select * from bundle_product_relation where bundle_id='$pro_id'";

$run_bundle_product_relation = mysqli_query($con,$get_bundle_product_relation);

while($row_bundle_product_relation = mysqli_fetch_array($run_bundle_product_relation)){

$bundle_product_relation_product_id = $row_bundle_product_relation['product_id'];

$get_products = "select * from products where product_id='$bundle_product_relation_product_id'";


$run_products = mysqli_query($con,$get_products);

while($row_products = mysqli_fetch_array($run_products)){
$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$manufacturer_id = $row_products['manufacturer_id'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

$run_manufacturer = mysqli_query($db,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$manufacturer_name = $row_manufacturer['manufacturer_title'];

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];


if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = "<del> $$pro_price </del>";

$product_psp_price = "| $$pro_psp_price";

}
else{

$product_psp_price = "";

$product_price = "$$pro_price";

}


if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<center>

<p class='btn btn-primary'> $manufacturer_name </p>

</center>

<hr>

<h3><a href='$pro_url' >$pro_title</a></h3>

<p class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-default' >View details</a>

<a href='$pro_url' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>

$product_label


</div>

</div>

";


}


}



?>


<?php } ?>

</div><!-- row same-height-row Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
