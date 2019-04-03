@extends('layouts.base')
@section('scripts')
    @parent
    <script src="{{asset('js/modal.js')}}"></script>
    @endsection
@section('styles')
    @parent
    <link href="{{asset('css/modal.css')}}" rel="stylesheet"/>
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Галерея</div>

                    <div class="card-body">
                        <div class="container">
                                @foreach($products as $one)
                                    <div class="column dt-sc-one-fourth">
                                        <div>
                                            <a href="#" class="clickme" data-id="{{$one->id}}">
                                            @if($one->picture)
                                                <img src="{{asset('uploads/s_'.$one->picture)}}"/>
                                            @else
                                                <img src="{{asset('uploads/no_photo.png')}}"/>
                                            @endif
                                            </a>
                                        </div>
                                        <div><a href="{{asset('product/'.$one->id)}}">{{$one->name}}</a></div>
                                        <div>{{$one->price}}</div>
                                        <div>{{$one->status}}</div>

                                    </div>
                                @endforeach
                        </div>
                        <p align="center">{!!$products->links()!!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
