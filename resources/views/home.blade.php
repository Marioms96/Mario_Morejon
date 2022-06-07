@extends('layouts.app')

@section('content')
    <section class="section">
    <link rel="stylesheet" type="text/css" href="style.css" />
        <div class="section-header">
            <h3 class="page__heading">Mapa</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" id="map">
                            <h4 class="text-left">Selecciona un patinete</h4>
                            <script src="scripts.js"></script>
                            <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA518iqgs6R0jnMcm6TYkqUyEOogPcbOf8&callback=iniciarMap&v=weekly"
      defer
    ></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection

