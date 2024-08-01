<?php

namespace App\Http\Controllers;
use App\Models\Neww;
use App\Models\matche;
use App\Models\academynew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class testcontroller extends Controller
{
   //affichage d une nouveauté spécifique:
    public function affichernews(Request $r){
        $affnews=DB::select("SELECT * from newws where id='$r->id'");
        return view('news',['news'=>$affnews]);
    }
    // affichage de toute les nouv
    public function affichernewskamlin(){
        $affnewskamlin = Neww::latest('created_at')->paginate(9);//dik latest kattrier lik news automatiquement .
        return view('allnews',['allnews'=>$affnewskamlin]);
    }
    // aff la page de welcome
    public function index(){
        $news = Neww::latest('created_at')->paginate(6);
        $academynews = academynew::latest('created_at')->paginate(3);
        $fixtures= matche::latest('published_At')->paginate(3);
        return view('welcome', compact('news','academynews','fixtures')); //dik compact ra b7al dik with mhm hya katcreeyi lik un tableau lclé fiha huwa news avec une seule valeur et un seul clé mhm hya b7al dik with 


    }
    // afficher all academynews
    public function allacademynews(){
        $academynews = academynew::latest('published_at')->paginate(9);
        return view('academy.academynews',['academynews'=>$academynews]);

    }
    public function addacademynews(){
        return view('admin.addacademynews');
    }
    // aff d un academy new specifique
    public function academynew(Request $request){
        $academynew = academynew::where('id','=',$request->id)->get();
        return view('academy.academynew',['academynew'=>$academynew]);
    }


    
}

