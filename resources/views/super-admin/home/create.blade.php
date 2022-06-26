@extends('layout.super-admin')
@section('page-title','ویرایش بخش های سایت')
@section('content')
    <div style="padding-right: 20px;padding-left: 20px;font-size: larger">
        <div class="alert alert-info" role="alert">
            <strong><b>ویرایش صفحه اصلی</b></strong>
        </div>
    </div>
    <div class="row" style="padding-right: 20px;padding-left: 20px">
        <div class="col-12">
            <div class="card m-b-30">
                @include('layout.alert')
                <div class="card-body">
                    <div style="font-size: medium">
                        تصاویر صفحه اصلی
                    </div>
                    <div style="padding-bottom: 20px">
                        در صورت حذف تصاویر حد اقل یک تصویر باقی بماند . سایز تصاویر باید یکسان باشد (800 * 300 pixels)

                    </div>
                    <form action="/super-admin/home" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid mx-auto" style="width:100%"
                                         src="{{asset('zinzer/assets/images/small/0002.jpg')}}" alt="اسلاید اول">
                                </div>
                                <div class="button-items" style="text-align: left">

                                    <input class="btn btn-info waves-effect waves-light" id="avatar_path" type="file" placeholder="avatar_path"
                                           name="avatar_path" >

                                </div>
                            </div>

                        </div>

                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="carousel-item active">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">ثبت</button>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

