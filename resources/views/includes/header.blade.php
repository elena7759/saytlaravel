<header class="header">
    <div class="container">
        <!-- **Logo - End** -->
        <div id="logo">
            <a href="index.html" title="Priority"> <img src="{{asset('images/logo.png')}}" alt="image"/> </a>
        </div><!-- **Logo - End** -->

        <div id="menu-container">
            <!-- **Nav - Starts**-->
            <nav id="main-menu">
                <div id="dt-menu-toggle" class="dt-menu-toggle">
                    Menu
                    <span class="dt-menu-toggle-icon"></span>
                </div>
                <ul class="menu">
                    <li class="menu-item-simple-parent current_page_item"><a href="index.html">{{__('menu.main')}}</a></li>
                    <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0"><a
                                href="{{asset('photo')}}">{{__('menu.photo')}}</a></li>
                    <li class="menu-item-simple-parent"><a href="{{asset('video')}}">Видео</a>
                        <ul class="sub-menu">
                            <li class="menu-item-simple-parent current_page_item menu-item-depth-0"><a
                                        href="headers.html">Headers</a></li>
                            <li class="menu-item-simple-parent menu-item-depth-0"><a href="footer1.html">Footers</a>
                            </li>
                            <li class="menu-item-simple-parent menu-item-depth-0"><a href="about.html">About</a></li>
                            <li><a href="team.html"> Team </a></li>
                            <li><a href="services.html"> Services </a></li>
                            <li><a href="pricing-table.html"> Pricing </a></li>
                            <li><a href="tabs-accordions.html"> Shortcodes </a></li>
                            <li><a href="miscellaneous.html"> Miscellaneous </a></li>
                            <li><a href="coming-soon.html"> Coming Soon </a></li>
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="register.html"> Register </a></li>
                            <li><a href="404-page.html"> 404 - page </a></li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0"><a
                                href="{{asset('populars')}}">Блог</a></li>
                    <li class="menu-item-megamenu-parent megamenu-5-columns-group menu-item-depth-0"><a
                                href="{{asset('products')}}">Галерея</a>
                        <div class="megamenu-child-container">
                            <ul class="sub-menu">
                                <li><a href="portfolio-1-column-without-space.html"> I Column</a></li>
                                <li><a href="portfolio-2-column-without-space.html"> II Column</a></li>
                                <li><a href="portfolio-3-column-without-space.html"> III Column</a></li>
                            </ul>
                        </div>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="menu-item-simple-parent"><a href="shop.html">Витрина</a></li>
                    <li class="menu-item-simple-parent"><a href="{{asset('contact')}}">Контакты</a></li>
                </ul>
            </nav>
            <!-- **Nav - End**-->
        </div>

    </div>
</header>
<div class="parallax full-width-bg">
    <div class="container">
        <div class="main-title">
            <h1>Header 10</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-right"></span>
                <a href="tabs-accordions.html">Pages</a>
                <span class="fa fa-angle-right"></span>
                <span class="current">Header 10</span>
            </div>
        </div>
    </div>
</div>