<?php
	include_once 'header.php'; 
    require('datalayer/db.php');

    // LOGIN
    if (isset($_POST['login'])) {
        $username = stripslashes($_REQUEST['email']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$username'
                     AND password='" . md5($password) . "'";

        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_userData = mysqli_fetch_array($result);

            $_SESSION['username'] = $username;
            $_SESSION['name'] = $_userData['name'];

            header("Location: app.php");
        } else {
            echo "<div class='alert alert-danger'>
                  <h3 class='alert-title title'>Incorrect Username/password.</h3>
                  </div>";
        }
    }
?>
	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpeg);">
    	<div class="auto-container">
        	<h1><?=$_localize['login'][$_SESSION['lang']]?></h1>
        	<ul class="bread-crumb">
                <li><a href="index.php"><?=$_localize['home'][$_SESSION['lang']]?></a></li>
                <li class="active"><?=$_localize['login'][$_SESSION['lang']]?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                    
                <!--Info Column-->
                <div class="column info-column col-md-6 col-sm-12 col-xs-12">
                
                    <div class="inner-box">
                        <!--Default Title-->
                        <div class="default-title"><h3><?=$_localize['login'][$_SESSION['lang']]?></h3><div class="separator"></div></div>
                        <div class="contact-form default-form">
                            <form method="post" action="" name="loginForm" id="contact-form">
                                <div class="row clearfix">

                                    


                                    <div class="form-group col-md-9 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <input type="email" name="email" value="" placeholder="<?=$_localize['email'][$_SESSION['lang']]?>*">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-9 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="password" name="password" value="" placeholder="<?=$_localize['password'][$_SESSION['lang']]?>">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group col-md-9 col-sm-6 col-md-9">
                                        <input type="submit" class="btn btn-success pull-right" name="login" value="<?=$_localize['login'][$_SESSION['lang']]?>"/>

										<h4><a class="pull-left" href="register.php"><?=$_localize['dont_have_account'][$_SESSION['lang']]?></a></h4>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>    
                
                
            </div>
        </div>
    </section>

   	
<?php include_once 'footer.php'; ?>