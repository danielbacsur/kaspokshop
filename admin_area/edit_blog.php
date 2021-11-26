<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<?php
if(isset($_GET['edit_blog'])){
$edit_id = $_GET['edit_blog'];
$get_blog = "select * from blog where blog_id='$edit_id'";
$run_blog = mysqli_query($con,$get_blog);
$row_blog = mysqli_fetch_array($run_blog);
$blog_id = $row_blog['blog_id'];
$blog_title = $row_blog['blog_title'];
$blog_image = $row_blog['blog_blog'];
$blog_desc = $row_blog['blog_desc'];
$blog_button = $row_blog['blog_button'];
$blog_url = $row_blog['blog_url'];
$new_s_image = $row_blog['blog_image'];
}
?>  
<div class="row" ><!-- 1 row Starts -->
<div class="col-lg-12" ><!-- col-lg-12 Starts --> 
<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard" ></i> Dashboard / Edit blog
</li>
</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends --> 
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Edit blog
</h3>
</div><!-- panel-heading Ends -->
<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Title : </label>
<div class="col-md-6">
<input type="text" name="blog_title" class="form-control" value="<?php echo $blog_title; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Image : </label>
<div class="col-md-6">
<input type="file" name="blog_image" class="form-control">
<br>
<img src="blog_images/<?php echo $blog_image; ?>" width="70" height="70" >
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Description : </label>
<div class="col-md-6">
<textarea name="blog_desc" class="form-control" rows="10" cols="19">
<?php echo $blog_desc; ?>
</textarea>
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Button : </label>
<div class="col-md-6">
<input type="text" name="blog_button" class="form-control" value="<?php echo $blog_button; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> blog Url : </label>
<div class="col-md-6">
<input type="url" name="blog_url" class="form-control" value="<?php echo $blog_url; ?>">
</div>
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> </label>
<div class="col-md-6">
<input type="submit" name="update" value="Update blog" class="btn btn-primary form-control">
</div>
</div><!-- form-group Ends -->
</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->
</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php
if(isset($_POST['update'])){
$blog_title = $_POST['blog_title'];
$blog_desc = $_POST['blog_desc'];
$blog_button = $_POST['blog_button'];
$blog_url = $_POST['blog_url'];
$blog_image = $_FILES['blog_image']['name'];
$tmp_image = $_FILES['blog_image']['tmp_name'];
if(empty($blog_image)){
$blog_image = $new_s_image;
}
move_uploaded_file($tmp_image,"blog_images/$blog_image");
$update_blog = "update blog set blog_title='$blog_title',blog_image='$blog_image',blog_desc='$blog_desc',blog_button='$blog_button',blog_url='$blog_url' where blog_id='$blog_id'";
$run_blog = mysqli_query($con,$update_blog);
if($run_blog){
echo "<script>alert('One blog Column Has Been Updated')</script>";
echo "<script>window.open('index.php?view_blog','_self')</script>";
}
}
?>
<?php } ?>