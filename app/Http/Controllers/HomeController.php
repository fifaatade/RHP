<?php

namespace App\Http\Controllers;
use App\Models\Candidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller

{
    public function index(){
        return view('RevealHerPotential.index');
    }

    
    public function candidate(){
        return view('RevealHerPotential.form');
    }

    public $currentForm = 1;

    public function store(Request $request)


    {
    // Validation des données (optionnel)

    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'universite' => 'required|string|max:255',
        'filiere' => 'required|string|max:255', 
        'raison' => 'required|string|max:255', 
        'numero' => 'required|numeric|digits_between:8,15', 
        'address' => 'required|string|max:255', 
        'passeTemps' => 'required|string|max:255', 
        'organisation_member' => 'required|boolean',
        'organisationName' => 'required_if:organisation_member,1', 
        'probleme' => 'required|string|max:255', 
        'projet' => 'required|string',
        'profession'=> 'required|in:professionnelle,etudiante',
        'secteur' => 'required|in:tic,finance,sante,energie,autreSecteur', 
        'attente' => 'required|string|max:255', 
        'heard_about_project' => 'required|in:seanceInfo,reseauxSocial,ami,autre', 
        'nameOther' => 'required_if:heard_about_project,autre', 
        'argent'  => 'required|string',
        'nameProject' => 'required|string|max:255',
        'binome' => 'required|boolean',
        'binomeName' => 'required_if:binome,1', 
        'nameSecteur'=>'required_if:secteur,autreSecteur',
    ]);
    

    // Création d'un nouveau candidat
    $candidate = new Candidates();
    $candidate->nom = $request->nom;
    $candidate->prenom = $request->prenom;
    $candidate->universite = $request->universite;
    $candidate->filiere = $request->filiere;
    $candidate->raison = $request ->raison;
    $candidate-> numero = $request ->numero;
    $candidate-> address = $request ->address;
    $candidate-> passeTemps = $request ->passeTemps;
    $candidate-> profession = $request ->profession;
    $candidate-> probleme = $request ->probleme;
    $candidate-> projet = $request ->projet;
    $candidate-> argent = $request ->argent;
    $candidate-> nameProject = $request ->nameProject;
    $candidate-> nameSecteur = $request ->nameSecteur;
    $candidate-> secteur = $request ->secteur;
    $candidate-> attente = $request ->attente;
    $candidate-> heard_about_project = $request ->heard_about_project;
    $candidate->nameOther = $request->input('nameOther');
    $organisationMember = $request->input('organisation_member');
    $binome = $request->input('binome');

    if ($organisationMember == '1'){
        $candidate->organisation_member = true &&
        $candidate->organisationName = $request ->organisationName;

    } else {
        $candidate->organisation_member = false &&
        $candidate-> organisationName = null;
    }
    if ($binome == '1') {
        $candidate->binome = true &&
        $candidate->binomeName = $request ->binomeName;

    } else {
        $candidate->binome = false &&
        $candidate-> binomeName = null;
    }
    if ($request->input('heard_about_project') !== 'autre') {
        $candidate->nameOther = null;
    }
    if ($request->input('secteur') !== 'autreSecteur') {
        $candidate->nameSecteur = null;
    }


    $candidate->save();

    session()->flash('errors', null); // Clear any previous errors
    if ($candidate->wasRecentlyCreated) {
        session()->flash('success', 'Votre candidature a été soumise avec succès !');
    } else {
        session()->flash('errors', 'Une erreur est survenue lors de la soumission de votre candidature.');
    }

    // Redirection vers une page de confirmation ou d'accueil
    return view('RevealHerPotential.thanks', compact('candidate'));
    }


    public function indexForm()
    {
        $user=Auth::user();
        $nom = $user?$user->nom:"";
        $prenom = $user?$user->prenom:"";
        // Récupérer toutes les informations des candidats
        $candidates = Candidates::all();
    
        // Transmettre les données à la vue
        return view('RevealHerPotential.tableau', compact('candidates', 'nom','prenom'));
    }
    
}