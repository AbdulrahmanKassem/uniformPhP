<?php
	include_once 'header.php'; 
    require('datalayer/db.php');

    //REGISTER
    if (isset($_REQUEST['register'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
		$email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
		$company    = stripslashes($_REQUEST['company']);
        $company    = mysqli_real_escape_string($con, $company);
		$address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");

        // check if email already exists
        $query    = "SELECT * FROM `users` WHERE email='$email'";
        $chkResult = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($chkResult);
        if($rows > 0){
            echo "<div class='alert alert-danger text-center'>
                    <h3>A user with this email already exists.</h3><br/>
                    </div>";
        } else {
            $query    = "INSERT into `users` (name, password, email, phone, company, address, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$phone', '$company', '$address', '$create_datetime')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='alert alert-success text-center'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <u><a href='login.php'>login</a></u>.</p>
                    </div>";
            } else {
                echo "<div class='alert alert-danger text-center'>
                    <h3>Required fields are missing.</h3><br/>
                    </div>";
            }
        }

        
    }
?>
	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpeg);">
    	<div class="auto-container">
        	<h1><?=$_localize['register'][$_SESSION['lang']]?></h1>
        	<ul class="bread-crumb">
                <li><a href="index.php"><?=$_localize['home'][$_SESSION['lang']]?></a></li>
                <li class="active"><?=$_localize['register'][$_SESSION['lang']]?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                    
            	<!--Form Column-->
            	<div class="column form-column col-md-7 col-sm-12 col-xs-12">
                	<div class="default-title"><h3><?=$_localize['register'][$_SESSION['lang']]?></h3><div class="separator"></div></div>
					<div class="contact-form default-form">
						<form method="post" name="registerForm" id="contact-form">
							<div class="row clearfix">

								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="group-inner">
										<input type="text" name="name" value="" placeholder="<?=$_localize['name'][$_SESSION['lang']]?>*">
									</div>
								</div>

								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="group-inner">
										<input type="email" name="email" value="" placeholder="<?=$_localize['email'][$_SESSION['lang']]?>*">
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<input type="text" name="phone" placeholder="<?=$_localize['phone'][$_SESSION['lang']]?>">
									</div>
								</div>
                                                                
                                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<input type="text" name="company" value="" placeholder="<?=$_localize['company'][$_SESSION['lang']]?>*">
									</div>
								</div>
                                                                
                                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<input type="password" name="password" value="" placeholder="<?=$_localize['password'][$_SESSION['lang']]?> *">
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<textarea name="address" placeholder="<?=$_localize['address'][$_SESSION['lang']]?> *"></textarea>
									</div>
								</div>
                                <div class="form-group col-md-12 col-sm-12 col-md-12">
                                        <input type="submit" class="theme-btn btn-style-one pull-right" name="register" value="<?=$_localize['register'][$_SESSION['lang']]?>"/>

                                    <h4><a class="pull-left" href="login.php"><?=$_localize['already_have_account'][$_SESSION['lang']]?></a></h4>
                                </div>
							</div>
						</form>
					</div>
                </div>
            
            </div>
        </div>
    </section>

   	
<?php include_once 'footer.php'; ?>