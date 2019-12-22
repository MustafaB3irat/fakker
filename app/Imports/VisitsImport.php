<?php

namespace App\Imports;

use App\Visit;
use Maatwebsite\Excel\Concerns\ToModel;

class VisitsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Visit([

            'family_id' => $row['الرقم'],
            'date' => $row['تاريخ الزيارة'],
            'needs' => $row['الاحتياجات'],
            'notes' => $row['ملاحظات']


        ]);
    }
}
