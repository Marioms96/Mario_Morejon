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
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Marca</th>
                                    <th style="color:#fff;">Modelo</th>                                    
                                    <th style="color:#fff;">Estado</th>
                                    <th style="color:#fff;">Velocidad</th>
                                    <th style="color:#fff;">Tiempo de uso</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($patinetes as $patinete)
                            <tr>
                                <td style="display: none;">{{ $patinete->id }}</td>                                
                                <td>{{ $patinete->marca }}</td>
                                <td>{{ $petinete->modelo }}</td>
                                <td>{{ $petinete->estado }}</td>
                                <td>
                                    <form action="{{ route('patinetes.destroy',$patinete->id) }}" method="POST">                                        
                                        @can('editar-patinetes')
                                        <a class="btn btn-info" href="{{ route('patinetes.edit',$patinete->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-patinetes')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
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
