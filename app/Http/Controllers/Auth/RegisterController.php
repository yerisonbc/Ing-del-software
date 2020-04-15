<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Admin\Perfil_Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user;
        if($user = User::create([
            'email' => $data['email'],
            'rol' => 'user',
            'password' => Hash::make($data['password']),
            ])){
                    $user->roles()->attach(Role::where('name', 'user')->first());

                    if(Perfil_Usuario::create([
                        'id_user'=>$user->id,
                        'nombre'=> $data['nombre'],
                        'apellido'=>$data['apellido'],

                    ])){

                        return $user;
                    }
                    else
                    {
                        $user = User::where('id', $user->id)->delete();

                        $redirectTo = '/cuenta/nuevo_perfil';
                        
                    }

        }else{
            return 'nada nada';
        }

        
        return $user;
    }
}
