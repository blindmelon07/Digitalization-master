<?php

namespace App\Imports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportMember implements ToModel, WithValidation, WithUpserts, WithHeadingRow
{
    public function uniqueBy()
    {
        return 'members_id';
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data = [
            'members_id' => (string)($row['members_id'] ?? ''),
            'full_name' => (string)($row['full_name'] ?? ''),
            'address' => (string)($row['address'] ?? ''),
            'cellphone_num' => (string)($row['cellphone_num'] ?? ''),
            'gender' => (string)($row['gender'] ?? ''),
            'geograph_group' => (string)($row['geograph_group'] ?? ''),
            'date_of_birth' => (string)($row['date_of_birth'] ?? ''),
            'age' => (string)($row['age'] ?? ''),
            'civil_status' => (string)($row['civil_status'] ?? ''),
            'bussi_emp_name' => (string)($row['bussi_emp_name'] ?? ''),
        ];
        return new Member($data);
    }

    public function rules(): array
    {
        return [
            'members_id' => 'required',

             // Above is alias for as it always validates in batches
             '*.members_id' => 'required',
             
        ];
    }
}
