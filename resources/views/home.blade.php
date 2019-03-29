@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<form method="post" action="{{asset('home')}}" enctype="multipart/form-data">
						{!!csrf_field()!!}
	<div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Название товара">
	@if($errors->has('name'))
		<span class="help-block"><b>{{$errors->first('name')}}</b></span>
	@endif
	</div>
	<div class="form-group">
    <label for="body">Описание</label>
	<textarea class="form-control" id="body" name="body"></textarea>
	@if($errors->has('body'))
		<span class="help-block"><b>{{$errors->first('body')}}</b></span>
	@endif
	</div>
	<div class="form-group">
    <label for="price">Цена</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Стоимость товара">
	</div>
	<div class="form-group">
    <label for="picture">Загрузить изображение</label>
    <input type="file" id="picture" name="picture1">
    <p class="help-block">Example block-level help text here.</p>
	</div>
	<div class="form-group">
    <label for="status">Статус</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="Статус товара">
	</div>
	<div class="checkbox">
    <label for="vip">
      <input type="checkbox" id="vip" name="vip"> VIP
    </label>
	</div>
	<button type="submit" class="btn btn-default">Отправить</button>
</form>

<table class="table table-bordered">
<tr>
<td width="200">Изображение</td>
<td>Название</td>
<td>Цена</td>
<td>Статус</td>
<td>Действие</td>
</tr>
@foreach($products as $one)
<tr>
<td>
@if($one->picture)
	<img src="{{asset('uploads/s_'.$one->picture)}}"/>
@else
	<img src="{{asset('uploads/no_photo.png')}}"/>
@endif
</td>
<td>{{$one->name}}</td>
<td>{{$one->price}}</td>
<td>{{$one->status}}</td>
<td><a href="#">&times;</a></td>
</tr>
@endforeach
</table>
	<p align="center">{!!$products->links()!!}
	</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
