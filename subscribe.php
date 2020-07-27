<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dreams Jewels</title>
  <meta charset="utf-8">
  <link href="assets/images/loog-black.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body onload="myFunction()">
	  <script type="text/javascript">
	  	function myFunction(){
		document.getElementById("box").classList.add('translate');
		setTimeout(function(){document.getElementById("HEY").style.display = "none";}, 0);
		setTimeout(function(){document.getElementById("HEY").style.display = "block";}, 4000);
	}
	</script>
	<div class="openbox" id="box">
		<img style="padding-top: 150px;" src="assets/images/loog.png">
		<br>
		<h1 style="color: white;">SUBSCRIBE</h1>
	</div>
	<div id="HEY">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top customnew" style="background-color: rgba(0,0,0,0);" id="mybar">
     <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0 ">
  <ul class="navbar-nav ml-auto text-center">
    <li class="nav-item">
      <a class="nav-link" href="about.html" style="padding-right: 40px;">About</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="service.html"style="padding-right: 40px;">Services</a>
</li>
    <li class="nav-item">
      <a class="nav-link" href="faq.html"style="padding-right: 40px;">FAQ&nbsp;&nbsp;</a>
    </li>
  </ul>
</div>
    <div class="mx-auto my-2 order-0 order-md-1 position-relative">
            <a class="navbar-brand mx-auto" href="index.php" style="padding-right: 40px;"><img src="assets/images/loog.png" style="width:45px;"><span class="mytext"> Dreams Jewels</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2" onclick="mybutton('mybar')">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2 ">
    <ul class="navbar-nav mr-auto text-center">
    <li class="nav-item">
      <a class="nav-link" href="subscribe.php" style="padding-right: 40px;color: #3ec1d5;">Subscribe</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="padding-right: 40px;">
        Catalogue
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="catalogue-ring.html">Rings</a>
        <a class="dropdown-item" href="catalogue-Bracelets1.html">Bracelets</a>
        <a class="dropdown-item" href="catalogue-Bangles.html">Bangles</a>
        <a class="dropdown-item" href="catalogue-Earings.html">Earings</a>
        <a class="dropdown-item" href="catalogue-Tanmaniya.html">Pendant Sets</a>

      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.html" style="padding-right: 40px;">Contact</a>
    </li>
    <li class="nav-item logo1" >
      <a class="nav-link" href="http://instagram.com/dreamsjewels" ><i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px;"></i></a> </li>
      <li class="nav-item logo2">
      <a class="nav-link" href="http://facebook.com/DreamsJewels11" ><i class="fa fa-facebook-official" aria-hidden="true" style="font-size: 40px;"></i></a></li>
  </ul>
  </div>
</nav>
</div>
<div class="main-area">
	<div class="left-box">
		<div class="myhalf">
			<script type="text/javascript">
                  function Send_Data(){
                    
                    var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    var sus_email=document.getElementById("sus_email").value;
                    if(!filter.test(sus_email)){
                      document.getElementById("ch").style.display = "block";
                    }
                    else{
                    var httpr=new XMLHttpRequest();
                    httpr.open("POST","backend.php",true);
                    httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    httpr.onreadystatechange=function(){
                      if(httpr.readyState==4 && httpr.status==200){
                        document.getElementById("response").innerHTML=httpr.responseText;
                      }
                     }
                    httpr.send("sus_email="+sus_email);
                    document.getElementById("ch").style.display = "none";
                    //document.getElementById("iam").style.display = "none";
                  }
                  }                 
               </script>
		<h1>Welcome to Dreams Jewels</h1>
		<input type="email" name="sus_email" class="eml" id="sus_email" placeholder="email" data-rule="email" data-msg="Please enter a valid email" >
        <button onclick="Send_Data()" type="submit" id="sus_submit" class="btn">Subscribe</button>
        <div class="answer_list" id="ch" style="display:none;"><font color="red" >Please enter a valid email</font></div>
        <div  class="answer_list" id="response" >
        	<?php              
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="subscribers";
      $con=mysqli_connect($servername,$username,$password,$dbname);
      $sql="SELECT count(email) AS total FROM subscribers";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $num_rows=$values['total'];
      echo '<span style="font-size:1.25em;color:#FFFFFF;text-align:center;" id = "iam">'.'Subscribers  '.$num_rows.'<i class="fa fa-heart" aria-hidden="true"></i></span>';
        ?>
        </div>
    </div>
    <div class="newbottom1">
		<marquee behavior="scroll" direction="left" scrollamount="30"><h1><font color="white" style="font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif">CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION</font></h1></marquee>
	</div>
	</div>
	
	<div class="right-box" id="rgt">
		<div class="hide">
		<div class="mybox">
			<center><h1 style="font-family: mySecondFont"><strong>We Make</strong></h1></center>
			<hr style="width: 50%;height: 1px;background-color: black;">
			<br>
			<ul>
				<li><a href= "catalogue-ring.html">Rings for Men and Women.</a></li>
				<br>
				<li><a href= "catalogue-Bracelets1.html">Bracelets for Men and Women.</a></li>
				<br>
				<li><a href= "catalogue-Earings.html">Earings for Women.</a></li>
				<br>
				<li><a href= "catalogue-Tanmaniya.html">Necklaces for Women.</a></li>
				<br>
				<li><a>And Many More.</a></li>
			</ul>

		</div>
		<div class="bottom">
		<marquee behavior="scroll" direction="left" scrollamount="30"><h1><font color="white" style="font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif">CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION</font></h1></marquee>
	</div>
</div>
	</div>
</div>
	<!--NextPART-->
	<div class="hidethisarea">
<div class="main-area">
	<div class="left-box2">
			<div class="hidethis">
		<div class="leftbox">
			<font color = "black">The company was started by <strong>Kalpesh Shah</strong> in the year 1992 and since then it has continuously served a lot of clients and is still growing with satisfactory response.</font>
		</div>
		<div class="rightbox">
			<font color = "black">We work as both as wholesaler and retailer.We also accept customized orders.We also provide with loose Diamonds.</font>
		</div>
		<h1><font color = "white" class="left">Our <br>History</font></h1>
		<div class="divdis">
		<h1><font color = "white" class="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dream <br>In Jewellery</font></h1></div>
</div>
		<div class="newbottom2">
		<marquee behavior="scroll" direction="left" scrollamount="30"><h1><font color="white" style="font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif">CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION</font></h1></marquee>
	
	</div>
		
	</div>
	
	<div class="right-box" id="rgt">
		<div class="mybox2">
			<center><h1 style="font-family: mySecondFont"><strong>We Make</strong></h1></center>
			<hr style="width: 50%;height: 1px;background-color: black;">
			<br>
			<ul>
				<li><a href= "catalogue-ring.html">Rings for Men and Women.</a></li>
				<br>
				<li><a href= "catalogue-Bracelets1.html">Bracelets for Men and Women.</a></li>
				<br>
				<li><a href= "catalogue-Earings.html">Earings for Women.</a></li>
				<br>
				<li><a href= "catalogue-Tanmaniya.html">Necklaces for Women.</a></li>
				<br>
				<li><a>And Many More.</a></li>
			</ul>

		</div>
		<div class="bottom">
		<marquee behavior="scroll" direction="left" scrollamount="30"><h1><font color="white" style="font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif">CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION CHECK OUT OUR COLLECTION</font></h1></marquee>
	</div>
	</div>

</div>

</div>

<script type="text/javascript">
	var check = 0;
	function mybutton(mybar){
		var x=mybar;
		if(check == 0)
		{
		if(document.getElementById(x).style.backgroundColor == "black"){
			document.getElementById(x).style.backgroundColor = "transparent";
			console.log("if");
		}
		else{
			document.getElementById(x).style.backgroundColor = "black";
		}
	}
}


$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 50) {
	    $("#mybar").css("background" , "black");
	    check = 1;
	  }

	  else{
		  $("#mybar").css("background" , "transparent");
		  check = 0;  	
	  }
  })
})
</script>
<style type="text/css">
	.hidethisarea{
		display: none;
	}
	.myhalf{
		width: 65%;
		height: 100%;
		text-align: center;
		color: white;
		padding-top: 15%;
	}
	.newbottom1{
		display: none;
	}
		.logo1{
  position: absolute;
  right: 10px;
}
.logo2{
position: absolute;
right: 60px;
}
.openbox{
	width: 100%;
	height: 100%;
	background-color: black;
	text-align: center;
	}
html, body {
height:100%;
width:100%;
 }
 .eml{
 	width: 200px;
 	height: 50px;
 	border: 0;
 	background-color: white;
 	color: black;
 }
 .btn{
 	width: 100px;
 	height: 52px;
 	border-top-right-radius: 20px;
 	border-bottom-right-radius: 20px;
 	background-color: #3ec1d5;
 	margin-left: 0px;
 	margin-bottom: 3px;
 	border-bottom-left-radius: 0;
 	border-top-left-radius: 0;
 	color: white;
 }
 .btn:hover{
 	background-color: #79ff4d;
 }
.openbox.translate{
	-webkit-transition: 4s infinite;
  	-moz-transition: 4s;
  	-ms-transition: 4s;
  	-o-transition: 4s;
  	transition: 4s;
  	transition-delay: 0;
  	height: 0px;
  }
  .mybox2 li a{
	color: black;
}
 .main-area{
	width: 100%;
	height: 100%;
	}
.left-box{
	height: 100%;
	width: 100%;
	background-image: url(ddd.jpg);
	position: absolute;

	}
.right-box{
	height: 100%;
	width: 35%;
	position: absolute;
	right: 0;
	background-color: rgba(255,255,255,0.2);
}
.bottom{
	position: absolute;
	bottom: 0;
	display: block;
}
.newbottom{
	position: absolute;
	bottom: 0;
	display: none;
}
.newbottom2{
	position: absolute;
	bottom: 0;
	display: none;
}
.mybox{
	position: absolute;
	width: 60%;
	height: 60%;
	bottom: 150px;
	left: 22.5%;
	background-color: white;
	padding-top: 10px;
	color: black;
}
.mybox li a{
	color: black;
}
.right{
	position: absolute;
	right: 35%;
	top: 80px;
	font-family: myFirstFont;
	font-size: 70px;
}
.left{
	position: absolute;
	left: 10px;
	top: 80px;
	font-family: myFirstFont;
	font-size: 70px;
}
.leftbox{
	position: absolute;
	left: 0;
	top: 50%;
	background-color: white;
	height: auto;
	width: 36%;
	padding-left: 5px;
	padding-top: 5px;
	padding-bottom: 10px;
	padding-right: 5px;
	font-size: 18px;
}
.rightbox{
	position: absolute;
	right: 35%;
	top: 70%;
	background-color: white;
	height: auto;
	width: 32%;
	padding-left: 2px;
	padding-top: 5px;
	padding-bottom: 10px;
	padding-right: 5px;
	font-size: 18px;
	text-align: right;
}
.lowerbox{
	background-color: white;
	position: absolute;
	bottom: 0;
}
@font-face {
  font-family: myFirstFont;
  src: url(cabin-sketch-v1.02/mee.ttf);
}
@font-face {
  font-family: mySecondFont;
  src: url(cabin-sketch-v1.02/SCRIPTIN.ttf);
}
@media only screen and (max-width: 400px){
	.left-box{
	height: 100%;
	width: 100%;
	background-image: url(mobb.png);
	position: absolute;
	background-size:cover;

	}
		.logo1{
  position: relative;
}
.logo2{
position: relative;
right: 8px;
}
	.myhalf{
		width: 100%;
		height: 100%;
		text-align: center;
		color: white;
		padding-top: 50%;
	}
	 .eml{
 	width: 180px;
 	height: 40px;
 	border: 0;
 	background-color: white;
 	color: black;
 }
 .btn{
 	width: 90px;
 	height: 42px;
 	border-top-right-radius: 20px;
 	border-bottom-right-radius: 20px;
 	background-color: #3ec1d5;
 	margin-left: 0px;
 	margin-bottom: 3px;
 	border-bottom-left-radius: 0;
 	border-top-left-radius: 0;
 	color: white;
 	position: relative;
 	z-index: 10;
 }
  .btn:hover{
 	background-color: #79ff4d;
 }
	.hidethisarea{
		display: block;
	}
		.mytext{
		font-size: 11px;
	}

.left{
	position: absolute;
	left: 10px;
	top: 8%;
	font-family: myFirstFont;
	font-size: 50px;
}
.divdis{
	display: none;
}
.bottom{
	position: absolute;
	bottom: 0;
	display: none;
}
	.mybox{
	position: absolute;
	width: 180%;
	height: 30%;
	bottom: 10%;
	left: -120%;
	background-color: white;
	padding-top: 10px;
	color: black;
	font-size: 11px;
}
.mybox h1{
	font-size: 25px;
}
	.left-box2{
	height: 100%;
	width: 100%;
	background-image: url(mobb.png);
	position: absolute;
	background-size:cover;

	}
	.hide{
		display: none;
	}
	.hidethis{
		display: none;
	}
	.right-box{
	height: 100%;
	width: 35%;
	position: absolute;
	right: 0;
	background-color: rgba(255,255,255,0.2);
}
	.mybox2{
	position: absolute;
	width: 190%;
	height: 60%;
	bottom: 20%;
	left: -120%;
	background-color: white;
	padding-top: 10px;
	color: black;
	font-size: 11px;
}
.mybox2 h1{
	font-size: 25px;
}
.newbottom1{
	position: absolute;
	bottom: 0;
	display: block;
}
.newbottom2{
	position: absolute;
	bottom: 0;
	display: block;
}
}
@media only screen and (min-width: 400px) and (max-width: 600px){
	.left-box{
	height: 100%;
	width: 100%;
	background-image: url(mobb.png);
	position: absolute;
	background-size:cover;

	}
		.logo1{
  position: relative;
}
.logo2{
position: relative;
right: 8px;
}
	.hidethisarea{
		display: block;
	}
	.left-box2{
	height: 100%;
	width: 100%;
	background-image: url(mobb.png);
	position: absolute;
	background-size:cover;

	}
		.myhalf{
		width: 100%;
		height: 100%;
		text-align: center;
		color: white;
		padding-top: 40%;
	}
	 .eml{
 	width: 200px;
 	height: 50px;
 	border: 0;
 	background-color: white;
 	color: black;
 }
 .btn{
 	width: 100px;
 	height: 52px;
 	border-top-right-radius: 20px;
 	border-bottom-right-radius: 20px;
 	background-color: #3ec1d5;
 	margin-left: 0px;
 	margin-bottom: 3px;
 	border-bottom-left-radius: 0;
 	border-top-left-radius: 0;
 	color: white;
 	position: relative;
 	z-index: 10;
 }
  .btn:hover{
 	background-color: #79ff4d;
 }
	.hide{
		display: none;
	}
	.hidethis{
		display: none;
	}
	.right-box{
	height: 100%;
	width: 35%;
	position: absolute;
	right: 0;
	background-color: rgba(255,255,255,0.2);
}

	.mybox{
	position: absolute;
	width: 180%;
	height: 30%;
	bottom: 10%;
	left: -120%;
	background-color: white;
	padding-top: 10px;
	color: black;
}
	.mybox2{
	position: absolute;
	width: 190%;
	height: 60%;
	bottom: 20%;
	left: -120%;
	background-color: white;
	padding-top: 10px;
	color: black;
}
.left{
	position: absolute;
	left: 10px;
	top: 10%;
	font-family: myFirstFont;
	font-size: 50px;
}
.leftbox{
	position: absolute;
	left: 0;
	top: 40%;
	background-color: white;
	height: auto;
	width: 80%;
	padding-left: 5px;
	padding-top: 5px;
	padding-bottom: 10px;
	padding-right: 5px;
	font-size: 15px;
}
.rightbox{
	position: absolute;
	right: 0;
	top: 60%;
	background-color: white;
	height: auto;
	width: 68%;
	padding-top: 5px;
	padding-bottom: 10px;
	padding-right: 5px;
	padding-left: 0;
	font-size: 15px;
	text-align: right;
}
.divdis{
	display: none;
}
.bottom{
	position: absolute;
	bottom: 0;
	display: none;
}
.newbottom1{
	position: absolute;
	bottom: 0;
	display: block;
}
.newbottom2{
	position: absolute;
	bottom: 0;
	display: block;
}
}
@media (max-width: 1024px) and (min-width: 601px){

	.left-box{
	height: 100%;
	width: 100%;
	background-image: url(ipadnew.png);
	position: absolute;
	background-size:cover;

	}
	.mybox{
	position: absolute;
	width: 80%;
	height: auto;
	bottom: 30%;
	left: 10%;
	background-color: white;
	padding-top: 15px;
	padding-bottom: 40px;
	color: black;
}
}
</style>
</body>
</html>
