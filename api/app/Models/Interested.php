<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    use HasFactory;
    protected $fillable =['identificacion','nombres_apellidos','fecha_nac','num_cel','num_conv',
                        'est_civil','correo_p','sexo','ubicacion'];
}
