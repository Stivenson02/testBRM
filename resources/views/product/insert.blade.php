@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Opciones de Productos</div>
            <div class="panel-body">
                 <form class="form-horizontal" method="POST" action="{{ route('add_product_phat') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">
                            	Nombre
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="coste" class="col-md-4 control-label">
                            	costo
                            </label>
                            <div class="col-md-6">
                                <input id="coste" type="number" class="form-control" name="coste" required autofocus>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="mark" class="col-md-4 control-label">
                            	Marca
                            </label>
                            <div class="col-md-6">
                              <select class="form-control" name="mark">
                              	<option value="na001">Sin marca</option>
                      			@foreach ($all_mark as $dataMark)
                              	<option value="{{$dataMark->code}}">{{$dataMark->name}}</option>
                               @endforeach
                              </select>
                            </div>
                        </div>

                   
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    NUEVO PRODUCTO
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
