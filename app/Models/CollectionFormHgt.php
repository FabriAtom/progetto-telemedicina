<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionFormHgt extends Model
{
    protected $fillable = [
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'department_hgt',
        'date_start_collection_hgt',
        'date_end_collection_hgt',
        'doctor_prescriber_hgt',
        'hgt_date',
        'hours',
        'hgt',
        'hgt_operator_signature',
        'hgt_folder_page',
    ];

    protected $table = 'collection_form_hgt';
    protected $primaryKey = 'id';

    
    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }
}
