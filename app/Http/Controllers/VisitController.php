<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
{
    //


    public function index($id)
    {

        $visits = Visit::query()->where('family_id', $id)->paginate(10);

        return view('Visits.show')->with('Visits', $visits);

    }


    public function create(){

        $visit = new Visit;




    }

}
