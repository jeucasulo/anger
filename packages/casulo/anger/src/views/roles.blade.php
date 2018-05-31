@extends('anger::master',['jsFile'=>$asset.'js/index.js','cssFile'=>$asset.'css/index.css'])

@section('title', 'Roles')


@section('content')
    @parent
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col-12-xs">
      <h1 class="text-danger text-center">Perfis</h1>
    </div>
  </div>
</div>

<div>
  
      @forelse($roles as $role)
        
        <div id="" class="container">
        <div class="row">
            <div class="col-sm">
              {{$role->id}}
            </div>
            <div class="col-sm">
              <a href="{{route('anger.role',$role->id)}}">{{$role->name}}</a>
            </div>
            <div class="col-sm">
              {{$role->label}}
            </div>

              @empty
              Nenhum usuário cadastrado
        </div>
        </div>
      @endforelse

</div>

@endsection

