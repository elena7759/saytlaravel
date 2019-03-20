@extends('layouts.base')

@section('content')
<div class="container">
				<!-- Primary Starts -->
				<section id="primary" class="with-right-sidebar page-with-sidebar"> 
				<div class="entry-thumb">
                            <a href="blog.html"><img src="http://placehold.it/1170x767&text=Blog" alt="image"/></a>
                        </div>
<div class="entry-detail">
                        	<div class="entry-title">
                            	<h2><a href="blog.html">{{$url}}</a></h2>
                            </div>
                            <!-- **entry-meta-data - Starts** -->
                            <div class="entry-meta-data">
                                <p><span class="fa fa-user"> </span> Posted By: <a href="#"> admin </a></p>
                                <p><span class="fa fa-tag"> </span> In: <a href="#">  Trend,</a> <a href="#"> Technology,</a><a href="#"> Web2.0 </a></p>
                            </div> <!-- **entry-meta-data - Ends** -->
                            <div class="entry-body">
                            	<p><b>Priority</b> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="dt-sc-margin10"></div>
                            <blockquote class="type2"> 
                                <span class="fa fa-quote-left"></span> 
                                <q> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Aldus PageMaker including versions of Lorem Ipsum.</q> 
                                <span class="fa fa-quote-right"></span> 
                            </blockquote>
                            <div class="dt-sc-hr-invisible-very-small"></div>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. </p>
                        </div>
						</section>
	</div>
	
 @endsection
