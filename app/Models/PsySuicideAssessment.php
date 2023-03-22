<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsySuicideAssessment extends Model
{
    protected $fillable = [
        'psy_card_id',
        'sa_date'
    ];

    protected $table = 'psy_suicide_assessments';
    protected $primaryKey = 'id';


    public function PsyCards()
    {
        return $this->hasMany(PsyCard::class);
    }
}
