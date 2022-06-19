<?php 
//require('datalayer/session.php');
include_once 'header.php'; ?>
<link rel="stylesheet" href="TemplateData/style.css">
<link rel="manifest" href="manifest.webmanifest">


<section class="cart-section">
    <div class="auto-container">

        <!--Cart Outer-->
        <div class="cart-outer">

            <div id="unity-container" style="position: unset;">
                <canvas id="unity-canvas" style=""></canvas>
                <div id="unity-loading-bar">
                    <div id="unity-logo"></div>
                    <div id="unity-progress-bar-empty">
                        <div id="unity-progress-bar-full"></div>
                    </div>
                </div>
                <div id="unity-warning"> </div>
            </div>
            <br>

            <div class="cart-options clearfix">

                <div class="pull-right">
                    <form action="checkout.php" id="myForm" method="post" >
                        <input type="hidden" name="Collars">
                        <input type="hidden" name="Overalls">
                        <input type="hidden" name="Overall Button_Zip">
                        <input type="hidden" name="Overall Pant Pockets">
                        <input type="hidden" name="Overall Shirt Pockets">
                        <input type="hidden" name="Pant Pockets">
                        <input type="hidden" name="Tool Pockets">
                        <input type="hidden" name="Pants">
                        <input type="hidden" name="Shirt Button_Zip">
                        <input type="hidden" name="Shirts">
                        <input type="hidden" name="Shirt Pockets">
                        
                        <input type="hidden" name="Sleeves">
                        <input type="hidden" name="Collars_color">
                        <input type="hidden" name="Overalls_color">
                        <input type="hidden" name="Overall Button_Zip_color">
                        <input type="hidden" name="Overall Pant Pockets_color">
                        <input type="hidden" name="Overall Shirt Pockets_color">
                        <input type="hidden" name="Pant Pockets_color">
                        <input type="hidden" name="Pants_color">
                        <input type="hidden" name="Tool Pockets_color">
                        <input type="hidden" name="Shirt Button_Zip_color">
                        <input type="hidden" name="Shirts_color">
                        <input type="hidden" name="Shirt Pockets_color">
                        <input type="hidden" name="Sleeves_color">
                        
                        <button onclick="sendmsg('checkout.php')" type="button" class="theme-btn btn-style-one"> إكمال الطلب </button>
                        <a href="barcode.php" type="button" class="theme-btn btn-style-one" target="_blank"> محاكاة الزي</a>
                    </form>

                </div>

            </div>




        </div>

    </div>
</section>


<script>
      window.addEventListener("load", function () {
        if ("serviceWorker" in navigator) {
          navigator.serviceWorker.register("ServiceWorker.js");
        }
      });

      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var warningBanner = document.querySelector("#unity-warning");

      // Shows a temporary message banner/ribbon for a few seconds, or
      // a permanent error message on top of the canvas if type=='error'.
      // If type=='warning', a yellow highlight color is used.
      // Modify or remove this function to customize the visually presented
      // way that non-critical warnings and error messages are presented to the
      // user.
      function unityShowBanner(msg, type) {
        function updateBannerVisibility() {
          warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
        }
        var div = document.createElement('div');
        div.innerHTML = msg;
        warningBanner.appendChild(div);
        if (type == 'error') div.style = 'background: red; padding: 10px;';
        else {
          if (type == 'warning') div.style = 'background: yellow; padding: 10px;';
          setTimeout(function() {
            warningBanner.removeChild(div);
            updateBannerVisibility();
          }, 5000);
        }
        updateBannerVisibility();
      }

      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/b34.loader.js";
      var config = {
        dataUrl: buildUrl + "/b34.data",
        frameworkUrl: buildUrl + "/b34.framework.js",
        codeUrl: buildUrl + "/b34.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "clothing",
        productVersion: "0.1",
        showBanner: unityShowBanner,
      };

      // By default Unity keeps WebGL canvas render target size matched with
      // the DOM size of the canvas element (scaled by window.devicePixelRatio)
      // Set this to false if you want to decouple this synchronization from
      // happening inside the engine, and you would instead like to size up
      // the canvas DOM size and WebGL render target sizes yourself.
      // config.matchWebGLToCanvasSize = false;

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:
        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);
      }

      loadingBar.style.display = "block";

      var script = document.createElement("script");
      var unityIns = null;
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
          loadingBar.style.display = "none";
          unityIns = unityInstance;
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);
      function sendmsg(page) {
        var form = document.getElementById("myForm");
        form.action = page;
        unityIns.SendMessage('main_character', 'jsCall');
    }
    </script>
<?php include_once 'footer.php'; ?>
