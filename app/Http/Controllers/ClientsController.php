<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return(view('admin.client.index'));
        /*$Clients=clients::all();
        return(view('admin.client.index',compact('Clients')));*/
    }
    public function indexcreate()
    {
        return(view('admin.client.create'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function index1(){
        return view('admin.client.index');
    }
    public function index2(){
        return view('admin.client.index');
    }
    public function indexedit(){
        $clients=clients::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
     /*  if($request->hasFile('image')){
          $file = $request->image;
        $new_file = time().$file->getClientOriginalName();
         $file->move('/storage/Client',$new_file);
       }*/
       clients::create([
            "Nature"=>$request->Nature,
            'CIN_RC_IF'=>$request->CIN_RC_IF,
            'civilite'=>$request->civilite,
            'Nom'=>$request->Nom,
            'Prenom'=>$request->Prenom,
            'date_naissance'=>$request->date_naissance,
            'genre'=>$request->genre,
            'Situation_familiale'=>$request->Situation_familiale,
            'adress'=>$request->adress,
            'Ville'=>$request->Ville,
           
            'code_postale'=>$request->code_postale,
            'telephone_fixe_mobile'=>$request->telephone_fixe_mobile,
            'telephone_mobile'=>$request->telephone_mobile,
            'email'=>$request->email,
            'categoriepermi'=>$request->categoriepermi,
            'lien_avec_le_souscripteur'=>$request->lien_avec_le_souscripteur,
            'CSP'=>$request->CSP,
            'datepermis'=>$request->datepermis,
            'numeropermi'=>$request->numeropermi,
            'status'=>$request->statut,
           /* 'image'=>'/storage/Client'.$new_file,*/

            ]);
            return redirect ()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $clients)
    {
     //   $clients=Clients::find($clients);
       // return view('admin.client.edit',compact('Clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients $clients)
    {
        //
    }
}
