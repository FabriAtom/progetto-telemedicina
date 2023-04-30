<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicalParameterCollection extends Model
{
    protected $fillable = [
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'department_cpc',
        'date_start_collection',
        'date_end_collection',
        'doctor_prescriber',
        'cpc_date',
        'collection_pa',
        'collection_fc',
        'collection_spo2',
        'collection_tc',
        'collection_operator_signature',
        'folder_page_collection',
        
    ];

    protected $table = 'clinical_parameter_collections';
    protected $primaryKey = 'id';

    
    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }
}
