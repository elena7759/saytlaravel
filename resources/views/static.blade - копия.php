@extends('layouts.base')

@section('content')
<div class="container">
				<!-- Primary Starts -->
				<section id="primary" class="with-right-sidebar page-with-sidebar"> 
				
<div class="entry-detail">
                        	<div class="entry-title">
                            	<h2><a href="blog.html">{{$obj->name}}</a></h2>
                            </div>
                            <!-- **entry-meta-data - Starts** -->
                            <div class="entry-meta-data">
                                <p><span class="fa fa-user"> </span> Posted By: <a href="#"> admin </a></p>
                                <p><span class="fa fa-tag"> </span> In: <a href="#">  Trend,</a> <a href="#"> Technology,</a><a href="#"> Web2.0 </a></p>
                            </div> <!-- **entry-meta-data - Ends** -->
                            {!!$obj->body!!}
                        </div>
						</section>
	</div>
	
 @endsection
