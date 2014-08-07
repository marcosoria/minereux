<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Minereux <?php if(!empty($page_title)) echo " - $page_title" ?></title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="/assets/css/style2.css">
     <link rel="stylesheet" href="/assets/css/camera.css">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="/assets/js/jquery-migrate-1.1.1.js"></script>
     <script src="/assets/js/script.js"></script> 
     <script src="/assets/js/superfish.js"></script>
     <script src="/assets/js/jquery.ui.totop.js"></script>
     <script src="/assets/js/jquery.equalheights.js"></script>
     <script src="/assets/js/jquery.mobilemenu.js"></script>
     <script src="/assets/js/jquery.easing.1.3.js"></script>
     <script src="/assets/js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="/assets/js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
     <script>
      $(document).ready(function(){
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false,
        thumbnails: false,
        height: '58.08510638297872%',
        caption: true,
        navigation: true,
        fx: 'mosaic'
      });   
    });   
    
      $(document).ready(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
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
<body id="page-1">
<!--==============================header=================================-->
<div class="main">
     <div class="head">      
         <header class="container_12">
               <h1><a href="index.html"><img src="/assets/images/logo.png" alt="" height="58"></a></h1>
               
                <div class="clear"></div>
                <nav class="grid_12"> 
               <ul class="sf-menu">
                   <li class="current"><a href="#">Inicio</a></li>
                    <li>
                    	<a href="index-1.html">Nosotros</a>
                        <ul>
                        	<li><a href="#">Historia</a></li>
                         	<li><a href="#">Noticias</a></li>
                      	</ul>
                      </li>
                    <li><a href="#">Proyectos</a> </li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Blog</a></li> 
                      <li><a href="#">Contacto</a></li> 
                </ul>
                  <div class="clear"></div>
              </nav>
                
      </header>
   </div> 
    <!--==============================content================================-->