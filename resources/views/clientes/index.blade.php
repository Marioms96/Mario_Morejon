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

@extends('layouts.app')
@section('content')
<section class="section" onload="drawmap();">
        
        <div class="section-header">
            <h3 class="page__heading">Mapa</h3>
        </div>
        <div class="section-body" style="overflow: scroll;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" >
                            <h4 class="text-left">Alquiler en curso</h4>
                            <div id="topline">
                                                                <p><?php echo $info_out; ?></p>
                                                            </div>      
                                                            <div id="header">
                                                                <div id="osm">© <a href="http://www.openstreetmap.org">OpenStreetMap</a>
                                                                    und <a href="http://www.openstreetmap.org/copyright">Mitwirkende</a>,
                                                                    <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.de">CC-BY-SA</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <div id="mapa" style="width:100%;height:400px;"></div>
                                                            <script type="text/javascript">
                                                
                                                                var map;
                                                                var layer_mapnik;
                                                                var layer_tah;
                                                                var layer_markers;
                                                
                                                                var popuptext = "<?php echo $devname; ?>";
                                                
                                                                OpenLayers.Lang.setCode('es');
                                                
                                                                var lon = <?php echo $lon; ?>;
                                                                var lat = <?php echo $lat; ?>;
                                                                var zoom = 19;
                                                
                                                                map = new OpenLayers.Map('mapa', {
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
                                                                layer_markers = new OpenLayers.Layer.Markers("Address", {
                                                                    projection: new OpenLayers.Projection("EPSG:4326"),
                                                                    visibility: true, displayInLayerSwitcher: false});
                                                
                                                                map.addLayers([layer_mapnik, layer_markers]);
                                                                jumpTo(lon, lat, zoom);
                                                
                                                                addMarker(layer_markers, <?php echo $lon ?>, <?php echo $lat ?>, popuptext);
                                                                
                                                            </script> 
                                                            <div class="form-group">
                                                                <a class="btn btn-primary" style="margin-top: 5px" href="{{ route('home') }}">Finalizar alquiler</a>
                                
                            </div>
                                            </div>                                
                        </div>
                    </div>
            </div>
        </div>
    </section>
    @endsection