@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$one->name}}</div>

                    <div class="card-body">
                        <div class="container">

                                    <div class="column dt-sc-one-fourth">
                                        <div>
                                            @if($one->picture)
                                                <img src="{{asset('uploads/'.$one->picture)}}"/>
                                            @else
                                                <img src="{{asset('uploads/no_photo.png')}}"/>
                                            @endif
                                        </div>
                                        <div>{{$one->price}}</div>
                                        <div>{{$one->status}}</div>
                                        <div>{!! $one->body !!}</div>
                                    </div>

                        </div>


						
						
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
