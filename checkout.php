<?php include_once 'header.php'; ?>
	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpeg);">
    	<div class="auto-container">
        	<h1>الدفع</h1>
        	<ul class="bread-crumb">
                <li><a href="">الرئيسية</a></li>
                <li class="active">الدفع</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">
        
        <div class="default-title"><h2> التقرير النهائي </h2></div>
            
        <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer" style="background-color:unset !important;">
                    <table class="table table-bordered table-striped table-hover checkout-table">

                        <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> القماش </h4>
                                    </div>
                                </td>
                                <td class="qty">
                                    <div class="select-div">
                                        <select class="form-control">
                                            <option value="">السادة</option>
                                            <option>المبرد 2/2</option>
                                            <option>المبرد 2/1</option>
                                        </select>
                                        <select class="form-control">
                                            <option value="">100% قطن </option>
                                            <option> 65% بوليستر 35% قطن </option>
                                            <option>  50% بوليستر 50% قطن </option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title">المقاس</h4>
                                    </div>
                                </td>
                                <td class="qty"><select class="form-control">
                                    <option value="">متوسط</option>
                                    <option>صغير</option>
                                    <option>كبير</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title">الأزرار</h4>
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
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> سحاب (سوستة) </h4>
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
                                        <input type="radio" name="zipper" value="4">
                                        <img src="images/parts/zipper4.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="zipper" value="5">
                                        <img src="images/parts/zipper5.jpg" class="zipper-img-st" />
                                    </label>
                                    <label>
                                        <input type="radio" name="zipper" value="6">
                                        <img src="images/parts/zipper6.jpg" class="zipper-img-st" />
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> البطانة </h4>
                                    </div>
                                </td>
                                <td class="qty"><select class="form-control">
                                    <option value=""> بطانة خفيفة </option>
                                    <option>  بطانة ثقيلة </option>
                                    <option> بدون بطانة </option>
                                </select></td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> التطريز </h4>
                                    </div> 
                                </td>
                                <td class="qty">
                                    <input class="attc-file" type="file" id="myfile" name="myfile">
                                </td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <h4 class="prod-title"> تطريز شعار الشركة </h4>
                                    </div> 
                                </td>
                                <td class="qty">
                                    <input class="attc-file" type="file" id="myfile" name="myfile">
                                </td>
                            </tr>
                            <?php if(count($_POST)){ foreach($_POST as $row=>$key){ if($key!='' && !strpos($row, '_color')){ ?>
                                <tr>
                                    <td class="prod-column">
                                        <div class="column-box">
                                            <!--<figure class="prod-thumb"><a href="#"><img src="images/resource/products/product-10.jpg" alt=""></a></figure>-->
                                            <h4 class="prod-title"><?= str_replace('_', ' ', $row)?></h4>
                                        </div>
                                    </td>
                                    <td class="qty"><?=$key?></td>
                                </tr>
                            <?php }} ?>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <div id="qrcode"></div>
                                </td>
                            </tr>
                            <?php }else{ echo '<tr><td colspan="2" class="text-center">لا طلب</td></tr>'; } ?>
                        </tbody>
                    </table>
                </div>
                
                
            </div>

            <div class="end-order clearfix">
                <a href="complete_order.php" type="button" class="theme-btn btn-style-one"> إتمام الطلب </a>
            </div>

            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>
<script type="text/javascript" src="qrcode.js"></script>
<script type="text/javascript">

<?php 

    if(count($_POST)){
        $query='';
        $i=1;
        foreach($_POST as $key=>$value):
            if($value!='' && !strpos($key, '_color')){
                if($key == 'Overall_Button_Zip' ){
                    $index = 'Shirt Button_Zip';
                }
                if($key == 'Shirt_Button_Zip'){
                    $index = 'Shirt_Button_Zip';
                }else{
                    $index = str_replace('_', ' ', $key);
                }
                
                if($i==1){
                    $query .= "$index,".$_POST[$key.'_color'].",$value";$i++;
                }else
                    $query .= "|$index,".$_POST[$key.'_color'].",$value";
            }
        endforeach;
        if($_POST['Overalls']!=''){
            $query .= '|Shirts,000000,4|Pants,000000,5';
        }
        echo '
        var qrcode = new QRCode(document.getElementById("qrcode"), {
                width : 200,
                height : 200
        });    
        qrcode.makeCode("https://prime.edu.pk/cpreview/index.php?query='.$query.'");';
        
    }
?>


</script>
