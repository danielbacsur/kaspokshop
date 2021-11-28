<!doctype html>
<html class="no-js" lang="en">
    <?php
		include("includes/db.php");
		include("head.php");
	?>
    <body data-mobile-nav-style="classic">
		<?php
			include("header.php");
		?>
        <div class="main-content">
			<!-- start section -->
			<section class="parallax p-0 bottom-0px" data-parallax-background-ratio="0.3" style="background-image:url('images/home-bg-wide.png');">
				<div class="position-absolute cover-background top-0px left-0px w-100 h-100" style="background-image:url('images/home-leaves.png');"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-5 col-md-6 col-sm-7 full-screen md-h-650px sm-h-500px d-flex flex-column justify-content-center padding-8-rem-tb">
							<h1 class="alt-font font-weight-600 title-large text-black letter-spacing-minus-4px margin-4-half-rem-bottom sm-letter-spacing-minus-1-half xs-w-65"><img src="images/kaspok.png" alt="" style="width: auto; height: 32%;">.<br>diákcég a Poliból</h1>
							<a href="shop.php" class="btn btn-extra-large btn-link btn-transparent-dark-gray btn-box-shadow text-extra-dark-gray btn-rounded align-self-start font-weight-600">Vásárolj most!<span class="bg-white"></span></a>
						</div>
					</div>
				</div>
				<div class="scroll-down-bottom">
					<a href="#about" class="section-link d-block w-2px h-35px bg-white mx-auto right-0px left-0px position-absolute">
						<span class="scroll-down-text alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1-half margin-5px-bottom">lapozz le</span>
					</a>
				</div>
			</section>
			<!-- end section -->
			<!-- start section -->
			<section id="about" class="big-section" style="background-image: url(images/flower-br-corner.png); background-repeat: no-repeat; background-size: auto 20vw; background-position-x: right; background-position-y: bottom;">
				<div class="container">
					<div class="row align-items-end justify-content-center">
						<div class="col-12 col-lg-5 col-md-10 text-lg-end md-margin-25px-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s">
							<h4 class="alt-font font-weight-600 text-extra-dark-gray d-block mb-0 padding-2-half-rem-right letter-spacing-minus-1px lg-no-padding-right">Ez a projekt az iskolánk nélkül nem jöhetett volna létre</h4>
						</div>
						<div class="col-12 col-lg-4 col-md-9 padding-30px-left md-padding-15px-left text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.6s">
							<p class="w-80 margin-15px-bottom lg-w-100">Köszönjük a Polinak a hozzáállást és hogy lehetőséget biztosít cégalapításra a diákok számára.</p>
							<a href="https://poli.hu/" class="btn btn-link btn-extra-large text-extra-dark-gray font-weight-600">Iskolánk honlapja</a>
						</div>
					</div>
				</div>
			</section>
			<!-- end section -->
			<!-- start section -->
			<section class="bg-light-gray" style="background-image: url(images/flower-tl-corner.png); background-repeat: no-repeat; background-size: auto 20vw; background-position-x: left; background-position-y: top;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-6 text-center text-sm-start wow animate__fadeIn">
							<h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Érdekességek & Információk</h4>
						</div>
						<div hidden class="col-12 col-sm-6 text-center text-sm-end wow animate__fadeIn">
							<a href="" class="btn btn-link btn-extra-large text-extra-dark-gray">Összes blogunk</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12 blog-content px-sm-0 margin-7-rem-top md-margin-4-rem-top">
							<ul class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
								<li class="grid-sizer"></li>
								<?php
                                $get_products = "select * from blog";
                                $run_products = mysqli_query($con,$get_products);
                                while($row_products = mysqli_fetch_array($run_products)) {
                                    $blog_id = $row_products['blog_id'];
                                    $blog_title = $row_products['blog_title'];
                                    $blog_image = $row_products['blog_image'];
                                    $blog_desc = $row_products['blog_desc'];
                                    $blog_date = $row_products['date'];
                                    $blog_category = $row_products['category'];
                                    ?>
									<!-- start blog item -->
									<li class="grid-item wow animate__fadeIn">
										<div class="blog-post border-radius-5px bg-white">
											<div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
												<a href="" class="text-small me-auto text-slate-blue text-extra-dark-gray-hover"><?php echo $blog_date; ?></a>
												<a hidden href="" class="blog-like text-extra-small text-extra-dark-gray-hover"><i class="far fa-heart"></i><span>0</span></a>
												<a hidden href="" class="blog-comment text-extra-small text-extra-dark-gray-hover"><i class="far fa-comment"></i><span>0</span></a>
											</div>
											<div class="blog-post-image">
												<a href="" title=""><img src="admin/blog_images/<?php echo $blog_image; ?>" alt=""></a>
												<div class="alt-font blog-category"><a href="" class="text-uppercase text-extra-dark-gray-hover"><?php echo $blog_category; ?></a></div>
											</div>
											<div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
												<a href="" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-extra-dark-gray-hover d-block margin-15px-bottom"><?php echo $blog_title; ?></a>
												<p><?php echo $blog_desc; ?></p>
											</div>
										</div>
									</li>
									<!-- end blog item -->
								<? } ?>

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
