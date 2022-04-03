<?php

namespace App\Http\Controllers;

use App\Models\assurance_auto;
use Illuminate\Http\Request;

class AssuranceAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = type_assurance::where('libelle', 'Auto')->first();
        $assurances = assurance::where('type_assurance_id', $type->id)->get();

        return view('admin.assurance_auto.index', compact('assurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.protiens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = TypeProduct::where('libelle', 'Auto')->first();
        $assurances = new assurance();
        $assurances->create([
            
           
            'type_assurance_id' => $type->id,
            'marque' => $request->marque,
            'modele' => $request->modele,
            'type_vehicule' => $request->type_vehicule,
            'date-mise_circulation' => $request->date_mise_circulation,
            'prix' => $request->prix,
            'status' => $request->status,
        ]);

        return redirect('/admin/protiens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assurance_auto  $assurance_auto
     * @return \Illuminate\Http\Response
     */
    public function show(assurance_auto $assurance_auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\assurance_auto  $assurance_auto
     * @return \Illuminate\Http\Response
     */
    public function edit(assurance_auto $assurance_auto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\assurance_auto  $assurance_auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assurance_auto $assurance_auto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assurance_auto  $assurance_auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(assurance_auto $assurance_auto)
    {
        //
    }
}
