<?PHP ob_start();
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ar';
    $_SESSION['dir'] = 'rtl';
}
//include('lang/langCotroller.php');
/*if(!isset($_SESSION['lang']))
{
    $_SESSION['lang'] = 'ar';
}

if(isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'ar']))
{
    $_SESSION['lang'] = $_GET['lang'];
}*/
//var_dump($_SESSION);
require('localize.php');
?>
<!DOCTYPE html>
<html lang="<?PHP echo $_SESSION['lang'] ?>" dir="<?PHP echo $_SESSION['dir'] ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cloth Customization</title>

    <!-- Stylesheets -->
    <?php
    if ($_SESSION['lang'] == 'ar') {
    ?>
        <link href="css/bootstrap.<?PHP echo $_SESSION['dir'] ?>.css" rel="stylesheet">
        <link href="css/revolution-slider.<?PHP echo $_SESSION['dir'] ?>.css" rel="stylesheet">
        <link href="css/style.<?PHP echo $_SESSION['dir'] ?>.css" rel="stylesheet">
    <?php
    } else {
    ?>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/revolution-slider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    <?php
    }
    ?>
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <style>
        #qrcode img {
            margin: auto;
        }

        .checkout-table [type=radio] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* IMAGE STYLES */
        .checkout-table [type=radio]+img {
            cursor: pointer;
        }

        /* CHECKED STYLES */
        .checkout-table [type=radio]:checked+img {
            outline: 2px solid #0089ff;
        }

        .template-videos a.video-link {
            display: block;
            position: relative;
        }

        .template-videos i.fa-play-circle {
            position: absolute;
            font-size: 6em;
            color: #fff;
            z-index: 999;
            top: 45%;
            left: 42%;
        }

        .template-videos a.video-link:hover i.fa-play-circle {
            color: #337ab7 !important;
        }
    </style>

</head>

<body dir="<?PHP echo $_SESSION['dir'] ?>">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two -->
        <header class="main-header header-style-two">

            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <!--Top Left-->
                    <div class="top-left pull-left">

                        <ul class="links-nav clearfix">
                            <li class="social-links">
                                <a href="https://www.snapchat.com/add/auniform2022?share_id=9wT8a6CbSYg&locale=ar-AE">
                                    <span class="fa fa-snapchat"></span>
                                </a>
                                <a href="https://www.instagram.com/auniform2022?r=nametag">
                                    <span class="fa fa-instagram"></span>
                                </a>
                                <a href="https://wa.me/966545445335">
                                    <span class="fa fa-whatsapp"></span>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100086707123971">
                                    <span class="fa fa-facebook"></span>
                                </a>

                            </li>
                        </ul>

                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <form id="langForm" method="POST" action="lang/langCotroller.php">
                            <ul class="links-nav">
                                <?PHP
                                if ($_SESSION['lang'] == 'ar') {
                                ?>
                                    <input type="hidden" value="en" name="lang">
                                    <li>
                                        <a href="#" onclick="document.getElementById('langForm').submit();" style="color: #fff;">
                                            <img src="images/lang/en.png" alt="English" />
                                            English</a>
                                    </li>

                                <?PHP
                                } else {
                                ?>
                                    <input type="hidden" value="ar" name="lang">
                                    <li>
                                        <a href="#" onclick="document.getElementById('langForm').submit();" style="color: #fff">
                                            <img src="images/lang/ar.png" alt="عربي" />
                                            عربي</a>
                                    </li>
                                <?PHP
                                }
                                ?>

                                <?PHP
                                if (isset($_SESSION['username'])) {
                                ?>
                                    <li><span class="icon flaticon-close-envelope"></span><?= $_SESSION['username'] ?></li>
                                    <li><span class="icon flaticon-smile"></span><?= $_SESSION['name'] ?></li>
                                <?PHP
                                }
                                ?>
                            </ul>
                        </form>


                    </div>
                </div>
            </div>
            <!--End Header Top-->


            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">
                        <?php
                        if (basename($_SERVER['PHP_SELF']) != 'index.php') {
                        ?>
                            <div class="pull-left logo-outer">
                                <div class="logo"><a href="index.php"><img src="images/logo.jpeg" alt="" title="Bolton" style="width:70px"></a></div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="nav-outer pull-right clearfix">
                            <!-- Main Menu End-->
                            <?PHP
                            if (!isset($_SESSION["username"])) {
                            ?>
                                <div class="btn-outer"> <a href="login.php" class="btn btn-default"><?= $_localize['login'][$_SESSION['lang']] ?></a></div>
                            <?PHP
                            } else {
                            ?>
                                <div class="btn-outer"> <a href="logout.php" class="btn btn-default"><?= $_localize['logout'][$_SESSION['lang']] ?></a></div>
                            <?PHP
                            }
                            ?>

                            <!-- Main Menu -->
                            <nav class="main-menu" dir="ltr">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= $_localize['order'][$_SESSION['lang']] ?><span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="app.php"><?= $_localize['new_order'][$_SESSION['lang']] ?></a></li>
                                                <li class="disabled"><a href="javascript:;"><?= $_localize['order_history'][$_SESSION['lang']] ?></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= $_localize['design_production'][$_SESSION['lang']] ?> <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="guide.php"><?= $_localize['guid'][$_SESSION['lang']] ?></a></li>
                                                <li><a href="templates.php"><?= $_localize['templates'][$_SESSION['lang']] ?></a></li>
                                                <li class="dropdown">
                                                    <a href="#"> <?= $_localize['sizetable'][$_SESSION['lang']] ?> <span class="caret"></span></a>
                                                    <ul>
                                                        <li><a href="body_measurements.php"><?= $_localize['body_measurements'][$_SESSION['lang']] ?></a></li>
                                                        <li><a href="sizetable.php"><?= $_localize['sizetable_table'][$_SESSION['lang']] ?></a></li>
                                                        <li><a href="explainer_video.php"><?= $_localize['explainer_video'][$_SESSION['lang']] ?></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.php"><?= $_localize['about_us'][$_SESSION['lang']] ?></a></li>
                                        <li><a href="index.php"><?= $_localize['home'][$_SESSION['lang']] ?></a></li>
                                    </ul>
                                </div>
                            </nav>

                        </div>

                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="/" class="img-responsive"><img src="images/logo.jpeg" alt="Bolton" style="width:40px"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">


                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">

                                <li><a href="about-us.php"><?= $_localize['about_us'][$_SESSION['lang']] ?></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= $_localize['order'][$_SESSION['lang']] ?><span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="app.php"><?= $_localize['new_order'][$_SESSION['lang']] ?></a></li>
                                                <li class="disabled"><a href="javascript:;"><?= $_localize['order_history'][$_SESSION['lang']] ?></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= $_localize['design_production'][$_SESSION['lang']] ?> <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="guide.php"><?= $_localize['guid'][$_SESSION['lang']] ?></a></li>
                                                <li><a href="templates.php"><?= $_localize['templates'][$_SESSION['lang']] ?></a></li>
                                                <li class="dropdown">
                                                    <a href="#"> <?= $_localize['sizetable'][$_SESSION['lang']] ?> <span class="caret"></span></a>
                                                    <ul>
                                                        <li><a href="body_measurements.php"><?= $_localize['body_measurements'][$_SESSION['lang']] ?></a></li>
                                                        <li><a href="sizetable.php"><?= $_localize['sizetable_table'][$_SESSION['lang']] ?></a></li>
                                                        <li><a href="explainer_video.php"><?= $_localize['explainer_video'][$_SESSION['lang']] ?></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php"><?= $_localize['home'][$_SESSION['lang']] ?></a></li>
                                    </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->