<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id', 'patient_name',
        'description',
        'doctor_id',
        'date', 'time'
    ];

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }

    use SyncsWithFirebase;
}
