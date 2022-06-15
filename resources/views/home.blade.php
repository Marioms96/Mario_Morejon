<?php
/*
 *  Version 1.0
 *  Created 2021-MAR-23
 *  https://wwww.aeq-web.com
 * 
 */
    $file = fopen("/Applications/MAMP/htdocs/proyecto_patirental/data.txt", 'r');
    $data = fgets($file);
    $sep = explode(";", $data);
    $lat = $sep[0];
    $lon = $sep[1];
    $alt = $sep[2];
    $sat = $sep[3];
    $time = $sep[4];
    $devname = $sep[5];
    $filename = 'data.txt';

if (file_exists($filename)) {
    $file = fopen("data.txt", 'r');
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

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mapa</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-left">Selecciona un patinete</h4>
                            <div>
                                <div id="topline">
            <h3>LoRaWAN GPS MAP</h3>
            <p><?php echo $info_out; ?></p>
        </div>      
        <div id="header">
            <div id="osm">© <a href="http://www.openstreetmap.org">OpenStreetMap</a>
                und <a href="http://www.openstreetmap.org/copyright">Mitwirkende</a>,
                <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.de">CC-BY-SA</a>
            </div>
        </div>

        <div id="map">
        </div>
                            </div>
                        
                            <div class="form-group">
                                <button href="{{ route('home') }}" class="btn btn-primary" tabindex="4">
                                    Iniciar pago
                                </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection

