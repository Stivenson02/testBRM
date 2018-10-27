@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"> Nueva Marca</div>
            <div class="panel-body">
                 <form class="form-horizontal" method="POST" action="{{ route('add_marks_phat') }}">
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
                            <label for="code" class="col-md-4 control-label">
                            	codigo
                            </label>
                            <div class="col-md-6">
                                <input title="El codigo es alfanumerico" id="code" type="text" class="form-control" name="code" required="Codigo alfanumerico" autofocus>
                            </div>
                        </div>
                                   
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    NUEVA MARCA
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
