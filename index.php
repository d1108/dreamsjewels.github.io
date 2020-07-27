<!DOCTYPE html>
<html lang="en">
<head>
  <title>DreamsJewels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/images/loog-black.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body onload="animateme()">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top customnew" style="background-color: #041839;" id="mybar">
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

            <a class="navbar-brand mx-auto" href="index.html" style="padding-right: 40px;"><img src="assets/images/loog.png" style="width:45px;"><span class="mytext"> Dreams Jewels</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2 ">
    <ul class="navbar-nav mr-auto text-center">
    <li class="nav-item">
      <a class="nav-link" href="subscribe.php" style="padding-right: 40px;">Subscribe</a>
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
  <!--<div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2 ">
    <ul class="navbar-nav" >
      <li class="nav-item" >
      <a class="nav-link" href="subscribe.php" ><a href="" style="color: white;"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px;"></i></a> &nbsp;&nbsp;<a href="" style="color: white;"><i class="fa fa-facebook-official" aria-hidden="true" style="font-size: 40px;"></i></a>
    </li>
    </ul>
  </div>-->
</nav>
<div class="mee">
  <div id="panel">
  
      <div class="ball1" id="Bal1"></div>
      <h1 style="color: white;position: relative;z-index: 10;">Welocme to Dreams Jewels</h1>
      <div class="ball2" id="Bal2"></div>
      <br>
      <br>
      <br>
                <!--Subscription part-->
      <div style="z-index: 10;position: relative;">
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
        <h4>
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
        ?></div></h4>
      <!--ends here-->
      </div>
        <div id="touchsurface3">
      <div class="ball3" id="Bal3"></div>
      <div class="ball4" id="Bal4"></div>
      <center><i class="fa fa-window-minimize mini" aria-hidden="true" ></i></center>
  </div>
  </div>
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="none">
  <!--Slider area-->
  
    <div class="hii">
      <div class="toucharea2">
  <img src="semi.png" style="opacity: 0;" id="itsme">
</div>
<div class="toucharea">
  <img src="semi.png"  id="itsme2">
</div>
  </div>
  <div class="slideit">
    <div id="button-background">
<span class="slide-text" style="cursor: pointer;font-family: sans-serif;font-size: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⋙⋙⋙⋙</span>
  <div id="slider">
    <i class="fa fa-diamond" aria-hidden="true" id="heyy" style="font-size: 30px;opacity: 1;"></i>  
  </div>
  </div>
  </div>
  <!--Slider area ends-->
  <div class="leftbox">
    <ul class="list-groups" style="list-style: none;font-family: Courier New, monospace;">
      <li><br><a href="catalogue-ring.html"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;RINGS</font><br><br></a></li>
      <li><a href="catalogue-Bracelets1.html"><font color="white">&nbsp;&nbsp;BRACELETS</font><br><br></a></li>
      <li><a href="catalogue-Bangles.html"><font color="white">&nbsp;&nbsp;&nbsp;BANGLES</font><br><br></a></li>
      <li><a href="catalogue-Earings.html"><font color="white">&nbsp;&nbsp;&nbsp;EARINGS</font><br><br></a></li>
      <li><a href="catalogue-Tanmaniya.html"><font color="white">PENDANT SETS</font></a></li>
      </ul>
      <div class="leftupperbox">
        <div class="blubox" id="box1">
          <div class="whitebox" id="box2">
            <br>
        <center><h1 class="maintext" id="tt">P A S S I O N</h1></center>
        <hr style="width : 50%;height:5px;background-color:#041839 " id="ll">
        <span><center><h4 class="basetext" id="qq">Turn and the world is yours</h4></center></span>
          </div>
        </div>
        
        
        <div class="leftupperboxnew">
          <font style="font-family: myFirstFont;">Collection</font>
        </div>
      </div>
    </div>
  <ul class="carousel-indicators" style="display: none">
    <li  class="item1 active"></li>
    <li  class="item2"></li>
    <li  class="item3"></li>
  </ul>

  
  <div class="carousel-inner">
    <div class="carousel-item active" id="01">
      <picture>
        <source srcset="carousel/bba.jpg" media="(min-width: 768px)" style="background-size: cover;">
      <source srcset="carousel/bl.png" media="(max-width: 374px)" style="background-size: cover;">
        <source srcset="carousel/neww.png" media="(min-width: 375px)" style="background-size: cover;">
      <img src="carousel/bba.jpg">
    </picture>
    </div>
    <div class="carousel-item" id="02">
      <picture>
        <source srcset="carousel/blkg.jpg" media="(min-width: 768px)" style="background-size: cover;">
      <source srcset="carousel/blc.png" media="(max-width: 374px)" style="background-size: cover;">
        <source srcset="carousel/blknew.png" media="(min-width: 375px)" style="background-size: cover;">
      <img src="carousel/blkg.jpg">
    </picture>
    </div>
    <div class="carousel-item" id="03">
      <picture>
        <source srcset="carousel/red.jpg" media="(min-width: 768px)" style="background-size: cover;">
      <source srcset="carousel/re.png" media="(max-width: 374px)" style="background-size: cover;">
        <source srcset="carousel/rednew.png" media="(min-width: 375px)" style="background-size: cover;">
      <img src="carousel/red.jpg">
    </picture>
    </div>
    <button class="uppersidebox customnew" id="up" href="#myCarousel" data-slide="prev" ><h4><span><font color = "white">Prev</font></span></h4>
  </button>
  <button class="lowersidebox customnew" id="low" href="#myCarousel" data-slide="next"><h4><span><font color = "white">Next</font> </span></h4>   
  </button>
  </div>
</div>
<footer>
  <div class="lowerbox">
  <div class="footer-area-bottom">
  <div class="container">
    <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                Copyright &copy; 2019 <strong>Dreams Jewels</strong><br/> Designed by <strong>Dhruvil Shah</strong>
              </p>
            </div>
          </div>
        </div>
  </div>
  </div>
</footer>
  <script>
    function animateme(){
    document.getElementById("itsme").classList.add('animatem');
    document.getElementById("heyy").classList.add('myanim');
  }
    $(document).ready(function(){

  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });

  });
  $("#myCarousel").on('slide.bs.carousel', function(event){
    var a = event.relatedTarget.id;
    if(a == '01'){
      $( "#up" ).click(function() {
      document.getElementById("mybar").classList.remove('animated6');
      document.getElementById("mybar").classList.remove('animated2');
      document.getElementById("mybar").classList.remove('animated5');
      document.getElementById("mybar").classList.remove('animated');
      document.getElementById("mybar").classList.remove('animated3');
      document.getElementById("mybar").classList.add('animated4');
      setTimeout(function(){document.getElementById("mybar").classList.remove('animated4');}, 4000);
      document.getElementById("up").classList.remove('animated6');
      document.getElementById("up").classList.remove('animated2');
      document.getElementById("up").classList.remove('animated5');
      document.getElementById("up").classList.remove('animated');
      document.getElementById("up").classList.remove('animated3');
      document.getElementById("up").classList.add('animated4');
      setTimeout(function(){document.getElementById("up").classList.remove('animated4');}, 4000);
      document.getElementById("low").classList.remove('animated6');
      document.getElementById("low").classList.remove('animated2');
      document.getElementById("low").classList.remove('animated5');
      document.getElementById("low").classList.remove('animated');
      document.getElementById("low").classList.remove('animated3');
      document.getElementById("low").classList.add('animated4');
      setTimeout(function(){document.getElementById("low").classList.remove('animated4');}, 4000);
      });
      document.getElementById("mybar").classList.add('animated3');
      setTimeout(function(){document.getElementById("mybar").classList.remove('animated3');}, 4000);
      document.getElementById("up").classList.add('animated3');
      setTimeout(function(){document.getElementById("up").classList.remove('animated3');}, 4000);
      document.getElementById("low").classList.add('animated3');
      setTimeout(function(){document.getElementById("low").classList.remove('animated3');}, 4000);
      document.getElementById("box1").classList.add('vertranslate');
      document.getElementById("box2").classList.add('sectranslate');
      setTimeout(function(){document.getElementById("tt").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("ll").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("qq").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("tt").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("ll").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("qq").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("box1").classList.remove('vertranslate');}, 3000);
      setTimeout(function(){document.getElementById("box1").style.backgroundColor = "#5C6A59";}, 3000);
      setTimeout(function(){document.getElementById("box2").classList.remove('sectranslate');}, 4000);
      document.getElementById("mybar").style.backgroundColor = "#041839";
      document.getElementById("low").style.backgroundColor = "#041839";
      document.getElementById("up").style.backgroundColor = "#041839";
      document.getElementById("tt").innerHTML = "P A S S I O N";
      document.getElementById("qq").innerHTML = "Turn and the world is yours";
      document.getElementById("qq").style.color = "#041839";
      document.getElementById("tt").style.color = "#041839";
      document.getElementById("ll").style.backgroundColor = "#041839";
      document.getElementById("box1").style.backgroundColor = "#041839";
      setTimeout(function(){document.getElementById("up").disabled = true}, 0);
      setTimeout(function(){document.getElementById("low").disabled = true}, 0);
      setTimeout(function(){document.getElementById("up").disabled = false}, 4000);
      setTimeout(function(){document.getElementById("low").disabled = false}, 4000);
    }
    if(a == '02'){
      $( "#up" ).click(function() {
        document.getElementById("mybar").classList.remove('animated6');
      document.getElementById("mybar").classList.remove('animated3');
      document.getElementById("mybar").classList.remove('animated4');
      document.getElementById("mybar").classList.remove('animated');
      document.getElementById("mybar").classList.remove('animated2');
      document.getElementById("mybar").classList.add('animated5');
      setTimeout(function(){document.getElementById("mybar").classList.remove('animated5');}, 4000);
      document.getElementById("up").classList.remove('animated6');
      document.getElementById("up").classList.remove('animated3');
      document.getElementById("up").classList.remove('animated4');
      document.getElementById("up").classList.remove('animated');
      document.getElementById("up").classList.remove('animated2');
      document.getElementById("up").classList.add('animated5');
      setTimeout(function(){document.getElementById("up").classList.remove('animated5');}, 4000);
      document.getElementById("low").classList.remove('animated6');
      document.getElementById("low").classList.remove('animated3');
      document.getElementById("low").classList.remove('animated4');
      document.getElementById("low").classList.remove('animated');
      document.getElementById("low").classList.remove('animated2');
      document.getElementById("low").classList.add('animated5');
      setTimeout(function(){document.getElementById("low").classList.remove('animated5');}, 4000);

      });
      document.getElementById("up").classList.add('animated');
      setTimeout(function(){document.getElementById("up").classList.remove('animated');}, 4000);
      document.getElementById("low").classList.add('animated');
      setTimeout(function(){document.getElementById("low").classList.remove('animated');}, 4000);
      document.getElementById("box1").style.backgroundColor = "#5C6A59";
      document.getElementById("box1").classList.add('vertranslate');
      document.getElementById("box2").classList.add('sectranslate');
      document.getElementById("mybar").classList.add('animated');
      setTimeout(function(){document.getElementById("mybar").classList.remove('animated');}, 4000);
      setTimeout(function(){document.getElementById("tt").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("ll").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("qq").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("tt").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("ll").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("qq").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("box1").classList.remove('vertranslate');}, 3000);
      setTimeout(function(){document.getElementById("box1").style.backgroundColor = "#919A0C";}, 3000);
      setTimeout(function(){document.getElementById("box2").classList.remove('sectranslate');}, 4000);
      setTimeout(function(){document.getElementById("up").disabled = true}, 0);
      setTimeout(function(){document.getElementById("low").disabled = true}, 0);
      setTimeout(function(){document.getElementById("up").disabled = false}, 4000);
      setTimeout(function(){document.getElementById("low").disabled = false}, 4000);
      document.getElementById("mybar").style.backgroundColor = "#5C6A59";
      document.getElementById("low").style.backgroundColor = "#5C6A59";
      document.getElementById("up").style.backgroundColor = "#5C6A59";
      document.getElementById("tt").innerHTML="D R E A M";
      document.getElementById("qq").innerHTML = "Start where you are";
      document.getElementById("qq").style.color = "#5C6A59";
      document.getElementById("tt").style.color = "#5C6A59";
      document.getElementById("ll").style.backgroundColor = "#5C6A59";
    }
    if(a == '03'){
      $( "#up" ).click(function() {
      document.getElementById("mybar").classList.remove('animated');
      document.getElementById("mybar").classList.remove('animated2');
      document.getElementById("mybar").classList.remove('animated3');
      document.getElementById("mybar").classList.remove('animated4');
      document.getElementById("mybar").classList.remove('animated5');
      document.getElementById("mybar").classList.add('animated6');
      setTimeout(function(){document.getElementById("mybar").classList.remove('animated6');}, 4000);
      document.getElementById("up").classList.remove('animated');
      document.getElementById("up").classList.remove('animated2');
      document.getElementById("up").classList.remove('animated3');
      document.getElementById("up").classList.remove('animated4');
      document.getElementById("up").classList.remove('animated5');
      document.getElementById("up").classList.add('animated6');
      setTimeout(function(){document.getElementById("up").classList.remove('animated6');}, 4000);
      document.getElementById("low").classList.remove('animated');
      document.getElementById("low").classList.remove('animated2');
      document.getElementById("low").classList.remove('animated3');
      document.getElementById("low").classList.remove('animated4');
      document.getElementById("low").classList.remove('animated5');
      document.getElementById("low").classList.add('animated6');
      setTimeout(function(){document.getElementById("low").classList.remove('animated6');}, 4000);
      });
      document.getElementById("up").classList.add('animated2');
      setTimeout(function(){document.getElementById("up").classList.remove('animated2');}, 4000);
      document.getElementById("low").classList.add('animated2');
      setTimeout(function(){document.getElementById("low").classList.remove('animated2');}, 4000);
      document.getElementById("mybar").classList.add('animated2');
      setTimeout(function(){document.getElementById("mybar").classList.remove('animated2');}, 4000);
      document.getElementById("box1").style.backgroundColor = "#919A0C";
      document.getElementById("box1").classList.add('vertranslate');
      document.getElementById("box2").classList.add('sectranslate');
      setTimeout(function(){document.getElementById("tt").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("ll").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("qq").style.opacity = "0";}, 0);
      setTimeout(function(){document.getElementById("tt").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("ll").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("qq").style.opacity = "1";}, 2000);
      setTimeout(function(){document.getElementById("box1").classList.remove('vertranslate');}, 3000);
      setTimeout(function(){document.getElementById("box1").style.backgroundColor = "#919A0C";}, 3000);
      setTimeout(function(){document.getElementById("box2").classList.remove('sectranslate');}, 4000);
      document.getElementById("mybar").style.backgroundColor = "#919A0C";
      document.getElementById("low").style.backgroundColor = "#919A0C";
      document.getElementById("up").style.backgroundColor = "#919A0C";
      document.getElementById("tt").innerHTML = "P O S S E S I O N";
      document.getElementById("qq").innerHTML = "Possess me";
      document.getElementById("qq").style.color = "#919A0C";
      document.getElementById("tt").style.color = "#919A0C";
      document.getElementById("ll").style.backgroundColor = "#919A0C";
      setTimeout(function(){document.getElementById("up").disabled = true}, 0);
      setTimeout(function(){document.getElementById("low").disabled = true}, 0);
      setTimeout(function(){document.getElementById("up").disabled = false}, 4000);
      setTimeout(function(){document.getElementById("low").disabled = false}, 4000);
    }
  });



</script>
<script type="text/javascript">
  var initialMouse = 0;
var slideMovementTotal = 0;
var mouseIsDown = false;
var bool = false;
var slider = $('#slider');
slider.on('mousedown touchstart', function(event){
  document.body.style.overflow = "hidden";
  mouseIsDown = true;
  slideMovementTotal = $('#button-background').height() - $(this).height() + 10;
  initialMouse = event.clientY || event.originalEvent.touches[0].pageY;
});

$(document.body, '#slider').on('mouseup touchend', function (event) {
  if (!mouseIsDown)
    return;
  mouseIsDown = false;
  var currentMouse = event.clientY || event.changedTouches[0].pageY;
  var relativeMouse = currentMouse - initialMouse;

  if (relativeMouse < slideMovementTotal) {
    $('.slide-text').fadeTo(300, 1);
    slider.animate({
      left: "-10px"
    }, 300);
    return;
  }
  slider.addClass('unlocked');
document.body.style.overflow = "auto";

  
  $("#panel").slideDown("slow");
  document.getElementById("Bal1").classList.add('example1');
   document.getElementById("Bal2").classList.add('example2');
   document.getElementById("Bal3").classList.add('example3');
   document.getElementById("Bal4").classList.add('example4');
      mouseIsDown = true;
    $('#button-background').css({'display' : 'none'});
    slider.css({'display': 'none'});
     $('.toucharea').css({'display' : 'none'});
     $('.toucharea2').css({'display' : 'none'});
    document.getElementById('slider').style.top = "";
    document.getElementById('slider').style.bottom = "";


  });

$(document.body).on('mousemove touchmove', function(event){
  document.body.style.overflow = "auto";
  if (!mouseIsDown)
    return;

  var currentMouse = event.clientY || event.originalEvent.touches[0].pageY;
  var relativeMouse = currentMouse - initialMouse;
  var slidePercent = 1 - (relativeMouse / slideMovementTotal);
  
  $('.slide-text').fadeTo(0, slidePercent);

  if (relativeMouse <= 0) {
    slider.css({'left': '-10px'});
    return;
  }
  if (relativeMouse >= slideMovementTotal + 10) {
    slider.css({'left': slideMovementTotal + 'px'});
    return;
  }
  slider.css({'left': relativeMouse - 10});

});
function ontouch(el, callback){
 
    var touchsurface = el,
    dir,
    swipeType,
    startX,
    startY,
    distX,
    distY,
    mouseisdown = false,
    threshold = 150, //required min distance traveled to be considered swipe
    restraint = 100, // maximum distance allowed at the same time in perpendicular direction
    allowedTime = 500, // maximum time allowed to travel that distance
    elapsedTime,
    startTime,
    handletouch = callback || function(evt, dir, phase, swipetype, distance){}
 
    touchsurface.addEventListener('touchstart', function(e){
        var touchobj = e.changedTouches[0]
        dir = 'none'
        swipeType = 'none'
        dist = 0
        startX = touchobj.pageX
        startY = touchobj.pageY
        startTime = new Date().getTime() // record time when finger first makes contact with surface
        handletouch(e, 'none', 'start', swipeType, 0) // fire callback function with params dir="none", phase="start", swipetype="none" etc
        e.preventDefault()
 
    }, false)
 
    touchsurface.addEventListener('touchmove', function(e){
        var touchobj = e.changedTouches[0]
        distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
        distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
        if (Math.abs(distX) > Math.abs(distY)){ // if distance traveled horizontally is greater than vertically, consider this a horizontal movement
            dir = (distX < 0)? 'left' : 'right'
            handletouch(e, dir, 'move', swipeType, distX) // fire callback function with params dir="left|right", phase="move", swipetype="none" etc
        }
        else{ // else consider this a vertical movement
            dir = (distY < 0)? 'up' : 'down'
            handletouch(e, dir, 'move', swipeType, distY) // fire callback function with params dir="up|down", phase="move", swipetype="none" etc
        }
        e.preventDefault() // prevent scrolling when inside DIV
    }, false)
 
    touchsurface.addEventListener('touchend', function(e){
        var touchobj = e.changedTouches[0]
        elapsedTime = new Date().getTime() - startTime // get time elapsed
        if (elapsedTime <= allowedTime){ // first condition for awipe met
            if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
                swipeType = dir // set swipeType to either "left" or "right"
            }
            else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
                swipeType = dir // set swipeType to either "top" or "down"
            }
        }
        // Fire callback function with params dir="left|right|up|down", phase="end", swipetype=dir etc:
        handletouch(e, dir, 'end', swipeType, (dir =='left' || dir =='right')? distX : distY)
        e.preventDefault()
    }, false)
  touchsurface.addEventListener('mousedown', function(e){
    var touchobj = e
    dir = 'none'
    swipeType = 'none'
    dist = 0
    startX = touchobj.pageX
    startY = touchobj.pageY
    startTime = new Date().getTime() // record time when finger first makes contact with surface
    handletouch(e, 'none', 'start', swipeType, 0) // fire callback function with params dir="none", phase="start", swipetype="none" etc
    mouseisdown = true
    e.preventDefault()
  
  }, false)

  document.body.addEventListener('mousemove', function(e){
    if (mouseisdown){
      var touchobj = e
      distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
      distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
      if (Math.abs(distX) > Math.abs(distY)){ // if distance traveled horizontally is greater than vertically, consider this a horizontal movement
        dir = (distX < 0)? 'left' : 'right'
        handletouch(e, dir, 'move', swipeType, distX) // fire callback function with params dir="left|right", phase="move", swipetype="none" etc
      }
      else{ // else consider this a vertical movement
        dir = (distY < 0)? 'up' : 'down'
        handletouch(e, dir, 'move', swipeType, distY) // fire callback function with params dir="up|down", phase="move", swipetype="none" etc
      }
      e.preventDefault() // prevent scrolling when inside DIV
    }
  }, false)

  document.body.addEventListener('mouseup', function(e){
    if (mouseisdown){
      var touchobj = e
      elapsedTime = new Date().getTime() - startTime // get time elapsed
      if (elapsedTime <= allowedTime){ // first condition for awipe met
        if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
          swipeType = dir // set swipeType to either "left" or "right"
        }
        else if (Math.abs(distY) >= threshold  && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
          swipeType = dir // set swipeType to either "top" or "down"
        }
      }
      // fire callback function with params dir="left|right|up|down", phase="end", swipetype=dir etc:
      handletouch(e, dir, 'end', swipeType, (dir =='left' || dir =='right')? distX : distY)
      mouseisdown = false
      e.preventDefault()
    }
  }, false)
}

  window.addEventListener('load', function(){
     var el = document.getElementById('touchsurface3')
     ontouch(el, function(evt, dir, phase, swipetype, distance){
         var touchreport = ''
         var x;
         touchreport += 'Dir:' +dir;
         x = distance;
         //touchreport += 'Dist:' +x;
         console.log(touchreport);
         var y = -40;
         if(touchreport == 'Dir:up' && x <=y ){
    $("#panel").slideUp("slow");
$('#button-background').css({'display' : 'block'});
    slider.css({'display': 'block'});
    $('.toucharea').css({'display' : 'block'});
    $('.toucharea2').css({'display' : 'block'});
}
     });
}, false)
</script>
<style>
html,body{
  width: 100%;
  height: 100%;
}
.mini{
  color: white;
  font-size: 20px;
  position: absolute;
  bottom: 0;
}
#itsme{
  height: 70px;
}
#itsme2{
  height: 50px
}
.toucharea{
  width: auto;
  height: auto;
  position: absolute;
  left: 47.3%;
  bottom: 0;
  z-index: 10;
}
.toucharea2{
  width: auto;
  height: auto;
  position: absolute;
  left: 45.9%;
  bottom: 0;
  z-index: 10;
}
#touchsurface3{
width: 100%;
height: auto;
}
.hii .animatem{
    animation: myani 1s;
    animation-iteration-count: infinite;
  }
  @keyframes myani {
  from {opacity: 0;}
  to {opacity: 1;}
}
.ball1{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example1;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
@keyframes example1{
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:100px; top:144px}
  50%  {background-color:blue; left:224px; top:78px;}
  75%  {background-color:green; left:0px; top:150px;}
  100% {background-color:red; left:0px; top:0px;}
}
.ball2{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
@keyframes example2{
  0%   {background-color:red; left:900px; top:220px;}
  25%  {background-color:yellow; left:789px; top:174px}
  50%  {background-color:blue; left:677px; top:78px;}
  75%  {background-color:green; left:900px; top:200px;}
  100% {background-color:red; left:900px; top:220px;}
}
.ball3{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example3;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
@keyframes example3{
  0%   {background-color:red; left:400px; top:-80px;}
  25%  {background-color:yellow; left:789px; top:100px}
  50%  {background-color:blue; left:400px; top:78px;}
  75%  {background-color:green; left:350px; top:-150px;}
  100% {background-color:red; left:400px; top:-80px;}
}
.ball4{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example4;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
@keyframes example4{
  0%   {background-color:red; left:1300px; top:-100px;}
  25%  {background-color:yellow; left:1020px; top:-50px}
  50%  {background-color:blue; left:1200px; top:-90px;}
  75%  {background-color:green; left:1300px; top:-160px;}
  100% {background-color:red; left:1300px; top:-100px;}
}
.eml{
  background-color: white;

  border-radius: 20px;
  border: solid 1px grey;
}
.btn{
  color: white;
}
.slideit{
  width: auto;
  height: auto;
  position: absolute;
  left: 40%;
  bottom: 10%;
  z-index: 10;
}
#button-background {
  position: absolute;
  background-color: transparent;
  width: 80px;
  height: 300px;
  border: white;
  border-radius: 40px;
  text-align: center;
   -webkit-transform:rotate(90deg);
   bottom: 70px;
   align-content: center;
}

#slider {

  position: absolute;
  background-color: transparent;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  bottom: 40px;
top: -18px;
color: white;
-webkit-transform:rotate(-90deg);
font-size: 50px;
}
#heyy .myanim{
    animation: sli 1s;
    animation-iteration-count: infinite;
  }
  @keyframes sli{
    from{opacity: 1;}
    to{opacity: 0;}
  }
#panel {
  padding: 50px;
  display: none;
    padding: 5px;
  text-align: center;
  background-color: black;
  border: solid 1px white;
  position: absolute;
  top: 45px;
  width: 100%;
  z-index: 20;
  color:white ;
  border-radius: 50px;
  padding-bottom: 30px;
}

.material-icons {
  font-size: 50px;
}

.slide-text {
  color: white;
  font-size: 24px;
  text-transform: uppercase;
}

.bottom {
  position: fixed;
  bottom: 0;
  font-size: 14px;
  color: white;
  a {
    color: white;
  }

}
.logo1{
  position: absolute;
  right: 10px;
}
.logo2{
position: absolute;
right: 60px;
}
.carousel-fade {
    .carousel-inner {
        .item {
            transition-property: opacity;
                height: 100%;
                width: 100%;
        }
        
        .item,
        .active.left,
        .active.right {
            opacity: 0;
        }

        .active,
        .next.left,
        .prev.right {
            opacity: 1;
        }

        .next,
        .prev,
        .active.left,
        .active.right {
            left: 0;
            transform: translate3d(0, 0, 0);
        }
    }

    .carousel-control {
        z-index: 2;
    }
}

.carousel, 
.carousel-inner, 
.carousel-inner .item {

}

.item:nth-child(1) {
    background: #74C390;
}

.item:nth-child(2) {
    background: #51BCE8;
}

.item:nth-child(3) {
    background: #E46653;
}
  .mee{
    height: 100%;
    width: 100%;
  }
    .lowerbox{
    left: 0;
    bottom:0;
    right:0;
    background-color: white;
    height:auto; 
    padding: 20px;
    }
  .maintext{
    font-family:serif; 
    font-variant: small-caps;
    color:#041839;
    position: relative;
  }
  .basetext{
    font-family:serif; 
    font-variant: small-caps;
    color:#041839
  }
  .carousel-inner img {
    width: auto;
    height: auto;
    position: relative;

    margin-right: 0px;
    margin-left: 0px;


  }
  .custom a{
    padding-right: 40px;
  }
  .uppersidebox{
    width: 50px;
    height: 50%;
    top: 0;
    right: 0;
    z-index: 10;
    background-color: #041839;
    position: absolute;
    border: 0;
  }
  .uppersidebox h4 span {
    width:150px;
    display:inline-block;
    position:absolute;
    left:-50px;
    top: 200px;
    -webkit-transform:rotate(90deg);
}
.uppersidebox .content {
    float:left;
    width:250px;
    height:100%;
    padding:20px;

}
.lowersidebox h4 span {
    width:150px;
    display:inline-block;
    position:absolute;
    left:-50px;
    bottom: 200px;
    -webkit-transform:rotate(-90deg);
}
.lowersidebox .content {
    float:left;
    width:250px;
    height:100%;
    padding:20px;

}
  .lowersidebox{
    width: 50px;
    height: 50%;
    position: absolute;
    bottom: 0;
    right: 0;
    align-content: center;
    background-color: #041839;
    z-index: 10;
    border: 0;
  }
  .uppersidebox:hover{
    opacity: 80%;
  }
  .lowersidebox:hover{
    opacity: 80%;
  }
  #carousel-control-prev{
    position: absolute;
    right: 0;
  }
  .leftbox{
    position: absolute;
    bottom: 0;
    margin-left: 0;
    width: 200px;
    background-color: rgba(0,0,0,0.6);
    height: auto;
    z-index: 10;
    color: white;
    padding-top: 20px;
    padding-right: 5px;
  }
  .leftupperbox{
    position: absolute;
    left: 0;
    width: 450px;
    height: 200px;
    top: -180px;
    background-color: white;

  }
  .blubox{
    width: 450px;
    height: 0px;
    top: -180px;
    background-color: #5C6A59;
  }
  .whitebox{
    width: 450px;
    height: 0px;
    top: -180px;
    background-color: white;
  }
  .blubox.vertranslate{
    -webkit-transition: 1s infinite;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 0;
  height: 200px;
  }
.whitebox.sectranslate{
    -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 1s;
  height: 200px;
  }

  .bluebox.uptranslate{
    -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 1250;
  height: 0px;
  }
  .leftupperboxnew{
    position: absolute;
    left: 10px;
    top: -105px;
    width: auto;
    height: auto;
    font-size: 75px;
  }
  .customnew.animated{
    animation: mymove 3s;
  }
  @keyframes mymove {
  from {background-color: #041839;}
  to {background-color: #5C6A59;}
}
 .customnew.animated2{
    animation: mymove2 3s;
  }
  @keyframes mymove2 {
  from {background-color: #5C6A59;}
  to {background-color: #919A0C;}
}
.customnew.animated3{
    animation: mymove3 3s;
  }
  @keyframes mymove3 {
  from {background-color: #919A0C;}
  to {background-color: #041839;}
}
.customnew.animated4{
    animation: mymove4 3s;
  }
  @keyframes mymove4 {
  from {background-color: #041839;}
  to {background-color: #919A0C;}
}
.customnew.animated5{
  animation: mymove5 3s;
}
  @keyframes mymove5 {
  from {background-color: #5C6A59;}
  to {background-color: #041839;}
}
.customnew.animated6{
  animation: mymove6 3s;
}
  @keyframes mymove6 {
  from {background-color: #919A0C;}
  to {background-color: #5C6A59;}
}


@media only screen and (min-width: 350px) and (max-width: 600px){
    .ball2{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  display: none;
}
    .logo1{
  position: relative;
}
.logo2{
position: relative;
right: 8px;
}
    .ball3{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  display: none;
}
    .ball4{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  display: none;
}
#panel {
  padding: 50px;
  display: none;
    padding: 5px;
  text-align: center;
  background-color: black;
  border: solid 1px white;
  position: absolute;
  top: 45px;
  width: 100%;
  z-index: 20;
  color:white ;
  border-radius: 50px;
}
.toucharea{
  width: auto;
  height: auto;
  position: absolute;
  left: 59%;
  bottom: 0;
  z-index: 10;
}
.toucharea2{
  width: auto;
  height: auto;
  position: absolute;
  left: 54%;
  bottom: 0;
  z-index: 10;
}
#itsme{
  height: 50px;
}
#itsme2{
  height: 30px
}
#touchsurface3{
width: 100%;
height: 40px;
}
.slideit{
  width: auto;
  height: auto;
  position: absolute;
  left: 40%;
  bottom: 10%;
  z-index: 10;
}
#button-background {
  position: absolute;
  background-color: transparent;
  width: 80px;
  height: 200px;
  border: white;
  border-radius: 40px;
  text-align: center;
   -webkit-transform:rotate(90deg);
   bottom: 40px;
   align-content: center;
}
#slider {

  position: absolute;
  background-color: transparent;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  bottom: 40px;
top: -18px;
color: white;
-webkit-transform:rotate(-90deg);
size: 20px;
}
.slide-text {
  color: white;
  font-size: 18px;
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;

}

    .leftupperbox{
    position: absolute;
    left: 0;
    width: 300px;
    height: 150px;
    top: -150px;
    background-color: white;
  }
   .blubox{
    width: 300px;
    height: 0px;
    top: -150px;
    background-color: #5C6A59;
  }
  .whitebox{
    width: 300px;
    height: 0px;
    top: -150px;
    background-color: white;
  }
  .blubox.vertranslate{
    -webkit-transition: 1s infinite;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 0;
  height: 150px;
  }
.whitebox.sectranslate{
    -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 1s;
  height: 150px;
  }
    .leftupperboxnew{
    position: absolute;
    left: 10px;
    top: -70px;
    width: auto;
    height: auto;
    font-size: 55px;
  }
  .maintext{
    font-family:serif; 
    font-variant: small-caps;
    color:#041839;
    position: relative;
    font-size: 30px;
  }
  .basetext{
    font-family:serif; 
    font-variant: small-caps;
    color:#041839;
    font-size: 22px;
  }
  html, body {
height:100%;
width:100%;
margin:0;
padding:0;
 }
   .carousel,.item,.active{
      height:100%;
   
    }
  .carousel-inner{
      height:100%;
   
  }
}    
@media only screen and (max-width: 350px){
    .ball2{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  display: none;
}
  .carousel,.item,.active{
      height:100%;
   
    }
    .logo1{
  position: relative;
}
.logo2{
position: relative;
right: 8px;
}
  .carousel-inner{
      height:100%;
   
  }
    .ball3{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  display: none;
}
    .ball4{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: yellow;
  position: relative;
  animation-name: example2;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  display: none;
}
#panel {
  padding: 50px;
  display: none;
    padding: 5px;
  text-align: center;
  background-color: black;
  border: solid 1px white;
  position: absolute;
  top: 45px;
  width: 100%;
  z-index: 20;
  color:white ;
  border-radius: 50px;
}
.toucharea{
  width: auto;
  height: auto;
  position: absolute;
  left: 63%;
  bottom: 0;
  z-index: 10;
}
.toucharea2{
  width: auto;
  height: auto;
  position: absolute;
  left: 58%;
  bottom: 0;
  z-index: 10;
}
#itsme{
  height: 50px;
}
#itsme2{
  height: 30px
}
#touchsurface3{
width: 100%;
height: 40px;
}
.slideit{
  width: auto;
  height: auto;
  position: absolute;
  left: 40%;
  bottom: 10%;
  z-index: 10;
}
#button-background {
  position: absolute;
  background-color: transparent;
  width: 80px;
  height: 200px;
  border: white;
  border-radius: 40px;
  text-align: center;
   -webkit-transform:rotate(90deg);
   bottom: 40px;
   align-content: center;
}
#slider {

  position: absolute;
  background-color: transparent;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  bottom: 40px;
top: -18px;
color: white;
-webkit-transform:rotate(-90deg);
size: 20px;
}
.slide-text {
  color: white;
  font-size: 18px;
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;

}

  .leftupperbox{
    position: absolute;
    left: 0;
    width: 250px;
    height: 130px;
    top: -90px;
    background-color: white;
  }
  html, body {
height:100%;
width:100%;
margin:0;
padding:0;
 }
    .mytext{
    font-size: 11px;
  }
   .blubox{
    width: 250px;
    height: 0px;
    top: -90px;
    background-color: #5C6A59;
  }
  .whitebox{
    width: 250px;
    height: 0px;
    top: -90px;
    background-color: white;
  }
  .blubox.vertranslate{
    -webkit-transition: 1s infinite;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 0;
  height: 130px;
  }
.whitebox.sectranslate{
    -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  transition-delay: 1s;
  height: 130px;
  }
      .leftbox{
    position: absolute;
    bottom: 0;
    margin-left: 0;
    width: 180px;
    background-color: rgba(0,0,0,0.6);
    height: auto;
    z-index: 10;
    color: white;
    padding-top: 20px;
    padding-right: 5px;
  }
    .leftupperboxnew{
    position: absolute;
    left: 10px;
    top: -68px;
    width: auto;
    height: auto;
    font-size: 50px;
  }
  .maintext{
    font-family:serif; 
    font-variant: small-caps;
    color:#041839;
    position: relative;
    font-size: 25px;
  }
  .basetext{
    font-family:serif; 
    font-variant: small-caps;
    color:#041839;
    font-size: 18px;
  }
}
@font-face {
  font-family: myFirstFont;
  src: url(cabin-sketch-v1.02/SCRIPTIN.ttf);
}
@font-face {
  font-family: mySecondFont;
  src: url(cabin-sketch-v1.02/zincboom.ttf);
}

</style>

</body>
</html>

