@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? 'Show Articulo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $articulo->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $articulo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $articulo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $articulo->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $articulo->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $articulo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Talla:</strong>
                            {{ $articulo->talla }}
                        </div>
                        <div class="form-group">
                            <strong>Disponibilidad:</strong>
                            {{ $articulo->disponibilidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
