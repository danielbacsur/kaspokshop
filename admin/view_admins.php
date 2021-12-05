<?php
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else { ?>
    <div class="row" >
        <div class="col-lg-12" >
            <div class="panel panel-default" >
                <div class="panel-heading" >
                <h3 class="panel-title" > Adminok megtekintése </h3>
                </div>
                <div class="panel-body" >
                    <div class="table-responsive" >
                        <table class="table table-bordered table-hover table-striped" >
                            <thead>
                                <tr>
                                <th>Név</th>
                                <th>Email</th>
                                <th>Kontakt</th>
                                <th>Törlés</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $get_admin = "select * from admins";
                                $run_admin = mysqli_query($con,$get_admin);
                                while($row_admin = mysqli_fetch_array($run_admin)){
                                    $admin_id = $row_admin['admin_id'];
                                    $admin_name = $row_admin['admin_name'];
                                    $admin_email = $row_admin['admin_email'];
                                    $admin_contact = $row_admin['admin_contact'];
                                    ?>
                                    <tr>
                                    <td><?php echo $admin_name; ?></td>
                                    <td><?php echo $admin_email; ?></td>
                                    <td><?php echo $admin_contact; ?></td>
                                    <td>
                                        <a href="index.php?user_delete=<?php echo $admin_id; ?>" >Törlés</a>
                                    </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }  ?>