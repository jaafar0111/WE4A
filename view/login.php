<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
	<link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
	<link rel="stylesheet"type="text/css" href="../css/sweetAlert.css" />
	
</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Winku</h1>
						<p>
							Winku is free to use for as long as you want with two active projects.
						</p>
						<div class="friend-logo">
							<span><img src="../images/wink.png" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on</a>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							<p>
								Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form method="post" action="./login.php" autocomplete="off">
							<?php
								require_once("./loginStatus.php");
								require_once("./connect.php");
								$message = "Login successfull";
								$clicked = true;

								if($clicked){
									$loginStatus = new LoginStatus($sQLConn);
									if($loginStatus->loginAttempted) {
										echo'<div class="alert-danger">'.$loginStatus->errorText.'</div>';
									}
									else if($loginStatus->loginSuccessful){
										echo'<div class="alert-success">'.$message.'</div>';
									}
								}
							?>
							<div class="form-group">	
							  <input type="text" id="username" required="required" name="username"/>
							  <label class="control-label" for="username">Username</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" id="password" name="password"/>
							  <label class="control-label" for="password">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit"><span>Login<?php global $clicked; $clicked=false; ?></span></button>
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
						
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							<p>
								Welcome to Winku
							</p>
						<form method="post" autocomplete="off">
							<div class="form-group">	
							  <input type="text" required="required" name="firstname"/>
							  <label class="control-label" for="firstname" autocomplete="false">First Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name="lastname"/>
							  <label class="control-label" for="lastname" autocomplete="false">Last Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name="username"/>
							  <label class="control-label" for="username" autocomplete="false">User Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password" type="password" />
							  <label class="control-label" for="password" autocomplete="false">Password</label><i class="mtrl-select"></i>
							</div>
							<!-- <div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="radio" checked="checked"/><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="radio"/><i class="check-box"></i>Female
								</label>
							  </div>
							</div> -->
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							</div>
							<a href="./login.php" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../js/main.min.js"></script>
<script src="../js/script.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script src="../../js/mdb.umd.min.js"></script>
<script src="../js/sweetAlert.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>	

</html>