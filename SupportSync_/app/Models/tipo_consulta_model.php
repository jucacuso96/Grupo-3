<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tipo_consulta_model extends Model
{
    use HasFactory;

    public static function obtenerTipoConsulta()
    {
        $tipo_consulta = DB::select("SELECT * FROM tipo_consulta WHERE estado='Activo'");
        return $tipo_consulta;
    }
}
