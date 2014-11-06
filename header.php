<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/slider.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script src="js/tms-0.4.1.js"></script>
     <link href="css/style_login.css" rel='stylesheet' type='text/css' />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    }); 
    
    $(document).ready(function(){
        $("#loginPage").css("display", "none");
        $("#button_login").click(function(){
            var height = $(window).height();
            $("#loginPage").css("height", height);
            $("#loginPage").css("margin-top", -height);
            $("#loginPage").css("display", "block");
            $(".line").css("display", "none");
            $(".login-form form input").val("");
            $(".submit input").val("Prijava");
        
            $("#loginPage").animate({
            marginTop:'0px'
          }, "slow", function(){
              $("#container123123").hide();
          });

          
          $('html, body').css({
                'overflow': 'hidden',
                'height': '100%'
            })
        });
      }); 

     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body>
         <div class="line"></div>
         <div id="loginPage">
             
             <div class="main2">
                 <div class="login-form">
                     <h1>Prijava</h1>
                     <div class="head">
                         <img src="images/user.png" alt=""/>
                     </div>
                     <form>
                         <input type="text" placeholder="Uporabniško ime">
                         <input type="text" placeholder="Geslo">
                         <div class="submit">
                             <input type="submit" onclick="myFunction()" value="Prijava" >
                         </div>	
                         <p><a href="#">Pozabljeno geslo ?</a></p>
                     </form>
                 </div>
             </div>	
         </div>
         <div id="container123123">
       <div class="main">
<!--==============================header=================================-->

    

<header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="index.html"><img src="images/logo.png" alt="EXTERIOR"></a> </h1>
    
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="#">Domov</a></li>
                   <li><a href="#">Restavracije</a></li>
                   <li><a href="#">O Nas</a></li>
                   <li><a href="#" id="button_login">Prijava </a></li>
                   <li><a href="#">Registracija</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>