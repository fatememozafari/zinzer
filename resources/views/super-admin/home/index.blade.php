@extends('layout.super-admin')
@section('page-title','افزودن مطلب')
@section('content')

<div style="padding-right: 20px;padding-left: 20px;font-size: larger">
    <div class="alert alert-info" role="alert" >
        <strong><b>ویرایش صفحه اصلی</b></strong>
    </div>
</div>
<div class="row" style="padding-right: 20px;padding-left: 20px">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div style="font-size: medium">
                    تصاویر صفحه اصلی
                </div>
                <div style="padding-bottom: 20px">

                </div>
                <form action="/super-admin/home" method="get" enctype="multipart/form-data">
                    <div class="row">

                        @foreach($home as $item)
                        <div class="col-lg-4">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid mx-auto" style="width:100%"  src="{{$item->avatar_path}}" alt="اسلاید اول">
                            </div>
                            <div class="button-items" style="text-align: left">
                                <button class="btn btn-danger waves-effect waves-light" type="submit" >پاک کردن</button>

                            </div>
                        </div>
                        @endforeach


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
