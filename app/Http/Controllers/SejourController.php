<?php

namespace App\Http\Controllers;

use App\Models\Sejour;
use Illuminate\Http\Request;

class SejourController extends Controller
{
    //
    public function showSejour(){
        return view('formulaireSejour'); 
    }

    public function listSejour(){
        $sejours = Sejour::all();
        return view('tableauSejour',compact('sejours'));
    }

    public function storeSejour(Request $request){
        $sejours = Sejour::all();
        Sejour::create([
            'voyageur_id' => $request->input('voyageur_id'),
            'logement_id' => $request->input('logement_id'),
            'debut' =>$request->input('debut'),
            'fin' => $request->input('fin'),
        ]);
        return redirect('listeSejour');

    }
    
    public function editSejour($id){

        $sejours = Sejour::find($id);

        $voyageur_id = $sejours->voyageur_id;
        $logement_id = $sejours->logement_id;
        $debut = $sejours->debut;
        $fin = $sejours->fin;

        return view('updateSejour',compact('sejours',));

    }
    public function updateS(Request $request ,$id)
    {
        $sejours = Sejour::find($id);
        if (null !== ($request->input('voyageur_id')))
        {
            $sejours->voyageur_id = $request->input('voyageur_id');
        }
        if (null !== ($request->input('logement_id')))
        {
            $sejours->logement_id = $request->input('logement_id');
        }
        if (null !== ($request->input('debut')))
        {
            $sejours->debut = $request->input('debut');
        }
        if (null !== ($request->input('fin')))
        {
            $sejours->fin = $request->input('fin');
        }
        // Sauvegarde
        $sejours->save();
        return redirect('listeSejour');
    }
    
    
    
    public function delete($id){
        $sejours = Sejour::find($id);
        $sejours -> delete();
        return redirect('listeSejour');

    }
    
    /* public function getUpdateSejour ($id){
        $sejours = Sejour::find($id);
        return view ('updateSejour',compact('sejours'));
    } */

   // Ajout de pagination pour un séjour 
    public function listePaginationSejour()
    {
        $sejours = Sejour::all();
        $sejours = Sejour::simplePaginate(5);
        return view('tableauSejour', compact('sejours'));
    }
}
