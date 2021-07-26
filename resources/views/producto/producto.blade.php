@extends('layouts.app')

@section('content')
<div class="container">

<!-- Mostrar mensaje del controller -->
@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        
        {{ Session::get('mensaje')}}
    
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    

    <table class="table table-bordered ">
        <thead class="">
            <tr style="font-family: sans-serif;" class="table-primary">
                <th>Producto</th>
                <th>Precio</th>
                <th>Observaciones</th>
                <th>Categoría</th>
                <th>Almacén</th>
                <th></th>
            </tr>
        </thead>
        <tbody style="font-family: Arial;">
            @foreach($productos as $producto)
            <tr >
                <td>{{$producto->producto}}</td>
                <td>{{$producto->precio}}€</td>
                <td>{{$producto->observaciones}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->almacen}}</td>
                <td width="170">
                    <a href="{{url('/producto/'.$producto->id.'/edit')}}" class="btn btn-outline-warning mr-2" >Editar</a>    
                    
                    <form action="{{url('/producto/'.$producto->id)}}" method="post" class="d-inline">
                    @csrf
                    <!-- convertir el metodo post a delete para poder usar el metodo destroy -->
                    {{ method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres borrarlo?')" class="btn btn-outline-danger" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $productos->links() !!}
    </div>
    
</div>
@endsection