<?php

namespace App\Http\Controllers;

use App\Models\tableau_bordre;
use Illuminate\Http\Request;

class TableauBordreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tableaubord.index');
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function show(tableau_bordre $tableau_bordre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function edit(tableau_bordre $tableau_bordre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tableau_bordre $tableau_bordre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function destroy(tableau_bordre $tableau_bordre)
    {
        //
    }
}
