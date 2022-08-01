<?php include_once 'header.php'; ?>
<link href="css/youtube.css" rel="stylesheet">

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-body text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <!-- <iframe width="100%" height="415" src="32E7dReissc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            
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
  </div>

	<!--Two Default Section-->
    <section class="about-section">
        <div class="auto-container">
            
            <div class="row clearfix">

            <div class="about-column column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner">
                      <h2 style="margin-bottom: 3em" class="title text-primary text-center">
                      <?=$_localize['templates'][$_SESSION['lang']]?>
                      </h2>
                    </div>
                    <div style="text-align:center;">
                        <div class="row template-videos">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="pmeJFhH5F5E">
                                    <img src="images/model_videos/1.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="GuZB1rjsFJk">
                                    <img src="images/model_videos/2.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="me3Y3PygN2I">
                                    <img src="images/model_videos/3.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="2o5ZsQsbvWs">
                                    <img src="images/model_videos/4.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="5M9boiqkhwU">
                                    <img src="images/model_videos/5.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="dKbWORYu0QI">
                                    <img src="images/model_videos/6.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>

                        </div>
                        
                    </div>
                </div>
               
                
            </div>
            
        </div>
    </section>
    <!--End Two Default Section-->


	
  <?php include_once 'footer.php'; ?>

  <script>
$(function(){

  var tag = document.createElement("script");

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName("script")[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;

  $(".video-link").click(function(e){
    e.preventDefault();
    /* $("#videoModal iframe").attr("src", ($(this).attr('data-src')+"?autoplay=1")); */
    player = new YT.Player("player", {
      host: "https://www.youtube.com",
      videoId: $(this).attr('data-src'),
      playerVars: {
        enablejsapi: 1,
        playsinline: 0,
        start: 0,
        disablekb: 0,
        autoplay: 1
      },
      events: {
        'onStateChange': onPlayerStateChange
      }
    });
  });

  function onPlayerStateChange(event) {
    if(event.data == YT.PlayerState.ENDED)
      player.stopVideo();
  }

  $('#videoModal').on('hidden.bs.modal', function () {
    /* $("#videoModal iframe").attr("src", ""); */
    player.destroy();
  });

});

  </script>
