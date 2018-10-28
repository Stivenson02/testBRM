@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"> Nueva Marca</div>
            <div class="panel-body">
                 <form class="form-horizontal" method="POST" action="{{ route('add_embargo_phat') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="quantity_total" class="col-md-4 control-label">
                            	Cantidad 
                            </label>
                            <div class="col-md-6">
                                <input id="quantity_total" type="number" class="form-control" name="quantity_total" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_embargo" class="col-md-4 control-label">
                            	fecha de embargo
                            </label>
                            <div class="col-md-6">
                                <input id="date_embargo" type="date" class="form-control" name="date_embargo" required autofocus>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="product" class="col-md-4 control-label">
                                Producto
                            </label>
                            <div class="col-md-6">
                              <select required class="form-control" name="product">
                                @foreach ($allProducts as $dataProduct)
                                <option value="{{$dataProduct->id}}">
                                    {{$dataProduct->name}}</option>
                               @endforeach
                              </select>
                            </div>
                        </div>          
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    NUEVO EMBARGO
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
