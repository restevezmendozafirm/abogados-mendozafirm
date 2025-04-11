<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;
use App\Models\Capacitacion;

class AdminUserController extends Controller
{

    public function dashboard()
    {
        $user = User::find(auth()->id());
        $capacitaciones = Capacitacion::where('estatus', 1)->get();
        return view('admin.dashboard', compact('user', 'capacitaciones'));
    }

    public function capacitacion($url)
    {
        $capacitacion = Capacitacion::where('url', $url)->where('estatus', 1)->first();
        $capacitaciones = Capacitacion::where('estatus', 1)->inRandomOrder()->take(3)->get();
        $video = '<video class="2xl:h-660 object-cover br-8" controls width="100%" height="auto" controlslist="nodownload" poster="/images/videos/'.$capacitacion->image.'">
            <source src="/images/videos/'.$capacitacion->archivo.'" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>'; 

        return view('admin.interna-video', compact('capacitacion', 'capacitaciones', 'video'));
    }

    public function internavideo($idvideo)
    {
        $capacitacion = Capacitacion::where('id', $idvideo)->where('estatus', 1)->first();
        $video = '<video class="h-full object-cover" controls width="100%" height="auto" controlslist="nodownload" poster="/images/img-training-capa.png">
            <source src="/images/'.$capacitacion->archivo.'" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>'; 

        return response()->json($capacitacion->archivo);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function streamVideo(Request $request)
    {
        $video = '<video controls width="100%" height="auto" controlslist="nodownload" poster="/images/img-trainning.webp">
            <source src="/images/Visa_T_por_coyote.mp4" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>'; 

        return $video;
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

    public function users() 
    {
        $users = User::paginate(10);
        
        return view('auth.index', compact('users'));
    }

    protected function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'type' => 'required|string|in:Admin,Capacitador,Agente',
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->type = $request->input('type');
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

    public function editar(User $user)
    {
        return view('auth.edit', compact('user'));
    }

    public function eliminar(User $user)
    {
        $user->delete();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('usuarios')->with('success', 'Usuario Eliminado Correctamente');
    }

    public function create(Request $request)
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
    public function actualizar(Request $request)
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
}