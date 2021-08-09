<?php

namespace App;

use App\Staff;
use Illuminate\Database\Eloquent\Model;

class StaffRecord extends Model
{
    //
    protected $table = 'staff_records';
    protected $fillable = [
        'staff_id',
        'department',
        'unit',
        'section',
        'dofa',
        'confirm_date',
        'last_promotion_date',
        'appointment_type',
        'current_grade_level',
        'present_rank',
        'present_cadre',
        'present_station',
    ];
    public function Staff()
    {
        return $this->belongsTo('App\Staff');
    }
}
