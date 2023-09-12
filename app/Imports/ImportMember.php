<?php

namespace App\Imports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportMember implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Member([
            //palitan mo brod sing $row[] and so on 
          //example
            'id' => $row[0],
            'members_id' => $row[1],
            'full_name' => $row[2],
            'Address' => $row[3],
            'Cellphone_num' => $row[4],
            'Gender' => $row[5],
            'Geograph_group' => $row[6],
            'Date_of_birth' => $row[7],
            'Age' => $row[8],
            'civil_status' => $row[9],
            'bussi_emp_name' => $row[10],
        ]);
    }
}
