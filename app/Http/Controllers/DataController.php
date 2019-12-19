<?php

namespace App\Http\Controllers;

use App\Family;
use Illuminate\Http\Request;


use App\Visit;


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
        $families = Family::query()->orderBy('name' , 'asc')->paginate(1);

        return view('Family.view')->with('families' ,$families);

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


        $this->validate($request,[
            'name'=> 'required',
            'phone'=>'required',
            'area'=>'required',
            'address'=>'required',
            'workState'=>'required',
            'hawya'=>'required',
            'state'=>'required',
            'houseHolderWork'=>'required',
            'motherWork'=>'required',
            'incomeSrc'=>'required',
            'boysNum'=>'required',
            'boysAges'=>'required',
            'girlsNum'=>'required',
            'girlsAges'=>'required',
        ]);



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
        $family->incomeSrc = $request->input('incomeSrc');
        $family->boysNum = $request->input('boysNum');
        $family->boysAges = $request->input('boysAges');
        $family->girlsNum = $request->input('girlsNum');
        $family->girlsAges = $request->input('girlsAges');
        $family->assuranceType = $request->input('assuranceType');
        $family->isThereUniStudent = $request->input('isThereUniStudent');
        $family->studentDetails = $request->input('studentDetails');
        $family->isThereSickPeople_Drugs = $request->input('isThereSickPeople_Drugs');
        $family->sicknessDetails = $request->input('sicknessDetails');


        $family->save();

            return redirect('/data')->with('success' , 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return "gjfgfghfhfgff";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
