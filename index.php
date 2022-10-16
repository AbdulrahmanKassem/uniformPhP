<?php include_once 'header.php'; ?>
<!--Main Slider-->
<section class="main-slider">
    <div class="text-center">
        <img src="images/bg.png" width="300">
    </div>
</section>
<!--End Main Slider-->

<!-- default section one -->
<section class="default-section-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-md-12 col-sm-12 col-xs-12">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2><span class="theme_color"><?= $_localize['introduction_title'][$_SESSION['lang']] ?></span></h2>
                </div>
                <div class="inner-box">
                    <div class="text text-justify">
                        <?= $_localize['introduction'][$_SESSION['lang']] ?>
                    </div>
                    <div class="row clearfix">

                        <!--services block-->
                        <div class="services-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-technology"></span></div>
                                <h3><a href="javascript:;"><?= $_localize['our_vision_title'][$_SESSION['lang']] ?></a></h3>
                                <div class="service-text text-justify">
                                    <?= $_localize['our_vision'][$_SESSION['lang']] ?>
                                </div>
                            </div>
                        </div>

                        <!--services block-->
                        <div class="services-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-graphic-1"></span></div>
                                <h3><a href="javascript:;"><?= $_localize['objectives_title'][$_SESSION['lang']] ?></a></h3>
                                <div class="service-text text-justify">
                                    <?= $_localize['our_mission'][$_SESSION['lang']] ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>