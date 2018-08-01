@extends('anger.master')

@section('title', 'Roles')
@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')
    @parent


<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col">
      <h1 class="text-muted text-center">Perfis</h1>
    </div>
  </div>
</div>

<div>
  
      @forelse($roles as $role)
        
        <div id="" class="container">
        <div class="row">
            <div class="col-sm offset-md-4">
                <div class="row">
                  <div class="col-sm-2">
                    {{$role->id}}
                  </div>
                  <div class="col-sm-2">
                    <a href="{{route('anger.role',$role->id)}}">{{$role->name}}</a>
                  </div>
                  <div class="col-sm-2">
                    {{$role->label}}
                  </div>
                </div>
                  

            </div>
                  
        </div>
        </div>
        @empty
        Nenhum usuário cadastrado
      @endforelse

</div>



@endsection

