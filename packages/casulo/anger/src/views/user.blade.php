@extends('anger::master',['jsFile'=>$asset.'js/index.js','cssFile'=>$asset.'css/index.css'])

@section('title', 'User')


@section('content')
    @parent
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col">
      <h1 class="text-muted text-center">Usuário</h1>
    </div>
  </div>
</div>
<hr>


<div>
    <div id="" class="container">
    <div class="row">
        <div class="col-sm">
          {{$user->id}}
        </div>
        <div class="col-sm">
          <a href="">{{$user->name}}</a>
        </div>
        <div class="col-sm">
          {{$user->email}}
        </div>
    </div>
    </div>
</div>

<hr>
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col text-center">
      <h1 class="text-muted text-center">Perfis</h1>
      @forelse($user->roles as $role)
        <span id="userRoles{{$role->id}}" class="badge badge-primary">{{$role->label}}</span>
        @empty
        Nenhum registro encontrado
      @endforelse
    </div>
  </div>
</div>
<hr>

<div id="" class="container">
  <div id="" class="row">
      
      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Adicionar</h3>
       <form id='addRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.user-role-attach")}}' enctype='multipart/form-data'> 
          <input type="text" name="user_id" value="{{$user->id}}" hidden="hidden">
          <select id="add_role_id" name="add_role_id" class="form-control">
            @forelse($roles  as $role)
              <option  id="allRoles{{$role->id}}" value="{{$role->id}}">{{$role->label}}</option>
              @empty
              Nenhum registro encontrado
            @endforelse
          </select>
          <button class="btn btn-success">Adicionar</button>
        </form>
      </div>

      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Remover</h3>
       <form id='removeRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.user-role-detach")}}' enctype='multipart/form-data'> 
          <input type="text" name="user_id" value="{{$user->id}}" hidden="hidden">
          <select id="detach_role_id" name="detach_role_id" class="form-control">
              @forelse($user->roles as $role)

              <option value="{{$role->id}}">{{$role->label}}</option>
              @empty
              <option>Nenhum registro encontrado</option>
            @endforelse
          </select>
          <button class="btn btn-danger">Remover</button>
        </form>

      </div>
  </div>
</div>
@endsection

<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
  $(document).ready(function(){
    User.RemoveEqualRoles();
  });
  var User = {
    RemoveEqualRoles:function(){
      for(i = 0; i < 50; i++){
          var inner = $("#userRoles"+i+"").html();
          var out = $("#allRoles"+i+"").html();
          if(inner != null){
              if(inner = out){
                  $("#allRoles"+i+"").remove();
              }
          }
      }
    }
  }
</script>