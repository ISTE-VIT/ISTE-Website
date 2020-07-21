<?php
include('db.php');

$limit = 16;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$s = "SELECT * FROM gallery LIMIT $start, $limit";
$result = mysqli_query($con,$s);

$s2 = "SELECT count(id) AS id FROM gallery";
$result1 = mysqli_query($con,$s2);


$ap = "select * from gallery";
$result6 = mysqli_query($con,$ap);
$num6 = mysqli_num_rows($result6);
$pages = ceil( $num6 / $limit );

if($page>1){
$Previous = $page - 1;
    
}

else{
    $Previous = $pages;
}
if($page<$pages){
$Next = $page + 1;
    
} 
else{
    $Next = 1;
}
?>
<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="./pictures/Iste-icon.ico">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135071074-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135071074-1');
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" href="./style.css">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    @media(max-width:935px)
    {
        .bring-up{
            margin-top:-15% !important;
        }
        .bring-up1{
            margin-top:-25% !important;
        }
    }
</style>





  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>




<div style = "background-color:black;">
  <?php include 'nav.php';?>
</div>


<section style="height: 60vh" class = "csiss" >

  <div class="carousel"   style = "z-index:0;">

      <div class="carousel-prev bring-up" ></div>
      <div class="carousel-next bring-up" ></div>
      <ul class="carousel-pagination h" >
          <li class="carousel-bullet h"></li>
          <li class="carousel-bullet h"></li>
          <li class="carousel-bullet h"></li>
          <li class="carousel-bullet h"></li>
          <li class="carousel-bullet h"></li>
      </ul>
      <ul class="carousel-container" >
          <li class="carousel-item">
                <img src = "./gp/g1.jpg" style= "height:auto; width:100%">
			</li>
          <li class="carousel-item">

                <img src = "./gp/g2.jpg" style= "height:auto; width:100%">
          </li>
          <li class="carousel-item">
                <img src = "./gp/g3.jpg" style= "height:auto; width:100%">

          </li>
          <li class="carousel-item">
                <img src = "./gp/g4.jpg" style= "height:auto; width:100%">
          </li>
          <li class="carousel-item">
                <img src = "./gp/g5.jpg" style= "height:auto; width:100%">
          </li>
      </ul>
  </div>


</div>
</section>








<section style = "height: auto; background-color:white;">



  <div class="container bring-up1" style = "width:100%;" >


      <div class="tz-gallery">

          <div class="row">
              <?php
                 while($photos = mysqli_fetch_array($result))
                 {
               

              echo'<div class=" col-sm-12 col-md-3">
                <a class = "lightbox" href="./gp/'.$photos['iname'].'">
                      <img src="./gp/'.$photos['iname'].'" alt="...">

                    </a>
              </div>';
                 }
              ?>
              <?php ?>

          </div>
        <br><br>
          <div class = "row justify-content-center">
        <nav  aria-label="Page navigation">
        <ul class="pagination">
          <li class = "page-item">
            <a class = "page-link" href="gallery.php?page=<?= $Previous; ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo; </span>
            </a>
          </li>
          <?php for($i = 1; $i<= $pages; $i++) : ?>
            <li class = "page-item "><a class = "page-link" href="gallery.php?page=<?= $i; ?>"><?= $i; ?></a></li>
          <?php endfor; ?>
          <li class = "page-item">
            <a class = "page-link" href="gallery.php?page=<?= $Next; ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      </div>
      </div>

  </div>




</section>


<div style = "background-color:black;">

<?php
include("footer.php");
 ?>
</div>


<script>

  var carousel = document.querySelector('.carousel');
  var container = carousel.querySelector('.carousel-container');
  var prevBtn = carousel.querySelector('.carousel-prev');
  var nextBtn = carousel.querySelector('.carousel-next');
  var pagination = carousel.querySelector('.carousel-pagination');
  var bullets = [].slice.call(carousel.querySelectorAll('.carousel-bullet'));
  var totalItems = container.querySelectorAll('.carousel-item').length;
  var percent = ((100 / totalItems));
  var currentIndex = 0;
  var i =0;
  function next() {
      slideTo(currentIndex + 1);
  }

  function prev() {
      slideTo(currentIndex - 1);
  }

function slideTo(index) {

      index = index < 0 ? totalItems - 1 : index >= totalItems ? 0 : index;
      container.style.WebkitTransform = container.style.transform = 'translate(-' + (index * percent) + '%, 0)';
      bullets[currentIndex].classList.remove('active-bullet');
      bullets[index].classList.add('active-bullet');
      currentIndex = index;
  }

  bullets[currentIndex].classList.add('active-bullet');
  prevBtn.addEventListener('click', prev, false);
  nextBtn.addEventListener('click', next, false);

setInterval(function(){
  next();

},2000)
  pagination.addEventListener('click', function(e) {
      var index = bullets.indexOf(e.target);
      if (index !== -1 && index !== currentIndex) {
          slideTo(index);
      }
  }, false);



</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>






</body>
</htmL>
