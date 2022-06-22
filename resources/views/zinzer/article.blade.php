@extends('layout.zinzer')

@section('content')

    <div class="row" style="padding-right: 50px;padding-left: 50px;padding-bottom: 20px">
        <div class="col-12">
            <h5 class="text-left m-t-30 m-b-20" style="text-align: center;"> مقاله ها</h5>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    @foreach($item as $article)
                        <div class="card m-b-30">
                            <img class="card-img-top img-fluid" src="{{$article->avatar_path}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-16 mt-0">{{$article->title}}</h4>
                                <p class="card-text" style="direction: rtl;text-align: justify">{{$article->body}}</p>

                                <a href="#about">ادامه مطلب</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
