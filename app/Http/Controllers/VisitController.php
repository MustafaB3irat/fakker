<?php

namespace App\Http\Controllers;

use App\Family;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
{
    //


    public function index($id, $deserve)
    {

        $family = Family::query()->find($id);

        $visits = Visit::query()->orderBy('date', 'desc')->where('family_id', $id)->paginate(8);

        return view('Visits.show', ['Visits' => $visits, 'FamilyID' => $id, 'family' => $family, 'deserve'=>$deserve]);

    }

    public function update(Request $request)
    {

        $this->validate($request, [

            'date' => 'required',
            'needs' => 'required',
            'notes' => 'required'
        ]);

        Visit::query()->where("id", $request->input("id"))->update([

                'date' => $request->input("date"),
                'notes' => $request->input("notes"),
                'needs' => $request->input("needs"),

            ]
        );

        return redirect('visit/' . $request->input('family_id') . '/' . $request->input('deserve'))->with("success", "success");

    }


    public function create($id)
    {
        return view('Visits.create')->with('id', $id);

    }

    public function store(Request $request)
    {


        $this->validate($request, [

            'date' => 'required',
            'needs' => 'required',
            'notes' => 'required'
        ]);


        $visit = new Visit;


        $visit->family_id = $request->input('id');
        $visit->date = $request->input('date');
        $visit->notes = $request->input('notes');
        $visit->needs = $request->input('needs');


        $visit->save();


        return redirect('visit/' . $request->input('id') . '/' . $request->input('deserve'))->with('success', 'added Successfuly');

    }


    public function edit($id, $deserve)
    {

        $visit = Visit::query()->find($id);


        return view("Visits.edit")->with("visit", $visit)->with('deserve', $deserve);

    }

}
