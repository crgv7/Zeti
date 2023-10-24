<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;
    protected $fillable=['codigo_de_UEB','Year','No_contrato', 'Tipo_de_contrato','Actividad', 'Centro_de_Negocio', 'Oferente','Monto_de_Contrato_en_CUP', 'Fecha_de_Inicio','Fecha_Fin', 'Fecha_Real_de_Inicio', 'Vigencia','Organismo','Valor_Ejecutado','Monto_disponible','clients_id','services_id'];
}
