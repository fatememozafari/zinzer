@extends('layout.zinzer')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 0px;">
        <!-- pics -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid mx-auto" style="width:100%; height: 500px"  src="{{$item->avatar_path1}}" alt="اسلاید اول">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto" style="width: 100%; height: 500px"  src="{{$item->avatar_path2}}" alt="اسلاید دوم">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid mx-auto" style="width: 100%;height: 500px"  src="{{$item->avatar_path3}}" alt="اسلاید سوم">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="قبلی">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">قبلی</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="بعدی">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">بعدی</span>
        </a>
    </div>

    <div class="row" style="padding-right: 50px;padding-left: 50px;padding-bottom: 20px">
        <div class="col-12">
            <h5 class="text-left m-t-30 m-b-20" style="text-align: center;">اخبار و مقاله ها</h5>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    @foreach($articles as $article)
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




    <div class="row" style="padding-right: 50px;padding-left: 50px;padding-bottom: 50px">
        <div class="col-12" style="direction: rtl">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">لیست اعضا انجمن</h4>
                    <p class="text-muted m-b-30">           </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>آدرس</th>
                            <th>پایه</th>
                            <th>گرایش</th>
                            <th>شماره تماس</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>میهن وبمستر</td>
                            <td>معماری سیستم</td>
                            <td>ادینبورگ</td>
                            <td>61</td>
                            <td>2011/04/25</td>

                        </tr>
                        <tr>
                            <td>صیدار مایکل</td>
                            <td>حسابدار</td>
                            <td>توکیو</td>
                            <td>63</td>
                            <td>2011/07/25</td>

                        </tr>
                        <tr>
                            <td>جعفر خان</td>
                            <td>مهندس</td>
                            <td>ارومیه</td>
                            <td>66</td>
                            <td>2009/01/12</td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!-- END wrapper -->

@endsection
