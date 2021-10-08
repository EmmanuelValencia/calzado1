@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <p>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        
                        <h1>CREAR ARTICULO</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articulos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('articulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop