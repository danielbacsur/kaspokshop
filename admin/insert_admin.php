<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<div class="row" ><!-- 1  row Starts -->
<div class="col-lg-12" ><!-- col-lg-12 Starts -->
<ol class="breadcrumb" ><!-- breadcrumb Starts -->
<li class="active" >
<i class="fa fa-dashboard" ></i> Panel / Admin hozzáadása
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 1  row Ends -->
<div class="row" ><!-- 2 row Starts -->
<div class="col-lg-12" ><!-- col-lg-12 Starts -->
<div class="panel panel-default" ><!-- panel panel-default Starts -->
<div class="panel-heading" ><!-- panel-heading Starts -->
<h3 class="panel-title" >
<i class="fa fa-money fa-fw" ></i> Admin hozzáadása
</h3>
</div><!-- panel-heading Ends -->
<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Név: </label>
<div class="col-md-6"><!-- col-md-6 Starts -->
<input type="text" name="admin_name" class="form-control" required>
</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Email: </label>
<div class="col-md-6"><!-- col-md-6 Starts -->
<input type="text" name="admin_email" class="form-control" required>
</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Jelszó: </label>
<div class="col-md-6"><!-- col-md-6 Starts -->
<input type="password" name="admin_pass" class="form-control" required>
</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Kontakt: </label>
<div class="col-md-6"><!-- col-md-6 Starts -->
<input type="text" name="admin_contact" class="form-control">
</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"></label>
<div class="col-md-6"><!-- col-md-6 Starts -->
<input type="submit" name="submit" value="Hozzáadás" class="btn btn-primary form-control">
</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->
</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php
if(isset($_POST['submit'])){
$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_pass = $_POST['admin_pass'];
$admin_pass_hash = hash("sha256", $admin_pass);
$admin_contact = $_POST['admin_contact'];
$insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_contact) values ('$admin_name','$admin_email','$admin_pass_hash','$admin_contact')";
$run_admin = mysqli_query($con,$insert_admin);
if($run_admin){
echo "<script>alert('Az admin hozzáadása sikeres!')</script>";
echo "<script>window.open('index.php?view_users','_self')</script>";
}
}
?>
<?php }  ?>