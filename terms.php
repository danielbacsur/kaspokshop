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
		?>
        <div class="main-content">
        <!-- start section -->
        <section class="fix-background bg-light-gray gb-light-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center z-index-0">
                        <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                            <div class="margin-20px-bottom d-block"><span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase text-small letter-spacing-1px d-inline-block padding-20px-lr padding-5px-tb">Üdv a shopban! Valamit vegyél, ne csak legyél!</span></div>
                            <span class="title-extra-large alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('images/header-fill.png')">Szabályok</span>
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
                            <?php
								$counter = 0;
								$count_terms = "select * from terms";
								$run_count = mysqli_query($con,$count_terms);
								$count = mysqli_num_rows($run_count);
								$get_terms = "select * from terms";
								$run_terms = mysqli_query($con,$get_terms);
								while($row_terms = mysqli_fetch_array($run_terms)){
									$term_title = $row_terms['term_title'];
									$term_link = $row_terms['term_link'];
									?>
						
									<li class="nav-item"><a data-bs-toggle="tab" href="#<?php echo $term_link; ?>" class="nav-link <?php if($counter == 0) echo 'active'; ?>"><?php echo $term_title; ?></a></li>
									<?php 
									$counter += 1;
								} ?>
							<?php?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
					<?php
						$counter = 0;
						$count_terms = "select * from terms";
						$run_count = mysqli_query($con,$count_terms);
						$count = mysqli_num_rows($run_count);
						$get_terms = "select * from terms";
						$run_terms = mysqli_query($con,$get_terms);
						while($row_terms = mysqli_fetch_array($run_terms)){
							$term_link = $row_terms['term_link'];
							$term_desc = $row_terms['term_desc'];
							?>
						
                    <!-- start tab item -->
                    <div id="<?php echo $term_link; ?>" class="tab-pane fade <?php if($counter == 0) echo 'in active show'; ?>">
                        <div class="row align-items-center">
                            <p><?php echo $term_desc; ?></p>
                        </div>
                    </div>
                    <!-- end tab item -->
					<?php $counter++; } ?>
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

