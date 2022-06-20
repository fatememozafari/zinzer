
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:42:14 GMT -->
@include('super-admin.partials.head')


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
@include('super-admin.partials.sidebar')

<!-- Left Sidebar End -->

    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            @include('super-admin.partials.topbar')
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title m-0">ویرایش بخشش های سایت</h4>
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
        @yield('content')


     @include('super-admin.partials.footer')

    </div>

    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{asset('zinzer/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('zinzer/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('zinzer/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('zinzer/assets/js/detect.js')}}"></script>
<script src="{{asset('zinzer/assets/js/fastclick.js')}}"></script>
<script src="{{asset('zinzer/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('zinzer/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('zinzer/assets/js/waves.js')}}"></script>
<script src="{{asset('zinzer/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('zinzer/assets/js/jquery.scrollTo.min.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('zinzer/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Buttons examples -->
<script src="{{asset('zinzer/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('zinzer/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('zinzer/assets/pages/datatables.init.js')}}"></script>


<script src="{{asset('zinzer/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<link href="{{asset('zinzer/assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />

<script src="{{asset('zinzer/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('zinzer/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('zinzer/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

<!-- dashboard js -->
<script src="{{asset('zinzer/assets/pages/dashboard.int.js')}}"></script>
<script src="{{asset('zinzer/assets/pages/form-advanced.js')}}"></script>
<script>
    jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                 // set focus to editable area after initializing summernote
        });
    });
</script>

<!-- App js -->
<script src="{{asset('zinzer/assets/js/app.js')}}"></script>

</body>


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:42:42 GMT -->
</html>
