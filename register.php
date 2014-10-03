<?php 
    session_start();     
    error_reporting(E_ERROR | E_WARNING);

    $user = $_SESSION['user'];

    if ($_SESSION['user'] == null)
    {
    	$_SESSION['alertStyle'] = "alert-danger";
    	$_SESSION['notification_msg'] = "You are not authenticated. Please sign in here.";
    	header("Location: login.php");
    }
    else
    {
    	if ($user->role == "1") {
	    	include ('assets/templates/header.php');
?>
			
			<div class="container" id="register-container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
						<form name="register" method="post" action="createUser.php">
							<input type="text" name="firstname" placeholder="First Name" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<input type="text" name="lastname" placeholder="Last Name" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<input type="text" name="email" placeholder="Email Address" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<input type="text" name="address" placeholder="Physical Address" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<input type="text" name="phone" placeholder="Phone number" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<input type="text" name="role" placeholder="Role. 1 for admin" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<input type="password" name="password" placeholder="Password" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<hr/>
							<input type="submit" name="register" value="Create a user" class="btn">
						</form>
					</div>
				</div>
			</div>

<?php
			include ('assets/templates/footer.php');
		} 
		else {
			$_SESSION['alertStyle'] = "alert-warning";
			$_SESSION['notification_msg'] = "You should have admin permission to visit the page(register.php). Please sign in again.";
			$_SESSION['user'] = null;
			header("Location: login.php");
		}
	}
?>
        