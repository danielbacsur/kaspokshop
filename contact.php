<!doctype html>
<html class="no-js" lang="en">
    <?php
		include("head.php");
	?>
    <body data-mobile-nav-style="classic">
		<?php
			include("header.php");
		?>
        <div class="main-content">
        <!-- start section -->
        <section class="fix-background bg-light-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center z-index-0">
                        <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                            <div class="margin-20px-bottom d-block"><span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase text-small letter-spacing-1px d-inline-block padding-20px-lr padding-5px-tb">A Kaspók nem tudnak beszélni :/ De mi igen!</div>
                            <span class="title-extra-large alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('images/header-fill.png')">Kapcsolat</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="wow animate__fadeIn" style="background-image: url(images/flower-tl-corner.png), url(images/flower-br-corner.png); background-repeat: no-repeat, no-repeat; background-size: auto 20vw, auto 20vw; background-position-x: left, right; background-position-y: top, bottom;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                <span class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Megpróbálunk a lehető lehamarabb válaszolni.</span>
                                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Dobj ránk egy üzenetet!</h4>
                            </div>
                            <div class="col-12">
                                <form action="email-templates/contact-form.php" method="post">
                                    <div class="row row-cols-1 row-cols-md-2">
                                        <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                            <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="A Neved">
                                            <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Email címed">
                                            <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Telefonszámod">
                                        </div>
                                        <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                            <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Üzeneted ✌️"></textarea>
                                        </div>
                                        <div class="col text-start sm-margin-30px-bottom">
                                            <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                            <label for="terms_condition" class="text-small d-inline-block align-top w-85">Elfogadom az Általános szerződési és Adatvédelmi <a href="terms.php" target="_blank" class="text-decoration-underline text-extra-dark-gray">feltételeket</a>.</label>
                                        </div>
                                        <div class="col text-center text-md-end">
                                            <input type="hidden" name="redirect" value="">
                                            <button class="btn btn-medium btn-rounded btn-transparent-dark-gray mb-0 submit" type="submit">Üzenet küldése</button>
                                        </div>
                                    </div>
                                    <div class="form-results d-none"></div>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
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
