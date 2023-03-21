<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SerdCard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_instance_id',
        'user_id',
        'serd_date' 
    ];

    protected $table = 'serd_cards';
    protected $primaryKey = 'id';

    public function SerdToxicologyReports()
    {
        return $this->hasMany(SerdToxicologyReport::class);
    }
    public function SerdPsychologicalAnamneses()
    {
        return $this->hasMany(SerdPsychologicalAnamnesis::class);
    }
    public function SerdSocialFolders()
    {
        return $this->hasMany(SerdSocialFolder::class);
    }

    public function UserInstance()
    {
        return $this->belongsTo(UserInstance::class);
    }
}