<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employé;

class EmployéController extends Controller
{
    public function liste_employé()
    {
        $employés = Employé::paginate(4);
        return view ("employé.liste" , compact ('employés')) ; 
    }

    
    public function ajouter_employé(){
        return view ('employé.ajouter');
    }
    public function ajouter_employé_traitement(Request $request){
        $request->validate([
            'identifiant' => 'required',
            'nom' => 'required',
            'prénom' => 'required',
            'département' => 'required',


        ]);
        $employé = new Employé(); 
        $employé->identifiant=$request->identifiant; 
        $employé->nom=$request->nom; 
        $employé->prénom=$request->prénom; 
        $employé->département=$request->département; 
        $employé ->save(); 

        return redirect('/ajouter')->with ('status', 'L\'employé a bien été ajouté avec succès.');


    }
    public function update_employé ($id) {
        $employé = Employé::find($id);
        return view ('employé.update', compact ('employé'));
    }

    public function update_employé_traitement(Request $request){
        $request->validate([
            'identifiant' => 'required',
            'nom' => 'required',
            'prénom' => 'required',
            'département' => 'required',]);
            $employé = Employé::find($request->id); 
            $employé->identifiant=$request->identifiant; 
            $employé->nom=$request->nom; 
            $employé->prénom=$request->prénom; 
            $employé->département=$request->département; 
            $employé ->update();
            return redirect('/employé')->with ('status', 'L\'employé a bien été modifié avec succès.');




    }
    public function delete_employé($id){
        $employé = Employé::find($id);
        $employé->delete();
        return redirect('/employé')->with ('status', 'L\'employé a bien été supprimé avec succès.');

    }

}