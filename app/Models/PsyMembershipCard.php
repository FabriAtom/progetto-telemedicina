<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyMembershipCard extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'mc_date',
        'communicate_italian',
        'communicate',
        'marital_status',
        'son',
        'son_number',
        'son_age',
        'residence_not',
        'residence',
        'title_study',
        'situation_housing',
        'situation_work',
        'date_start_prison',
        'date_start_in_institute',
        'first_experience_prison',
        'provenience',
        'legal_position',
        'end_of_sentence',
        'economic_resource',
        'previous_treatment_for_problem',
        'previous_treatment_farmacology',
        'previous_diagnoses_of_mental_disorder',
        'previous_diagnosis_of_drug_abuse',
        'previous_hospitalization_spdc',
        'previous_hospitalization_emergency',
        'pathological_attempted_suicide',
        'pathological_desperate',
        'pathological_anxious',
        'pathological_active',
        'pathological_strange_thought',
        'pathological_sleepless',
        'pathological_no_family',
        'pathological_thought_suicide',
        'pathological_alcol',
        'pathological_addictive_behavior',
        'pathological_claims_injuries',
        'pathological_shame_level',



        'access_to_the_interview',
        'traffic_warden',
        'lucid',
        'orientated_in_the_three_parameter',
        'umor',
        'anxiety',
        'altered_perception',
        'appetite',
        'altered_form_thought',
        'sleep_wake_rhythm',
        'future_project',
    ];

    protected $table = 'Psy_membership_card';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}

