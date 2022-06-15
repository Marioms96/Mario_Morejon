@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Realizar pago</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                    <form action="{{ route('cliente.crear') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre_titular">Nombre titular</label>
                                   <input type="text" name="nombre_titular" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="numero_tarjeta">Número de tarjeta</label>
                                   <input type="text" name="numero_tarjeta" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fecha_caducidad">Fecha de caducidad</label>
                                   <input type="text" name="fecha_caducidad" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="cvc">CVC</label>
                                   <input type="text" name="cvc" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            
                            <button type="submit" class="btn btn-primary">Pagar</button>                            
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
