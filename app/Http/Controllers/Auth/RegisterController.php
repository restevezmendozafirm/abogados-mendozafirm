<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, self::getValidationRules(), $this->getValidationMessages());

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
    protected function create(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create([
            'name' => $request->input('name'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'type' => $request->input('type'),
        ]);
        $user->save();
        return redirect()->route('usuarios');

    }

    public static function getValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:250'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];
    }

    protected function getValidationMessages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio.',
            'name.string' => 'El campo Nombre debe ser una cadena de texto.',
            'name.max' => 'El campo Nombre no puede tener más de :max caracteres.',
            'lname.required' => 'El campo Apellido es obligatorio.',
            'lname.string' => 'El campo Apellido debe ser una cadena de texto.',
            'lname.max' => 'El campo Apellido no puede tener más de :max caracteres.',
            'email.required' => 'El campo Correo electrónico es obligatorio.',
            'email.string' => 'El campo Correo electrónico debe ser una cadena de texto.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.max' => 'El campo Correo electrónico no puede tener más de :max caracteres.',
            'email.unique' => 'El correo electrónico ya ha sido registrado.',
            'password.required' => 'El campo Contraseña es obligatorio.',
            'password.string' => 'El campo Contraseña debe ser una cadena de texto.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
