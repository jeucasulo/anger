@extends('anger::master',['jsFile'=>'js/index.js','cssFile'=>'css/index.css'])

@section('title', 'Edit')


@section('content')
    @parent
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <div class="row text-center">
          <div class="col-sm">
              @if (Auth::check())
              {
                  Auth check ok
              }@else{
                  Auth check fail
              }
              @endif

              Name:
              <hr>
              @guest
                  Guest
              @else
                  {{ Auth::user()->name }} 
                      
              @endguest
              <hr>
              <hr>
              @can('read_user', Auth::user())
                      FoiiiiiiiiiiiiiiiiiiiiiASDFASDF
              @endcan

              <hr>
          </div>
        </div>

      </div>
    </div>


@endsection

