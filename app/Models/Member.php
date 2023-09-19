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
        'Address',
        'Cellphone_num',
        'Gender',
        'Geograph_group',
        'Date_of_birth',
        'Age',
        'civil_status',
        'bussi_emp_name',
    ];

}
//wara pa un brod mahimo pa kita sa blade file :)