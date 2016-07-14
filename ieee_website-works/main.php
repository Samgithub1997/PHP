<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script> 
$(document).ready(function(){
$('#submit1').click(function(){
	var u=$('#user').val();
	var p=$('#pass').val();
	$.ajax({
		url:'1.php?user='+u+'&pass='+p,
		type:'json',
		method:'get',
		success:function(data){
			if(data.name=="error")
			{
				$('#iv').text("Invalid credentials");
			}
			else
			{
				window.location="welcomeuser.php";
			}
			
		},
		error:function(){
			alert("error");
		}
		});
	});
		
		$('#hom').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
		
		$('#h').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
	
		$('#br').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
	
		$('#project').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
		
		$('#contactus').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
		
		$('#about').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
	
		$('#blog').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
	
		$('#photos').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
	
		$('#upcoming').click(function(){
				alert("LOG IN / SIGN IN To continue sir..");
		});
    });
</script>
	
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
		margin-left:50px;
		margin-right:10px;
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
		<li class="active" id="hom"><a href="#">Home </a></li>

	<li>	 <div class="dropdown ">
  <button class="btn btn dropdown-toggle marg" style="background-color:#1a1a1a ; color:#a6a6a6"   type="button" data-toggle="dropdown">Manipal
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a id="am">Around Manipal</a></li>
    <li><a id="h">Hotels</a></li>
    <li><a id="br">Bars And Restaurants</a></li>
  </ul>
</div></li>
		<li><a id="project">Projects</a></li>
		<li><a id="about">About Us</a></li>
		<li><a id="photos">Photos</a></li>
		<li><a id="contactus">Contact Us</a></li>
			</ul>
		<ul class="nav navbar-nav navbar-right">
          <li>
			<a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a>			
		  </li>
      </ul>
		<ul class="nav navbar-nav navbar-right">
          <li>
				
          			<!-- Trigger the modal with a button -->
<button type="button" class="btn btn btn-lg" style="background-color:#1a1a1a ; color:#a6a6a6" data-toggle="modal" data-target="#myModal">Log In</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color:#ffe6b3">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <div id="h">
       <h2> LOG IN  </h2>
       </div>
            
      
      <div class="modal-body" id="bo">
       <div class="panel-body">
				<form method="post">
		<label>	USERNAME  </label> : <input type="text" class="form-control" id="user" name="user"><br>
		<label>	PASSWORD  </label> : <input type="password" class="form-control" id="pass" name="pass"><br>
					<br>
					<label><center><input style="align:center" type="button" id="submit1" name="submit1" class="btn btn-warning" value="LOG IN"></center></label>
			<div id="iv">
				</div>
		   </form>
				
		
		</div>		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

   </div>
    </div>

  </div>
</div>



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
        <center><img src="logo.jpg" alt="Chania" width="480" height="440"></center>
      </div>

      <div class="item m">
       <center> <img src="manipal_group.jpg" alt="Chania" width="480" height="440">
      </center>
      </div>
    
      <div class="item m">
      <center>  <img src="swag.jpg" alt="Flower" width="480" height="440">
	  </center>  
    </div>

      <div class="item m">
      <center><img src="swagwh.jpg" alt="Flower" width="480" height="440"></center>
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
			<h4>		<center><a  id="upcoming" class="lin" style="background-color:#99bbff; border-radius:8px; padding-top:8px ;padding-bottom:8px; padding-right:10px;padding-left:10px;text-decoration-color:#001a33;">	<span class="glyphicon glyphicon-zoom-in"></span>Upcoming events</a>
			<br><br><br><br>	<a  id="blog" class="lin" style="background-color:#99bbff; border-radius:8px; padding-top:8px ;padding-bottom:8px; padding-right:10px;padding-left:10px;text-decoration-color:#001a33;"><span class="glyphicon glyphicon-zoom-in"></span>Our Blog</a>
				<br><br><br>
				<?php include("views.php");?>		
				<br><br> To access the website <br> Sign in / Log in
				</center></h4>
</div>
			

<!--caraousal ends-->
<!--page part-->
	<div id="body" class="row">
	<div class="col-sm-12" id="matter">

	</div>
<!--ends -->
	</div>	
</div>
	</div></div>
	<div class="botfram"><center><br>
	<?php include "copyright.php";?>
		</div>
	
	
	</div>
</body>
</html>