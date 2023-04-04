<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsySurvey extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'ps_date',

        'survey_heard_alone	',
        'survey_heard_anxious',
        'survey_support',
        'survey_okay_with_myself',
        'survey_devoid_of_energy',
        'survey_violent_towards_others',
        'survey_able_to_adapt',
        'survey_disturbed',
        'survey_hurt_me',
        'survey_not_force_to_speak',
        'survey_tension_prevented',
        'survey_happy',
        'survey_disturbed_by_thoughts',
        'survey_cry',
        'survey_felt_panic',
        'survey_planned_to_suicide',
        'survey_felt_overwhelmed',
        'survey_difficulty_falling_asleep',
        'survey_felt_affection',
        'survey_impossible_aside_problems',
        'survey_able_to_do_things',
        'survey_threatened_someone',
        'survey_felt_heartbroken',
        'survey_thought_better_to_die',
        'survey_felt_critical',
        'survey_thought_had_no_friends',
        'survey_felt_unhappy',
        'survey_troubled_by_images',
        'survey_felt_irritated',
        'survey_thought_my_fault',
        'survey_optimistic_about_the_future',
        'survey_got_what_wanted',
        'survey_felt_humiliated',
        'survey_hurt_myself',   
    ];

    protected $table = 'psy_survey';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
