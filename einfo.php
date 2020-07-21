<?php
include('db.php');
session_start();
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
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
  <?php include './nav.php';?>
<?php
$x = $_SESSION["id"];

$s = "select * from gevents";
$result = mysqli_query($con,$s);
while  ($row = mysqli_fetch_row($result)){

if ($row[1] == $x){
echo'  <section style = "height :auto ; padding-top:6%; no-repeat center; background-color:white;"  >
<h1 align = "center" class = "mt-3"><b>'.$row[1].'</b></h1>
<div class = "container">
      <div class  = "row" style = "padding-top:3%; padding-bottom:5%;">
        <div class = "box2 col-md-6 mb-3">
          <img src = "./event_posters/'.$row[3].'" style = "width:100%;height:100%;">
        </div>
        <div class = "col-md-6">
          <p>'.$row[2].'</p>
          <br><br>
          <b>DATE</b>: '.$row[4].'
          <br><br>
          <b>Venue</b>: '.$row[5].'<br><br>
          <b>Event Coordinator</b>: '.$row[6].'
        </div>
      </div>
</div>

  </section>';
}
}
?>

<div style = " height:auto; ">
<?php include './footer.php';?></div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<script>
$(".fl").hide().fadeIn(2000);
</script>




</body>
</htmL>
