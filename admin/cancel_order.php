<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {
    echo "<script>console.log('alma')</script>";
    if(isset($_GET['cancel_order'])){
        $delete_id = $_GET['cancel_order'];
        $delete_order = "update orders set order_status = 'pending' where order_id = '$delete_id'";



        $run_delete = mysqli_query($con,$delete_order);
        if($run_delete){
            echo "<script>window.open('index.php?view_orders','_self')</script>";
        }
        echo "<script>console.log('$delete_id')</script>";

    }
} ?>