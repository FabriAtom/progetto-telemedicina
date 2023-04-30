<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NursingTherapy extends Model
{
    protected $fillable = [
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'th_date',
        'external_doctor_prescription',
        'user_istance_id',
        'acceptance_id',
        'acceptance',
        'user_id',
        'drug',
        'posology',
        'frequency',
        'startTherapy',
        'endTherapy	',
        'drugRoute',
        'morning',
        'afternoon',
        'evening',
        'deleted',
        'date_deleted',
        'id_doctor_deleted',
        'doctor_deleted_name',
        'doctor_deleted_lastname',
    ];

    protected $table = 'therapies';
    protected $primaryKey = 'id';

    // public function ()
    // {
    //     return $this->belongsTo(::class);
    // }
}
