<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-language" content="de" />
        <link rel="stylesheet" type="text/css" href="map.css"></link>
        <script type="text/javascript" src="https://openlayers.org/api/OpenLayers.js"></script>
        <script type="text/javascript" src="https://openstreetmap.org/openlayers/OpenStreetMap.js"></script>
        <script type="text/javascript" src="map.js"/>

        <script type="text/javascript">

            var map;
            var layer_mapnik;
            var layer_tah;
            var layer_markers;

            function drawmap() {
                var popuptext = "<?php echo $devname; ?>";

                OpenLayers.Lang.setCode('de');

                var lon = <?php echo $lon; ?>;
                var lat = <?php echo $lat; ?>;
                var zoom = 19;

                map = new OpenLayers.Map('map', {
                    projection: new OpenLayers.Projection("EPSG:900913"),
                    displayProjection: new OpenLayers.Projection("EPSG:4326"),
                    controls: [
                        new OpenLayers.Control.Navigation(),
                        new OpenLayers.Control.LayerSwitcher(),
                        new OpenLayers.Control.PanZoomBar()],
                    maxExtent:
                            new OpenLayers.Bounds(-20037508.34, -20037508.34,
                                    20037508.34, 20037508.34),
                    numZoomLevels: 18,
                    maxResolution: 156543,
                    units: 'meters'
                });

                layer_mapnik = new OpenLayers.Layer.OSM.Mapnik("Mapnik");
                layer_markers = new OpenLayers.Layer.Markers("Address", {projection: new OpenLayers.Projection("EPSG:4326"),
                    visibility: true, displayInLayerSwitcher: false});

                map.addLayers([layer_mapnik, layer_markers]);
                jumpTo(lon, lat, zoom);

                addMarker(layer_markers, <?php echo $lon ?>, <?php echo $lat ?>, popuptext);

            }
        </script>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>

@yield('page_css')
<!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
    @yield('page_css')

    @yield('css')
</head>
<body onload="drawmap();">

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
<script src="{{ mix('assets/js/profile.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script>
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
