<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'position', 'age', 'email', 'contact_number',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }

    use SyncsWithFirebase;
}
