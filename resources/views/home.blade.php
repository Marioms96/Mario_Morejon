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
                            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-5.316781997680665%2C37.667244511643865%2C-5.244684219360352%2C37.71926926474386&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection

