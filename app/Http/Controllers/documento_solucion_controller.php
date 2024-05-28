<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producto_model;
use App\Models\tipo_consulta_model;
use App\Models\documento_solucion_model;
use Illuminate\Support\Facades\DB;


class documento_solucion_controller extends Controller
{
    public function mostrar_productos_y_tipo_consulta()
    {
        // Consulta los productos
        $productos = producto_model::obtenerProductos();
        $tipo_consulta = tipo_consulta_model::obtenerTipoConsulta();


        $documentos_registrados=documento_solucion_model::mostrar_documentos();
        // dd($productos);
        return view('Usuario\documento_solucion')->with('productos', $productos)->with('tipo_consulta', $tipo_consulta)->with('documentos_registrados', $documentos_registrados);

    }

    public function registrar(Request $request)
    {
        $request->validate([
            'archivo_documento' => 'required|mimes:pdf|max:2048',
            'nombre_documento' => 'required|string|max:255',
            'tipo_producto' => 'required|integer',
            'id_tipo_consulta' => 'required|integer',
            'observacion_documento' => 'nullable|string',
        ]);

        try {
            if ($request->hasFile('archivo_documento')) {
                $file = $request->file('archivo_documento');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('assets/pdf', $filename, 'public');
            }

            $documento = new documento_solucion_model();
            $documento->nombre = $request->nombre_documento;
            $documento->ruta_documento = 'assets/pdf/' . $filename;
            $documento->id_producto = $request->tipo_producto;
            $documento->id_tipo_consulta = $request->id_tipo_consulta;
            $documento->observacion = $request->observacion_documento;
            $documento->estado_caso = 'Activo';
            $documento->fecha_creacion_documento = now();
            $documento->save();

            return redirect()->back()->with('success', 'Documento registrado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al registrar el documento: ' . $e->getMessage());
        }
    }

    public function eliminar(Request $request)
    {
        try {
            $id_documento_solucion = $request->input('id_documento_solucion');
            $resultado = documento_solucion_model::cambiarEstado($id_documento_solucion, 'Inactivo');
            
            if ($resultado) {
                return redirect()->back()->with('success', 'Documento marcado como inactivo exitosamente.');
            } else {
                return redirect()->back()->with('error', 'Error al cambiar el estado del documento.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cambiar el estado del documento: ' . $e->getMessage());
        }
    }



    
}