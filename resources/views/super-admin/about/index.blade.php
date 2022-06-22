<div style="padding-right: 20px;padding-left: 20px;font-size: larger">
    <div class="alert alert-info" role="alert" >
        <strong><b>ویرایش منوی درباره ما</b></strong>
    </div>
</div>
<div class="row" style="padding-right: 20px;padding-left: 20px;padding-bottom: 100px">
    <div class="col-12">
        <div class="card m-b-30">
            @include('layout.alert')

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
