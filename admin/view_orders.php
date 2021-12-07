<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else { ?>
    <div class="row"><!-- 2 row Starts -->
        <div class="col-lg-12"><!-- col-lg-12 Starts -->
            <div class="panel panel-default"><!-- panel panel-default Starts -->
                <div class="panel-heading"><!-- panel-heading Starts -->
                    <h3 class="panel-title"><!-- panel-title Starts -->
                        <i class="fa fa-money fa-fw"></i> Rendelések Megtekintése
                    </h3><!-- panel-title Ends -->
                </div><!-- panel-heading Ends -->
                <div class="panel-body"><!-- panel-body Starts -->
                    <div class="table-responsive"><!-- table-responsive Starts -->
                        <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
                            <thead><!-- thead Starts -->
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Elsődleges Szin</th>
                                    <th>Másodlagos Szin</th>
                                    <th>Dátum</th>
                                    <th>Összeg</th>
                                    <th>Státusz</th>
                                    <th>Jóváhagyás</th>
                                </tr>
                            </thead><!-- thead Ends -->
                            <tbody><!-- tbody Starts -->
                                <?php
                                $i = 1;
                                $get_orders = "SELECT * from orders ORDER BY order_status";
                                $run_orders = mysqli_query($con,$get_orders);
                                while ($row_orders = mysqli_fetch_array($run_orders)) {
                                    $order_id = $row_orders['order_id'];
                                    $c_id = $row_orders['customer_id'];
                                    $invoice_no = $row_orders['invoice_no'];
                                    $product_id = $row_orders['product_id'];
                                    $qty = $row_orders['qty'];
                                    $color_primary = $row_orders['color_primary'];
                                    $color_secondary = $row_orders['color_secondary'];
                                    $order_status = $row_orders['order_status'];
                                    $order_total = $row_orders['total'];
                                    $order_date = $row_orders['date'];
                                    $get_products = "select * from products where product_id='$product_id'";
                                    $run_products = mysqli_query($con,$get_products);
                                    $row_products = mysqli_fetch_array($run_products);
                                    $product_title = $row_products['product_title'];

                                    $select_color1 = "select * from colors where id='$color_primary'";
                                    $run_color1 = mysqli_query($con,$select_color1);
                                    $row_color1 = mysqli_fetch_array($run_color1);
                                    $color_name1 = $row_color1['name'];

                                    $select_color2 = "select * from colors where id='$color_secondary'";
                                    $run_color2 = mysqli_query($con,$select_color2);
                                    $row_color2 = mysqli_fetch_array($run_color2);
                                    $color_name2 = $row_color2['name'];

                                    $get_customer = "select * from customers where customer_id='$c_id'";
                                    $run_customer = mysqli_query($con,$get_customer);
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    $customer_name = $row_customer['customer_name'];
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <a href="index.php?view_customers&c_id=<?php echo $c_id; ?>"><?php echo $customer_name; ?></a>
                                        </td>
                                        <td><?php echo $product_title; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $color_name1; ?></td>
                                        <td><?php echo $color_name2; ?></td>
                                        <td>
                                            <?php echo $order_date; ?>
                                        </td>
                                        <td><?php echo $order_total; ?> FT</td>
                                        <td>
                                            <?php
                                            if($order_status=='pending')
                                                echo $order_status='<div style="color:red;">Függőben</div>';
                                            else
                                                echo $order_status='Megerősítve';
                                            ?>
                                        </td>
                                        <td>
                                            <a href="index.php?confirm_order=<?php echo $order_id; ?>">Megerősítés</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody><!-- tbody Ends -->
                        </table><!-- table table-bordered table-hover table-striped Ends -->
                    </div><!-- table-responsive Ends -->
                </div><!-- panel-body Ends -->
            </div><!-- panel panel-default Ends -->
        </div><!-- col-lg-12 Ends -->
    </div><!-- 2 row Ends -->
<?php } ?>