<!DOCTYPE html>
<html>
<head>
    @include('admin.layouts.head')
    @yield('css')
</head>

<body>
    <div id="layout-wrapper">
        @include('admin/layouts/header')
        @include('admin/layouts/sidebar')

        <div class="main-content">
            <div class="page-content">
                @yield('page-content')
            </div>

            @include('admin/layouts/footer')
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('asset_admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset_admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset_admin/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('asset_admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('asset_admin/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('asset_admin/js/app.js')}}"></script>
    <script src="{{asset('asset_admin/libs/apexcharts/apexcharts.min.js')}}"></script>
    {{--moment--}}
    <script src="{{asset('asset_admin/libs/moment/min/moment.min.js')}}"></script>

    {{--swap theme--}}
    <script>
        let client_time = moment().get('hour');

        if (client_time > 18 || client_time < 6){
            //topbar
            $('body').removeAttr("data-topbar", "light");
            $('body').attr("data-topbar", "dark");
            // sidebar
            $('body').removeAttr("data-sidebar", "light");
            $('body').attr("data-sidebar", "dark");
        }   // dark theme
        else{
            // topbar
            $('body').removeAttr("data-topbar", "dark");
            $('body').attr("data-topbar", "light");
            // sidebar
            $('body').removeAttr("data-sidebar", "dark");
            $('body').attr("data-sidebar", "light");
        }   // light theme
    </script>

    @yield('custom-js')
</body>

</html>
