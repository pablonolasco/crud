@extends('layouts.app')
@section('title','Bienvenido a Tienda Virtual')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Editar Producto</h2>
            @include('partials.partial-errors')
            
        </div>
            @include('partials.partial-message')
            <form action="{{route('update-product',$producto->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="nombre" class="control-label">Nombre del Producto</label>
                        <input type="text" class="form-control" name="nombre" value='{{old('nombre',$producto->nombre)}}' required/>
                        </div>
                    </div>
                
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="precio" class="control-label">Precio del Producto</label>
                        <input type="number" class="form-control" name="precio" value="{{old('precio',$producto->precio)}}" required/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="descripcion" class="control-label">Descripcion del Producto</label>
                        <input type="text" class="form-control" name="descripcion" value="{{old('precio',$producto->descripcion)}}" required/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="stock" class="control-label">Stock del Producto</label>
                        <input type="number" class="form-control" name="stock" value="{{old('stock',$producto->stock)}}" required/>
                        </div>
                    </div>
                </div>
                
                <div class="row  text-center">
                    <div class="col-sm-6">
                        <button class="btn btn-primary btn-round">
                            <i class="material-icons">send</i> Actualizar
                        </button>
                    </div>
                    <div class="col-sm-6">
                    
                        <a href="{{route('home')}}" class="btn btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Regresar">
                            <i class="material-icons">arrow_back_ios</i>Regresar
                        </a>
                    </div>
                </div>
                    
               
               
    
            </form>
        </div>
    </div>
    
</div>
@include('layouts.includes.footer')
@endsection