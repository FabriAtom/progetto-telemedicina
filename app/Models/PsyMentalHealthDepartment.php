<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyMentalHealthDepartment extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'psychological_interview',
        'hypothesis_psychopathological_classification',
        'planning_type_of_intervention',
        'test',
    ];

    protected $table = 'psy_mental_health_departments';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
