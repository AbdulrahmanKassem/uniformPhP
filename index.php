<?php include_once 'header.php'; ?>
<!--Main Slider-->
<section class="main-slider" data-start-height="700" data-slide-overlay="yes">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/2.jpeg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="-80"
                         data-speed="1500"
                         data-start="0"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn">
                        <h2 style="color: #fff"></h2>
                    </div>

                </li>

            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>
<!--End Main Slider-->


<!-- default section one -->
<section class="default-section-one">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2><span class="theme_color"><?=$_localize['introduction_title'][$_SESSION['lang']]?></span></h2>
        </div>
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-md-12 col-sm-12 col-xs-12">
                <div class="inner-box">

                    <div class="text text-justify">
                    <?=$_localize['introduction'][$_SESSION['lang']]?>
                    </div>
                    <div class="row clearfix">

                        <!--services block-->
                        <div class="services-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-technology"></span></div>
                                <h3><a href="javascript:;"><?=$_localize['our_vision_title'][$_SESSION['lang']]?></a></h3>
                                <div class="service-text text-justify">
                                <?=$_localize['our_vision'][$_SESSION['lang']]?>
                                </div>
                            </div>
                        </div>

                        <!--services block-->
                        <div class="services-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-graphic-1"></span></div>
                                <h3><a href="javascript:;"><?=$_localize['objectives_title'][$_SESSION['lang']]?></a></h3>
                                <div class="service-text text-justify">
                                <?=$_localize['our_mission'][$_SESSION['lang']]?>
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



