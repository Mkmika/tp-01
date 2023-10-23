<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    //
    public function show(){
        return view('formulaireLogement');
    }

    public function liste(){
        $logements = Logement::all();
        return view('tableauLogement',compact('logements'));

    }

    public function store(Request $request){
        $logements = Logement::all();
        Logement::create([
            'code' => $request->input('code'),
            'nomLogement' => $request->input('nomLogement'),
            'capacite' => $request->input('capacite'),
            'type' => $request->input('type'),
            'lieu' => $request->input('lieu'),
            'photo' => $request->input('photo'),
            'disponibilite' => $request->input('disponibilite'),
        ]);
        return redirect('listeLogement');

    }

    public function edit($id)
    {
        $logements = Logement::find($id);

            $code = $logements->code;
            $nomLogement = $logements->nomLogement;
            $capacite = $logements->capacite;
            $type = $logements->type;
            $lieu = $logements->lieu;
            $photo = $logements->photo;
            $disponibilite = $logements->disponibilite;

        return view('updateLogement', compact('code','nomLogement', 'capacite', 'type', 'lieu', 'photo', 'disponibilite',));
    }
    public function update(Request $request, $id)
    {
        $logements = Logement::find($id);
        if (null !== ($request->input('code')))
        {
            $logements->code = $request->input('code');
        }
        if (null !== ($request->input('nomLogement')))
        {
            $logements->nomLogement = $request->input('nomLogement');
        }
        if (null !== ($request->input('capacite')))
        {
            $logements->capacite = $request->input('capacite');
        }
        if (null !== ($request->input('type')))
        {
            $logements->type = $request->input('type');
        }
        if (null !== ($request->input('lieu')))
        {
            $logements->lieu = $request->input('lieu');
        }
        if (null !== ($request->input('photo')))
        {
            $logements->photo = $request->input('photo');
        }
        if (null !== ($request->input('disponibilite')))
        {
            $logements->disponibilite = $request->input('disponibilite');
        }
        // Sauvegarde
        $logements->save();
        return redirect('listeLogement');
    }
    
    
    
    public function delete($id){
        $logements = Logement::find($id);
        $logements -> delete();
        return redirect('listeLogement');

    }
}
