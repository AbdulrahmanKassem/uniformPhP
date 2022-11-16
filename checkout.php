<?php include_once 'header.php'; ?>
<?php
if (isset($_POST['Collars'])) {
    $_SESSION['cloths'] = $_POST;
}
?>
<!--Page Title-->
<section class="page-title" style="background-image: url(images/background/bg_checkout.jpg);">
    <div class="auto-container">
        <h1><?= $_localize['final_report'][$_SESSION['lang']] ?></h1>
        
    </div>
</section>
<!--End Page Title-->

<!--Checkout Page-->
<div class="checkout-page">
    <div class="auto-container">

        <div class="default-title">
            <h2><?= $_localize['final_report'][$_SESSION['lang']] ?></h2>
        </div>
        <form action="complete_order.php" method="POST">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer" style="background-color:unset !important;">

                    <table class="table table-bordered table-striped table-hover checkout-table">

                        <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> <?= $_localize['cloth'][$_SESSION['lang']] ?> </h4>
                                    </div>
                                </td>
                                <td class="qty">
                                    <div class="select-div">
                                        <select class="form-control" name="type1">
                                            <option value="plain_weave"><?= $_localize['plain_weave'][$_SESSION['lang']] ?></option>
                                            <option value="twill"><?= $_localize['twill'][$_SESSION['lang']] ?></option>
                                            <option value="twill_2"><?= $_localize['twill_2'][$_SESSION['lang']] ?></option>
                                        </select>
                                        <select class="form-control" name="type2">
                                            <option value="Cotton_100"><?= $_localize['Cotton_100'][$_SESSION['lang']] ?></option>
                                            <option value="Cotton_65"><?= $_localize['Cotton_65'][$_SESSION['lang']] ?></option>
                                            <option value="Cotton_50"><?= $_localize['Cotton_50'][$_SESSION['lang']] ?></option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="prod-title"><?= $_localize['cloth_weight'][$_SESSION['lang']] ?></h4>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="weight" value="210 جم للمتر المربع" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="prod-title"><?= $_localize['cloth_number'][$_SESSION['lang']] ?></h4>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="number"  value="AF17245" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"><?= $_localize['size'][$_SESSION['lang']] ?></h4>
                                        <span>
                                            <i class="fa fa-info-circle"></i>
                                            <a href="sizetable.php" target="_blank" class="text-info bg-info">
                                                ( <?= $_localize['details'][$_SESSION['lang']] ?>)
                                            </a>
                                        </span>
                                    </div>
                                </td>
                                <td class="qty">
                                    <select class="form-control" name="size">
                                        <option>XXL</option>
                                        <option>XL</option>
                                        <option>L</option>
                                        <option>M</option>
                                        <option>S</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"><?= $_localize['buttons'][$_SESSION['lang']] ?></h4>
                                    </div>
                                </td>
                                <td class="qty text-center">
                                            <label>
                                                <input type="radio" name="buttons" value="1" checked>
                                                <img src="images/parts/button1.jpg" style="width: 50px;" />
                                            </label>
                                            <label>
                                                <input type="radio" name="buttons" value="2">
                                                <img src="images/parts/button2.jpg" style="width: 50px;margin:0px 10px" />
                                            </label>
                                            <label>
                                                <input type="radio" name="buttons" value="3">
                                                <img src="images/parts/button3.jpg" style="width: 50px;" />
                                            </label>
                                            <label>
                                                <input type="radio" name="buttons" value="4">
                                                <img src="images/parts/button4.jpg" style="width: 50px;" />
                                            </label>
                                       

                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"><?= $_localize['zipper'][$_SESSION['lang']] ?></h4>
                                    </div>
                                </td>
                                <td class="qty text-center">
                                    <label>
                                        <input type="radio" name="zipper" value="1" checked>
                                        <img src="images/parts/zipper1.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="zipper" value="2">
                                        <img src="images/parts/zipper2.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="zipper" value="3">
                                        <img src="images/parts/zipper3.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="chain" value="4" checked>
                                        <img src="images/parts/zipper4.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="chain" value="5">
                                        <img src="images/parts/zipper5.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="chain" value="6">
                                        <img src="images/parts/zipper6.jpg" class="zipper-img-st" />
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="column-box">
                                        <h4 class="prod-title"><?= $_localize['buttons_color'][$_SESSION['lang']] ?></h4>
                                    </div>
                                </td>
                                <td>
                                    
                                <input type="text" class="form-control" name="button_color" placeholder="<?= $_localize['buttons_color'][$_SESSION['lang']] ?>">
                                      
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"><?= $_localize['filing'][$_SESSION['lang']] ?></h4>
                                    </div>
                                </td>
                                <td class="qty">
                                    <select class="form-control" name="filling">
                                        <option value="light_filing"><?= $_localize['light_filing'][$_SESSION['lang']] ?></option>
                                        <option value="heavy_filing"><?= $_localize['heavy_filing'][$_SESSION['lang']] ?></option>
                                        <option value="without"><?= $_localize['without'][$_SESSION['lang']] ?></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> <?= $_localize['embroidery'][$_SESSION['lang']] ?> </h4>
                                    </div>
                                </td>
                                <td class="qty">
                                    <input class="attc-file" type="file" id="myfile" name="myfile">
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> <?= $_localize['logo_embroidery'][$_SESSION['lang']] ?> </h4>
                                    </div>
                                </td>
                                <td class="qty">
                                    <input class="attc-file" type="file" id="myfile" name="myfile">
                                </td>
                            </tr>
                            <?php if (isset($_SESSION['cloths'])) {
                                foreach ($_SESSION['cloths'] as $row => $key) {
                                    if ($key != '' && !strpos($row, '_color')) { ?>
                                        <tr>
                                            <td class="prod-column">
                                                <div class="column-box">
                                                    <!--<figure class="prod-thumb"><a href="#"><img src="images/resource/products/product-10.jpg" alt=""></a></figure>-->
                                                    <h4 class="prod-title">
                                                        <?= str_replace('_', ' ', $row) ?>
                                                    </h4>
                                                </div>
                                            </td>
                                            <td class="qty">
                                                <?= $key ?>
                                                &nbsp;
                                                <span style=" display: inline-block;width: 20px ; height: 20px; border: 1px solid ; background-color:<?php echo isset($_SESSION['cloths'][$row . '_color']) ? '#' . substr($_SESSION['cloths'][$row . '_color'], 0, 6) : 'fff' ?> ;">

                                                </span>
                                                <span dir="ltr"><?php echo '#' . substr($_SESSION['cloths'][$row . '_color'], 0, 6); ?></span>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                <tr>
                                    <td colspan="2">
                                        <h4 class="prod-title">
                                            <a href="guide-pdf/guide-<?= $_SESSION['lang'] ?>.pdf" target="_blank" class="btn btn-primary">
                                                <i class="fa fa-file-pdf-o"></i>
                                                <?= $_localize['guid'][$_SESSION['lang']] ?>
                                            </a>
                                        </h4>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div id="qrcode"></div>
                                    </td>
                                </tr>
                            <?php } else {
                                echo '<tr><td colspan="2" class="text-center">لا طلب</td></tr>';
                            } ?>
                        </tbody>
                    </table>

                </div>


            </div>

            <div class="end-order clearfix">
                <a href="#" id="show_barcode" target="_blank" class="theme-btn btn-style-one"><?= $_localize['show_barcode'][$_SESSION['lang']] ?></a>
                <button type="submit" class="theme-btn btn-style-one"> <?= $_localize['Complete_the_order'][$_SESSION['lang']] ?></button>
            </div>
        </form>
    </div>
</div>
</div>


<?php include_once 'footer.php'; ?>
<script type="text/javascript" src="qrcode/qrcode.js"></script>
<script type="text/javascript">
    <?php

    if (isset($_SESSION['cloths'])) {
        $query = '';
        $i = 1;
        foreach ($_SESSION['cloths'] as $key => $value) :
            if ($value != '' && !strpos($key, '_color')) {
                if ($key == 'Overall_Button_Zip') {
                    $index = 'Shirt Button_Zip';
                }
                if ($key == 'Shirt_Button_Zip') {
                    $index = 'Shirt_Button_Zip';
                } else {
                    $index = str_replace('_', '%20', $key);
                }

                if ($i == 1) {
                    $query .= "$index," . $_SESSION['cloths'][$key . '_color'] . ",$value";
                    $i++;
                } else
                    $query .= "|$index," . $_SESSION['cloths'][$key . '_color'] . ",$value";
            }
        endforeach;
        if ($_SESSION['cloths']['Overalls'] != '') {
            $query .= '|Shirts,000000,4|Pants,000000,5';
        }
        echo '
        var qrcode = new QRCode(document.getElementById("qrcode"), {
                width : 200,
                height : 200,
                correctLevel : QRCode.CorrectLevel.H
        });    
        qrcode.makeCode("https://cloths.digital/cpreview/index.php?query=' . $query . '");';
    }
    ?>
    $("#show_barcode").attr("href", "<?php echo "https://cloths.digital/cpreview/index.php?query=$query" ?>");
</script>