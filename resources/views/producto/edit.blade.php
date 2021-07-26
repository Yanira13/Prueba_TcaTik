
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/producto/'.$producto->id )}}" class="formulario" name="formulario_registro" method="post">
        @csrf 
        {{method_field('PATCH')}}

                                <!--pasamos parametro al form  -->
        @include('producto.form',['modo'=>'Editar'])
    </form>
</div>
@endsection
