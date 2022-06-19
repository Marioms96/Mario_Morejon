<?php
/*
 *  Version 1.0
 *  Created 2021-MAR-23
 *  https://wwww.aeq-web.com
 * 
 */
    $file = fopen("/Applications/MAMP/htdocs/patirental_project/data-eui-70b3d57ed00522c5.txt", 'r');
    $data = fgets($file);
    $sep = explode(";", $data);
    $lat = $sep[0];
    $lon = $sep[1];
    $alt = $sep[2];
    $sat = $sep[3];
    $time = $sep[4];
    $devname = $sep[5];
    $filename = '/Applications/MAMP/htdocs/patirental_project/data-eui-70b3d57ed00522c5.txt';
if (file_exists($filename)) {
    $file = fopen("/Applications/MAMP/htdocs/patirental_project/data-eui-70b3d57ed00522c5.txt", 'r');
    $data = fgets($file);
    fclose($file);
    $sep = explode(";", $data);
    $lat = $sep[0];
    $lon = $sep[1];
    $alt = $sep[2];
    $sat = $sep[3];
    $time = $sep[4];
    $devname = $sep[5];
    $info_out = "LAT: " . $lat . " LON: " . $lon . " ALT: " . $alt . "m <br> SAT: " . $sat . " INSTANTE: " . $time;
} else {
    $info_out = "Error: " . $filename . " not exists";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta http-equiv="content-language" content="es" />
    <link rel="stylesheet" type="text/css" href="https://iesanton-cp5014.wordpresstemporal.com/patirental/resources/css/map.css"></link>
    <script type="text/javascript" src="https://openlayers.org/api/OpenLayers.js"></script>
    
    <script type="text/javascript" src="https://openstreetmap.org/openlayers/OpenStreetMap.js"></script>
    
    <script type="text/javascript" src="https://iesanton-cp5014.wordpresstemporal.com/patirental/resources/js/map.js"></script>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"/>
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}"/>
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>

    @yield('page_css')
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}"/>
    @yield('page_css')

    @yield('css')
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('layouts.header')

        </nav>
        <div class="main-sidebar main-sidebar-postion">
            @include('layouts.sidebar')
        </div>
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('layouts.footer')
        </footer>
    </div>
</div>

@include('profile.change_password')
@include('profile.edit_profile')

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/profile.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom.js') }}"></script>
@yield('page_js')
@yield('scripts')
<script>
    let loggedInUser =@json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ route('login') }}';
    const userUrl = '{{url('users')}}';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>
</html>
