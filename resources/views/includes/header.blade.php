<header class="header">
    <div class="container">
        <!-- **Logo - End** -->
        <div id="logo">
            <a href="index.html" title="Priority"> <img src="{{voyager::image(setting('site.logo'))}}" alt="image"/> </a>
        </div><!-- **Logo - End** -->

        <div id="menu-container">
            <!-- **Nav - Starts**-->
            <nav id="main-menu">
                <div id="dt-menu-toggle" class="dt-menu-toggle">
                   {{__('menu.menu')}}
                    <span class="dt-menu-toggle-icon"></span>
                </div>
				{!!menu('main','menu')!!}
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