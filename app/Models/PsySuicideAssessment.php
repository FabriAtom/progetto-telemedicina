<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsySuicideAssessment extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'sa_date',
        'marital_status',
        'drug_and_alcohol_abuse',
        'psychiatric_aspect',
        'suicide_attempt',
        'suicide_attempt_in_institution',
        'family_suicide',
        'arrest_story',
        'compulsive_behavior',
        'high_crime_profile',
        'current_intoxication',
        'worry_about_life_problem',
        'feeling_of_hopelessness',
        'psychotic_symptom',
        'depressive_symptom',
        'stress_and_coping',
        'social_support',
        'recent_major_losse',
        'suicidal_ideation',
        'suicidal_intent',
        'suicide_plan',
        'total_score',
        'psy_suicide_note',
        'imminent_risk_of_suicide',
        'monitoring_recommendation',
        'frequency',
        'referral_mental_health_service',
        'comment',
        'sa_date_last',

    ];

    protected $table = 'psy_suicide_assessments';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
