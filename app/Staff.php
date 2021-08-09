<?php

namespace App;

use App\User;
use App\StaffBank;
use App\StaffRecord;
use App\StaffQualification;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';
    protected $fillable = [
        'user_id',
        'psn_no',
        'nin_no',
        'grade_level',
        'mda',
        'dob',
        'sex',
        'marital_status',
        'phone_number',
        'email',
        'state',
        'lga',
        'ward',
        'home_town',
        'residential_address',
        'next_kin_name',
        'next_kin_phone',
        'next_kin_address',
    ];
}
