<html>
<head>
<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("user",$con);
session_start();
if(empty($_SESSION['user']))
{
	header("location:main.php");
}
?>
<style>
	ul li{
		display: inline-block;
	}
	.mar{
		margin-top:-30px;
		margin-bottom: 50px;
	}
	.marg{
		margin-top: 10px;
	}
	.marh{
		margin-top: 80px;
	}
	.m{
		margin-left: 10px;
	}
	.m2{
		margin-left: 150px;
	}
		.marb{
				margin-left:380px;
				margin-right:420px;
			}
			h1{
				display: inline-flex;
			}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
      margin: auto;
  }
</style>
<link rel="stylesheet" type="text/css" href="bootstrap.css"/ >
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>
		Project
	</title>
</head>
<body>
<div class="container-fluid">
<div class="jumbotron">

<!--Navigation bar
-->
	<nav class="navbar navbar-inverse mar">
		<div class="navbar-header">
		<a class="navbar-brand" href="https://www.ieee.org/index.html" style="width:90px;height:50px;margin-top:-10px;"><img src="logo.jpg" class="img-circle img-responsive"></a>
		</div>

	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
		<li class="active"><a href="#">Home </a></li>

	<li>	 <div class="dropdown ">
  <button class="btn btn dropdown-toggle marg" style="background-color:#1a1a1a ; color:#a6a6a6"   type="button" data-toggle="dropdown">Manipal
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="http://manipal.info/placestovisit.html">Around Manipal</a></li>
    <li><a href="https://www.tripadvisor.in/Hotels-g737163-Manipal_Karnataka-Hotels.html">Hotels</a></li>
    <li><a href="https://www.tripadvisor.in/Restaurants-g737163-Manipal_Karnataka.html">Bars And Restaurants</a></li>
  </ul>
</div></li>
		<li><a href="#">Projects</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Photos</a></li>
		<li><a href="#">Contact Us</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
          <li>
			<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a>			
		  </li>
      </ul>
		<ul class="nav navbar-nav navbar-right">
          <li><a href="user.php"><?php echo $_SESSION['user']; ?>
		  </li>
      </ul>

		</div>
	</nav>
<!--Navbar ends -->

<!--carousal -->
<div class="row">

<div class="col-sm-6 marg">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active m">
        <center><img src="logo.jpg" alt="Chania" width="350" height="300"></center>
      </div>

      <div class="item m">
       <center> <img src="manipal_group.jpg" alt="Chania" width="350" height="300">
      </center>
      </div>
    
      <div class="item m">
      <center>  <img src="swag.jpg" alt="Flower" width="350" height="300">
	  </center>  
    </div>

      <div class="item m">
      <center><img src="swagwh.jpg" alt="Flower" width="350" height="300"></center>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control m" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control m" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



	
</div>
<div class="col-sm-6 ">
	<h1 class="marh m2"><center> IEEE SBM </center> </h1>
				
				<br><br>			
					<div class="row">
			<h4>		<center><a href="upcoming_events.html" class="lin" style="background-color:#99bbff; border-radius:8px; padding-top:8px ;padding-bottom:8px; padding-right:10px;padding-left:10px;text-decoration-color:#001a33;">	<span class="glyphicon glyphicon-zoom-in"></span>Upcoming events</a>
			&nbsp &nbsp	<a href="blog.php" class="lin" style="background-color:#99bbff; border-radius:8px; padding-top:8px ;padding-bottom:8px; padding-right:10px;padding-left:10px;text-decoration-color:#001a33;"><span class="glyphicon glyphicon-zoom-in"></span>Our Blog</a></center></h4>
</div>
			

<!--caraousal ends-->
<!--page part-->
	<div id="body" class="row">
	<div class="col-sm-12" id="matter">

	</div>
<!--ends -->
	</div>
</div>
</body>
</html>