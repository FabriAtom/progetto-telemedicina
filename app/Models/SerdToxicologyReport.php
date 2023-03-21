<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SerdToxicologyReport extends Model
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
        'tsa_date',
        'pri_subce',
        'age_first_take_pri_subce',
        'age_continued_use_pri_subce',
        'ways_taking_pri_subce',
        'frequency_taking_pri_subce',
        'dose_pri_subce',
        'sec_subce',
        'age_first_take_sec_subce',
        'age_continued_use_sec_subce',
        'ways_taking_sec_subce',
        'frequency_taking_sec_subce',
        'dose_sec_subce',
        'ter_subce',
        'age_first_take_ter_subce',
        'age_continued_use_ter_subce',
        'ways_taking_ter_subce',
        'frequency_taking_ter_subce',
        'dose_ter_subce',
        'other_subce',
        'serd_facility',
        'serd_facility_desc',
        'other_serd_facility',
        'other_serd_facility_desc',
        'psychotherapeutic_treatments',
        'psychotherapeutic_treatments_desc',
        'therapeutic_community_treatments',
        'therapeutic_community_treatments_desc',
        'verification_contacts',
        'overdose_episodes',
        'overdose_episodes_desc',
        'urine_tests_drug_metabolites',
        'urine_tests_drug_metabolites_desc',
        'venosclerosis_signs',
        'venipuncture_marks',
        'resting_pulse_rate',
        'gi_Upset',
        'sweating',
        'tremor',
        'restlessness',
        'yawning',
        'pupil_size',
        'anxiety_or_irritability',
        'bone_or_joint_aches',
        'gooseflash_skin',
        'runny_nose_or_tearing',
        'total_abstinence_degrree_score',
        'abstinence_degree_score_description',
    ];

    protected $table = 'serd_toxicology_reports';
    protected $primaryKey = 'id';
    public function SerdCard()
    {
        return $this->belongsTo(SerdCard::class);
    }
}