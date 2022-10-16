<?php
include_once 'header.php';
include 'products/classes/product.php';
include 'products/products_en.php';
include 'products/products_ar.php';
$min = 0;
$sec = 0;
?>
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
          <h3 class="title text-primary text-center">
            <?= $_localize['guid_heading'][$_SESSION['lang']] ?>
          </h3>
          <div class="title font-weight-bold  text-center">
            <a class="h3" data-toggle="modal" data-target="#ModalCarousel"><?= $_localize['final_design'][$_SESSION['lang']] ?></a>
          </div>
          <div class="text">
            <div class="table-responsive">
              <?PHP
              if ($_SESSION['lang'] == 'en') {
              ?>
                <table class="table table-bordered text-center" dir="ltr">
                  <tbody>
                    <tr>
                      <th rowspan="2" class="text-center">the number</th>
                      <th rowspan="2" class="text-center"> stages</th>
                      <th rowspan="2" class="text-center text-success"> Type of machinery or equipment </th>
                      <th rowspan="2" class="text-center text-success"> The shape of the machine or equipment </th>
                      <th rowspan="2" class="text-center text-success"> Operation form </th>
                      <th colspan="2" class="text-center"> Production time (sec)</th>
                      <th rowspan="2" class="text-center"> Video production stages</th>
                    </tr>
                    <tr>
                      <th>min</th>
                      <th>sec</th>
                    </tr>
                    <?php
                    foreach ($products_en as $product) {
                      $min += intval($product->getTime_m());
                      $sec += intval($product->getTime_s());
                      // var_dump($product);
                      echo '<tr>';
                      echo '<td>' . $product->getId() . '</td>';
                      echo '<td>' . $product->getDescription() . '</td>';
                      echo '<td>' . $product->getType() . '</td>';
                      echo '<td><img src="' . $product->getImage() . '"/></td>';
                      echo '<td>
                                            <img src="' . $product->getOperation_img() . '"/>
                                            <p>' . $product->getOperation_txt() . '</p>
                                            </td>';
                      echo '<td>' . $product->getTime_m() . '</td>';
                      echo '<td>' . $product->getTime_s() . ' </td>';
                      echo '<td >
                                            <a href="#videoModal" class="video-link" data-toggle="modal" data-src="' . $product->getVideo() . '">
                                            <i class="fa fa-play-circle fa-lg"></i>
                                            </a>
                                        </td>';
                      echo '</tr>';
                    }
                    ?>
                    <tr>
                      <td></td>
                      <td>Total</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo $min ?></td>
                      <td><?php echo $sec ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Total in minutes</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td colspan="2"><?php echo $min + ($sec / 60) ?></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              <?PHP
              } else {
              ?>
                <table class="table table-bordered text-center" dir="rtl">
                  <tr>
                    <th rowspan="2" class="text-center">الرقم</th>
                    <th rowspan="2" class="text-center"> المراحل</th>
                    <th rowspan="2" class="text-center text-success">نوع الماكينات أو المُعدة</th>
                    <th rowspan="2" class="text-center text-success">شكل الماكينة أو المُعدة</th>
                    <th rowspan="2" class="text-center text-success">شكل العملية </th>
                    <th colspan="2" class="text-center">زمن الإنتاج (ثانية</th>
                    <th rowspan="2" class="text-center">فيديو مراحل الانتاج</th>
                  </tr>
                  <tr>
                    <th>دقيقة</th>
                    <th>ثانية</th>
                  </tr>
                  <?php
                  foreach ($products_ar as $product) {
                    $min += intval($product->getTime_m());
                    $sec += intval($product->getTime_s());
                    // var_dump($product);
                    echo '<tr>';
                    echo '<td>' . $product->getId() . '</td>';
                    echo '<td>' . $product->getDescription() . '</td>';
                    echo '<td>' . $product->getType() . '</td>';
                    echo '<td><img src="' . $product->getImage() . '"/></td>';
                    echo '<td>
                                            <img src="' . $product->getOperation_img() . '"/>
                                            <p>' . $product->getOperation_txt() . '</p>
                                            </td>';
                    echo '<td>' . $product->getTime_m() . '</td>';
                    echo '<td>' . $product->getTime_s() . ' </td>';
                    echo '<td >
                                            <a href="#videoModal" class="video-link" data-toggle="modal" data-src="' . $product->getVideo() . '">
                                            <i class="fa fa-play-circle fa-lg"></i>
                                            </a>
                                        </td>';
                    echo '</tr>';
                  }
                  ?>
                  <tr>
                    <td></td>
                    <td>الاجمالي</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $min ?></td>
                    <td><?php echo $sec ?></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>الاجمالي بالدقائق</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="2"><?php echo $min + ($sec / 60) ?></td>
                    <td></td>
                  </tr>
                </table>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="ModalCarousel" tabindex="-1" role="dialog" aria-labelledby="ModalCarouselLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">

        <!-- Sliding images statring here -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/products/1.jpg" alt="final design 1">
          </div>
          <div class="item">
            <img src="images/products/2.jpg" alt="final design 2">
          </div>
          <div class="item">
            <img src="images/products/3.jpg" alt="final design 3">
          </div>

        </div>
        <!-- Next / Previous controls here -->
        <a class="left carousel-control" href="#carousel-modal-demo" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="right carousel-control" href="#carousel-modal-demo" data-slide="next">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

      </div>
    </div>
  </div>
</div>


<!--End Two Default Section-->
<?php include_once 'footer.php'; ?>

<script>
  $(function() {
    var tag = document.createElement("script");
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;
    $(".video-link").click(function(e) {
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
      if (event.data == YT.PlayerState.ENDED)
        player.stopVideo();
    }
    $('#videoModal').on('hidden.bs.modal', function() {
      /* $("#videoModal iframe").attr("src", ""); */
      player.destroy();
    });
  });
</script>