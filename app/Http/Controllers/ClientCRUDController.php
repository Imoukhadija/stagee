<?php
namespace App\Http\Controllers;
use App\Models\clients;
use Illuminate\Http\Request;
class ClientCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['clients'] = clients::orderBy('id','desc')->paginate(5);
return view('Client_assurance.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('Client_assurance.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
    $request->validate([
        "Nature"=>'required',
        'CIN_RC_IF'=>'required' ,
        'civilite'=> 'required',
        'Nom'=>'required' ,
        'Prenom'=> 'required',
        'date_naissance'=>'required' ,
        'genre'=>'required' ,
        'Situation_familiale'=> 'required',
        'adress'=>'required' ,
        'Ville'=>'required' ,
       
        'code_postale'=>'required',
        'telephone_fixe_mobile'=> 'required',
        'telephone_mobile'=>'required' ,
        'email'=>'required' ,
        'categoriepermi'=> 'required',
        'lien_avec_le_souscripteur'=>'required' ,
        'CSP'=>'required' ,
        'datepermis'=> 'required',
        'numeropermi'=>'required' ,
        'status'=>'required' , 
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        
    ]);
    $client = new clients;
    $client->Nature = $request->Nature;
    $client->CIN_RC_IF = $request->CIN_RC_IF;
    $client->civilite = $request->civilite;
    $client->Nom = $request->Nom;
    $client->Prenom = $request->Prenom;
    $client->date_naissance = $request->date_naissance;
    $client->genre = $request->genre;
    $client->Situation_familiale = $request->Situation_familiale;
    $client->adress = $request->adress;
    $client->Ville = $request->Ville;
    $client->code_postale = $request->code_postale;
    $client->telephone_fixe_mobile = $request->telephone_fixe_mobile;
    $client->telephone_mobile = $request->telephone_mobile;
    $client->telephone_mobile = $request->telephone_mobile;
    $client->email = $request->email;
    $client->categoriepermi = $request->categoriepermi;
    $client->lien_avec_le_souscripteur = $request->lien_avec_le_souscripteur;
    $client->CSP = $request->CSP;
    $client->datepermis = $request->datepermis;
    $client->numeropermi = $request->numeropermi;
    $client->status = $request->status;
$client->address = $request->address;
$client->save();
return redirect()->route('C
lient_assurance.index')
->with('success','clients has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\clients  $clients
* @return \Illuminate\Http\Response
*/
public function show(clients $client)
{
return view('Client_assurance.show',compact('client'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\clients  $client
* @return \Illuminate\Http\Response
*/
public function edit(clients $client)
{
return view('Client_assurance.edit',compact('client'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\client  $client
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $Client_assurance)
{
    $request->validate([
        "Nature"=>'required',
        'CIN_RC_IF'=>'required' ,
        'civilite'=> 'required',
        'Nom'=>'required' ,
        'Prenom'=> 'required',
        'date_naissance'=>'required' ,
        'genre'=>'required' ,
        'Situation_familiale'=> 'required',
        'adress'=>'required' ,
        'Ville'=>'required' ,
       
        'code_postale'=>'required',
        'telephone_fixe_mobile'=> 'required',
        'telephone_mobile'=>'required' ,
        'email'=>'required' ,
        'categoriepermi'=> 'required',
        'lien_avec_le_souscripteur'=>'required' ,
        'CSP'=>'required' ,
        'datepermis'=> 'required',
        'numeropermi'=>'required' ,
        'status'=>'required' , 
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        
    ]);
    $client = clients::find($Client_assurance);
    $client->Nature = $request->Nature;
    $client->CIN_RC_IF = $request->CIN_RC_IF;
    $client->civilite = $request->civilite;
    $client->Nom = $request->Nom;
    $client->Prenom = $request->Prenom;
    $client->date_naissance = $request->date_naissance;
    $client->genre = $request->genre;
    $client->Situation_familiale = $request->Situation_familiale;
    $client->adress = $request->adress;
    $client->Ville = $request->Ville;
    $client->code_postale = $request->code_postale;
    $client->telephone_fixe_mobile = $request->telephone_fixe_mobile;
    $client->telephone_mobile = $request->telephone_mobile;
    $client->telephone_mobile = $request->telephone_mobile;
    $client->email = $request->email;
    $client->categoriepermi = $request->categoriepermi;
    $client->lien_avec_le_souscripteur = $request->lien_avec_le_souscripteur;
    $client->CSP = $request->CSP;
    $client->datepermis = $request->datepermis;
    $client->numeropermi = $request->numeropermi;
    $client->status = $request->status;
$client->save();
return redirect()->route('Client_assurance.index')
->with('success','clients Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\clients  $company
* @return \Illuminate\Http\Response
*/
public function destroy(clients $client)
{
$client->delete();
return redirect()->route('Client_assurance.index')
->with('success','clients has been deleted successfully');
}
}