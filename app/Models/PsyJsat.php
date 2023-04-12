<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyJsat extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'pj_date',
        'entry_date',
        'valutation_date',
        'information_age',
        'information_language',
        'information_native_language',
        'information_background',
        'information_background_other',
        'information_background_text',
        'legal_situation_now',
        'legal_situation_crime_committed',
        'legal_situation_crime_committed_other',
        
        'legal_situation_previous_incarceration',
        'legal_situation_previous_incarceration_if',
        'legal_situation_previous_incarceration_if_prominence',
        'criminal_record',
        'criminal_record_condemnation',

        'violent_behavior',
        'violent_behavior_acts_aggression',
        'violent_behavior_acts_aggression_desc',
        'violent_behavior_violent_crimes',
        'violent_behavior_crimes_type',
        'violent_behavior_during_incarceration',
        'violent_behavior_aggression_proceeding',
        'violent_behavior_aggression_proceeding_desc',
        'violent_behavior_last_aggression',
        'violent_aggression_now',
        'background_social_marital_status',
        'background_social_stability_relation',
        'background_social_stability_problem',
        'background_social_relation_problem',


        'background_social_sons',
        'background_social_problem',
        'background_social_sons_problem',

        'background_social_situation_house',
        'background_social_situation_house_other',
        'background_social_support_family',
        'background_social_support_family_cont',
        'background_social_support_family_problem',
        'background_social_support',
        'background_social_support_cont',
        'background_social_support_other',
        'background_social_support_problem',
        'background_social_schooling',
        'background_social_work',
        'background_social_work_other',



        'substance_use',
        'substance_use_tabacco',
        'substance_use_alcol',
        'substance_use_marijuana',
        'substance_use_eroin',
        'substance_use_cocaine',
        'substance_use_metamphetamin',
        'substance_use_other',
        'substance_use_description',
        'substance_use_intravenous_mode',
        'substance_use_current_methadone_treatment',
        'substance_use_current_methadon_list',
        'substance_use_substance_abuse',
        'substance_use_substance_abuse_list',
        'substance_use_substance_abuse_other',



        'psyc_treatments_check_hospital',
        'psyc_treatments_check_order',
        'psyc_treatments_check_farmacy',


        'psyc_treatments_clinical_evaluation',
        'psyc_treatments_clinical_evaluation_order',


        'psyc_treatments_in_prison',
        'psyc_treatments_comunity',
        'psyc_treatments_hospital',
        'psyc_treatments_court_order',
        'psyc_treatments_farmacy',
        'psyc_treatments_type',



        'psyc_treatments_previous_trauma',
        'psyc_treatments_previous_trauma_desc',



        'suicidal_risk',
        'suicidal_risk_number_attempts',
        'suicidal_risk_time_attempts',
        'suicidal_risk_methods_weapon',
        'suicidal_risk_methods_weapon_other',
        'suicidal_risk_level_ideation',
        'suicidal_risk_sucide_tentative',
        'suicidal_risk_sucide_tentative_number',
        'suicidal_risk_tentative_time',
        'suicidal_risk_methods_two',
        'suicidal_risk_methods_two_other',
        'suicidal_risk_act_of_self_harm',
        'suicidal_risk_act_of_self_harm_desc',



        'mental_conditions_somatic_concerns',
        'mental_conditions_anxiety',
        'mental_conditions_depression',
        'mental_conditions_suicide',
        'mental_conditions_guilt',
        'mental_conditions_hostility',
        'mental_conditions_elevated_mood',
        'mental_conditions_grandeur',
        'mental_conditions_suspiciousness',
        'mental_conditions_allucination',
        'mental_conditions_unusual_thought',
        'mental_conditions_bizarre_behavior',
        'mental_conditions_neglect',

        'mental_conditions_disorientation',
        'mental_conditions_disorganization',
        'mental_conditions_blankness',
        'mental_conditions_reduced_emotion',
        'mental_conditions_motor_slowdown',
        'mental_conditions_voltage',
        'mental_conditions_not_cooperation',
        'mental_conditions_excitement',
        'mental_conditions_distractibility',
        'mental_conditions_motor_hyperactivity',
        'mental_conditions_mannerisms',

        'psychological_problems',
        'psychological_problems_list',
        'psychological_problems_other',

        'reports',
        'reports_list',
        'reports_other',
        'suicidal_risk_self_harm',
        'risk_of_violence',
        'risk_of_victimization',
        'particular_assignment',
        'particular_assignment_list',
        'particular_assignment_other',
        'comment_clarifications',
    ];

    protected $table = 'psy_jsat';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
