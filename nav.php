<title>ISTE-VIT</title>
<div align="center" id="overlay">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only">Loading...</span>
</div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up " style=" justify-content: center;color:white; align-items: center; "></i></button>

<div class="pad" style="font-family:'bold Montserrat',sans-serif;">
  <nav class="navbar navbar-expand-lg navbar-dark mynava   bg " style = "z-index:999">
    <a class="navbar-brand" href="./index.php">
      <img src="./pictures/Iste-logo.png" width="60" height="60" alt="...">
    </a>
    <button class="navbar-toggler" type=" button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style = "">
      <ul class="navbar-nav topnav ml-auto">
        <li class="nav-item  li">
          <a class="nav-link a " href="./index.php">Home</a>
        </li>
        <li class="nav-item  li">
          <a class="nav-link a " href="./story.php"><span class="example">Our Story</span></a>
        </li>
        <li class="nav-item li dropdown">
        <a class="nav-link a2 " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


          Events  <i class="fa fa-caret-down" style = "color:white;"></i>


        </a>
        <div class="dropdown-menu  animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="./horizon.php" style = "font-size:18px;">Horizon</a>
            <a class="dropdown-item" href="./riviera.php" style = "font-size:18px;">Riviera</a>
            <a class="dropdown-item" href="./gravitas.php" style = "font-size:18px;">GraVITas</a>
            <a class="dropdown-item" href="./tfv.php" style = "font-size:18px;">TFV</a>
          </div>
        </li>

        <li class="nav-item li">
          <a class="nav-link a " href="./gallery.php">Gallery</a>
        </li>

        
    </div>
</nav>
</div>

<script>
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 660 || document.documentElement.scrollTop > 660) {
      document.getElementById("myBtn").style.display = "block";
      document.getElementById("myBtn").style.opacity = "1";



    } else {
      document.getElementById("myBtn").style.opacity = "0";

    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>