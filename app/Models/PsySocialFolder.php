<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsySocialFolder extends Model
{
    protected $fillable = [
        'psy_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'sf_date',
        
        'citizenship',
        'residency_permit',
        'typology',
        'expiration',
        'social_note',
        'marital_status',
        'social_degree',

        'legal_status_educator',
        'legal_status_lawyer',
        'legal_status_provenance',
        'legal_status_entered',
        'legal_status_end_of_sentence',
        'legal_status_list_mix',
        'legal_status_security_measure',
        'legal_status_end_of_the_sentence',
        'legal_status_rems_other',
        'legal_status_uncensored',

        'social_health_situation_csm',
        'social_health_situation_serd',
        'social_health_situation_asl',
        'social_health_situation_certificate',
        'social_health_situation_therapeutic_pathway',
        'social_health_situation_disability',
        'social_health_situation_revision',
        'social_health_situation_inps',
        'social_health_situation_administrator',

        'environmental_analysis_family_of_origin',
        'environmental_analysis_accommodation',
        'environmental_analysis_work',
        'environmental_analysis_income',
        'environmental_analysis_formal_network',
    ];

    protected $table = 'psy_social_folders';
    protected $primaryKey = 'id';

    public function PsyCard()
    {
        return $this->belongsTo(PsyCard::class);
    }
}
