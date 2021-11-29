<!doctype html>
<html class="no-js" lang="en">
    <?php
        include("includes/db.php");
        include("functions/functions.php");
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
                            <div class="margin-20px-bottom d-block"><span class="alt-font font-weight-500 text-extra-dark-gray text-uppercase text-small letter-spacing-1px d-inline-block padding-20px-lr padding-5px-tb">Itt megtalálhatsz mindent ami a fiókoddal kapcsolatos.</div>
                            <span class="title-extra-large alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('images/header-fill.png')">Fiókod</span>
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
                            <?php if(!isset($_SESSION['customer_email'])) { ?>
                                <li class="nav-item"><a data-bs-toggle="tab" href="#login" class="nav-link active">Bejelentkezés</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#register">Regisztrálás</a></li>
                            <?php } else { ?>
                                <li class="nav-item"><a data-bs-toggle="tab" href="#orders" class="nav-link active">Megrendelések</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" href="#settings" class="nav-link">Beállítások</a></li>
                                <li class="nav-item"><a href="logout.php" class="nav-link">Kijelentkezés</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <?php if(!isset($_SESSION['customer_email'])) { ?>
                    <!-- start tab item -->
                    <div id="login" class="tab-pane fade in active show">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                        <span class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Visszatérő vásárlónk vagy?</span>
                                        <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Jelentkezz be!</h4>
                                    </div>
                                    <div class="col-12">
                                        <form action="" method="post">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                                    <input class="medium-input bg-white margin-25px-bottom required" type="text" name="c_email">
                                                </div>
                                                <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                                    <input class="medium-input bg-white margin-25px-bottom required" type="password" name="c_pass">
                                                </div>
                                                <div class="col text-start sm-margin-30px-bottom">
                                                    <span for="terms_condition" class="text-small d-inline-block align-top w-85">Elfelejtetted a jelszavad?<a href="" target="_blank" class="text-decoration-underline text-extra-dark-gray">Jelszó helyreállítása</a>.</span>
                                                </div>
                                                <div class="col text-center text-md-end">
                                                    <button class="btn btn-medium btn-rounded btn-transparent-dark-gray mb-0 submit" type="submit" name="login" value="Login">Üzenet küldése</button>
                                                </div>
                                            </div>
                                        </form>
                                        <form action="" method="post" ><!--form Starts -->
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col margin-4-rem-bottom sm-margin-25px-bottom" ><!-- form-group Starts -->
                                                    <input type="text" class="medium-input bg-white margin-25px-bottom required" name="c_email" required >
                                                </div><!-- form-group Ends -->
                                                <div class="col margin-4-rem-bottom sm-margin-10px-bottom" ><!-- form-group Starts -->
                                                    <input type="password" class="medium-input bg-white margin-25px-bottom required" name="c_pass" required >
                                                </div><!-- form-group Ends -->
                                                <div class="col">

                                                </div>
                                                <div class="col text-center text-md-end" ><!-- text-center Starts -->
                                                    <button name="login" value="Login" class="btn btn-medium btn-rounded btn-transparent-dark-gray mb-0 submit" > LOG</button>
                                                </div><!-- text-center Ends -->
                                            </div>
                                        </form><!--form Ends -->
                                        <!-- end contact form -->
                                        <?php
                                            if(isset($_POST['login'])){
                                                $customer_email = $_POST['c_email'];
                                                $customer_pass = $_POST['c_pass'];
                                                $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
                                                $run_customer = mysqli_query($con,$select_customer);
                                                $get_ip = getRealUserIp();
                                                $check_customer = mysqli_num_rows($run_customer);
                                                $select_cart = "select * from cart where ip_add='$get_ip'";
                                                $run_cart = mysqli_query($con,$select_cart);
                                                $check_cart = mysqli_num_rows($run_cart);
                                                if($check_customer==0){
                                                    echo "<script>alert('Helytelen email cím vagy jelszó!')</script>";
                                                    exit();
                                                }
                                                if($check_customer==1 AND $check_cart==0){
                                                    $_SESSION['customer_email']=$customer_email;
                                                    echo "<script>alert('Sikeresen bejelentkeztél!')</script>";
                                                    echo "<script>window.open('account.php','_self')</script>";
                                                }
                                                else {
                                                    $_SESSION['customer_email']=$customer_email;
                                                    echo "<script>alert('Sikeresen bejelentkeztél!')</script>";
                                                    echo "<script>window.open('cart.php','_self')</script>";
                                                } 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="register" class="tab-pane fade">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                        <span class="alt-font font-weight-500 text-dark-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Még nincs fiókod??? Az hogy?</span>
                                        <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0 letter-spacing-minus-1px">Regisztráld fiókodat!</h4>
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
                                                    <label for="terms_condition" class="text-small d-inline-block align-top w-85">Elfogadom az Általános szerződési és Adatvédelmi <a href="#" target="_blank" class="text-decoration-underline text-extra-dark-gray">feltételeket</a>.</label>
                                                </div>
                                                <div class="col text-center text-md-end">
                                                    <input type="hidden" name="redirect" value="">
                                                    <button class="btn btn-medium btn-rounded btn-transparent-dark-gray mb-0 submit" type="submit">Üzenet küldése</button>
                                                </div>
                                            </div>
                                            <div class="form-results d-none"></div>
                                        </form>
                                        
                                        <form action="" method="post" enctype="multipart/form-data" ><!-- form Starts -->
                                        <div class="form-group" ><!-- form-group Starts -->
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control" name="c_name" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer Email</label>
                                        <input type="text" class="form-control" name="c_email" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer Password </label>
                                        <div class="input-group"><!-- input-group Starts -->
                                        <span class="input-group-addon"><!-- input-group-addon Starts -->
                                        <i class="fa fa-check tick1"> </i>
                                        <i class="fa fa-times cross1"> </i>
                                        </span><!-- input-group-addon Ends -->
                                        <input type="password" class="form-control" id="pass" name="c_pass" required>
                                        <span class="input-group-addon"><!-- input-group-addon Starts -->
                                        <div id="meter_wrapper"><!-- meter_wrapper Starts -->
                                        <span id="pass_type"> </span>
                                        <div id="meter"> </div>
                                        </div><!-- meter_wrapper Ends -->
                                        </span><!-- input-group-addon Ends -->
                                        </div><!-- input-group Ends -->
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Confirm Password </label>
                                        <div class="input-group"><!-- input-group Starts -->
                                        <span class="input-group-addon"><!-- input-group-addon Starts -->
                                        <i class="fa fa-check tick2"> </i>
                                        <i class="fa fa-times cross2"> </i>
                                        </span><!-- input-group-addon Ends -->
                                        <input type="password" class="form-control confirm" id="con_pass" required>
                                        </div><!-- input-group Ends -->
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer Country </label>
                                        <input type="text" class="form-control" name="c_country" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer City </label>
                                        <input type="text" class="form-control" name="c_city" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer Contact </label>
                                        <input type="text" class="form-control" name="c_contact" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer Address </label>
                                        <input type="text" class="form-control" name="c_address" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <label> Customer Image </label>
                                        <input type="file" class="form-control" name="c_image" required>
                                        </div><!-- form-group Ends -->
                                        <div class="form-group"><!-- form-group Starts -->
                                        <center>
                                        <!-- <label> Captcha Verification </label> -->
                                        <!-- <div class="g-recaptcha" data-sitekey="6LcHnoQaAAAAAF_WTAEPkd_XO_9XC80G6N1MjrH2"></div> -->
                                        </center>
                                        </div><!-- form-group Ends -->
                                        <div class="text-center"><!-- text-center Starts -->
                                        <button type="submit" name="register" class="btn btn-primary">
                                        <i class="fa fa-user-md"></i> Register
                                        </button>
                                        </div><!-- text-center Ends -->
                                        </form><!-- form Ends -->

                                        <?php
                                        if(isset($_POST['register'])){
                                                $c_name = $_POST['c_name'];
                                                $c_email = $_POST['c_email'];
                                                $c_pass = $_POST['c_pass'];
                                                $c_country = $_POST['c_country'];
                                                $c_city = $_POST['c_city'];
                                                $c_contact = $_POST['c_contact'];
                                                $c_address = $_POST['c_address'];
                                                $c_image = $_FILES['c_image']['name'];
                                                $c_image_tmp = $_FILES['c_image']['tmp_name'];
                                                $c_ip = getRealUserIp();
                                                move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
                                                $get_email = "select * from customers where customer_email='$c_email'";
                                                $run_email = mysqli_query($con,$get_email);
                                                $check_email = mysqli_num_rows($run_email);
                                                if($check_email == 1){
                                                    echo "<script>alert('Ez az email cím már regisztrálva lett. Próbálj meg eg másikat')</script>";
                                                    exit();
                                                }
                                                $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
                                                $run_customer = mysqli_query($con,$insert_customer);
                                                $sel_cart = "select * from cart where ip_add='$c_ip'";
                                                $run_cart = mysqli_query($con,$sel_cart);
                                                $check_cart = mysqli_num_rows($run_cart);
                                                if($check_cart>0){
                                                    $_SESSION['customer_email']=$c_email;
                                                    echo "<script>alert('Fiókodat sikeresen regisztráltuk!')</script>";
                                                    echo "<script>window.open('checkout.php','_self')</script>";
                                                } else {
                                                    $_SESSION['customer_email']=$c_email;
                                                    echo "<script>alert('Fiókodat sikeresen regisztráltuk!')</script>";
                                                    echo "<script>window.open('index.php','_self')</script>";
                                                }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? } else { ?>
                    <div id="orders" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <div class="col-12 col-xl-5 col-lg-6 md-margin-50px-bottom">
                                <p>Ez a menüpont jelenleg nem elérhető. Kérjük próbáld meg később.</p>
                            </div>
                        </div>
                    </div>
                    <div id="settings" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12 col-xl-5 col-lg-6 md-margin-50px-bottom">
                                <p>Ez a menüpont jelenleg nem elérhető. Kérjük próbáld meg később.</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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

<script>
$(document).ready(function(){
$('.tick1').hide();
$('.cross1').hide();
$('.tick2').hide();
$('.cross2').hide();
$('.confirm').focusout(function(){
var password = $('#pass').val();
var confirmPassword = $('#con_pass').val();
if(password == confirmPassword){
$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();
}
else{
$('.tick1').hide();
$('.cross1').show();
$('.tick2').hide();
$('.cross2').show();
}
});
});
</script>
<script>
$(document).ready(function(){
$("#pass").keyup(function(){
check_pass();
});
});

function check_pass() {
 var val=document.getElementById("pass").value;
 var meter=document.getElementById("meter");
 var no=0;
 if(val!="")
 {
// If the password length is less than or equal to 6
if(val.length<=6)no=1;

 // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
  if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

  // If the password length is greater than 6 and contain alphabet,number,special character respectively
  if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

  // If the password length is greater than 6 and must contain alphabets,numbers and special characters
  if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

  if(no==1)
  {
   $("#meter").animate({width:'50px'},300);
   meter.style.backgroundColor="red";
   document.getElementById("pass_type").innerHTML="Very Weak";
  }

  if(no==2)
  {
   $("#meter").animate({width:'100px'},300);
   meter.style.backgroundColor="#F5BCA9";
   document.getElementById("pass_type").innerHTML="Weak";
  }

  if(no==3)
  {
   $("#meter").animate({width:'150px'},300);
   meter.style.backgroundColor="#FF8000";
   document.getElementById("pass_type").innerHTML="Good";
  }

  if(no==4)
  {
   $("#meter").animate({width:'200px'},300);
   meter.style.backgroundColor="#00FF40";
   document.getElementById("pass_type").innerHTML="Strong";
  }
 }

 else
 {
  meter.style.backgroundColor="";
  document.getElementById("pass_type").innerHTML="";
 }
}

</script>
