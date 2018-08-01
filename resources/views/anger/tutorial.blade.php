@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3 class="text-muted">Instalação</h3>
                    <p>Terminal:</p>
                    <p>0 - php artisan make:auth(ou use outro sistema de autenticação)</p>
                    <p>1 - composer require casulo/anger</p>
                    <p>2 - composer dump-autoload</p>
                    <p>3 - php artisan publish --tag=anger</p>
                    <p>4 - php artisan migrate</p>
            <hr>
                    <h3 class="text-muted">Instruções</h3>
                    <p>Controlador:</p>
                    <p>Para checar se o usuário está logado</p>
                    <p>if (\Auth::check()) {</p>
                    <p>// code</p>
                    <p>}</p>
            <br>
                    <p>Para checar se o usuário tem a permissão necessária</p>

                    <p>if (\Auth::User()->can('create_user')) {</p>
                    <p>  echo "Permitido!!!";</p>
                    <p>} else {</p>
                    <p>  echo 'Negado!!!';</p>
                    <p>}</p>
            <br>
                    <p>if (\Illuminate\Support\Facades\Gate::allows('create_user')) {</p>
                    <p>  echo "Permitido!!!";</p>
                    <p>} else {</p>
                    <p>  echo 'Negado!!!';</p>
                    <p>}</p>
            <br>
                    <p>if ($this->authorize('create_user')) {</p>
                    <p>  echo "Permitido!!!";</p>
                    <p>} else {</p>
                    <p>  echo 'Negado!!!';</p>
                    <p>}</p>
                    <p>return view('anger.test');</p>
            <br>
                    <p>}else{</p>
                    <p>    echo "Não logado, ver migrações";</p>
                    <p>}</p>

            <br>
                    <p>View:</p>

                    <p>&commat;    can('create_user', Auth::user()->name)</p>
                    <p>Caso o usuário tenha a permissão "create_user" este trecho será impresso na tela</p>
                    <p>&commat;else</p>
                    <p>Do contrário nada será exibido</p>
                    <p>&commat;    endcan</p>


                </div>
            </div>
        </div>
    </div>
</div>
<br>



@endsection
