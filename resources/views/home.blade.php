@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <hr>
                    @if (Auth::check())
                        Auth check ok
                    @else
                        Auth check fail
                    @endif

                    <hr>
                    <hr>
                    @guest
                        Guest
                    @else
                        {{ Auth::user()->name }} 
                            
                    @endguest
                    <hr>
                    <hr>
                    @if (Auth::check())
                        
                        @can('create_user', Auth::user()->name)
                                <a href="" class="btn btn-success">Criar usuários</a>
                                @else
                        @endcan
<br>
                        @can('read_user', Auth::user()->name)
                                <a href="" class="btn btn-success">Ver usuários</a>
                                @else
                                Não permitido ver usuario

                        @endcan
<br>
                        @can('update_user', Auth::user()->name)
                                <a href="" class="btn btn-success">Editar usuários</a>
                                @else
                                Não permitido editar usuario

                        @endcan



                    @else
                                Não logado
                    @endif
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
