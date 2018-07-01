@extends('anger.master')

@section('title', 'Edit')
@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


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
                        @can('create_user', \Auth::user()->name)
                            <a href="" class="btn btn-success">Criar usuários</a>
                            @else
                            fudeu
                        @endcan
                    @else
                        Auth check fail
                    @endif
                    
                    

                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
