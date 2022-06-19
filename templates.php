<?php include_once 'header.php'; ?>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-body text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/32E7dReissc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/pmeJFhH5F5E">
                                    <img src="images/model_videos/1.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/GuZB1rjsFJk">
                                    <img src="images/model_videos/2.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/me3Y3PygN2I">
                                    <img src="images/model_videos/3.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/2o5ZsQsbvWs">
                                    <img src="images/model_videos/4.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/5M9boiqkhwU">
                                    <img src="images/model_videos/5.jpeg" style="height:500px;margin-bottom:20px" />
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="#videoModal" class="video-link" data-toggle="modal" data-src="https://www.youtube.com/embed/dKbWORYu0QI">
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

  $(".video-link").click(function(e){
    e.preventDefault();
    $("#videoModal iframe").attr("src", ($(this).attr('data-src')+"?autoplay=1"));
  });

  $('#videoModal').on('hidden.bs.modal', function () {
    $("#videoModal iframe").attr("src", "");
  });

});

  </script>
