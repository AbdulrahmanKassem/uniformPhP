<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


</head>
<body>
<div class="container text-center">
<h3>A demo of Modal carousel</h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalCarousel">
  Click here to launch modal carousel
</button>

<!-- Modal -->
<div class="modal fade" id="ModalCarousel" tabindex="-1" role="dialog" aria-labelledby="ModalCarouselLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">

 <!-- Sliding images statring here --> 
   <div class="carousel-inner"> 
    <div class="item"> 
      <img src="images/model_videos/1.jpeg" alt="banana"> 
    </div> 
    <div class="item"> 
      <img src="images/model_videos/2.jpeg" alt="currant"> 
   </div> 
    <div class="item"> 
      <img src="images/model_videos/3.jpeg" alt="mango"> 
    </div>
    <div class="item active"> 
      <img src="images/model_videos/4.jpeg" alt="strawberries"> 
    </div> 
     
  </div> 
  <!-- Next / Previous controls here -->
  <a class="left carousel-control" href="#carousel-modal-demo" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-modal-demo" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  
</div>
    </div>
  </div>
</div>
</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</body>
</html>