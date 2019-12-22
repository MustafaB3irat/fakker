<?php

namespace App\Imports;

use App\Family;
use Maatwebsite\Excel\Concerns\ToModel;


class FamilyImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */




    public function model(array $row)
    {

        $workState = 0;
        $isThereUniStudent = 0;
        $isThereSickPeople_Drugs = 0;


        if ($row['يوجد طالب جامعة'] == "نعم")
            $isThereUniStudent = 1;

        if ($row['هل يعمل احد في العائلة'] == "نعم")
            $workState = 1;

        if ($row['هل يوجد مريض بحاجة لعلاج او دواء بشكل مزمن'] == "نعم")
            $isThereUniStudent = 1;


        return new Family([
            'id' => $row['الرقم'],
            'name' => $row['الاسم الكامل'],
            'area' => $row['المنطقة'],
            'address' => $row['العنوان بالتفصيل'],
            'phone' => $row['رقم للتواصل'],
            'hawya' => $row['رقم الهوية'],
            'houseHolderWork' => $row['عمل رب الاسرة'],
            'state' => $row['الحالة الاجتماعية'],
            'motherWork' => $row['عمل الام'],
            'srcIncome' => $row['مصدر الدخل شؤون.زكاه.وكالة.الخ'],
            'boysNum' => $row['عدد الاولاد'],
            'boysAges' => $row['اعمارهم'],
            'girlsNum' => $row['عدد البنات'],
            'girlsAges' => $row['اعمارهن'],
            'assuranceType' => $row['متوفر تامين صحي حكومي.شؤون،خاص,وكالة'],
            'isThereUniStudent' => $isThereUniStudent,
            'studentDetails' => 'بدون',
            'isThereSickPeople_Drugs' => $isThereSickPeople_Drugs,
            'sicknessDetails' => 'بدون',
            'workState' => $workState,


        ]);
    }
}
