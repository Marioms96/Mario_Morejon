@extends('layouts.app')

@section('content')

    <section class="section">
        <script type="text/javascript">
            // JavaScript source code
              function inicializar() {
                  //Opciones del mapa
                  var OpcionesMapa = {
                      center: new google.maps.LatLng(37.70024, -5.28121),
                      mapTypeId: google.maps.MapTypeId.SATELLITE, //ROADMAP  SATELLITE HYBRID TERRAIN
                      mapMaker: true,
                      zoom: 10
                  };
               
                  var miMapa;
                  //constructor
                  miMapa = new google.maps.Map(document.getElementById('map'), OpcionesMapa);
              
                  //Añadimos el marcador
                  var Marcador = new google.maps.Marker({
                                  position: new google.maps.LatLng(37.70024, -5.28121),
                                  map: miMapa,
                                  title:"Palma del Río (Córdoba)"
                              });
              }
               
              function CargaScript() {
                  var script = document.createElement('script');
                  script.src = 'https://maps.googleapis.com/maps/api/js?sensor=false&callback=inicializar';
                  document.body.appendChild(script);                 
              }
               
              window.onload = CargaScript;
        </script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <style>
            /**
            * @license
            * Copyright 2019 Google LLC. All Rights Reserved.
            * SPDX-License-Identifier: Apache-2.0
            */
            /* Set the size of the div element that contains the map */
            #map {
              height: 400px;
              /* The height is 400 pixels */
              width: 100%;
              /* The width is the width of the web page */
            }
        </style>
        <div class="section-header">
            <h3 class="page__heading">Mapa</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-left">Selecciona un patinete</h4>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection

