<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {
    if(isset($_GET['suspend_order'])){
        $delete_id = $_GET['suspend_order'];
        $delete_order = "UPDATE orders SET order_status = 'pending' WHERE order_id = '$delete_id'";



        $run_delete = mysqli_query($con,$delete_order);
        if($run_delete){
            echo "<script>window.open('index.php?view_orders','_self')</script>";
        }

    }
} ?>