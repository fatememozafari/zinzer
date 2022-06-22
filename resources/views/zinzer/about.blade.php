@extends('layout.zinzer')

@section('content')

<!-- content -->
<div >
    <img class="d-block img-fluid mx-auto" style="width: 100%;"  src="{{asset('zinzer/assets/images/small/aboutus.jpg')}}" alt="اسلاید سوم">
</div>

<h5 class="text-left m-t-30 m-b-20" style="text-align: right;padding-right: 50px">درباره ما</h5>

<div class="row" style="padding-right: 20px;padding-left: 20px;padding-bottom:50px;text-align: center">
    <div class="col-12" style="text-align: center;">
        <div class="card m-b-30">
            <div class="card-body" >

                <div class="row" >
                    <div class="col-lg-12">

                        <div class="form-group row">

                            <div class="col-sm-6" style="padding-top: 20px">
                                <img class="d-block img-fluid mx-auto" style="width: 100%;"  src="{{$item->avatar_path }}" alt="اسلاید سوم">
                            </div>
                            <div class="col-sm-6" style="padding-top: 20px">
                                <h5  style="text-align: justify;line-height:30px;direction:rtl;padding-right: 0px;font-size: medium";>
                                    {{$item->body}}
                                </h5>

                            </div>

                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div>
    </div>
</div>

<!-- END wrapper -->
</div> <!-- content -->

@endsection
