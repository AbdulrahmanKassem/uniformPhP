<?php include_once 'header.php'; ?>
	<!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/4.jpeg);">
    	<div class="auto-container">
        	<h1>الدفع</h1>
        	<ul class="bread-crumb">
                <li><a href="index-2.html">الرئيسية</a></li>
                <li class="active">الباركود</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">
            	
            
            
            
            <div class="default-title"><h2>الباركود</h2></div>
            
           	<!--Cart Outer-->
            <div class="cart-outer">
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
