
@extends('adminlte::page')


@section('title', 'Control de Articulos')


@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h1>CONTROL DE ARTICULOS</h1> 
    </div>
    <div class="col md 6">
        <form action="{{route('articulos.index')}}" method="get">
            <div class="form row">
                <div class="col md ">
                    <input type="text" class="form-control"  value="{{$texto}}" name="texto" placeholder="¿Que articulo buscas? ">
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
    </div>
</div>
    
    
@stop

@section('content')

<div class="container-fluid">
    
    
        <div class="row">
            
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Articulo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('articulos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo articulo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Tipo</th>
										<th>Imagen</th>
										<th>Precio</th>
										<th>Talla</th>
										<th>Disponibilidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articulos as $articulo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $articulo->codigo }}</td>
											<td>{{ $articulo->marca }}</td>
											<td>{{ $articulo->modelo }}</td>
											<td>{{ $articulo->tipo }}</td>
											<td>{{ $articulo->imagen }}</td>
											<td>{{ $articulo->precio }}</td>
											<td>{{ $articulo->talla }}</td>
											<td>{{ $articulo->disponibilidad }}</td>

                                            <td>
                                                <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                                                    <!-- <a class="btn btn-sm btn-primary " href="{{ route('articulos.show',$articulo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> -->
                                                    <a class="btn btn-sm btn-success" href="{{ route('articulos.edit',$articulo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar  </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $articulos->links() !!}
            </div>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop