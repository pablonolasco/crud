@extends('layouts.app')
@section('title','Bienvenido a Tienda Virtual')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de Productos Disponibles</h2>
        </div>
        <div class="team-player">
            <div class="row">
                 <div class="col-sm-12 text-center">
                    <a href="{{route('create-product')}}" class="btn btn-primary btn-roun">Nuevo Producto</a>
                 </div>   
                
            </div>
            <br/>
            @include('partials.partial-message')
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="col-md-2 text-center">Nombre</th>
                    <th class="col-md-5 text-center">Descripción</th>
                    <th>Categoría</th>
                    <th class="text-right">Precio</th>
                    <th class="text-right">Opciones</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td id='hd_producto' class="text-center">{{$product->id}}</td>
                            <td>{{$product->nombre}}</td>
                            <td>{{$product->descripcion}}</td>
                            <td>{{$product->category->nombre}}</td>
                            <td class="text-right">{{$product->precio}}</td>
                            <td class="text-justify">
                               
                                <div class="row">
                                    <div class="col-md-4">
                                    <a href="{{route('show-product',$product->id)}}" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-info"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                    <a href="{{route('edit-product',$product->id)}}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <button onclick="deleteProducto('producto/'+{{$product->id}})" rel="tooltip" id="btnRemove" title="Remover Producto" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-times"></i>
                                           
                                        </button>
                                    </div>
                                </div>
                           
                             

                            </td>
                        </tr>
                        
                    @empty
                     <div class="alert alert-danger">
                         <strong>{{__('No hay ningún producto disponible')}}</strong>
                     </div>
                    @endforelse
                </tbody>
            </table>
            @if($products->count())
               {{$products->links()}}
            @endif
        </div>
    </div>
</div>
<script>
    function deleteProducto(valor){
        $('#frmDelete').attr('action', valor);
    }
</script>

@include('partials.partial-delete')
@include('layouts.includes.footer')
@endsection