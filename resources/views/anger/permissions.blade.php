@extends('anger.master')

@section('title', 'Permissions')
@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')
    @parent


<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col">
      <h1 class="text-muted text-center">Permissões</h1>
    </div>
  </div>
</div>
<hr>


<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col-12-xs">
      
      <hr>
      @forelse($permissions as $permission)
        {{$permission->name}} - 
        {{$permission->label}}
        <br>
        @empty
        Nenhum registro encontrado
      @endforelse
      <hr>
    </div>
  </div>
</div>
@endsection

