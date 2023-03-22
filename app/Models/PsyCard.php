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
}
