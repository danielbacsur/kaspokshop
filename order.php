<?php


include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['c_id'])){

$customer_id = $_GET['c_id'];

}

$ip_add = getRealUserIp();

$status = "pending";

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_color_primary = $row_cart['color_primary'];
$pro_color_secondary = $row_cart['color_secondary'];


$pro_qty = $row_cart['qty'];


$sub_total = $row_cart['p_price']*$pro_qty;

$insert_pending_order = "insert into orders (customer_id,product_id,qty,color_primary, color_secondary,order_status) values ('$customer_id','$pro_id','$pro_qty','$pro_color_primary', '$pro_color_secondary','$status')";

$run_pending_order = mysqli_query($con,$insert_pending_order);

$delete_cart = "delete from cart where ip_add='$ip_add'";

$run_delete = mysqli_query($con,$delete_cart);








/*

// Email Receiver Name for SMTP Email
$receiver_name 	= 'Sikeres Vásárlónk!';
// Email Subject
$subject 	= 'Rendeltél';

$email 	= $_SESSION['customer_email'];
$get_customer = "select * from customers where customer_email='$email'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$name = $row_customer['customer_name'];

    $message = '
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td colspan="2" align="center" valign="top"><img style=" margin-top: 15px; " src="http://www.yourdomain.com/images/logo-email.png" ></td>
    </tr>
    <tr>
    <td width="50%" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    </tr>';
    if( ! empty( $name ) ) {
        $message .= '<tr>
        <td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Name:</td>
        <td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $name . '</td>
        </tr>';
    }
    $message .= '<tr>
    <td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;">Email:</td>
    <td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $email . '</td>
    </tr>
    </table>
    </body>
    </html>
    ';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From: <' . $email . '>' . "\r\n";
    mail( $email, $subject, $message, $headers );








    */
echo "<script>alert('Rendelésed sikeresen rögzítettük! Köszönjük!')</script>";

echo "<script>window.open('account.php','_self')</script>";
}
	
?>