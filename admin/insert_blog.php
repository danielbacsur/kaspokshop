<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<div class="row" ><!-- 1 row Starts -->
<div class="col-lg-12" ><!-- col-lg-12 Starts --> 
<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard" ></i> Dashboard / Insert blog
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends --> 
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Insert blog
</h3>
</div><!-- panel-heading Ends -->
<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Title : </label>
<div class="col-md-6">
<input type="text" name="blog_title" class="form-control">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Image : </label>
<div class="col-md-6">
<input type="file" name="blog_image" class="form-control">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Description : </label>
<div class="col-md-6">
<textarea name="blog_desc" class="form-control" rows="10" cols="19">
</textarea>
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Button : </label>
<div class="col-md-6">
<input type="text" name="blog_button" class="form-control">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Url : </label>
<div class="col-md-6">
<input type="url" name="blog_url" class="form-control">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> </label>
<div class="col-md-6">
<input type="submit" name="submit" value="Insert blog" class="btn btn-primary form-control">
</div>
</div><!-- form-group Ends -->
</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->
</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php
if(isset($_POST['submit'])){
$blog_title = $_POST['blog_title'];
$blog_desc = $_POST['blog_desc'];
$blog_button = $_POST['blog_button'];
$blog_url = $_POST['blog_url'];
$blog_image = $_FILES['blog_image']['name'];
$tmp_image = $_FILES['blog_image']['tmp_name'];
$sel_blog = "select * from blog";
$run_blog = mysqli_query($con,$sel_blog);
$count = mysqli_num_rows($run_blog);
if($count == 3){
echo "<script>alert('You Have already Inserted 3 blog columns')</script>";
}
else{
move_uploaded_file($tmp_image,"blog_images/$blog_image");
$insert_blog = "insert into blog (blog_title,blog_image,blog_desc,blog_button,blog_url) values ('$blog_title','$blog_image','$blog_desc','$blog_button','$blog_url')";
$run_blog = mysqli_query($con,$insert_blog);
if($run_blog){
echo "<script>window.open('index.php?view_blog','_self')</script>";
}
}
}
?>
<?php } ?>