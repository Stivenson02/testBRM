@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Nuevo Producto</div>
            <div class="panel-body">
                 <form class="form-horizontal" method="POST"  action="{{ route('edit_product_phat',$detail_product->id) }}">
                        {{ csrf_field()}}
                        {{ method_field('PUT')}}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                            	Nombre
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$detail_product->model_product->name}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coste" class="col-md-4 control-label">
                            	costo
                            </label>
                            <div class="col-md-6">
                                <input id="coste" type="number" class="form-control" name="coste" value="{{$detail_product->value}}" required autofocus>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="mark" class="col-md-4 control-label">
                            	Marca
                            </label>
                            <div class="col-md-6">
                              <select class="form-control" name="mark">
                              	<option value="{{$detail_product->model_mark->code}}">
                               {{$detail_product->model_mark->name}}
                                </option>
                      			@foreach ($all_mark as $dataMark)
                                @if($dataMark->code != $detail_product->model_mark->code)
                                <option value="{{$dataMark->code}}">
                                    {{$dataMark->name}}
                                </option>
                                @endif                              	
                               @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   EDITAR
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Eliminar Producto</div>
            <div class="panel-body">
                 @if($selec == 0)
                 El producto tiene ordenes de embargos
                   <form class="form-horizontal" method="POST" action="{{ route('delete_embargo_phat',$detail_product->model_product->id) }}">
                        {{ csrf_field() }}
                         {{ method_field('DELETE')}}
                    <button class="btn-warning" type="submit"> 
                        Eliminar Ordenes de Embargo
                    </button>
                  </form>
                 @else
                   <form class="form-horizontal" method="POST" action="{{ route('delete_product_phat',$detail_product->model_product->id) }}">
                        {{ csrf_field() }}
                         {{ method_field('DELETE')}}
                    <button class="btn-danger" type="submit"> 
                        Eliminar Producto
                    </button>
                  </form>
                 @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection
