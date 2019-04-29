@extends('layouts.base')

@section('content')
		<div id="main">
        	<div class="parallax full-width-bg">
            	<div class="container">
                	<div class="main-title">
                    	<h1>Portfolio 4 Column With Pagination</h1>
                        <div class="breadcrumb">
                            <a href="index.html">Home</a>
                            <span class="fa fa-angle-right"></span>
                            <a href="portfolio-4-column-with-space.html">Portfolio </a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current">Portfolio 4 Column With Pagination</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dt-sc-margin100"></div>    
			<!-- Container starts-->
			<div class="container">
                <!-- Primary Starts -->
				<section id="primary" class="content-full-width">
                	<div class="sorting-container dt-sc-hr-invisible-small">
                    	<a data-filter=".all-sort" class="active-sort" href="#" >All</a>     
                        <a data-filter=".photography-sort" href="#" >Photography</a>
                        <a href="#" data-filter=".outdoors-sort" >Outdoors</a>         
                        <a href="#" data-filter=".fashion-sort" >Fashion</a>         
                        <a data-filter=".graphic-sort" href="#" >Graphic Design</a>
                    </div>
                    <div class="dt-sc-margin10"></div>
                    <!-- **portfolio-container - Starts** -->
                    <div class="portfolio-container">
					@foreach($arr as $one)
                        <div class="portfolio dt-sc-one-fourth column with-space all-sort graphic-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <img src="{{Voyager::image( $one->picture )}}" alt="image"/>
                                <div class="image-overlay">
                                    <a class="zoom" href="{{Voyager::image( $one->picture )}}" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                    <a class="link" href="portfolio-detail.html"><span class="fa fa-link"></span></a>
                                </div>
                            </div> <!-- **portfolio-thumb - Ends** -->
                            <!-- **portfolio-detail - Starts** -->
                            <div class="portfolio-detail">
                                <div class="views"><span class="fa fa-heart"></span><br/><a href="#">12</a></div>
                                <div class="portfolio-title">
                                    <h5><a href="portfolio-detail.html">{{$one->name}}</a></h5>
                                    <p>Sample text here looks good</p>
                                </div>
                            </div> <!-- **portfolio-detail - Ends** -->
                        </div>
                    @endforeach   
                        
                        
                        
                       
                        
                	</div> <!-- **portfolio-container - Ends** -->
                    <!-- **pagination - Starts** -->  
                    
                	<div class="dt-sc-margin50"></div>
                </section>
                    
            </div> <!-- **container - Ends** --> 
		
        </div> <!-- **Main - Ends** -->

@endsection		