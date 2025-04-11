<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

    class PerfilController extends Controller 
    {
        public function index()
        {
            $user = User::findOrFail(auth()->id());
            return view('admin.perfil.index', compact('user'));
        }

        public function editar(User $perfil)
        {   
            return view('admin.perfil.edit', compact('perfil'));
        }

        public function actualizar(Request $request, User $user)
        {       
            $usuario = User::find(auth()->id());
            $usuario->name = $request->nombre;
            $usuario->lname = $request->apellido;
            $usuario->email = $request->correo;
            $usuario->save();
            
            return redirect()->route('perfil')->with('success', 'Perfil Actualizado Correctamente');

        }
    }
?>