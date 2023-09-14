<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'members_id',
        'full_name',
        'address',
        'cellphone_num',
        'gender',
        'geograph_group',
        'date_of_birth',
        'age',
        'civil_status',
        'bussi_emp_name',
    ];

}
//wara pa un brod mahimo pa kita sa blade file :)