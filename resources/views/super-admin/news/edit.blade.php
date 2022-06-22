@extends('layout.super-admin')
@section('page-title','ویرایش بخش های سایت')
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" >
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/super-admin/news/{{$item->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>عنوان</label>
                            <input type="text" name="title" class="form-control" value="{{$item->title}}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid mx-auto" style="width:100%"  src="{{asset('zinzer/assets/images/small/0002.jpg')}}" alt="اسلاید اول">
                        </div>
                        <div class="button-items" style="text-align: left">
                            <input type="button" name="avatar_path" class="btn btn-info waves-effect waves-light" value="{{$item->avatar_path}}">افزودن تصویر جدید</input>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>ویرایش متن</label>
                            <div>
                                <textarea class="summernote" name="body" value="">{{$item->body}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="button-items">
                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light">ویرایش و ذخیره</button>
                        </div>
                    </div>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection
