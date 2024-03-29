<?php

namespace App\Http\Controllers;

use App\Charts\reports;
use App\Family;
use App\Imports\FamilyImport;
use Illuminate\Http\Request;


use App\Visit;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\QueryBuilder\QueryBuilder;
use Carbon\Carbon;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $families = Family::query()->orderBy('id', 'desc')->paginate(10);

        $result = QueryBuilder::for(Family::class)
            ->allowedFilters(['name', 'phone', 'hawya', 'area'])
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('Family.view')->with('families', $result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Family.create');

    }


    public function store(Request $request)
    {
        //


        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'area' => 'required',
            'address' => 'required',
            'workState' => 'required',
            'hawya' => 'required',
            'state' => 'required',
            'houseHolderWork' => 'required',
            'motherWork' => 'required',
            'incomeSrc' => 'required',
            'boysNum' => 'required',
            'girlsNum' => 'required',
        ]);

        $incomeSrc = $request->input('incomeSrcOther');
        if ($incomeSrc == null || $incomeSrc == "")
            $incomeSrc = $request->input('incomeSrc');


        $i = 1;
        $boysAges = "---";
        while ($request->input('b_' . $i) != null) {

            $this->validate($request, [

                'b_' . $i => 'required | date | before:today',

            ]);

            if ($i == 1)
                $boysAges = "";


            $boysAges .= $request->input('b_' . $i);
            $i++;

            if ($request->input('b_' . $i) != null)
                $boysAges .= ";";

        }

        $i = 1;
        $girlsAges = "---";
        while ($request->input('g_' . $i) != null) {

            $this->validate($request, [

                'g_' . $i => 'required | date | before:today',

            ]);

            if ($i == 1)
                $girlsAges = "";


            $girlsAges .= $request->input('g_' . $i);

            $i++;

            if ($request->input('g_' . $i) != null)
                $girlsAges .= ";";

        }


        $family = new Family;

        $family->name = $request->input('name');
        $family->area = $request->input('area');
        $family->address = $request->input('address');
        $family->phone = $request->input('phone');
        $family->hawya = $request->input('hawya');
        $family->houseHolderWork = $request->input('houseHolderWork');
        $family->state = $request->input('state');
        $family->motherWork = $request->input('motherWork');
        $family->workState = $request->input('workState');
        $family->incomeSrc = $incomeSrc;
        $family->boysNum = $request->input('boysNum');
        $family->boysAges = $boysAges;
        $family->girlsNum = $request->input('girlsNum');
        $family->girlsAges = $girlsAges;

        if ($request->input('assuranceType') == "")
            $family->assuranceType = "لا يوجد";
        else
            $family->assuranceType = $request->input('assuranceType');


        $family->isThereUniStudent = $request->input('isThereUniStudent');

        if ($request->input('isThereUniStudent') == 0)
            $family->studentDetails = "---";
        else
            $family->studentDetails = $request->input('studentDetails');


        $family->isThereSickPeople_Drugs = $request->input('isThereSickPeople_Drugs');

        if ($request->input('isThereSickPeople_Drugs') == 0)
            $family->sicknessDetails = "---";
        else
            $family->sicknessDetails = $request->input('sicknessDetails');


        try {
            $family->save();
        } catch (\Exception $e) {

            return redirect('/data/create')->with('errors', []);
        }

        return redirect('/data')->with('success', "success");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


        $family = Family::query()->find($id);

        if ($family->workState == 0)
            $family->workState = "لا";
        else
            $family->workState = "نعم";


        if ($family->isThereUniStudent == 0) {
            $family->isThereUniStudent = "لا";
            $family->studentDetails = "---";
        } else
            $family->isThereUniStudent = "نعم";


        if ($family->isThereSickPeople_Drugs == 0) {
            $family->isThereSickPeople_Drugs = "لا";
            $family->sicknessDetails = "---";
        } else
            $family->isThereSickPeople_Drugs = "نعم";


        switch ($family->state) {

            case 'single':
                {
                    $family->state = "أعزب/عزباء";
                    break;
                }

            case 'divorced':
                {
                    $family->state = "مطلق/مطلقة";
                    break;
                }

            case 'widow':
                {
                    $family->state = "أرمل/أرملة";
                    break;
                }

            case 'married':
                {
                    $family->state = "متزوج/متزوجة";
                    break;
                }

        }


        $boysBirthdates = explode(
            ';', $family->boysAges
        );

        $boysAges = "";

        if ($boysBirthdates[0] != "---")
            foreach ($boysBirthdates as $i) {

                if (Carbon::parse($i)->age == 0)
                    $boysAges .= " أقل من سنة";
                else
                    $boysAges .= Carbon::parse($i)->age;

                $boysAges .= "  ";

            }
        else
            $boysAges = "---";

        $girlsBirthdates = explode(
            ';', $family->girlsAges
        );

        $girlsAges = "";

        if ($girlsBirthdates[0] != "---")

            foreach ($girlsBirthdates as $i) {

                if (Carbon::parse($i)->age == 0)
                    $girlsAges .= " أقل من سنة";
                else
                    $girlsAges .= Carbon::parse($i)->age;

                $girlsAges .= "  ";

            }

        else
            $girlsAges = "---";

        if ($family->boysNum == 0)
            $boysAges = "---";

        if ($family->girlsNum == 0)
            $girlsAges = "---";


        $family->girlsAges = $girlsAges;
        $family->boysAges = $boysAges;


        return view('Family.show')->with('Family', $family);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $family = Family::query()->find($id);

        return view('Family.edit')->with('family', $family);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'area' => 'required',
            'address' => 'required',
            'workState' => 'required',
            'hawya' => 'required',
            'state' => 'required',
            'houseHolderWork' => 'required',
            'motherWork' => 'required',
            'incomeSrc' => 'required',
            'boysNum' => 'required',
            'girlsNum' => 'required',

        ]);


        $assuranceType = "لا يوجد";
        $studentDetails = "---";
        $sicknessDetails = "---";


        $incomeSrc = $request->input('incomeSrcOther');
        if ($incomeSrc == null || $incomeSrc == "")
            $incomeSrc = $request->input('incomeSrc');


        if ($request->input('assuranceType') != "")
            $assuranceType = $request->input('assuranceType');


        if ($request->input('isThereUniStudent') == 1)
            $studentDetails = $request->input('studentDetails');


        if ($request->input('isThereSickPeople_Drugs') == 1)
            $sicknessDetails = $request->input('sicknessDetails');


        $i = 1;
        $boysAges = "---";
        while ($request->input('b_' . $i) != null) {

            $this->validate($request, [

                'b_' . $i => 'required | date | before:today',

            ]);

            if ($i == 1)
                $boysAges = "";


            $boysAges .= $request->input('b_' . $i);
            $i++;

            if ($request->input('b_' . $i) != null)
                $boysAges .= ";";

        }

        $i = 1;
        $girlsAges = "---";
        while ($request->input('g_' . $i) != null) {

            $this->validate($request, [

                'g_' . $i => 'required | date | before:today',

            ]);

            if ($i == 1)
                $girlsAges = "";


            $girlsAges .= $request->input('g_' . $i);

            $i++;

            if ($request->input('g_' . $i) != null)
                $girlsAges .= ";";

        }


        Family::query()->where('id', $id)->update([

            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'area' => $request->input('area'),
            'hawya' => $request->input('hawya'),
            'workState' => $request->input('workState'),
            'assuranceType' => $assuranceType,
            'houseHolderWork' => $request->input('houseHolderWork'),
            'motherWork' => $request->input('motherWork'),
            'state' => $request->input('state'),
            'isThereSickPeople_Drugs' => $request->input('isThereSickPeople_Drugs'),
            'sicknessDetails' => $sicknessDetails,
            'isThereUniStudent' => $request->input('isThereUniStudent'),
            'studentDetails' => $studentDetails,
            'incomeSrc' => $incomeSrc,
            'boysNum' => $request->input('boysNum'),
            'girlsNum' => $request->input('girlsNum'),
            'boysAges' => $boysAges,
            'girlsAges' => $girlsAges,

        ]);


        return redirect('data')->with("success", "done Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function import()
    {

        return view('import');

    }


    public function importExcel(Request $request)
    {

        $this->validate($request, [

            'file' => 'required|mimes:xlsx,xls,csv'

        ]);


        $families = Excel::toCollection(new FamilyImport(), $request->file('file'));

        $i = 0;
        $errors = [];
        foreach ($families[0] as $family) {

            $errors = [];
            if ($family != null && $i != 0 && $family[0] != null) {


                $workState = 0;
                $isThereUniStudent = 0;
                $isThereSickPeople_Drugs = 0;


                if ($family[16] == "نعم")
                    $isThereUniStudent = 1;

                if ($family[9] == "نعم")
                    $workState = 1;

                if ($family[17] == "نعم")
                    $isThereUniStudent = 1;


                try {

                    Family::query()->insert([

                        'id' => $family[0],
                        'name' => $family[1],
                        'area' => $family[2],
                        'address' => $family[3],
                        'phone' => $family[4],
                        'hawya' => $family[5],
                        'houseHolderWork' => $family[6],
                        'state' => $family[7],
                        'motherWork' => $family[8],
                        'incomeSrc' => $family[10],
                        'boysNum' => $family[11],
                        'boysAges' => $family[12],
                        'girlsNum' => $family[13],
                        'girlsAges' => $family[14],
                        'assuranceType' => $family[15],
                        'isThereUniStudent' => $isThereUniStudent,
                        'studentDetails' => 'بدون',
                        'isThereSickPeople_Drugs' => $isThereSickPeople_Drugs,
                        'sicknessDetails' => 'بدون',
                        'workState' => $workState,

                    ]);


                } catch (\Exception $e) {

                    $errors[0] = "error 1";

                }


                try {
                    Visit::query()->insert([

                        'family_id' => $family[0],
                        'date' => $family[19],
                        'needs' => $family[20],
                        'notes' => $family[21]
                    ]);

                } catch (\Exception $e) {

                    $errors[0] = "error 2";
                }

            }


            $i++;
        }

        if (count($errors) > 0)
            return redirect('data')->with("errors", $errors);

        return redirect('data')->with("success", "Success");

    }


    public function showVisualize()
    {

        return view('Family.FamilyVisualization')->with('chart', null);
    }


    public function visualize(Request $request)
    {

        $this->validate($request, [

            'chartType' => 'required',
            'dataType' => 'required'
        ]);


        $dataType = $request->input('dataType');
        $chartType = $request->input('chartType');

        $data = DB::table('families')
            ->select(DB::raw('count(*) as num , ' . $dataType))
            ->groupBy($dataType)
            ->get()
            ->pluck('num', $dataType);

        $chart = new reports;


        $datasetName = "المنطقة";

        if ($dataType == "state")
            $datasetName = "الحالة الإجتماعية";
        else if ($dataType == "deserve")
            $datasetName = "الإستحقاق";


        if ($dataType != "deserve")
            $chart->labels($data->keys());
        else
            $chart->labels(['لا يستحق', 'يستحق']);


        $chart->dataset(" تصنيف حسب " . $datasetName, $chartType, $data->values());

        return view('Family.FamilyVisualization')->with('chart', $chart);
    }


    public function deserve(Request $request)
    {

        $this->validate($request, [
            'id' => "required",
        ]);

        $deserve = "0";

        if ($request->input('deserve') == "1")
            $deserve = $request->input('deserve');

        Family::query()->where('id', $request->input('id'))->update([
            'deserve' => $deserve
        ]);


        return redirect('visit/' . $request->input('id') . '/' . $deserve)->with("success", "success");

    }
}
