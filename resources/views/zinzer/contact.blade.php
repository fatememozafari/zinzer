@extends('layout.zinzer')

@section('content')
    <!-- content -->
    <div >
        <img class="d-block img-fluid mx-auto" style="width: 100%;"  src="{{$item->avatar_path}}" alt="اسلاید سوم">
    </div>

    <h5 class="text-left m-t-30 m-b-20" style="text-align: right;padding-right: 50px">تماس با ما</h5>

    <div class="row" style="padding-right: 20px;padding-left: 20px;padding-bottom:50px;text-align: center">
        <div class="col-12" style="text-align: center;">
            <div class="card m-b-30">
                <div class="card-body" >
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="col-sm-6" style="padding-top: 20px">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6469.099512948484!2d50.94601186869833!3d35.83552100954613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbf95ef45f011%3A0x722a04e54eba9bcd!2sKaraj%2C%20Alborz%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1655292626441!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col-sm-6" style="padding-top: 20px">
                                    <p>تلفن تماس:</p>{{$item->number}}
                                    <p>ایمیل</p>{{$item->email}}
                                    <p>آدرس</p>{{$item->address}}
                                    <p>توضیحات بیشتر:</p>{{$item->body}}

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
