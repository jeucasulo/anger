@extends('anger.master')

@section('title', 'Edit')
@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{(Auth::user()->name) }} </div>
                <div class="card-body">

                    
                    <!-- "Casulo\\Anger\\": "packages/casulo/anger/src" -->

                    <div id="" class="col text-center">

                      <h1 class="text-muted text-center">Perfis</h1>
                          @forelse($roles as $role)

                            <span id="userRolesTest{{$role->id}}" class="badge
                            
                                    @if(Auth::user()->hasRole($role)) 
                                      badge-info
                                      @else
                                      badge-danger
                                    @endif


                              ">{{$role->label}}</span>


                            @empty
                            Nenhum registro encontrado
                          @endforelse
                    </div>
<hr>

                    <div id="" class="col text-center">
                      <h1 class="text-muted text-center">Permissões</h1>
                        @forelse(\Auth::user()->roles as $role)
                        <br> {{$role->name}} <br>

                                @if(Auth::user()->hasRole($role)) 
                              
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


                                 @endif


                        @empty
                        Nenhum registro encontrado
                      @endforelse

                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
