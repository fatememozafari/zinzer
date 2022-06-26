@extends('layout.zinzer')

@section('content')
<div class="thumbnail col-md-5">
    <img style="width: 100%; height: 100%" src="{{$articles->avatar_path ?? '/zinzer/assets/images/small/0003.jpg'}}" alt="">
</div>
<br>
<br>

    <div class="card m-b-30">
       {{$articles->body}}
    </div>

@endsection
