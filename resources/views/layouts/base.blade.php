<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Priority - Multipurpose HTML5 Template</title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	  
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all" />
	<link id="shortcodes-css" rel="stylesheet" href="{{asset('shortcodes.css')}}" type="text/css" media="all"/>
	<link id="skin-css" rel="stylesheet" href="{{asset('skins/skyblue/style.css')}}" type="text/css" media="all"/>
    <link id="layer-slider" rel="stylesheet"  href="{{asset('css/layerslider.css')}}" media="all" />
	
	<!-- **Additional - stylesheets** -->
	<link rel="stylesheet" href="{{asset('responsive.css')}}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{asset('css/meanmenu.css')}}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/animations.css')}}" type="text/css" media="all" />
    
    <!-- **Font Awesome** -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
    
   
</head>

<body>
<div class="loader-wrapper">
</div>
<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
    	
        <!-- **Top Bar** -->
        <div class="top-bar type3">
        	<!-- **container - Starts** -->
            <div class="container">
                <ul class="top-contact-details alignleft">
                    <li> <i class="fa fa-unlock-alt"></i><a href="#" title="login">Войти</a></li>
                    <li> <i class="fa fa-key"></i><a href="#" title="register">Регистрация</a></li>
                    <li> <i class="fa fa-envelope"></i><a href="#" title="newsletter">mail@mail.ru</a></li>
					<li> <a href="https://www.youtube.com/" title="youtube"> <i class="fa fa-youtube"></i>  </a> </li>
					<li> <a href="https://vk.com/" title="vk"> <i class="fa fa-vk"></i>  </a> </li>
                </ul>
                <span class="shop-cart alignright"><i class="fa fa-shopping-cart"></i><a href="#">Check our shop</a></span>
            </div> <!-- **container - End** -->
        </div> <!-- **Top Bar - End** -->
                
        <div id="header-wrapper">
 @include('includes.header')			       
        </div>
            
        <!-- **Main - Starts** --> 
		<div id="main">		
 @yield('content')		
        </div><!-- **Main - Ends** -->         
 @include('includes.footer')       
    </div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->
        
	<!-- **jQuery** -->  
 @include('includes.script')	
        
</body>
</html>