@extends('layouts.app')
@section('title','Bienvenido a Tienda Virtual')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Información del Producto</h2>
            
        </div>
           
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="nombre" class="control-label">Nombre del Producto</label>
                        <input type="text" class="form-control" name="nombre" value='{{$producto->nombre}}' readonly/>
                        </div>
                    </div>
                
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="precio" class="control-label">Precio del Producto</label>
                        <input type="number" class="form-control" name="precio" value="{{$producto->precio}}" readonly/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="descripcion" class="control-label">Descripcion del Producto</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}" readonly/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label for="stock" class="control-label">Stock del Producto</label>
                        <input type="number" class="form-control" name="stock" value="{{$producto->stock}}" readonly/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group dropdown">
                            <label for="category_id" class="control-label">Categoria</label>
                            <input type="text" class="form-control" name="stock" value="{{$producto->category->nombre}}" readonly/>
                        </div>
                    </div>
                </div>
                <div class="row  text-center">
                    <div class="col-sm-12">
                    
                        <a href="{{route('home')}}" class="btn btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Regresar">
                            <i class="material-icons">arrow_back_ios</i>Regresar
                        </a>
                    </div>
                </div>
                    
               
               
    
      </div>
    
    
</div>
@include('layouts.includes.footer')
@endsection