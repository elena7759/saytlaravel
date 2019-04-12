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
                   {{__('menu.menu')}}
                    <span class="dt-menu-toggle-icon"></span>
                </div>
                <ul class="menu">
                    <li class="menu-item-simple-parent current_page_item"><a href="{{asset('/')}}">{{__('menu.main')}}</a>
                    </li>
                    <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0"><a
                                href="{{asset('photo')}}">{{__('menu.photo')}}</a></li>
                    <li class="menu-item-simple-parent"><a href="{{asset('video')}}">{{__('menu.video_menu')}}</a>
                        <ul class="sub-menu">
                            @foreach($videos as $one)
                                <li><a href="'{{asset('/catalog/'.$one->id)}}">{{__('menu.video.'.$one->name)}}</a></li>
                            @endforeach
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0"><a
                                href="{{asset('populars')}}">{{__('menu.blog')}}</a></li>
                    <li class="menu-item-megamenu-parent megamenu-5-columns-group menu-item-depth-0"><a
                                href="{{asset('products')}}">{{__('menu.photo')}}</a>
                        <div class="megamenu-child-container">
                            <ul class="sub-menu">
                                <li><a href="portfolio-1-column-without-space.html"> I Column</a></li>
                                <li><a href="portfolio-2-column-without-space.html"> II Column</a></li>
                                <li><a href="portfolio-3-column-without-space.html"> III Column</a></li>
                            </ul>
                        </div>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="menu-item-simple-parent"><a href="{{asset('shop')}}">{{__('menu.shop')}}</a></li>
                    <li class="menu-item-simple-parent"><a href="{{asset('contact')}}">{{__('menu.contact')}}</a></li>
                    <li class="menu-item-simple-parent"><a href="{{asset('/?lang=ru')}}">RU</a></li>
                    <li class="menu-item-simple-parent"><a href="{{asset('/?lang=en')}}">EN</a></li>
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