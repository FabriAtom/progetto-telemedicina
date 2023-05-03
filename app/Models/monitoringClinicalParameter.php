<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitoringClinicalParameter extends Model
{
    protected $fillable = [
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'department',
        'date_start_rejection',
        'date_end_rejection',
        'mcp_date',
        'breakfast',
        'lunch',
        'dinner',
        'body_weight',
        'monitoring_pa',
        'monitoring_fc',
        'operator_signature',
        
    ];

    protected $table = 'monitoring_clinical_parameters';
    protected $primaryKey = 'id';

    
    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }
}
