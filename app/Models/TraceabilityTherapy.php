<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TraceabilityTherapy extends Model
{
    protected $fillable = [

        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'th_date',
        'drugs_not_administered',
        'drugs',
        'motivation_not_take_medicine',
        // 'th_from_the',
        // 'th_to_the',
        'th_hours',
        'th_frequency',
        'medical_alert',
        'medical_alert_note',
        'doctors_prescriptions',
        'doctors_prescriptions_note',  
    ];

    protected $table = 'traceability_therapys';
    protected $primaryKey = 'id';

    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }
}

