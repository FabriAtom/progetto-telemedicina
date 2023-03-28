<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyRehabilitationPsychiatricCard extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'project_description',
        'treatment_area_objective',
        'psychiatric_intervention',
        'project_manager',
        'psychiatric_attachment',
    ];

    protected $table = 'psy_rehabilitation_psychiatric_card';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
