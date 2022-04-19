<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
   public function index (){
       $proprietaires = Proprietaire::all();
       return view('index',[
           'proprietaires' => $proprietaires
       ]);
   }
   
   public function create (){
    return view('add');

}

  
public function store (){

    $insert = new Proprietaire;
    $insert->CodeProprietaire = request('CodeProprietaire');
    $insert->Nom_proprietaire = request('Nom_proprietaire');
    $insert->Prenom_proprietaire = request('Prenom_proprietaire');
    $insert->Date_naissance = request('Date_naissance');
    $insert->Lieu_naissance = request('Lieu_naissance');
    $insert->code_piece_identite = request('code_piece_identite');
    $insert->Numero_piece_identite = request('Numero_piece_identite');
    $insert->Adresse = request('Adresse');
    $insert->Email = request('Email');
    $insert->id_genre = request('id_genre');


    $insert->save();
    
     
        $proprietaires = Proprietaire::all();
        return view('index',[
            'proprietaires' => $proprietaires
        ]);   
        return back()->with("successInsert", "proprietaire Ajouter");

}
    public function delete($id){
        $proprietaire = proprietaire::find($id);
        $proprietaire->delete();

        return redirect('/');

    }

    public function detail($id)
    {
        $proprietaire=proprietaire::find($id);

        return view('detail',[
            'proprietaire'=>$proprietaire
        ]);
    }
    public function update(Request $request,$id)
    {
        $proprietaire=proprietaire::find($id);
        $proprietaire->CodeProprietaire=$request->CodeProprietaire;
        $proprietaire->Nom_proprietaire=$request->Nom_proprietaire;
        $proprietaire->Prenom_proprietaire=$request->Prenom_proprietaire;
        $proprietaire->Date_naissance=$request->Date_naissance;
        $proprietaire->Lieu_naissance=$request->Lieu_naissance;
        $proprietaire->code_piece_identite=$request->code_piece_identite;
        $proprietaire->Numero_piece_identite=$request->Numero_piece_identite;
        $proprietaire->Adresse=$request->Adresse;
        $proprietaire->Email=$request->Email;

        $proprietaire->update();

     return redirect('/');
    
    }
}
 