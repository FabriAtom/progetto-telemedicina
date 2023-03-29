<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyRating extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'pr_date',
        'somatic_concern',
        'anxiety',
        'depression',
        'risk_of_suicide',
        'feeling_of_guilt',
        'hostility',
        'mood_elevation',
        'grandeur',
        'suspiciousness',
        'hallucination',
        'unusual_content_of_thought',
        'bizarre_behavior',
        'neglect_of_self_care',
        'disorientation',
        'conceptual_disorganization',
        'emotional_flattening',
        'emotional_isolation',
        'motor_slowdown',
        'motor_tension',
        'lack_of_cooperation',
        'excitement',
        'distractibility',
        'motor_hyperactivity',
        'mannerism_and_posture',
        'total_score_rating',
    ];

    protected $table = 'psy_rating';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}