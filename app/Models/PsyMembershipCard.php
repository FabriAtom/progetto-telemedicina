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
    ];

    protected $table = 'Psy_membership_card';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}

