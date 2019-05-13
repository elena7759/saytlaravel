<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ирвыаривыа</title>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- **CSS - stylesheets** -->
    <link id="default-css" rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link id="shortcodes-css" rel="stylesheet" href="shortcodes.css" type="text/css" media="all"/>
    <link id="skin-css" rel="stylesheet" href="skins/skyblue/style.css" type="text/css" media="all"/>
    <link id="fancy-box" href="css/jquery.fancybox.css" rel="stylesheet" media="all" />
    <link id="layer-slider" rel="stylesheet"  href="css/layerslider.css" media="all" />
    <link rel="stylesheet" href="responsive.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/animations.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    @section('styles')
    @show
</head>
<body>
<!-- **Wrapper** -->
<div class="wrapper">
    <div class="inner-wrapper">

        <!-- **Top Bar** -->
        <div class="top-bar">
            <div class="container">
                <ul class="top-menu">
                    <li> <i class="fa fa-phone"></i><span> +375441112233 </span></li>
                    <li><i class="fa fa-envelope"></i><span> tv@mail.ru </span></li>
                </ul>
                <ul class="top-social-icons alignright">
                    <li> <a href="" title="youtube"> <i class="fa fa-youtube"></i></a></li>
                    <li> <a href="" title="vk"><i class="fa fa-vk"></i></a></li>
                </ul>

            </div>
        </div><!-- **Top Bar - End** -->


        <div id="header-wrapper">
            <!-- **Header** -->
            <header class="header">
                <div class="container">


                    <div id="menu-container">
                        <nav id="main-menu">
                            <div id="dt-menu-toggle" class="dt-menu-toggle">
                                Меню
                                <span class="dt-menu-toggle-icon"></span>
                            </div>
                            <ul class="menu">
                                <li class="current_page_item menu-item-simple-parent"><a href="index.html">Главная</a></li>
                                <li class="menu-item-simple-parent"><a href="3d.html">3-D</a></li>
                                <li class="menu-item-simple-parent"><a href="video.html">Видео</a></li>
                                <li class="menu-item-simple-parent"><a href="foto.html">Фото</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="image.html">Имиджевая фотосъемка</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="interior.html">Интерьерная фотосъемка</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="arhitektura.html">Фотосъемка архитектуры</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="katalog.html">Каталожная фотосъемка</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="predmet.html">Предметная фотосъемка</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="food.html">Food - фотография</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="artphoto.html">Художественное фото</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="portret.html">Портретная фотосъемка</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="bisph.html">Бизнес портрет</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="post.html">Постановочная фотосъемка</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="sport.html">Спорт</a></li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="reportaj.html">Репортаж</a></li>
                                    </ul>
                                    <a class="dt-menu-expand">+</a>
                                </li>
                                <li class="menu-item-simple-parent"><a href="sound.html">Запись звука</a></li>
                                <li class="menu-item-simple-parent"><a href="design.html">Дизайн</a></li>
                                <li class="menu-item-simple-parent"><a href="contact.html">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </header><!-- **Header - End** -->
        </div>

        <!-- **Main - Starts** -->
        <div id="main">
 @yield('content')




        </div> <!-- **Main - Ends** -->

        <!-- **Footer** -->
        <footer id="footer">
            <div class="footer-widgets-wrapper type2">
                <div class="container">

                    <div class="column dt-sc-one-fourth first">
                        <aside class="widget widget_contact">

                            <h3 class="widget-title"><span class="fa fa-binoculars"></span><a href="3d.html">3-D</a></h3>
                            <h3 class="widget-title"><span class="fa fa-video-camera"></span><a href="video.html">ВИДЕО</a></h3>
                            <h3 class="widget-title"><span class="fa fa-camera"></span><a href="foto.html">ФОТО</a></h3>
                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_contact">
                            <h3 class="widget-title"><span class="fa fa-music"></span><a href="sound.html">ЗАПИСЬ ЗВУКА</a></h3>
                            <h3 class="widget-title"><span class="fa fa-paint-brush"></span><a href="grafica.html">ДИЗАЙН</a></h3>
                            <h3 class="widget-title"><span class="fa fa-fighter-jet"></span><a href="oborudovanie.html">ОБОРУДОВАНИЕ</a></h3>

                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_contact">
                            <h3 class="widget-title"><span class="fa fa-user"></span><a href="client.html">НАШИ КЛИЕНТЫ</a></h3>
                            <h3 class="widget-title"><span class="fa fa-play"></span><a href="sovet.html">ВИДЕОУРОКИ</a></h3>
                            <h3 class="widget-title"><span class="fa fa-user"></span><a href="model.html">НАШИ МОДЕЛИ</a></h3>

                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_contact">
                            <h3 class="widget-title"><span class="fa fa-globe"></span><a href="">m.tv</a></h3>
                            <h3 class="widget-title"><span class="fa fa-phone"></span><a href="">+375441112233</a></h3>
                            <h3 class="widget-title"><span class="fa fa-envelope"></span><a href=''>tv@mail.ru</a></h3>
                        </aside>
                    </div>

                </div>
            </div><!-- **footer-widgets-wrapper - End** -->

            <div class="copyright type2">
                <div class="container">

                    <ul class="footer-links">
                        <li><a href="index.html">Главная</a>/</li>
                        <li><a href="3d.html">3D</a>/</li>
                        <li><a href="video.html">Видео</a>/</li>
                        <li><a href="foto.html">Фото</a>/</li>
                        <li><a href="sound.html">Запись звука</a>/</li>
                        <li><a href="design.html">Дизайн</a>/</li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>

        </footer> <!-- **Footer - End** -->

    </div><!-- **inner-wrapper - End** -->

</div><!-- **Wrapper - End** -->

<!-- **jQuery** -->
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate.min.js"></script>
<script src="js/pace.min.js" type="text/javascript"></script>
<script src="js/jquery.tabs.min.js"></script>
<script src="js/jquery.tipTip.minified.js"></script>
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="js/jquery.inview.js" type="text/javascript"></script>
<script src="js/jquery.viewport.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.nav.js"></script>

<script src="js/layerslider.transitions.js"></script>
<script src="js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/greensock.js"></script>

<script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script><script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_11','jquery'); } else { lsjQuery("#layerslider_11").layerSlider({responsiveUnder: 1240, layersContainer: 1170, startInViewport: false, pauseOnHover: false, forceLoopNum: false, autoPlayVideos: false, skinsPath: 'js/layerslider/skins/'}) } }); </script>

<script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script src="js/masonry.pkgd.min.js" type="text/javascript"></script>

<script src="js/responsive-nav.js" type="text/javascript"></script>
<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>

<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

<!-- **Sticky Nav** -->
<script src="js/jquery.sticky.js" type="text/javascript"></script>

<!-- **To Top** -->
<script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<script src="js/retina.js" type="text/javascript"></script>

<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>

<script src="js/custom.js" type="text/javascript"></script>


</body>
</html>
