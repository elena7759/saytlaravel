@extends('layouts.base')

@section('content')
<div class="container">
				<!-- Primary Starts -->
				<section id="primary" class="with-right-sidebar page-with-sidebar"> 
				
<div class="entry-detail">
                        	<div class="entry-title">
                            	<h2><a href="{{asset('works')}}">Работы</a> {{$obj->name}}</h2>
                            </div>
                            {!!$obj->body!!}
    <img src="{{asset('storage/'.$obj->picture)}}" width="100%">
                        </div>
						</section>
	</div>
	
 @endsection
