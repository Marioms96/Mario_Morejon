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
                            <div id="map"></div>
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
        </div>
    </section>
    </body>
@endsection

