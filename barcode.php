<?php include_once 'header.php'; ?>
<?php
if (isset($_POST['Collars'])) {
    $_SESSION['cloths'] = $_POST;
    if(strpos($_SESSION['cloths']['Collars'],'$')){
        $price =explode('$', $_SESSION['cloths']['Collars']);
        $_SESSION['cloths']['Collars'] =$price[0];
        $_SESSION['price'] = $price[1];
    }
    if(strpos($_SESSION['cloths']['Pants'],'$')){
        $price =explode('$', $_SESSION['cloths']['Pants']);
        $_SESSION['cloths']['Pants'] =$price[0];
        $_SESSION['price'] = $price[1]; 
    }
    if(strpos($_SESSION['cloths']['Pant_Pockets'],'$')){
        $price =explode('$', $_SESSION['cloths']['Pant_Pockets']);
        $_SESSION['cloths']['Pant_Pockets'] =$price[0];
        $_SESSION['price'] = $price[1]; 
    }
}
?>
<!--Page Title-->
<section class="page-title" style="background-image: url(images/background/bg_barcode.jpeg);">
    <div class="auto-container">
        <h1><?= $_localize['showـoutfit'][$_SESSION['lang']] ?></h1>
        <ul class="bread-crumb">
            <li><a href="index.php"><?= $_localize['home'][$_SESSION['lang']] ?></a></li>
            <li class="active"><?= $_localize['barcode'][$_SESSION['lang']] ?></li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Checkout Page-->
<div class="checkout-page">
    <div class="auto-container">




        <div class="default-title">
            <h2><?= $_localize['barcode'][$_SESSION['lang']] ?></h2>
        </div>

        <!--Cart Outer-->
        <div class="cart-outer">
            <form action="checkout.php"  method="post">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Collars'] ?>" name="Collars">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overalls'] ?>" name="Overalls">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overall_Button_Zip'] ?>" name="Overall_Button_Zip">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overall_Pant_Pockets'] ?>" name="Overall_Pant_Pockets">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overall_Shirt_Pockets'] ?>" name="Overall_Shirt_Pockets">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Pant_Pockets'] ?>" name="Pant_Pockets">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Tool_Pockets'] ?>" name="Tool_Pockets">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Pants'] ?>" name="Pants">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Shirt_Button_Zip'] ?>" name="Shirt Button_Zip">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Shirts'] ?>" name="Shirts">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Shirt_Pockets'] ?>" name="Shirt_Pockets">

                <input type="hidden" value="<?php echo $_SESSION['cloths']['Sleeves'] ?>" name="Sleeves">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Collars_color'] ?>" name="Collars_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overalls_color'] ?>" name="Overalls_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overall_Button_Zip_color'] ?>" name="Overall_Button_Zip_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overall_Pant_Pockets_color'] ?>" name="Overall_Pant_Pockets_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Overall_Shirt_Pockets_color'] ?>" name="Overall_Shirt_Pockets_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Pant_Pockets_color'] ?>" name="Pant_Pockets_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Pants_color'] ?>" name="Pants_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Tool_Pockets_color'] ?>" name="Tool_Pockets_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Shirt_Button_Zip_color'] ?>" name="Shirt_Button_Zip_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Shirts_color'] ?>" name="Shirts_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Shirt_Pockets_color'] ?>" name="Shirt_Pockets_color">
                <input type="hidden" value="<?php echo $_SESSION['cloths']['Sleeves_color'] ?>" name="Sleeves_color">

                <div class="table-outer" style="background-color:unset !important;">
                    <table class="table table-bordered table-striped table-hover">


                        <tbody>

                            <tr>
                                <td colspan="2" class="text-center">
                                    <div id="qrcode"></div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="end-order clearfix">
                    <button onclick="javascript:history.go(-1)" type="button" class="theme-btn btn-style-one" target="_blank"><?= $_localize['previous'][$_SESSION['lang']] ?></button>
                    <a href="#" id="show_barcode" target="_blank" class="theme-btn btn-style-one"><?= $_localize['show_barcode'][$_SESSION['lang']] ?></a>
                    <button type="submit" class="theme-btn btn-style-one"><?= $_localize['Complete_the_order'][$_SESSION['lang']] ?></button>
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
