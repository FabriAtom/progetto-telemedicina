<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitoringPrescriptionTao extends Model
{
    protected $fillable = [
        
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'department_tao',
        'diagnosis_tao',
        'drug_prescribed',
        'date_tao',
    ];

    protected $table = 'monitoring_prescription_tao';
    protected $primaryKey = 'id';

    
    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }

    // public function UserInstance()
    // {
    //     return $this->belongsTo(UserInstance::class);
    // }
}
