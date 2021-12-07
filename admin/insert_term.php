<?php
if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
}
else { ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-money fa-fw"></i> Szabály Hozzáadása
					</h3>
				</div>
				<div class="panel-body"><!-- panel-body Starts -->
					<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
						<div class="form-group"><!-- form-group Starts -->
							<label class="col-md-3 control-label"> Megnevezés </label>
							<div class="col-md-6"><!-- col-md-6 Starts -->
								<input type="text" name="term_title" class="form-control" >
							</div><!-- col-md-6 Ends -->
						</div><!-- form-group Ends -->
						<div class="form-group"><!-- form-group Starts -->
							<label class="col-md-3 control-label"> Leirás </label>
							<div class="col-md-6">
								<textarea name="term_desc" class="form-control" ></textarea>
							</div>
						</div>
						<div class="form-group"><!-- form-group Starts -->
							<label class="col-md-3 control-label"> </label>
							<div class="col-md-6"><!-- col-md-6 Starts -->
								<input type="submit" name="submit" value="Hozzáadás" class="btn btn-primary form-control" >
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	if(isset($_POST['submit'])){
		$term_title = $_POST['term_title'];
		$term_desc = $_POST['term_desc'];
		$term_link = $_POST['term_link'];
		$insert_term = "insert into terms (term_title,term_link,term_desc) values ('$term_title','$term_link','$term_desc')";
		$run_term = mysqli_query($con,$insert_term);
		if($run_term){
			echo "<script>window.open('index.php?view_terms','_self')</script>";
		}
	}
} ?>