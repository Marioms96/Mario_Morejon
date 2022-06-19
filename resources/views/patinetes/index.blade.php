@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Patinetes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @can('crear-patinete')
                        <a class="btn btn-warning" href="{{ route('patinetes.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#cb2626">                                     
                                    <th style="color:#fff;">Id</th>
                                    <th style="color:#fff;">Marca</th>
                                    <th style="color:#fff;">Modelo</th>                                    
                                    <th style="color:#fff;">Estado</th>
                                    <th style="color:#fff;">Velocidad</th>
                                    <th style="color:#fff;">Tiempo de uso</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($patinetes as $patinete)
                            <tr>
                                <td>{{ $patinete->id_patinete }}</td>                                
                                <td>{{ $patinete->marca }}</td>
                                <td>{{ $patinete->modelo }}</td>
                                <td>{{ $patinete->estado }}</td>
                                <td>{{ $patinete->velocidad }}</td>
                                <td>{{ $patinete->tiempo_uso }}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $patinetes->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
