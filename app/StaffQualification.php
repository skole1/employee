<?php

namespace App;

use App\Staff;
use Illuminate\Database\Eloquent\Model;

class StaffQualification extends Model
{
    //
    protected $table = 'staff_qualifications';
    protected $fillable = [
        'staff_id',
        'highest_qualification',
        'course_of_study',
        'highest_prof_qualification',
    ];
    public function Staff()
    {
        return $this->belongsTo('App\Staff');
    }
}
