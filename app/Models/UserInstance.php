<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserInstance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',	
        'lastname',
        'fiscalCode'
    ];

    protected $table = 'user_instances';
    protected $primaryKey = 'id';
    public function Acceptances()
    {
        return $this->hasMany(Acceptance::class);
    }
    public function Treatments()
    {
        return $this->hasMany(Treatment::class);
    }
    public function SerdCards()
    {
        return $this->hasMany(SerdCard::class);
    }
    public function Therapies()
    {
        return $this->hasMany(Therapy::class);
    }
    public function cardiologyCard()
    {
        return $this->hasOne(CardiologyCard::class,'user_instance_id');
    }
    public function diabetologyCards()
    {
        return $this->hasMany(DiabetologyCard::class,'user_instance_id');
    }
    public function DocumentFiles()
    {
        return $this->hasMany(DocumentFile::class);
    }

    public function PsyCard()
    {
        return $this->hasMany(PsyCard::class,'user_instance_id');
    }





    public function monitoringClinicalParameters()
    {
        return $this->hasMany(monitoringClinicalParameter::class);
    }

    public function TraceabilityTherapys()
    {
        return $this->hasMany(TraceabilityTherapy::class);
    }

    public function ClinicalParameterCollections()
    {
        return $this->hasMany(ClinicalParameterCollection::class);
    }
    
    public function CollectionFormHgts()
    {
        return $this->hasMany(CollectionFormHgt::class);
    }
}