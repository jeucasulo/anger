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
                        Você está logado
                    @else
                        Você não está logado
                    @endif

                    <hr>
                    <hr>
                    @guest
                        Entrou como guest
                    @else
                        Entrou como {{ Auth::user()->name }} 
                    @endguest
                    <hr>
                    <hr>
                    @if (Auth::check())
                        
                        @can('create_user', Auth::user()->name)
                                <a href="" class="btn btn-success">Criar usuários(can)</a>
                                @else
                        @endcan
                    @else
                                Não logado
                    @endif
                    <br>
                    
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
<br>



@endsection
