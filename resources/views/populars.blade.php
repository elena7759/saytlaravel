@extends('layouts.base')

@section('content')
    <div class="container">
        <!-- Primary Starts -->
        <section id="primary" class="with-right-sidebar page-with-sidebar">

            <div class="entry-detail">
                <div class="entry-title">
                    <h2><a href="blog.html">Популярное</a></h2>
                </div>
                @foreach($all as $one)

                    <h2>
                        <a href="{{asset($one->url)}}">{{$one->name}}</a>
                        {{$one->name}}
                    </h2>
                    <div>

                        {!!$one->body!!}
                    </div>

                @endforeach
            </div>
        </section>
    </div>

@endsection
