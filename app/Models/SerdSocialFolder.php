<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SerdSocialFolder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serd_card_id',
        'id_doctor',
        'doctor_name',
        'doctor_lastname',
        'sf_date',
        'user_request',
        'on_sending_specify',
        'serd_of_residence',
        'social_family_history',
        'who_currently_live_with',
        'user_familiar_resources',
        'schooling',
        'working_activity',
        'assessment_substance_use_behaviors',
        'juridical_status_evaluation_deviant_behaviours',
        'detentiondetention_specifications',
        'legal_positionend_sentence',
        'previous_alternative_measures',
        'services_involved',
        'intervention_hypothesis',
        'other_information',
    ];

    protected $table = 'serd_social_folders';
    protected $primaryKey = 'id';
    public function SerdCard()
    {
        return $this->belongsTo(SerdCard::class);
    }
}