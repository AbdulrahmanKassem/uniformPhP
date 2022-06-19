<?php include_once 'header.php'; ?>

	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpeg);">
    	<div class="auto-container">
        	<h1><?=$_localize['about_us'][$_SESSION['lang']]?></h1>
        	<ul class="bread-crumb">
                <li><a href="index.php"><?=$_localize['home'][$_SESSION['lang']]?></a></li>
                <li class="active"><?=$_localize['about_us'][$_SESSION['lang']]?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->



	<!--Two Default Section-->
    <section class="about-section">
        <div class="auto-container">
            
            <div class="row clearfix">

                <div class="about-column column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner">
                        
                        <h3 class="title"><?=$_localize['about_us'][$_SESSION['lang']]?></h3>
                        <div class="text">
                        <?=$_localize['about_us_intro'][$_SESSION['lang']]?>
                    </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End Two Default Section-->

    
	
  <?php include_once 'footer.php'; ?>
