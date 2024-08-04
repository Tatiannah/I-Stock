<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Fourniture;
use App\Models\Agent;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function fourniture(){
        $fournitures =Fourniture::all();
        return view('pages.fourniture', compact('fournitures'));
   }

   public function ajoutFourniture(){
    return view('pages.ajoutFourniture');
   }
   public function ajoutFourniture_traitement(Request $request)
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

      return redirect('/fourniture')->with('status', 'avec succès');
   }

   public function modFourniture($id){
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
        return redirect('/fourniture')->with('status', 'avec succès');
   }

   public function supFourniture($id)
   {
    $fournitures = Fourniture::find($id);
    $fournitures->delete();
        return redirect('/fourniture')->with('status', 'avec succès');
   }


    /*division*/
    public function division()
    {
        $divisions = Division::all();
        return view('pages.division', compact('divisions'));
    }

    public function ajoutDivision()
    {
        return view('pages.ajoutDivision');
    }
    public function ajoutDivision_traitement(Request $request)
    {
        $request->validate([
            'Imat' => 'required',
            'nom_div' => 'required',

        ]);

        $division = new Division();
        $division->Imat = $request->Imat;
        $division->nom_div = $request->nom_div;
        $division->save();

        return redirect('/division')->with('status', 'avec succès');
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
        return redirect('/division')->with('status', 'avec succès');
    }

    public function supDivision($id)
    {
        $divisions = Division::find($id);
        $divisions->delete();
        return redirect('/division')->with('status', 'avec succès');
    }

    /*agent*/
    public function agent()
    {
        $agents = Agent::with('division')->get();
            return view('pages.agent', compact('agents'));

    }
    public function ajoutAgent()
    {
        return view('pages.ajoutAgent');
    }

    public function ajoutAgent_traitement(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'Im' => 'required|max:6',
            'nom' => 'required|max:50',
            'cin' => 'required|max:12',
            'Imat' => 'required|max:6',
        ]);

        // Recherchez la division correspondante en fonction de 'Imat'
        $division = Division::where('Imat', $validatedData['Imat'])->first();

        if ($division) {
            // La division a été trouvée, créez un nouvel agent
            $agent = new Agent;
            $agent->Im = $validatedData['Im'];
            $agent->nom = $validatedData['nom'];
            $agent->cin = $validatedData['cin'];
            $agent->Imat = $validatedData['Imat'];

            // Associez le nom_div de la division
            $agent->nom_div = $division->nom_div;

            // Enregistrez l'agent
            $agent->save();

            // Redirigez vers la liste des agents
            return redirect('/agent')->with('status', 'avec succès');
        } else {
            // La division correspondante n'a pas été trouvée, affichez un message d'erreur
            return back()->with('error', 'La division correspondante n\'a pas été trouvée.');
        }
    }

    public function modAgent($id)
    {

        $agents = Agent::find($id);

        return view('pages.modAgent', compact('agents'));


    }

    public function modAgent_traitement(Request $request)
    {
        $messages = [
            'required' => 'Le champ :attribute est obligatoire.',
            'numeric' => 'Le champ :attribute doit être un nombre.',
        ];

        $request->validate([
            'Im' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'cin' => 'required|numeric',
            'Imat' => 'required',
        ], $messages);
        $division = Division::where('Imat', $request['Imat'])->first();

        if ($division) {
            // La division a été trouvée, créez un nouvel agent
            $agents = new Agent;
            $agents->Im = $request['Im'];
            $agents->nom = $request['nom'];
            $agents->cin = $request['cin'];
            $agents->Imat = $request['Imat'];

            // Associez le nom_div de la division
            $agents->nom_div = $division->nom_div;

            // Enregistrez l'agent
            $agents->save();

            // Redirigez vers la liste des agents
            return redirect('/agent')->with('status', 'avec succès');
        } else {
            // La division correspondante n'a pas été trouvée, affichez un message d'erreur
            return back()->with('error', 'La division correspondante n\'a pas été trouvée.');
        }


    }

    public function supAgent($id)
    {
        $agents = Agent::find($id);
        $agents->delete();

        return redirect('/agent')->with('status', 'cela ont été bien supprimé avec succès.');
    }
    }


