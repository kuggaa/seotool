<?php 
    session_start();

    error_reporting(E_ERROR | E_WARNING);

    $user = $_SESSION['user'];

    if ($user != null)
    {
    	header("location: index.php");
    }
    else
    {
    	$alertMsg = $_SESSION['notification_msg'];
	    $alertStyle = $_SESSION['alertStyle'];

	    include ('assets/templates/header.php');
?>
	<div>
	</div>
	<div class="container" id="login-container">
		<div class="row">
			<div class=<?php echo "\"notification alert " . $alertStyle . "\""; ?> style="text-align:center;">
				<?php 
					echo $alertMsg;
				?>
			</div>
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
				
				<form name="register" method="post" action="signin.php">
					<input type="text" name="email" placeholder="Email Address" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<input type="password" name="password" placeholder="Password" class="form-control col-lg-6 col-off-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<hr/>
					<input type="submit" name="signin" value="Sign in" class="btn">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="progressbar-test">
				<div class="col-xs-6">
					<div class="circle-progress">
						<strong>100%</strong>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="hor-bar-progress">
					</div>
				</div>
			</div>
		</div>
		<script>
			$('.circle-progress').circleProgress({
			    value: 0.99,
			    startAngle: Math.PI / 2,
			    fill: {gradient: ['#1256c3', '#4cbfff']}
			}).on('circle-animation-progress', function(event, progress) {
			    $(this).find('strong').html(parseInt(100 * progress) + '<i>%</i>');
			});
		</script>
	</div>
<?php
		include ('assets/templates/footer.php');
	}
?>