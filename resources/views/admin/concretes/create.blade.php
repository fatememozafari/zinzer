@extends('layout.admin')
@section('page-title','ثبت پرونده بتن')
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title m-0">ثبت پرونده بتن</h4>
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title-box -->
                </div>
            </div>
            <!-- end page title -->

        </div><!-- container fluid -->

    </div><!-- Page content Wrapper -->
        <div style="padding-right: 20px;padding-left: 20px;font-size: larger">
            <div class="alert alert-info" role="alert" >
                <strong><b>ثبت پرونده بتن</b></strong>
            </div>
        </div>
        <div class="row" style="padding-right: 20px;padding-left: 20px">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">


                                    <div class="col-sm-4" style="padding-top: 20px">
                                        <label for="example-number-input" >شماره ثبت دستور نقشه</label>
                                        <input class="form-control" type="number" value="" id="example-number-input">
                                    </div>
                                    <div class="col-sm-4" style="padding-top: 20px">
                                        <label for="example-number-input" >متراژ کل بنا</label>
                                        <input class="form-control" type="number" value="" id="example-number-input">
                                    </div>
                                    <div class="col-sm-4"  style="padding-top: 20px">
                                        <label>نوع ساختمان</label>
                                        <select class="form-control">
                                            <option>فلزی و بتی</option>
                                            <option>بتنی</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-4" style="padding-top: 20px">
                                        <label for="example-number-input" >تعداد طبقات کل</label>
                                        <input class="form-control" type="number" value="" id="example-number-input">
                                    </div>







                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-right: 20px;padding-left: 20px">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <div class="card-body">
                                        <div class="button-items" style="text-align: center">
                                            <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">محاصبه و رفتن به صفحه بعد</button>
                                            <button type="button" class="btn btn-secondary btn-sm btn-block waves-effect waves-light">پاک کردن صفحه</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
@endsection

