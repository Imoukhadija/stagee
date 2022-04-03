<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable=[
       
      
       'Nature',
       'CIN_RC_IF',
       'civilite',
       'Nom',
       'Prenom',
       'date_naissance',
       'genre',
       'Situation_familiale',
       'adress',
       'Ville',
       'code_postale',
       'telephone_fixe_mobile',
       'telephone_mobile',
       'email',
       'categoriepermi',
       'lien_avec_le_souscripteur',
       'CSP',
       'datepermis',
       'numeropermi',
       'statuts',
       'delete_flag',
       'date_created',
       'date_updated',
       'image'
       
    ];
}
