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
        'sons',
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

        'access_to_the_interview_note',
        'traffic_warden_note',
        'lucid_note',
        'orientated_in_the_three_parameter_note',
        'umor_note',
        'anxiety_note',
        'altered_perception_note',
        'appetite_note',
        'altered_form_thought_note',
        'sleep_wake_rhythm_note',
        'future_project_note',

        'well_to_focus',
        'well_lost_sleep',
        'well_productive',
        'well_make_decision',
        'well_pression',
        'well_not_able',
        'well_time_for_himself',
        'well_problem_solving',
        'well_unhappy',
        'well_lost_confidence',
        'well_lower_esteem',
        'well_overall_happy',
        'well_total_score',


        'thought_he_was_dead',
        'wanted_to_get_hurt',
        'thought_suicide',
        'thought_how_suicide',
        'attempted_suicide',
        'never_try_attempted_suicide',


        'check_spdc_hospitalizations',
        'check_declare_suicide',
        'check_thougth_suicide',
        'check_unusual_level_of_shame',
        'check_confusional_state',
        'check_psychomotor_agitation',
        'check_bizarre_behavior',
        'check_verbal_communication',
        'check_level_mini',
        'check_general_well_being',
        'check_vain_form_violence',
        'check_come_from_forced_isolation',
        'check_isolation_social_network',
        'check_uncertainty_about_future',
        'check_conclusion',
        'risk_assessment_conclusions',


        'request_activation_of_measures',
        
        'request_activation_normal_surveillance',
        'request_activation_multiple_room',
        'request_activation_big_surveillance',
        'request_activation_visual_surveillance',

        'first_medical_history_visit',
        'first_status',
        'first_terapy',
        'first_orientation',



        // 'intervention_plan_conclusions',
        // 'intervention_conclusion',
        'intervention_plan_advice',
        // 'intervention_plan_taking_into_care',
        // 'intervention_plan_integrated_handling',


        'specific_prescription_suggestions',

        'psychiatric_visit_status',
        'psychiatric_visit_terapy',
        'psychiatric_visit_orientation',
        
        // 'psychiatric_visit_plan_conclusions',
        'psychiatric_intervention_plan_advice',


        'psychiatric_visit_prescription_suggestions',
    ];

    protected $table = 'psy_membership_card';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}

