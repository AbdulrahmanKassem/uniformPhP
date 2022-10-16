<?php include_once 'header.php';

if (isset($_POST['type1'])) {
    $_SESSION['cloths1']['type1'] = $_POST['type1'];
    $_SESSION['cloths1']['type2'] = $_POST['type2'];
    $_SESSION['cloths1']['size'] = $_POST['size'];
    $_SESSION['cloths1']['zipper'] = $_POST['zipper'];
    $_SESSION['cloths1']['chain'] = $_POST['chain'];
    $_SESSION['cloths1']['buttons'] = $_POST['buttons'];
    $_SESSION['cloths1']['filling'] = $_POST['filling'];
}
?>

<div class="complete-order-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="completePage-txt">
                    <h3> <?= $_localize['final_msg'][$_SESSION['lang']] ?></h3>
                    <div class="end-order clearfix">
                        <button type="button" class="theme-btn btn-style-one"> <?= $_localize['save'][$_SESSION['lang']] ?> </button>
                        <button onclick="generatePDF()" type="button" class="theme-btn btn-style-one"> <?= $_localize['print'][$_SESSION['lang']] ?> </button>
                        <a href="index.php" type="button" class="theme-btn btn-style-one"> <?= $_localize['finalize'][$_SESSION['lang']] ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="auto-container" id="content_pdf" style="border:4px solid gray ; width: 60% ; margin-top: 10px;">
        <!--Logo-->
        <span class="logo">
            <img src="images/logo.jpeg" alt="Bolton" style="width:40px">
        </span>
        <div class="default-title text-center">
            <h1><?= $_localize['final_report'][$_SESSION['lang']] ?></h1>
        </div>

        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer" style="background-color:unset !important;">
                <table class="table table-bordered table-striped table-hover checkout-table">

                    <tbody>
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <h5 class="prod-title"> <?= $_localize['cloth'][$_SESSION['lang']] ?> </h5>
                                </div>
                            </td>
                            <td class="qty">
                                <div class="select-div">
                                    <?= $_localize[$_SESSION['cloths1']['type1']][$_SESSION['lang']] ?>
                                    &nbsp; || &nbsp;
                                    <?= $_localize[$_SESSION['cloths1']['type2']][$_SESSION['lang']] ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <h5 class="prod-title">
                                        <?= $_localize['size'][$_SESSION['lang']] ?>
                                        &nbsp;
                                        <span class="h6">
                                            <i class="fa fa-info-circle"></i>
                                            <a href="sizetable.php" class="text-info bg-info">
                                                ( <?= $_localize['details'][$_SESSION['lang']] ?>)
                                            </a>
                                        </span>
                                    </h5>

                                </div>
                            </td>
                            <td class="qty">
                                <?php echo $_SESSION['cloths1']['size'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <h5 class="prod-title"><?= $_localize['buttons'][$_SESSION['lang']] ?></h5>
                                </div>
                            </td>
                            <td class="qty text-center">
                                <label>

                                    <img src="images/parts/button<?php echo $_SESSION['cloths1']['buttons'] ?>.jpg" style="width: 30px;" />
                                </label>

                            </td>
                        </tr>
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <h5 class="prod-title"><?= $_localize['zipper'][$_SESSION['lang']] ?></h5>
                                </div>
                            </td>
                            <td class="qty text-center">
                                <label>
                                    <img src="images/parts/zipper<?php echo $_SESSION['cloths1']['zipper'] ?>.jpg" style="width: 30px;" />
                                </label>

                                <label>
                                    <img src="images/parts/zipper<?php echo $_SESSION['cloths1']['chain'] ?>.jpg" style="height: 100px;" />
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <h5 class="prod-title"><?= $_localize['filing'][$_SESSION['lang']] ?></h5>
                                </div>
                            </td>
                            <td class="qty">
                                <?= $_localize[$_SESSION['cloths1']['filling']][$_SESSION['lang']] ?>
                            </td>
                        </tr>
                        <?php if (isset($_SESSION['cloths'])) {
                            foreach ($_SESSION['cloths'] as $row => $key) {
                                if ($key != '' && !strpos($row, '_color')) { ?>
                                    <tr>
                                        <td class="prod-column">
                                            <div class="column-box">
                                                <!--<figure class="prod-thumb"><a href="#"><img src="images/resource/products/product-10.jpg" alt=""></a></figure>-->
                                                <h5 class="prod-title">
                                                    <?= str_replace('_', ' ', $row) ?>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="qty">
                                            <?= $key ?>
                                            &nbsp;
                                            <span style=" display: inline-block;width: 20px ; height: 20px; border: 1px solid ; background-color:<?php echo isset($_SESSION['cloths'][$row . '_color']) ? '#' . substr($_SESSION['cloths'][$row . '_color'], 0, 6) : 'fff' ?> ;">

                                            </span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>

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

    </div>

    <?php include_once 'footer.php'; ?>

    <script type="text/javascript" src="qrcode/qrcode.js"></script>

    <script src="js/pdf/bootstrap.bundle.min.js"></script>
    <script src="js/pdf/jspdf.min.js"></script>
    <script src="js/pdf/html2pdf.bundle.min.js"></script>
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


        function generatePDF() {
          
            // Choose the element id which you want to export.
            var element = document.getElementById('content_pdf');
            element.style.width = '700px';
            element.style.height = '1000px';
            var opt = {
                margin: 0,
                filename: 'myfile.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 1
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait',
                    precision: '12'
                }
            };

            // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
            html2pdf().set(opt).from(element).save();

        }
    </script>