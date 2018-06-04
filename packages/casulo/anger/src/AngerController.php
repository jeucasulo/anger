<?php

namespace Casulo\Anger;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;



class AngerController extends Controller
{
    public function index(){
        // return 'fodaci';
        return view('anger::index');
    }
    public function users()
    {
        $users = \App\User::all();
        $asset = asset('');
        return view('anger::users', compact('asset','users'));
    }
    public function user($id)
    {
        $user = \App\User::find($id);
        $roles = \App\Role::all();
        // dd($roles);
        // die(var_dump($roles));
        $asset = asset('');
        return view('anger::user', compact('asset','user','roles'));
    }
    public function userRoleAttach(Request $request){
        
        // dd($request->add_role_id);
        if(999==999){ // input your acl or condition 
            
            //$user = Auth::user();
            $user = \App\User::find($request->user_id);
            // dd($user);
            $roleId = (int)$request->add_role_id;
            $user->roles()->attach($roleId);
            // $user->roles()->detach($roleId);

            //$last_id = \App\Role::limit(1)->orderBy('role_id','desc')->value('role_id'); 
            //$role = \App\Role::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]); 
            //$role = new Role; $role->name = $request->input('input_html'); $role->save(); //insertedId = $role->id; 
            \Session::flash('flash_message',[ 
                'msg'=>"Operação realizada com sucesso!",  
                'class'=>"alert-success" 
            ]); 
            return redirect()->route('anger.user',$user->id); 
        }else{ 
            return redirect()->route('anger.user',$user->id); 
        } 

    }

    public function userRoleDetach(Request $request){
        // dd("fodaci");
        if(999==999){ 
            //$user = Auth::user();
            $user = \App\User::find($request->user_id);
            $roleId = (int)$request->detach_role_id;
            // dd($roleId);
            $user->roles()->detach($roleId);


            \Session::flash('flash_message',[ 
                'msg'=>"Role successfully deleted!",  
                'class'=>"alert-success" 
            ]); 
            return redirect()->route('anger.user',$user->id); 
        }else{ 
            return redirect()->route('anger.user',$user->id); 
        } 
    }


    public function roles()
    {
        $roles = \App\Role::all();
        $asset = asset('');
        return view('anger::roles', compact('asset','roles'));
    }
    public function role($id)
    {
        $role = \App\Role::find($id);
        $permissions = \App\Permission::all();
        $asset = asset('');
        return view('anger::role', compact('asset','role','permissions'));
    }

    public function rolePermissionAttach(Request $request){
        if(999==999){ // input your acl or condition 
            
            //$user = Auth::user();
            //dd($request->role_id);
            $role = \App\Role::find($request->role_id);
            $permission_id = (int)$request->add_permission_id;

            // dd($permission_id);


            // dd($role);
            
            $role->permissions()->attach($permission_id);
            // $user->roles()->detach($roleId);

            //$last_id = \App\Role::limit(1)->orderBy('role_id','desc')->value('role_id'); 
            //$role = \App\Role::create(['model_column'=>$request->input('input_html'),'model_column2'=>$request->input('input_html2'),]); 
            //$role = new Role; $role->name = $request->input('input_html'); $role->save(); //insertedId = $role->id; 
            \Session::flash('flash_message',[ 
                'msg'=>"Permission successfully stored!",  
                'class'=>"alert-success" 
            ]); 
            return redirect()->route('anger.role',$role->id); 
        }else{ 
            return redirect()->route('anger.role',$role->id); 
        } 

    }

    public function rolePermissionDetach(Request $request){
        
        if(999==999){ 
            
            //$user = Auth::user();
        $role = \App\Role::find($request->role_id);

        $permission_id = (int)$request->detach_permission_id;
        //dd($permission_id);
        $role->permissions()->detach($permission_id);

            \Session::flash('flash_message',[ 
                'msg'=>"Permission successfully deleted!",  
                'class'=>"alert-success" 
            ]); 
            return redirect()->route('anger.role',$role->id); 
        }else{ 
            return redirect()->route('anger.role',$role->id); 
        } 

    }

    public function permissions(){
        $permissions = \App\Permission::all();
        $asset = asset('');
        $user = \Auth::User();
        
        return view('anger::permissions', compact('permissions', 'asset'));

    }


    public function edit()
    {

        if (\Auth::check()) {
            
            // 
            // 
            // dd(\Auth::check());
            if (\Auth::User()->can('read_user')) {
              echo "Permitido!!!";
            } else {
              echo 'Negado!!!';
            }

            if (\Illuminate\Support\Facades\Gate::allows('read_user')) {
              echo "Permitido!!!";
            } else {
              echo 'Negado!!!';
            }

            if ($this->authorize('read_user')) {
              echo "Permitido!!!";
            } else {
              echo 'Negado!!!';
            }


        }else{
            echo "Não logado, ver imigrações";
        }


        $asset = asset('');
        return view('anger::edit', compact('asset'));
    }
}
