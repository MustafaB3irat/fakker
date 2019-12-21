<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
{
    //


    public function index($id)
    {

        $visits = Visit::query()->orderBy('date', 'asc')->where('family_id', $id)->paginate(8);

        return view('Visits.show')->with('Visits', $visits)->with('FamilyID', $id);

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


        return redirect('/visit/' . $request->input('id'))->with('success', 'added Successfuly');

    }

}
