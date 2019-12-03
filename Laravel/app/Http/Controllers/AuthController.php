<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;


class AuthController extends Controller
{
    public function index()
    {
        return view('login/login');
    }

    public function registration()
    {
        return view('login/registration');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $role = DB::table('users')->where('email',$request->email)->get()->first();
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            Session::put('id_user',$role->id);
            Session::put('role',$role->role);
            if($role->role==1){
                return view('admin/home');
            }
            $data = DB::table('file')->get();
            return redirect('/');


        }
        return redirect("login")->with(['gagal' => 'Username atau Password Salah!!']);
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect("login")->with(['gagal' => 'Sudah Daftar']);
    }

    public function dashboard()
    {

      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
