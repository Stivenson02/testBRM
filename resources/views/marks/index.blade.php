@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Opciones de Marca</div>
            <div class="panel-body">
                <a href="{{route('view_marks_phat')}}">
                <button class="btn-success" type="submit"> Agregar marca</button>
                  </a>  
            </div>

        </div>
    </div>

  @foreach ($allmarks as $dataMark)
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{$dataMark->name}}</div>
            <div class="panel-body">
       
              <div class="col-md-6 ">
                   @if($dataMark->logo == 'logo.png')
                   <img src="{{asset('all_prefix/imagen/noimage.jpg')}}">
                @else 
                    <img src="{{asset('all_prefix/imagen/noimage.jpg')}}">
                @endif
                
             </div>
              <div class="col-md-6 ">
                   <ul>
                       <li>codigo: <strong>{{$dataMark->code}}</strong></li>                     
                   </ul>
                    <a href="{{route('view_edit_marks_phat',$dataMark->id)}}">
                    <button class="btn-primary" type="submit"> Edtar marca</button>
                  </a> 
                     <form class="form-horizontal" method="POST" action="{{ route('delete_marks_phat',$dataMark->id) }}">
                        {{ csrf_field() }}
                         {{ method_field('DELETE')}}
                    <button class="btn-danger" type="submit"> 
                      Eliminar marca
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
