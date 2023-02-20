<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\Candidat;
use App\Models\Type;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $formation = Formation::withCount('candidat')->get();
        $referentiel = Referentiel::withCount('formation')->get();
        $candidat_total = Candidat::count();
        $candidat_masculins = Candidat::where('sexe', 'Homme')->count();
        $candidat_feminins = Candidat::where('sexe', 'Femme')->count();
        $formations_type  = Type::with('referentiel.formation')->whereIn('libelle', ['initiation','metier'])->get();
        $ages = DB::table('candidat')->select('age', DB::raw('count(*) as total'))
        ->groupBy('age')->orderBy('age')->get();

        $formation_tranche = DB::table('formation')->select('isStarted', DB::raw('count(*) as total'))
        ->groupBy('isStarted')->orderBy('isStarted')->get();
        
       
        return view ('dashboard.dashboard',['formation'=>$formation, 'referentiel'=>$referentiel, 'candidat_total'=>$candidat_total,
        'candidat_masculins'=>$candidat_masculins, 'candidat_feminins'=>$candidat_feminins, 'formations_type'=>$formations_type,'ages'=>$ages,'formation_tranche'=>$formation_tranche]);

        

}
}
    
