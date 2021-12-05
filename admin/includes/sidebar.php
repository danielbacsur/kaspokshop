<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else { ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->
        <div class="navbar-header" ><!-- navbar-header Starts -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->
                <span class="sr-only" >Toggle Navigation</span>
                <span class="icon-bar" ></span>
                <span class="icon-bar" ></span>
                <span class="icon-bar" ></span>
            </button><!-- navbar-ex1-collapse Ends -->
            <a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>
        </div><!-- navbar-header Ends -->
        <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->
            <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->
                <li><!-- li Starts -->
                    <a href="index.php?dashboard">
                        <i class="fa fa-fw fa-dashboard"></i> Főoldal
                    </a>
                </li><!-- li Ends -->
                <li><!-- Products li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#products">
                        <i class="fa fa-fw fa-table"></i> Termékek
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="products" class="collapse">
                        <li>
                            <a href="index.php?insert_product"> Termék Hozzáadása </a>
                        </li>
                        <li>
                            <a href="index.php?view_products"> Termákek Megtekintése</a>
                        </li>
                    </ul>
                </li><!-- Products li Ends -->
                <li><!-- Bundles Li Starts --->
                    <a href="#" data-toggle="collapse" data-target="#bundles">
                        <i class="fa fa-fw fa-edit"></i> Csomagok
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="bundles" class="collapse">
                        <li>
                            <a href="index.php?insert_bundle"> Csomag Hozzáadása </a>
                        </li>
                        <li>
                            <a href="index.php?view_bundles"> Csomagok Megtekintése </a>
                        </li>
                    </ul>
                </li><!-- Bundles Li Ends --->
                <li><!-- relations li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#relations"><!-- anchor Starts -->
                        <i class="fa fa-fw fa-retweet"></i> Csomag Relációk
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a><!-- anchor Ends -->
                    <ul id="relations" class="collapse"><!-- collapse Starts -->
                        <li>
                            <a href="index.php?insert_rel"> Reláció Hozzáadása</a>
                        </li>
                        <li>
                            <a href="index.php?view_rel"> Relációk Megtekintése</a>
                        </li>
                    </ul><!-- collapse Ends -->
                </li><!-- relations li Ends -->
                <li><!-- li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#cat">
                        <i class="fa fa-fw fa-arrows-v"></i> Kategóriák
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="cat" class="collapse">
                        <li>
                            <a href="index.php?insert_cat"> Kategória Hozzáadása </a>
                        </li>
                        <li>
                            <a href="index.php?view_cats"> Kategóriák Megtekintése </a>
                        </li>
                    </ul>
                </li><!-- li Ends -->
                <li><!-- blog section li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#blog">
                        <i class="fa fa-fw fa-briefcase"></i> Blogok
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="blog" class="collapse">
                        <li>
                            <a href="index.php?insert_blog"> Blog Hozzáadása </a>
                        </li>
                        <li>
                            <a href="index.php?view_blogs"> Blogok Megtekintése </a>
                        </li>
                    </ul>
                </li><!-- blog section li Ends -->
                <li><!-- Coupons Section li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->
                        <i class="fa fa-fw fa-arrows-v"></i> Kuponok
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a><!-- anchor Ends -->
                    <ul id="coupons" class="collapse"><!-- ul collapse Starts -->
                        <li>
                            <a href="index.php?insert_coupon"> Kupon Hozzáadása </a>
                        </li>
                        <li>
                            <a href="index.php?view_coupons"> Kuponok Megtekintése </a>
                        </li>
                    </ul><!-- ul collapse Ends -->
                </li><!-- Coupons Section li Ends -->
                <li><!-- terms li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->
                        <i class="fa fa-fw fa-table"></i> Szabályok
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a><!-- anchor Ends -->
                    <ul id="terms" class="collapse"><!-- ul collapse Starts -->
                        <li>
                            <a href="index.php?insert_term"> Szabály Hozzáadása </a> 
                        </li>
                        <li>
                            <a href="index.php?view_terms"> Szobályok Megtekintése </a> 
                        </li>
                    </ul><!-- ul collapse Ends -->
                </li><!-- terms li Ends -->
                <li>
                    <a href="index.php?view_customers">
                        <i class="fa fa-fw fa-edit"></i> Vevők Megtekintése
                    </a>
                </li>
                <li>
                    <a href="index.php?view_orders">
                        <i class="fa fa-fw fa-list"></i> Rendelések Megtekintése
                    </a>
                </li>
                <li><!-- li Starts -->
                    <a href="#" data-toggle="collapse" data-target="#admins">
                        <i class="fa fa-fw fa-gear"></i> Adminok
                        <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="admins" class="collapse">
                        <li>
                            <a href="index.php?insert_admin"> Admin Hozzáadása </a>
                        </li>
                        <li>
                            <a href="index.php?view_admins"> Adminok Megtekintése </a>
                        </li>
                        <li>
                            <a href="index.php?edit_admin=<?php echo $admin_id; ?>"> Fiók Szerkesztése </a>
                        </li>
                    </ul>
                </li><!-- li Ends -->
                <li><!-- li Starts -->
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i> Kijelentkezés
                    </a>
                </li><!-- li Ends -->
            </ul><!-- nav navbar-nav side-nav Ends -->
        </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->
    </nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->
<?php } ?>