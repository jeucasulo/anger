@extends('anger.master')

@section('title', 'Role')
@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')
    @parent


    

<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col">
      <h1 class="text-muted text-center">Perfil</h1>
    </div>
  </div>
</div>
<hr>


<div>
    <div id="" class="container">
    <div class="row">
        <div class="col-sm">
          {{$role->id}}
        </div>
        <div class="col-sm">
          <a href="">{{$role->name}}</a>
        </div>
        <div class="col-sm">
          {{$role->label}}
        </div>
    </div>
    </div>
</div>

<hr>


<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col text-center">
      <h1 class="text-muted text-center">Permissões</h1>
      @forelse($permissions as $permission)
        <!-- <span id="userPermissions{{$permission->id}}" class="badge badge-primary">{{$permission->label}}</span> -->
        @if($role->hasPermission($permission)) 
          <span id="" class="badge badge-info">{{$permission->name}}</span>
        @else
          <span id="" class="badge badge-danger">{{$permission->name}}</span>
        @endif

        @empty
        Nenhum registro encontrado
      @endforelse
    </div>
  </div>
</div>
<hr>

<hr>

<hr>



<div id="" class="container">
  <div id="" class="row">
      
      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Adicionar</h3>
       <form id='addRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.role-permission-attach")}}' enctype='multipart/form-data'> 
          <input type="text" name="role_id" value="{{$role->id}}" hidden="hidden">
          <select id="add_permission_id" name="add_permission_id" class="form-control">

            @forelse($permissions as $permission)
              <!-- <span id="userPermissions{{$permission->id}}" class="badge badge-primary">{{$permission->label}}</span> -->
              @if(!$role->hasPermission($permission)) 
                <option  id="allPermissions{{$permission->id}}" value="{{$permission->id}}">{{$permission->label}}</option>
              @else
                <option  id="allPermissions{{$permission->id}}" value="{{$permission->id}}" disabled="">{{$permission->label}}</option>
              @endif

              @empty
              Nenhum registro encontrado
            @endforelse
          </select>
          <button class="btn btn-success">Adicionar</button>
        </form>
      </div>

      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Remover</h3>
       <form id='removeRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.role-permission-detach")}}' enctype='multipart/form-data'> 
          <input type="text" name="role_id" value="{{$role->id}}" hidden="hidden">
          <select id="detach_permission_id" name="detach_permission_id" class="form-control">
              @forelse($permissions as $permission)
                  <!-- <span id="userPermissions{{$permission->id}}" class="badge badge-primary">{{$permission->label}}</span> -->
                  @if(!$role->hasPermission($permission)) 
                    <option  id="allPermissions{{$permission->id}}" value="{{$permission->id}}" disabled="">{{$permission->label}}</option>
                  @else
                    <option  id="allPermissions{{$permission->id}}" value="{{$permission->id}}">{{$permission->label}}</option>
                  @endif

                  @empty
                  Nenhum registro encontrado
              @endforelse
          </select>
          <button class="btn btn-danger">Remover</button>
        </form>

      </div>
  </div>
</div>
@endsection

<script src="{{asset('js/jquery.min.js')}}"></script>

