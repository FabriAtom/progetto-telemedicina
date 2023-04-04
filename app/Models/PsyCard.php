<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsyCard extends Model
{
    protected $fillable = [
        'user_instace_id ',
        'user_id',
        'psy_card_date'
    ];

    protected $table = 'psy_cards';
    protected $primaryKey = 'id';


    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }

    public function PsySuicideAssessments()
    {
        return $this->hasMany(PsySuicideAssessment::class);
    }

    public function PsyMentalHealthDepartments()
    {
        return $this->hasMany(PsyMentalHealthDepartment::class);
    }

    public function PsyRehabilitationPsychiatricCards()
    {
        return $this->hasMany(PsyRehabilitationPsychiatricCard::class);
    }

    public function PsyRatings()
    {
        return $this->hasMany(PsyRating::class);
    }

    public function PsyUocDepartments()
    {
        return $this->hasMany(PsyUocDepartment::class);
    }

    public function PsySocialFolders()
    {
        return $this->hasMany(PsySocialFolder::class);
    }

    public function PsyMembershipCards()
    {
        return $this->hasMany(PsyMembershipCard::class);
    }

    public function PsySurveys()
    {
        return $this->hasMany(PsySurvey::class);
    }
}