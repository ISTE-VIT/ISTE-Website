<?php
include('db.php');
session_start();
if(isset($_POST["id"])){
  $_SESSION["id2"] =  $_POST["id"];
  header("Location: ./reinfo.php");
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
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
</style>
<body>




    <?php include './nav.php';?>


  <section class="backimg ns" style="height :50vh;  no-repeat center;overflow-x:hidden;">


    <div class = "row justify-content-center"style="text-align:center;padding-top:12%;">
      <img class = "col-6 col-md-2" src = "./pictures/riviera_logo.png">
    </div>
    <!--<div  align = "center">
      <ol class="breadcrumb2">
        <li><a href="./index.php">Home</a></li>
        <li>Events</li>
      </ol>
    </div>-->
  </section>


<!--
<section style = "height: auto; background-color: white; padding-top:2%; padding-bottom:2%;font-family: Montserrat, sans-serif;
  font-size: 15px;
  background-color: #f5f5f5;" >
<div class = "container">
<div class="row" style = " overflow-x:hidden;">

<?php

$s = "select * from revents";
$result = mysqli_query($con,$s);
while  ($row = mysqli_fetch_row($result)){

  echo '<div class = "col-md-12">

<div class = "box" >
<div class = "box2">
  <h1 class = "he">'.$row[1].'</h1>
  <div class="contente">
    <p class = "p">'.substr($row[2],0,50).'</p>

    <form method  = "post">
    <input type="hidden" name="id" value="' . $row[1] . '" /><input type="submit" id="'.$row[1].'" class="btn btn-danger" name="Add" value ="Know more">
    </form>
  </div>
</div>
  <div class="img"  style = "height:70%; width:70%;"><img class = "img2"src="./event_posters/'.$row[3].'"/>
  </div>
</div>

</div>';
}
?>








</div>
</div>
</section>-->
 <section style="height : auto; background-color: white;padding-top:4%;">


    <div class="container ">
<div class="row justify-content-center">

        <?php
		
		
$s = "select * from revents";
$result = mysqli_query($con,$s);
while  ($row = mysqli_fetch_row($result)){

	echo '	<div class = "col-md-8" style = "padding-bottom:5%;">
  <div class=" box3" style="width: 100%; ">
  <div class="card-body">
    <div class="media">

  <img src="./event_posters/'.$row[3].'" class="mr-3 wid " style = "width:40%;!important"alt="...">
  <div class="media-body ml-2" align = "center">
  <h4 class="mt-0 mb-2"><b>  '.$row[1].'</b></h4>
  <p>'.substr($row[2],0,150).'...</p>
	<div style = "margin-top:50px">
    <form method  = "post">
    <input type="hidden" name="id" value="' . $row[1] . '" /><input type="submit" id="'.$row[1].'" class="btn btn-danger" name="Add" value ="Know more">
    </form>
	</div>


  </div>
</div>
  </div>
</div>
</div>';}
        ?>


     </div>


    </div>

    <br><br>
  </section>

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
