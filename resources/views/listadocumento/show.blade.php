@extends('layouts.app')

@section('template_title')
    {{ $listadocumento->name ?? 'Show Listadocumento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Listadocumento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listadocumentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo Documento:</strong>
                            {{ $listadocumento->id_tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $listadocumento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Alterno:</strong>
                            {{ $listadocumento->alterno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
