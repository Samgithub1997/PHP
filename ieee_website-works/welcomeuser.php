<html>
<head>
<?php 
require 'ip.php';
$con=mysql_connect("localhost","root","");
mysql_select_db("user",$con);
session_start();
if(empty($_SESSION['user']))
{
	header("location:main.php");
}
$u=$_SESSION['user'];
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
	.botfram{
		position: absolute;
		margin-left:-14px;
		margin-right:20px;
		width:91%;
		height:55px;
		bottom:0px;
		overflow:hidden;
		background-color:#0E0D0D;
		color:#e0e0d1;
		border-radius:9px;
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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		$(window).unload(function(){
			var a = confirm(' Are You Sure YOu Want To Leave This Page ');
			if (a){
				return true;
			}
			else{
				return false;
			}
		});
			
			$('.up').click(function(){
			alert(" No upcoming events ! Wait till end of August.. Thanks for visiting BTW  :) ");
		});
		});
		
		
		
	</script>
	<title>
		Project
	</title>
</head>
<body onload="alert (' Welcome <?php echo $_SESSION['user'];?> !'  ) ;	">
<div class="container-fluid">
<div class="jumbotron">

<!--Navigation bar -->
	<nav class="navbar navbar-inverse mar">
		<div class="navbar-header">
		<a class="navbar-brand" href="https://www.ieee.org/index.html" style="width:90px;height:50px;margin-top:-10px;"><img src="logo.jpg" class="img-circle img-responsive"></a>
		</div>

	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
		<li class="active"><a href="#hom">Home </a></li>

	<li>	 <div class="dropdown ">
  <button class="btn btn dropdown-toggle marg" style="background-color:#1a1a1a ; color:#a6a6a6"   type="button" data-toggle="dropdown">Manipal
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="http://manipal.info/placestovisit.html">Around Manipal</a></li>
    <li><a href="https://www.tripadvisor.in/Hotels-g737163-Manipal_Karnataka-Hotels.html">Hotels</a></li>
    <li><a href="https://www.tripadvisor.in/Restaurants-g737163-Manipal_Karnataka.html">Bars And Restaurants</a></li>
  </ul>
</div></li>
		<li><a href="#aboutus">About Us</a></li>
		<li><a href="#photos">Photos</a></li>
		<li><a href="#contactus">Contact Us</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
          <li>
			<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a>			
		  </li>
      </ul>
		<ul class="nav navbar-nav navbar-right">
          <li><a href="user.php"><?php echo $u; ?></a>
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
			<h4>		<center><a  class="up" id="lin" style="background-color:#99bbff; border-radius:8px; padding-top:8px ;padding-bottom:8px; padding-right:10px;padding-left:10px;text-decoration-color:#001a33;">	<span class="glyphicon glyphicon-zoom-in"></span>Upcoming events</a>
			&nbsp &nbsp	<a href="blog.php" id="lin" style="background-color:#99bbff; border-radius:8px; padding-top:8px ;padding-bottom:8px; padding-right:10px;padding-left:10px;text-decoration-color:#001a33;"><span class="glyphicon glyphicon-zoom-in"></span>Our Blog</a></center></h4>
</div>
			
</div>
<!--caraousal ends-->
<!--page part-->
	<div id="body" class="row">
	<div class="col-sm-12" id="matter">
		<div id="hom">
			<div id="h"><h3><b><u><center>Institute of Electrical and Electronics Engineers </center></u></b></h3></div><br><br>
			<div id="cont"><p>IEEE stands for the "Institute of Electrical and Electronics Engineers". The Association is chartered under this full legal name. IEEE's membership has long been composed of engineers and scientists. Allied professionals who are members include computer scientists, software developers, information technology professionals, physicists, and medical doctors, in addition to IEEE's electrical and electronics engineering core. For this reason the organization no longer goes by the full name, except on legal business documents, and is referred to simply as IEEE.</p><br>
			<p>The IEEE is dedicated to advancing technological innovation and excellence. It has about 430,000 members in about 160 countries, slightly less than half of whom reside in the United States..<br>IEEE is one of the leading standards-making organizations in the world. IEEE performs its standards making and maintaining functions through the IEEE Standards Association (IEEE-SA). IEEE standards affect a wide range of industries including: power and energy, biomedical and healthcare, Information Technology (IT), telecommunications, transportation, nanotechnology, information assurance, and many more. In 2013, IEEE had over 900 active standards, with over 500 standards under development. One of the more notable IEEE standards is the IEEE 802 LAN/MAN group of standards which includes the IEEE 802.3 Ethernet standard and the IEEE 802.11 Wireless Networking standard.</p>
			</div>
		</div><br><br><br>
		<div id="aboutus">
			<h3><b><u><center>About Us</center></u></b></h3><br>
<p>			The major interests of the AIEE were wire communications (telegraphy and telephony) and light and power systems. The IRE concerned mostly radio engineering, and was formed from two smaller organizations, the Society of Wireless and Telegraph Engineers and the Wireless Institute. With the rise of electronics in the 1930s, electronics engineers usually became members of the IRE, but the applications of electron tube technology became so extensive that the technical boundaries differentiating the IRE and the AIEE became difficult to distinguish. After World War II, the two organizations became increasingly competitive, and in 1961, the leadership of both the IRE and the AIEE resolved to consolidate the two organizations. The two organizations formally merged as the IEEE on January 1, 1963.<br>
The IEEE is incorporated under the Not-for-Profit Corporation Law of the state of New York.[5] It was formed in 1963 by the merger of the Institute of Radio Engineers (IRE, founded 1912) and the American Institute of Electrical Engineers (AIEE, founded 1884). <br>Notable presidents of IEEE and its founding organizations include Elihu Thomson (AIEE, 1889–1890), Alexander Graham Bell (AIEE, 1891–1892), Charles Proteus Steinmetz (AIEE, 1901–1902), Robert H. Marriott (IRE, 1912), Lee De Forest (IRE, 1930), Frederick E. Terman (IRE, 1941), William R. Hewlett (IRE, 1954), Ernst Weber (IRE, 1959; IEEE, 1963), and Ivan Getting (IEEE, 1978).</p><br><br><br><br><br><br><br><br>
		</div>
		<div id="photos">
			<h3><b><u> <center>  Photos  </center> </u></b></h3><br>
			<br>
			<img src="w/1.jpg"  width="350" height="350">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="w/2.jpg" width="350" height="350">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp<img src="w/w4.jpg" width="350" height="350"><br>
	<br><br><img src="w/w1.jpg" width="350" height="350">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="w/w2.jpg"  width="350" height="350">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp<img src="w/w3.jpg" width="350" height="350"><br>
	<br><br><img src="w/w5.jpg"  width="350" height="350">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="w/w4.jpg" width="350" height="350">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp<img src="w/3.jpg" width="350" height="350"><br>
		</div><br><br><div class="botfram"><center><br>
	<?php include "copyright.php";?>
		</center></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div id="contactus">
			<h3>Please be free to contact any of the given members..</h3><br><br>
			Sam     : 9999999999 <br>
			Xam     : 9999999998 <br>
			Pam     : 9999999989 <br>
			Lan     : 9999999988 <br><br><br><br><br><br>
		</div>
	</div>
	</div>
	<div class="botfram"><center><br>
	<?php include "copyright.php";?>
		</center></div>
		<!--ends -->
</div>
	
	</div>
	</div>
</body>
</html>