<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Mail\DenunciaMail;
use Illuminate\Support\Facades\Mail;

class DenunciaController extends Controller
{
    public function create(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'categoria' => 'required|string|max:255',
            'reportado' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        // Guardar la denuncia en la base de datos
        $denuncia = new Denuncia();
        $denuncia->nombre = $request->nombre;
        $denuncia->telefono = $request->telefono;
        $denuncia->correo = $request->correo;
        $denuncia->categoria = $request->categoria;
        $denuncia->reportado = $request->reportado;
        $denuncia->descripcion = $request->descripcion;
        $denuncia->img_evidencia = $request->foto_nombre;
        $denuncia->save();

        Mail::to('g.maria.mendoza@gmail.com')->send(new DenunciaMail($denuncia->toArray()));

        return back()->with('success', 'Denuncia creada correctamente.');
    }

    public function upload(Request $request)
    {
        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png', 'mp4', 'webp', 'webm', 'ogg'];
                
                if (!in_array($fileExtension, $allowedExtensions)) {
                    return response()->json(['success' => false, 'message' => 'El archivo debe ser un PDF, JPG, JPEG, PNG, MP4,WEBP, WEBM u OGG']);
                }

                $sanitizedFileName = preg_replace('/[^a-zA-Z0-9_.]/', '', $file->getClientOriginalName());
                $fileName = time() . '_' . $sanitizedFileName;
                $file->move('images/files', $fileName);

                return response()->json(['success' => true, 'message' => 'Archivo subido con éxito', 'fileName' => $fileName]);
            }
        var_dump($request);
            return response()->json(['success' => false, 'message' => 'No se proporcionó ningún archivo']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
