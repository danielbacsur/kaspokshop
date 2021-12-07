<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else { ?>
    <div class="row" >
        <div class="col-lg-12" >
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <h3 class="panel-title" > Admin hozzáadása </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Név: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jelszó: </label>
                            <div class="col-md-6">
                                <input type="password" name="admin_pass" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Kontakt: </label>
                            <div class="col-md-6">
                                <input type="text" name="admin_contact" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <input type="submit" name="submit" value="Hozzáadás" class="btn btn-primary form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $admin_name = $_POST['admin_name'];
        $admin_email = $_POST['admin_email'];
        $admin_pass = $_POST['admin_pass'];
        $admin_pass_hash = hash("sha256", $admin_pass);
        $admin_contact = $_POST['admin_contact'];
        $insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_contact) values ('$admin_name','$admin_email','$admin_pass_hash','$admin_contact')";
        $run_admin = mysqli_query($con,$insert_admin);
        if($run_admin){
            echo "<script>window.open('index.php?view_users','_self')</script>";
        }
    }
}  ?>