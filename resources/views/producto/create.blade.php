
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- action manda la informacion al metodo post del controller 
    que es store -->
    <form action="{{ url('/producto') }}" method="post" class="formulario d-flex flex-column " name="formulario_registro" enctype="multipart/form-data">
    <!-- llave de seguridad de laravel  -->
    @csrf
                            <!--pasamos parametro al form  -->
    @include('producto.form', ['modo'=>'Crear'])
    </form>
</div>
@endsection