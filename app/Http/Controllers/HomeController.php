<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(\Auth::check());
        if (\Auth::User()->can('create_user')) {
          echo "Permitido!!!";
        } else {
          echo 'Negado!!!';
        }

        if (\Illuminate\Support\Facades\Gate::allows('create_user')) {
          echo "Permitido!!!";
        } else {
          echo 'Negado!!!';
        }

        if ($this->authorize('create_user')) {
          echo "Permitido!!!";
        } else {
          echo 'Negado!!!';
        }



        return view('home');
    }
}
