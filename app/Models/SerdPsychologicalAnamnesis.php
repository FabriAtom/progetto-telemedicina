<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SerdPsychologicalAnamnesis extends Model
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
        'psa_date',
        'psychological_history',
        'psychological_diagnosis',
        'therapeutic_program',
    ];

    protected $table = 'serd_psychological_anamneses';
    protected $primaryKey = 'id';
    
    public function SerdCard()
    {
        return $this->belongsTo(psyCard::class);
    }
}