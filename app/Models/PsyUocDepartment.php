<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyUocDepartment extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'ud_date',
        'psychiatric_treatment',
        'csm',
        'spdc',
        'rems',
        'prison',
        'psychiatric_familiarity',
        'if_familiarity',
        'on_set_of_psychiatric_symptom',
        'substance_use',
        'in_charge_at_serd_territorial',
        'in_charge_at_serd_territorial_which',
        'psychotic_symptom',
        'anxious_affective_symptom',
        'impulsive_symptom',
        'psychotic_diagnostic_orientation',
        'anxious_affective_orientation',
        'personality_orientation',
        'taking_charge_pdta',
        'care_intake_pdta',
        'consultancy_pdta',
    ];

    protected $table = 'psy_uoc_departments';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
