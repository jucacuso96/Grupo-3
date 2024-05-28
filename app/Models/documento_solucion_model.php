<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class documento_solucion_model extends Model
{
    use HasFactory;

    protected $table = 'documento_solucion';

    protected $primaryKey = 'id_documento_solucion'; 

    protected $fillable = [
        'nombre',
        'ruta_documento',
        'id_producto',
        'id_tipo_consulta',
        'observacion',
        'estado_caso',
        'fecha_creacion_documento',
    ];

    public $timestamps = false;  // Deshabilita los timestamps automáticos

    public static function mostrar_documentos()
    {
        $documentos_registrados = DB::select("SELECT * FROM `documento_solucion` INNER JOIN producto ON producto.id = documento_solucion.id_producto INNER JOIN tipo_consulta ON tipo_consulta.id = documento_solucion.id_tipo_consulta WHERE estado_caso = 'Activo'");
        return $documentos_registrados;
    }

    public static function cambiarEstado($id_documento_solucion, $nuevoEstado)
    {
        $documento = self::find($id_documento_solucion);
        if ($documento) {
            $documento->estado_caso = $nuevoEstado;
            return $documento->save();
        }
        return false;
    }

}
    