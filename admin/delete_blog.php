<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else {
    if(isset($_GET['delete_blog'])){
        $delete_id = $_GET['delete_blog'];
        $delete_blog = "delete from blog where blog_id='$delete_id'";
        $run_delete = mysqli_query($con,$delete_blog);
        if($run_delete){
            echo "<script>alert('One blog column Has Been Deleted')</script>";
            echo "<script>window.open('index.php?view_blog','_self')</script>";
        }
    }
} ?>