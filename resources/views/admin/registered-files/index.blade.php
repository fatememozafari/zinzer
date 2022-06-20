@extends('layout.admin')
@section('page-title','پرونده های ثبت شده')
@section('content')
<!-- Start right Content here -->

<div class="content-page" style="margin-right:0px !important;">
    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

            <div class="topbar-left	d-none d-lg-block">
                <div class="text-center">
                    <a href="index-2.html" class="logo"><img src="assets/images/logo.png" height="22" alt="logo"></a>
                </div>
            </div>

            <nav class="navbar-custom">

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="جستجو" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                            <i class="mdi mdi-magnify noti-icon"></i>
                        </a>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>اعلانات (3)</h5>
                            </div>

                            <div class="slimscroll-noti">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده نشده دارید</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>مورد شما حمل می شود</b><span class="text-muted">این یک واقعیت طولانی است که خواننده خواهد بود</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده نشده دارید</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></p>
                                </a>

                            </div>


                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-all">
                                مشاهده همه
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notification-list nav-user">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                            <span class="d-none d-md-inline-block ml-1">آقای میهن وبمستر <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> پروفایل</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> کیف پول من</a>

                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> ارسال تیکت </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> خروج</a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="list-inline-item">
                        <button type="button" class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>


                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">پرونده های ثبت شده</h4>
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

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->
    <div style="padding-right: 20px;padding-left: 20px;font-size: larger">
        <div class="alert alert-info" role="alert" >
            <strong><b>جستجو و گزارش گیری</b></strong>
        </div>
    </div>
    <div class="row" style="padding-right: 20px;padding-left: 20px">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div id="accordion">
                        <div class="card mb-0">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 mt-0 font-14">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseOne" aria-expanded="false"
                                       aria-controls="collapseOne" style="text-align: center;font-size: larger" class="text-dark">
                                        جستجو
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show"
                                 aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-12">

                                            <div class="col-lg-12">
                                                <input class="form-control" type="search" value="جستجوی پرونده" id="example-search-input">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="button-items" style="text-align: center">
                                                    <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">جستجو</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 mt-0 font-14">
                                    <a class="collapsed text-dark" style="text-align: center;font-size: larger"  data-toggle="collapse"
                                       data-parent="#accordion" href="#collapseTwo"
                                       aria-expanded="false" aria-controls="collapseTwo">
                                        گزارشگیری
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input" >از تاریخ</label>
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input2" >تا تاریخ</label>
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input2">
                                        </div>
                                        <div class="col-sm-4"  style="padding-top: 20px">
                                            <label>نوع پرونده را انتخاب کنید</label>
                                            <select class="form-control">
                                                <option>پرونده خاک</option>
                                                <option>پرونده جوش</option>
                                                <option>پرونده بتن</option>
                                                <option>پرونده های بدهکار</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group row">
                                                <div class="card-body">
                                                    <div class="button-items" style="text-align: center">
                                                        <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">گزارش گیری</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-right: 20px;width:100%;padding-left: 20px;font-size: larger">
            <div class="alert alert-info" role="alert" >
                <strong><b>لیست پرونده ها</b></strong>
            </div>
        </div>
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" style="padding-right: 20px;padding-left: 20px">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                        <tr>
                                                            <th>ردیف</th>
                                                            <th>شناسه پرونده</th>
                                                            <th>شماره تماس مالک</th>
                                                            <th>شماره پرونده</th>
                                                            <th>نوع پرونده</th>
                                                            <th>تعداد اقساط</th>
                                                            <th>بدهکاری</th>
                                                            <th>تاریخ ثبت</th>
                                                            <th>اقدامات</th>
                                                        </tr>
                                                        </thead>


                                                        <tbody>


                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>2 قسط</td>
                                                            <td>100 هزار تومان</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                    <button type="button" class="btn btn-purple waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">ارسال لینک قسط 2</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>149</td>
                                                            <td>09917106332</td>
                                                            <td>20025689</td>
                                                            <td>جوش</td>
                                                            <td>1 قسط</td>
                                                            <td>1000</td>
                                                            <td>1400/04/25</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">مشاهده جزئیات</button>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
