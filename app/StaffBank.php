<?php

namespace App;

use App\Staff;
use Illuminate\Database\Eloquent\Model;

class StaffBank extends Model
{
    //
    protected $table = 'staff_banks';
    protected $fillable = [
        'staff_id',
        'bvn_no',
        'account_no',
        'bank_name',
        'bank_branch',
        'payment_type',
        'sort_code',
    ];
}
