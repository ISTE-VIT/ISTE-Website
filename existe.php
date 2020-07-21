<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ISTE-VIT</title>
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
<style>

.card:hover img {
    transform: scale(1, 1)
}

.content {
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  width: 100%;
}
#myVideo {

  min-height: 100%;
  min-width:100%;
  background: #fff;
  top: 0; right: 0; bottom: 0; left: 0;

}

.ul {
  display: flex;
  position: absolute;

}

.ul li {
  list-style: none;
}

.ul li a {
  width: 40px;
  height: 40px;
  background-color: #fff;
  text-align: center;
  font-size: 24px;
  margin: 0 10px;
  display: block;
  border-radius: 50%;
  position: relative;
  overflow: hidden;
  border: 3px solid #fff;
  z-index: 1;
}

.ul li a .icon {
  position: relative;
  color: #262626;
  transition: .5s;
  z-index: 3;
}

.ul li a:hover .icon {
  color: #fff;
}

.ul li a:before {
  content: "";
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 100%;
  background: #f00;
  transition: .5s;
  z-index: 2;
}

.ul li a:hover:before {
  top: 0;
}

.ul li:nth-child(1) a:before{
  background: #3b5999;
}

.ul li:nth-child(2) a:before{
	background: #2176ff;
}

</style>



</head>
<body>

<?php include './nav.php';?>

<section class="backimgt ns" style="height :50vh;  no-repeat center;">


    <div style="vertical-align:middle; background-color:rgb(0,0,0,0.5); height:100%;">
      <h1 style="color:white; font-family:'bold Montserrat',sans-serif; padding-top:13%;" align="center"><b>Ex-ISTEians</b></h1>
    </div>
    <!--<div  align = "center">
      <ol class="breadcrumb2">
        <li><a href="./index.php">Home</a></li>
        <li>Events</li>
      </ol>
    </div>-->
  </section>
  

<div style="background-color:white;">	
	<div class="container">
	<?php
		include './db.php';
		$result=mysqli_query($con,"SELECT * FROM `existe` WHERE 1");
		
		while($rows=mysqli_fetch_row($result))
		{
		$flag=0;
		echo '<div class="row">';
		
		echo '<div class="card col-10 col-md-3 ml-auto mr-auto" style=" padding: 1% 1% 1% 1% !important; height:100%; margin-top:1%; margin-bottom:1%;">
				<img src="./pictures/'.$rows[5].'" class="card-img-top" style="border-radius:100%; height:75%;  " alt="...">
				<div class="card-body" align="center" >
					<p class="card-text" style="margin-bottom:	0;"><b>'.$rows[0].'</b></p>
					<p class="card-text" style="margin-bottom:0;">'.$rows[1].'</p>
					<p class="card-text">'.$rows[2].'</p>
					</div>
					<div class="card-footer align-content-center" style="padding:0% 25% 15% 25%;">
					<ul class="ul">
					  <li>
						<a href="'.$rows[3].'" class="card-link"><i class="fa fa-facebook icon"> </i></a>
					  </li>
					  <li>
						<a href="'.$rows[4].'" class="card-link"><i class="fa fa-linkedin icon"> </i></a>
					</li>
					</ul>
					
				</div>
				
				</div>';
		
		if($rows=mysqli_fetch_row($result)){
		echo '<div class="card col-10 col-md-3 ml-auto mr-auto" style=" padding: 1% 1% 1% 1% !important; height:100%; margin-top:1%; margin-bottom:1%;">
				<img src="./pictures/'.$rows[5].'" class="card-img-top" style="border-radius:100%; height:75%;  " alt="...">
				<div class="card-body" align="center" >
					<p class="card-text" style="margin-bottom:	0;"><b>'.$rows[0].'</b></p>
					<p class="card-text" style="margin-bottom:0;">'.$rows[1].'</p>
					<p class="card-text">'.$rows[2].'</p>
					</div>
					<div class="card-footer align-content-center" style="padding:0% 25% 15% 25%;">
					<ul class="ul">
					  <li>
						<a href="'.$rows[3].'" class="card-link"><i class="fa fa-facebook icon"> </i></a>
					  </li>
					  <li>
						<a href="'.$rows[4].'" class="card-link"><i class="fa fa-linkedin icon"> </i></a>
					</li>
					</ul>
					
				</div>
				
				</div>';
				$flag=1;}

		if($rows=mysqli_fetch_row($result)){
		echo '<div class="card col-10 col-md-3 ml-auto mr-auto" style=" padding: 1% 1% 1% 1% !important; height:100%; margin-top:1%; margin-bottom:1%;">
				<img src="./pictures/'.$rows[5].'" class="card-img-top" style="border-radius:100%; height:75%;  " alt="...">
				<div class="card-body" align="center" >
					<p class="card-text" style="margin-bottom:	0;"><b>'.$rows[0].'</b></p>
					<p class="card-text" style="margin-bottom:0;">'.$rows[1].'</p>
					<p class="card-text">'.$rows[2].'</p>
					</div>
					<div class="card-footer align-content-center" style="padding:0% 25% 15% 25%;">
					<ul class="ul">
					  <li>
						<a href="'.$rows[3].'" class="card-link"><i class="fa fa-facebook icon"> </i></a>
					  </li>
					  <li>
						<a href="'.$rows[4].'" class="card-link"><i class="fa fa-linkedin icon"> </i></a>
					</li>
					</ul>
					
				</div>
				
				</div>';}
		else if($flag==1)
		{
			echo '<div class="card col-10 col-md-3 ml-auto mr-auto" style=" padding: 1% 1% 1% 1% !important; height:100%; margin-top:1%; margin-bottom:1%; visibility:hidden;">
				
				</div>';
		}
		
		echo '</div>';
		}
	?>
	</div>

	<?php include './footer.php';?>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>