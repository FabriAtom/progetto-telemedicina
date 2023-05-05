<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionDayTao extends Model
{
    protected $fillable = [
    
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'dosage',
        'tao_operator_signature',
    ];

    protected $table = 'Prescription_day_tao';
    protected $primaryKey = 'id';


    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }
}

