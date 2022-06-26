@extends('layout.super-admin')
@section('page-title','ویرایش بخش های سایت')
@section('content')
    @include('layout.alert')

{{--   @include('super-admin.home.index')--}}
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
                    در صورت حذف تصاویر حد اقل یک تصویر باقی بماند . سایز تصاویر باید یکسان باشد (800 * 300 pixels)

                </div>
                <a href="/super-admin/home/create" class="btn btn-primary waves-effect waves-light" type="button" >افزودن</a>

                    <div class="row">

                        @foreach($home as $item)
                            <div class="col-lg-4">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid mx-auto" style="width:300px; height: 150px"  src="{{$item->avatar_path}}" alt="اسلاید اول">
                                </div>
                                <div class="button-items" style="text-align: left">
                                    <a href="/super-admin/home/{{$item->id}}/edit">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">جا به جایی</button>
                                    </a>
                                    <button class="btn btn-danger waves-effect waves-light" type="submit" >پاک کردن</button>

                                </div>
                            </div>
                        @endforeach


                </div>

            </div>
        </div>
    </div>
</div>
    <!-- end row -->
{{--   @include('super-admin.about.index'--}}

<div style="padding-right: 20px;padding-left: 20px;font-size: larger">
    <div class="alert alert-info" role="alert" >
        <strong><b>ویرایش منوی درباره ما</b></strong>
    </div>
</div>
<div class="row" style="padding-right: 20px;padding-left: 20px;padding-bottom: 100px">
    <div class="col-12">
        <div class="card m-b-30">

            <form action="/super-admin/about/1/edit" method="get" enctype="multipart/form-data">
                @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="d-block img-fluid mx-auto" style="width: 100%;"  src="{{asset('zinzer/assets/images/small/contactus.jpg')}}" alt="اسلاید سوم">
                                <div style="padding-top: 50px">
                                    <button class="btn btn-info waves-effect waves-light" type="submit" >جانمایی عکس جدید</button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="body" type="text" placeholder="متن درباره ما" name="body" value="">{{old('body') ?? ''}}</textarea>
                                <div style="padding-top: 50px">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش و ذخیره</button>

                                </div>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
</div>


    <!-- end row -->

{{--   @include('super-admin.article.index')--}}


    <div style="padding-right: 20px;padding-left: 20px;font-size: larger">
            <div class="alert alert-info" role="alert" >
                <strong><b>ویرایش و افزودن مقاله ها</b></strong>
            </div>
        </div>

    <div class="row" style="padding-right: 50px;padding-left: 50px;padding-bottom: 50px">
        <div class="col-12" style="direction: rtl">
            <div class="card m-b-30">
                <div class="card-body">

                    <p class="text-muted m-b-30">           </p>
                    <a href="/super-admin/article/create" class="btn btn-primary waves-effect waves-light" type="button" >افزودن</a>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>محتوا</th>
                            <th>تصویر</th>
                            <th>ویرایش</th>

                        </tr>
                        </thead>


                        <tbody>
                        @foreach($article as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->body}}</td>
                                <td><img class="d-block img-fluid mx-auto" style="width: 100px"  src="{{$item->avatar_path}}" ></td>
                                <td>
                                    <div class="col-sm-6 col-md-3 m-t-30">
                                        <div class="text-center">
                                            <!-- Small modal -->

                                            <a href="/super-admin/article/{{$item->id}}/edit" class="btn btn-primary waves-effect waves-light" type="button" >ویرایش</a>

                                            <form action="/super-admin/article/{{$item->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger waves-effect waves-light" type="submit" style="padding: 3px">حذف</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!-- END wrapper -->
{{--   <!-- end row -->--}}


{{--   @include('super-admin.news.index')--}}
    <div style="padding-right: 20px;padding-left: 20px;font-size: larger">
        <div class="alert alert-info" role="alert" >
            <strong><b>ویرایش و افزودن اخبار</b></strong>
        </div>
    </div>

    <div class="row" style="padding-right: 50px;padding-left: 50px;padding-bottom: 50px">
        <div class="col-12" style="direction: rtl">
            <div class="card m-b-30">
                <div class="card-body">

                    <p class="text-muted m-b-30">           </p>
                    <a href="/super-admin/news/create" class="btn btn-primary waves-effect waves-light" type="button" >افزودن</a>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>محتوا</th>
                            <th>تصویر</th>
                            <th>ویرایش</th>

                        </tr>
                        </thead>


                        <tbody>
                        @foreach($news as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->body}}</td>
                                <td><img class="d-block img-fluid mx-auto" style="width: 100px"  src="{{$item->avatar_path}}" ></td>
                                <td>
                                    <div class="col-sm-6 col-md-3 m-t-30">
                                        <div class="text-center">
                                            <!-- Small modal -->

                                            <a href="/super-admin/article/{{$item->id}}/edit" class="btn btn-primary waves-effect waves-light" type="button" >ویرایش</a>

                                            <form action="/super-admin/article/{{$item->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger waves-effect waves-light" type="submit" style="padding: 3px">حذف</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!-- END wrapper -->

{{--   <!-- end row -->--}}
{{--   @include('super-admin.contact.edit')--}}
<div style="padding-right: 20px;padding-left: 20px;font-size: larger">
    <div class="alert alert-info" role="alert" >
        <strong><b>ویرایش منوی ارتباط با ما</b></strong>
    </div>
</div>
<div class="row" style="padding-right: 20px;padding-left: 20px;padding-bottom: 100px">
    <div class="col-12">
        <div class="card m-b-30">

            <form action="/super-admin/contact/1/edit" method="get" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="d-block img-fluid mx-auto" style="width: 100%;"  src="{{asset('zinzer/assets/images/small/contactus.jpg')}}" alt="اسلاید سوم">
                            <div style="padding-top: 50px">
                                <button class="btn btn-info waves-effect waves-light" type="submit" >جانمایی عکس جدید</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <textarea class="form-control" id="body" type="text" placeholder="متن ارتباط با ما" name="body" value="">{{old('body') ?? ''}}</textarea>
                            <div style="padding-top: 50px">
                                <button type="submit" class="btn btn-info waves-effect waves-light">ویرایش و ذخیره</button>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
{{--   <!-- end row -->--}}

    <script>
        var $  = require( 'jquery' );
        var dt = require( 'datatables.net' )();

    </script>






@endsection
