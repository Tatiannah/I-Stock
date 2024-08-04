<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Models\Fourniture;
use App\Models\Entrer;

class PageController extends Controller
{
    public function __invoke()
    {
        // Votre logique de contrôleur ici
    }
    public function app(){
        return view('layouts.app');
    }
      //FOURNITURE
      public function fourniture()
      {
          $fournitures = Fourniture::all();
          return view('pages.fourniture', compact('fournitures'));
      }
      public function ajoutFourniture()
    {
        return view('pages.ajoutFourniture');
    }

    public function ajoutFourniture_traitement( Request $request)
    {
         $request->validate([
            'CodeF' => 'required',
            'Designation' => 'required',
            'Qte_initiale' => 'required',
         ]);
         $fourniture = new Fourniture();
         $fourniture->CodeF = $request->CodeF;
         $fourniture->Designation = $request->Designation;
         $fourniture->Qte_initiale = $request->Qte_initiale;
         $fourniture->save();

         return redirect('/fourniture')->with('status', 'ajouté avec succès');
    }

    public function modFourniture($id)
    {
        $fournitures = Fourniture::find($id);
        return view('pages.modFourniture', compact('fournitures'));
    }

    public function modFourniture_traitement(Request $request)
    {
        
        $request->validate([
            'CodeF' => 'required',
            'Designation' => 'required',
            'Qte_initiale' => 'required',
         ]);
         $fournitures = Fourniture::find($request->id);
         $fournitures->CodeF = $request->CodeF;
         $fournitures->Designation = $request->Designation;
         $fournitures->Qte_initiale = $request->Qte_initiale;
         $fournitures->update();

         return redirect('/fourniture')->with('status', 'modifié avec succès');
    }

    public function supFourniture($id) 
    {
        $fournitures = Fourniture::find($id);
        $fournitures->delete();

        return redirect('/fourniture')->with('status', 'supprimé avec succès');
    }


    //DIVISION
    public function division()
    {
        $divisions = Division::all();
        return view('pages.division', compact('divisions'));
    }
    public function ajoutDivision()
  {
      return view('pages.ajoutDivision');
  }
  public function ajoutdivision_traitement( Request $request)
    {
         $request->validate([
            'Imat' => 'required',
            'nom_div' => 'required',
         ]);
         $division = new Division();
         $division->Imat = $request->Imat;
         $division->nom_div = $request->nom_div;
         $division->save();

         return redirect('/division')->with('status', 'ajouté avec succès');
    }
    public function modDivision($id)
    {
        $divisions = Division::find($id);
        return view('pages.modDivision', compact('divisions'));
    }
    public function modDivision_traitement(Request $request)
    {
        
        $request->validate([
            'Imat' => 'required',
            'nom_div' => 'required',
         ]);
         $divisions = Division::find($request->id);
         $divisions->Imat = $request->Imat;
         $divisions->nom_div = $request->nom_div;
         $divisions->update();

         return redirect('/division')->with('status', 'modifié avec succès');
    }

    public function supDivision($id) 
    {
        $divisions = Division::find($id);
        $divisions->delete();

        return redirect('/division')->with('status', 'supprimé avec succès');
    }

    //AGENT
    public function agent()
    {
        $agents = Agent::with('division')->get();
        return view('pages.agent', ['agents' => $agents]);
    }

    public function ajoutAgent(){
        $divisions = Division::all();

        return view('pages.ajoutagent', ['divisions' => $divisions]);
     }
     public function ajoutAgent_traitement(Request $request)
     {
         $messages = [
             'required' => 'Le champ :attribute est obligatoire.',
             'numeric' => 'Le champ :attribute doit être un nombre.',
         ];
     
         $request->validate([
             'Im' => 'required',
             'nom' => 'required',
             'Imat' => 'required', 
             'cin' => 'required|numeric',
         ], $messages);
     
         // Récupérez 'nom_div' en fonction de 'Imat' depuis la table "divisions"
         $division = Division::where('Imat', $request->Imat)->first();
     
         // Créez un nouvel agent
         $agent = new Agent();
         $agent->Im = $request->Im;
         $agent->nom = $request->nom;
         $agent->Imat = $request->Imat;
         $agent->cin = $request->cin;
     
         // Si une division a été trouvée, attribuez 'nom_div' à l'agent
         if ($division) {
             $agent->nom_div = $division->nom_div;
         }
     
         // Enregistrez l'agent dans la base de données
         $agent->save();
     
         return redirect('/agent')->with('status', 'L\'agent a été ajouté avec succès.');
     }
     
     public function modAgent($id)
     {
         $agents = Agent::find($id);
         return view('pages.modAgent', compact('agents'));
     }
     public function modAgent_traitement(Request $request)
     {
         
         $request->validate([
             'Im' => 'required',
             'nom' => 'required',
             'cin' => 'required',
             'Imat' => 'required',
          ]);
          $agents = Agent::find($request->id);
          $agents->Im = $request->Im;
          $agents->nom = $request->nom;
          $agents->cin =$request->cin;
          $agents->Imat = $request->Imat;
          $agents->update();
 
          return redirect('/agent')->with('status', 'modifié avec succès');
     }
 
     public function supAgent($id) 
     {
         $agents = Agent::find($id);
         $agents->delete();
 
         return redirect('/agent')->with('status', 'supprimé avec succès');
     }

     //ENTRER
    public function entrer()
    {
        $entrers = Entrer::select(
            'entrers.id',
            'fournitures.Designation as Designation',
            'agents.nom as nom',
            'fournitures.id as num_entree',
            'agents.created_at as date_entree',
            'fournitures.Qte_initiale as qte_entree'
        )
        ->get();
        return view('/entrer', ['entrers => $entrers']);
    }
}
