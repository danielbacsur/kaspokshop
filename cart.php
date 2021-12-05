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
                            <span class="title-extra-large alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('images/header-fill.png')">Kosár</span>
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
                            <li class="nav-item"><a data-bs-toggle="tab" href="#login" class="nav-link active">Kosár</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="login" class="tab-pane fade in active show">
                        <form action="" method="post" enctype="multipart-form-data">
                            <div class="row">
                                <div class="col-lg-8 padding-70px-right lg-padding-30px-right md-padding-15px-right">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <table class="table cart-products margin-60px-bottom md-margin-40px-bottom sm-no-margin-bottom">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="alt-font"></th>
                                                        <th scope="col" class="alt-font"></th>
                                                        <th scope="col" class="alt-font">Tétel</th>
                                                        <th scope="col" class="alt-font">Ár</th>
                                                        <th scope="col" class="alt-font">Mennyiség</th>
                                                        <th scope="col" class="alt-font">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $ip_add = getRealUserIp();
                                                    $select_cart = "select * from cart where ip_add='$ip_add'";
                                                    $run_cart = mysqli_query($con,$select_cart);
                                                    $total = 0;
                                                    while($row_cart = mysqli_fetch_array($run_cart)){
                                                        $cart_id = $row_cart['id'];
                                                        $pro_id = $row_cart['p_id'];
                                                        $pro_color = $row_cart['color'];
                                                        $pro_size = $row_cart['size'];
                                                        $pro_qty = $row_cart['qty'];
                                                        $only_price = $row_cart['p_price'];
                                                        $select_color1 = "select * from colors where id='$pro_color'";
                                                            $run_color1 = mysqli_query($con,$select_color1);
                                                            $row_color1 = mysqli_fetch_array($run_color1);
                                                            $color_name1 = $row_color1['name'];

                                                            $select_color2 = "select * from colors where id='$pro_size'";
                                                            $run_color2 = mysqli_query($con,$select_color2);
                                                            $row_color2 = mysqli_fetch_array($run_color2);
                                                            $color_name2 = $row_color2['name'];


                                                        $get_products = "select * from products where product_id='$pro_id'";
                                                        $run_products = mysqli_query($con,$get_products);


                                                        while($row_products = mysqli_fetch_array($run_products)){
                                                            


                                                            $product_title = $row_products['product_title'];
                                                            $product_img1 = $row_products['product_img1'];
                                                            $product_url = $row_products['product_url'];
                                                            $sub_total = $only_price*$pro_qty;
                                                            $_SESSION['pro_qty'] = $pro_qty;
                                                            $total += $sub_total;
                                                            ?>
                                                    <tr> 
                                                        <td class="product-remove">
                                                            <button name="remove" type="submit" value="<?php echo $cart_id; ?>" class="btn-default text-large">&times;</button>
                                                            <input
                                                        </td>
                                                        <td class="product-thumbnail"><a href="<?php echo $product_url; ?>"><img class="cart-product-image" src="admin/product_images/<?php echo $product_img1; ?>" alt=""></a></td>
                                                        <td class="product-name">
                                                            <a href="<?php echo $product_url; ?>"><?php echo $product_title; ?></a>
                                                            <span class="variation"> Szín: <b><?php echo $color_name1; ?> & <?php echo $color_name2; ?></b></span>
                                                        </td>
                                                        <td class="product-price" data-title="Price"><?php echo $only_price; ?> FT</td>
                                                        <td class="product-quantity" data-title="Quantity">
                                                            <div class="quantity">
                                                                <label class="screen-reader-text">Mennyiség</label>
                                                                <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="quantity">
                                                                <input class="input-text qty-text" type="number" name="quantity" value="<?php echo $pro_qty; ?>">
                                                                <input type="button" value="+" class="qty-plus qty-btn" data-quantity="plus" data-field="quantity">
                                                            </div>
                                                        </td> 
                                                        <td class="product-subtotal" data-title="Total"><?php echo $sub_total; ?> FT</td> 
                                                    </tr>
                                                    <?php }} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 md-margin-50px-bottom sm-margin-20px-bottom"> 
                                            <div class="coupon-code-panel">
                                                <input type="text" placeholder="Kupon Kód">
                                                <a href="#" class="btn apply-coupon-btn text-uppercase">Jóváhagyás</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center text-md-end md-margin-50px-bottom btn-dual">
                                            <a type="submit" name="update" class="btn btn-fancy btn-small btn-transparent-light-gray me-0">Kosár frissítése</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light-gray padding-50px-all lg-padding-30px-tb lg-padding-20px-lr md-padding-20px-tb">
                                        <span class="alt-font text-large text-extra-dark-gray margin-15px-bottom d-inline-block font-weight-500">Cart totals</span>
                                            <table class="w-100 total-price-table">
                                                <tbody>
                                                    <tr class="shipping">
                                                        <th class="font-weight-500 text-extra-dark-gray">Átvétel</th>
                                                        <td data-title="Shipping">
                                                            <ul class="float-lg-start float-end text-start line-height-36px">
                                                                <li class="d-flex align-items-center md-margin-15px-bottom">
                                                                    <input id="in_person" type="radio" name="shipping-option" class="d-block w-auto margin-10px-right mb-0" checked="checked">
                                                                    <label class="md-line-height-18px" for="in_person">Személyesen</label>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr class="payment">
                                                        <th class="font-weight-500 text-extra-dark-gray">Fizetés</th>
                                                        <td data-title="Pazment">
                                                            <ul class="float-lg-start float-end text-start line-height-36px">
                                                                <li class="d-flex align-items-center md-margin-15px-bottom">
                                                                    <input id="in_person" type="radio" name="payment-option" class="d-block w-auto margin-10px-right mb-0" checked="checked">
                                                                    <label class="md-line-height-18px" for="in_person">Személyesen</label>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr hidden class="calculate-shipping">
                                                        <th colspan="2" class="font-weight-500">
                                                            <a class="d-block calculate-shipping-title accordion-toggle" data-bs-toggle="collapse" href="#shipping-accordion" aria-expanded="false">
                                                                <p class="w-100 mb-0 text-start">Calculate shipping</p>
                                                            </a>
                                                            <div id="shipping-accordion" class="address-block collapse">
                                                                <div class="margin-15px-top">
                                                                    <select>
                                                                        <option>Select a Country...</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                    </select>
                                                                    <select>
                                                                        <option>State</option>
                                                                    </select>
                                                                    <input type="text" name="city" placeholder="Town/City">
                                                                    <input type="text" name="zip" placeholder="ZIP">
                                                                    <a href="#" class="btn btn-dark-gray btn-small d-block">Update</a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr hiddenclass="total-amount">
                                                        <th class="font-weight-500 text-extra-dark-gray">Összeg</th>
                                                        <td data-title="Total">
                                                            <h6 class="d-block font-weight-500 mb-0 text-extra-dark-gray"><?php echo $total; ?></h6>
                                                            <span class="text-small text-extra-medium-gray">(Az ÁFÁt tartalmazza)</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        <?php if(isset($_SESSION['customer_email'])) { 
                                            $session_email = $_SESSION['customer_email'];
                                            $select_customer = "select * from customers where customer_email='$session_email'";
                                            $run_customer = mysqli_query($con,$select_customer);
                                            $row_customer = mysqli_fetch_array($run_customer);
                                            $customer_id = $row_customer['customer_id'];
                                            ?>
                                        <div><a href="order.php?c_id=<?php echo $customer_id; ?>" class="btn btn-dark-gray btn-large d-block btn-fancy margin-15px-top">Megrendelés</a></div>
                                        <?php } else { ?>
                                            <div><a href="account.php" class="btn btn-dark-gray btn-large d-block btn-fancy margin-15px-top">Jelenkezz Be!</a></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end tab item -->
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
<?php
if(isset($_POST['remove'])){
    $remove_id = $_POST['remove'];

    $delete_product = "delete from cart where id='$remove_id'";
    
    $run_delete = mysqli_query($con,$delete_product);
    
    if($run_delete){
    echo "<script>window.open('cart.php','_self')</script>";
    }
}
?>