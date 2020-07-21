<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<?php
include('db.php');
$msg = "";
if (isset($_POST['subscribe']))
{
	$email = $_POST['email'];
	$s = "select * from updates";
	$result = mysqli_query($con,$s);
	$n = mysqli_num_rows($result)+1;
	$sql = "insert into updates(id,email) values ('$n','$email')";
	$result2 = mysqli_query($con,$sql);
	$msg = "Thank You For Subscribing!";
}
?>

<footer class=" text-white " style = "height : auto;background-color:rgb(0,0,0) " >
<br>

    <div class="container container-fluid py-3"  style="font-family:'bold Montserrat',sans-serif;">
        <div class="row ">

            <div class="col-md-3 foo" align = "left">
              <a href = "./index.php"></a><img src="./pictures/Iste-logo.png" style="width:15%;" class="size"align="center" alt="ISTE-VIT"></a>
              <h7>&nbsp ISTE-VIT</h7><br><br>
              <p>VIT University Vellore<br> Tamil Nadu<br> 632014<br><br></p>
              <p style = "font-size:12px;" class=" d-none d-sm-block">Copyright © 2019. ISTE-VIT<br>
All Rights Reserved.</p>

            </div>
            <br><br>
            <div class="col-md-3 foo"  align = "left"  >
              <h4 style = "font-weight: 600; ">SITE LINKS</h4>
              <a href = "./index.php" style = "color:white;">Home</a><br>
              <a href = "./story.php" style = "color:white;">Our Story</a><br>
              <a href = "./team.php" style = "color:white;">Team</a><br>
              <a href = "./dev.php" style = "color:white;">Developers</a><br>
              <!--a href = "./existe.php" style = "color:white;">Ex-ISTEians</a><br-->
              <a href = "./gallery.php" style = "color:white;">Gallery</a><br><br>
            </div>


            <div class="col-md-3 foo"  align = "left">
              <h4 style = "font-weight: 600; ">CONTACT US</h4>
              <p><i class="fa fa-envelope "></i>&nbsp&nbsp&nbsp&nbsp iste@vit.ac.in<p>
              <p><i class=" fa fa-phone"></i>&nbsp&nbsp&nbsp&nbsp 9700449833<p>

            </div>

            <div class="col-md-3 foo"  align = "left">
              <h4 style = "font-weight: 600; "> Sign Up For Updates</h4> 	 
			  <?php
				
				echo $msg;
					?>
		
				<form action="" method = "post">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                  </div>
				  
                  <button type="submit" name = "subscribe" class="btn " style = "background-color:#3a9ac8; color:white;" >&nbsp&nbspSubscribe&nbsp&nbsp</button>
                </form>
            </div><br><br><br>
    <p style = "font-size:12px; padding-left:31%;" class="mt-2 mb-0 col-12 d-block d-sm-none">Copyright © 2019. ISTE-VIT<br></p>
    
    <p style = "font-size:12px; padding-left:36.5%;" class="col-12 d-block d-sm-none">All Rights Reserved.</p>
        </div><br>
        <div class = "row d1" style = "padding-top:1%;padding-left:1%;padding-bottom:1%; border-top: 2px solid white;" >

<ul class = "ul mt-1">

  <li class = "li">
    <a href="https://www.facebook.com/ISTE.VIT/" target="_blank"><i class="fa fa-facebook icon" ></i></a>
  </li>
  <li class = "li">
    <a href="https://instagram.com/iste_vit_vellore?igshid=12xhs1luslzk0" target="_blank"><i class="fa fa-instagram icon"></i></a></li>

</ul>
        </div>
    </div>
    <br><br>
</footer>


<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

<script src = "loader.js"></script>
