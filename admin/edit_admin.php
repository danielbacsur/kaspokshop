<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else {
    if(isset($_GET['user_profile'])){
        $edit_id = $_GET['user_profile'];
        $get_admin = "select * from admins where admin_id='$edit_id'";
        $run_admin = mysqli_query($con,$get_admin);
        $row_admin = mysqli_fetch_array($run_admin);
        $admin_id = $row_admin['admin_id'];
        $admin_name = $row_admin['admin_name'];
        $admin_email = $row_admin['admin_email'];
        $admin_pass = $row_admin['admin_pass'];
        $admin_contact = $row_admin['admin_contact'];
    }
    ?>
    <div class="row" >
        <div class="col-lg-12" >
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <h3 class="panel-title" > Fiók Szerkesztése </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Név: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_name" class="form-control" required value="<?php echo $admin_name; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_email" class="form-control" required value="<?php echo $admin_email; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jelszó: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_pass" class="form-control" required value="<?php echo $admin_pass; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Kontakt: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_contact" class="form-control" required value="<?php echo $admin_contact; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <input type="submit" name="update" value="Jóváhagyás" class="btn btn-primary form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['update'])){
        $admin_name = $_POST['admin_name'];
        $admin_email = $_POST['admin_email'];
        $admin_pass = $_POST['admin_pass'];
        $admin_contact = $_POST['admin_contact'];
        if(empty($admin_image)){
            $admin_image = $new_admin_image;
        }
        $update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_contact='$admin_contact' where admin_id='$admin_id'";
        $run_admin = mysqli_query($con,$update_admin);
        if($run_admin){
            echo "<script>window.open('login.php','_self')</script>";
            session_destroy();
        }
    }
} ?>