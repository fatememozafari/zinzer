<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:46:51 GMT -->
<head>
    @include('zinzer.partials.topbar')
    <style>
        @yield('styles')
    </style>
</head>


<body class="fixed-left">
<!-- Begin page -->
@include('zinzer.partials.topnav')
<!-- pics -->
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

<!-- content -->
@yield('content')
<!-- content -->


@include('zinzer.partials.footer')
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
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {

            x.className = "topnav";
        }
    }
</script>
<!-- App js -->
<script src="{{asset('zinzer/assets/js/app.js')}}"></script>
@yield('scripts')

</body>


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:46:51 GMT -->
</html>
