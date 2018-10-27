@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Opciones de Productos</div>
            <div class="panel-body">
                <a href="{{route('add_product_phat')}}">
                <button class="btn-success" type="submit"> Agregar Productos</button>
                  </a>  
            </div>

        </div>
    </div>

  @foreach ($allproducts as $dataProduct)
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{$dataProduct->model_product->name}}</div>
            <div class="panel-body">
             <div class="col-md-4 ">
                @if($dataProduct->model_product->photo == 'photo.png')
                <img src="{{asset('all_prefix/imagen/noimage.jpg')}}">
                @else 
                <img src="{{asset('all_prefix/imagen/noimage.jpg')}}">
                @endif
                 
             </div>
              <div class="col-md-4 ">
                   @if($dataProduct->model_mark->logo == 'logo.png')
                   <img src="{{asset('all_prefix/imagen/noimage.jpg')}}">
                @else 
                    <img src="{{asset('all_prefix/imagen/noimage.jpg')}}">
                @endif
                
             </div>
              <div class="col-md-4 ">
                   <ul>
                       <li><strong>$</strong>{{$dataProduct->value}}</li>
                       <li><strong>marca: </strong>{{$dataProduct->model_mark->name}}</li>
                   </ul>
                    <a href="{{route('view_edit_product_phat',$dataProduct->id)}}">
                    <button class="btn-primary" type="submit"> Edtar Producto</button>
                  </a> 
             </div>                  
            </div>

        </div>
    </div>
    @endforeach
</div>
</div>
@endsection
