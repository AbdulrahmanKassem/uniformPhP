<?php include_once 'header.php'; ?>

<link href="css/youtube.css" rel="stylesheet">
	<!--Two Default Section-->
    <section class="about-section">
        <div class="auto-container">
            
            <div class="row clearfix">

            <div class="about-column column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner">
                      <h2 style="margin-bottom: 3em" class="title text-primary text-center">
                        <?=$_localize['explainer_video_heading'][$_SESSION['lang']]?>
                      </h2>
                    </div>
                    
                    <!-- <div style="text-align:center;">
                        <iframe width="560" height="355" src="https://www.youtube.com/embed/E4R4WuMDLAQ" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> -->
                    <div id="player-size" style>
                      <div id="cropping-div" style>
                        <div id="div-to-crop" style>
                          <div id="player-wrapper">
                            <!-- 1. The <iframe> (and video 
                            player) will replace this <div> 
                            tag. -->
                            <div id="player"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    <!--End Two Default Section-->

    <script>
      var tag = document.createElement("script");

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName("script")[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;

      function onYouTubeIframeAPIReady() {
        player = new YT.Player("player", {
          host: "https://www.youtube.com",
          videoId: "E4R4WuMDLAQ",
          playerVars: {
            enablejsapi: 1,
            playsinline: 0,
            start: 0,
            disablekb: 0
          },
          events: {
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerStateChange(event) {
        if(event.data == YT.PlayerState.ENDED)
          player.stopVideo();
      }
    </script>


	
  <?php include_once 'footer.php'; ?>
