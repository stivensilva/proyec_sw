@extends('layouts.app')

@section('template_title')
    {{ $listagenero->name ?? 'Show Listagenero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Listagenero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listageneros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Genero:</strong>
                            {{ $listagenero->id_genero }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Genero:</strong>
                            {{ $listagenero->descripcion_genero }}
                        </div>
                        <div class="form-group">
                            <strong>Sw Activo:</strong>
                            {{ $listagenero->sw_activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
