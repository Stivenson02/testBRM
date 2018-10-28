@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Opciones de Embargo</div>
            <div class="panel-body">
                <a href="{{route('view_embargo_phat')}}">
                <button class="btn-success" type="submit"> Nuevo Embargo</button>
                  </a>  
            </div>

        </div>
    </div>

  @foreach ($allembargo as $dataEmbargo)
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{$dataEmbargo->model_product->name}}</div>
            <div class="panel-body">
       
              <div class="col-md-6 ">
                <strong>Fecha de Embargo: </strong>{{$dataEmbargo->date_embargo}}
             </div>
              <div class="col-md-6 ">
                   <ul>
                       <li>Cantidad: 
                        <strong>
                        {{$dataEmbargo->quantity_total}}
                      </strong>
                    </li>                     
                   </ul>
                     <form class="form-horizontal" method="POST" action="{{ route('delete_embargo_phat',$dataEmbargo->id) }}">
                        {{ csrf_field() }}
                         {{ method_field('DELETE')}}
                    <button class="btn-danger" type="submit"> 
                      Eliminar embargo
                    </button>
                  </form>
                  </a>
             </div>                  
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection
