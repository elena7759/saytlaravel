@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Галерея</div>

                    <div class="card-body">
                        <div class="container">
                                @foreach($cats as $one)
                                    <div class="column dt-sc-one-fourth">

                                        <div><a href="{{asset('catalog/'.$one->id)}}">{{$one->name}}</a></div>


                                    </div>
                                @endforeach
                        </div>
                        <p align="center">{!!$cats->links()!!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
