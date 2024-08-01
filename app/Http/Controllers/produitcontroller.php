<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Produitcouleur;
use App\Models\details_commande;
use App\Models\Panier;
use App\Models\Ticket;
use App\Models\Matche;
use App\Models\panier_produit;
use App\Models\Commande;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use PDF;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class produitcontroller extends Controller
{
    
    


    
    // afficher un produit specifique
    public function affproduit(Request $r){

    $produits = Produit::with('produitcouleur', 'produittaille','categorie','produitimage')
      ->find($r->id);
    //   3la 9bel l affichage dyal ga3 les produits lte7t
      $allproduits = Produit::with('categorie', 'produitimage')->get();

      
    return view('produit', compact('produits','allproduits'));
}

public function index()
    {
        $produits = Produit::with('categorie', 'produitimage')->get();

        return view('store', compact('produits'));
    }


public function ajouterAuPanier(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'quantite' => ['required', 'integer'],
            'taille' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::check()) {
            $produitId = $request->input('produit_id');
            $userId = Auth::user()->id;
            $quantite = $request->input('quantite');
            $produitCouleurNom = $request->input('couleur');
            $produitTailleId = $request->input('taille');
            $produitImageId = $request->input('image-input');
            $prixUnitaire = $request->input('prixunitaire');

            $panier = Panier::where('user_id', $userId)->first(); // Récupérer le panier de l'utilisateur

            if (!$panier) {
                //ila mal9ash lpanier aycreeyiha
                $panier = new Panier();
                $panier->user_id = $userId;
                $panier->save();
            }

            // Vérifier si le produit existe déjà dans le panier
            // $panierProduit = $panier->produits()->where('produit_id', $produitId)->first();
            // kanverifier lcouleur,7tash momkin ykun dak produit deja kayn mais ana bghito bcouleur different +khsni nzid ta verif 3la taille 7tash mumkin nkhtar nefs lproduit wnefss lproduitcouleur mais ana bghitu f une autre taille
            $panierProduit = $panier->produits()->where('produit_id', $produitId)->where('produit_couleur_nom', $produitCouleurNom)->first();


            if ($panierProduit) {
                // Le produit existe déjà dans le panier, mettre à jour la quantité et le prix total
                // mumkin nacceder la table associatif bpivot 7tash quantite kina tema
                $panierProduit->pivot->quantite += $quantite;
                $panierProduit->pivot->prixtotal += $prixUnitaire * $quantite;
                $panierProduit->pivot->save();
            } else {
                // Ajouter le produit au panier avec la quantité et le prix total
                $panier->produits()->attach($produitId, [
                    'quantite' => $quantite,
                    'prixtotal' => $prixUnitaire * $quantite,
                    'produit_couleur_nom' => $produitCouleurNom,
                    'produit_taille_id' => $produitTailleId,
                    'produit_image_id' => $produitImageId,
                ]);
            }

            return redirect('affpanier')->with('success', 'Le produit a été ajouté au panier avec succès.');
        }

        return redirect('store')->with('error', 'Vous devez être connecté pour ajouter des produits au panier.');
    }




    public function affpanier(){
    if (Auth::check()) {

        $userId = Auth::user()->id;
        $paniers = Panier::with('userpanier', 'produitTaille', 'produitCouleur')
        ->where('user_id', '=', $userId)
        ->get();
    
    $paniersproduits = [];
    
    foreach ($paniers as $panier) {
        $paniersproduits[] = panier_produit::with('panier', 'produit', 'produitImage', 'produitTaille')
            ->where('panier_id', '=', $panier->id)
            ->get();
    }
        $commandes=commande::with('user')->where('user_id','=',$userId)->where('type_commande','=','nonpayee')->get() ;
        return view('affpanier',compact('paniers','commandes','paniersproduits'));
    }else{
        return view('auth/login');
    }
    }

    public function deletecommandeuser(Request $request){
        $detailCommande=details_commande::where('commande_id','=',$request->id);
        $commande=commande::find($request->id);

        $detailCommande->delete();
        $commande->delete();

        return redirect('commandesclient');

    }






        public function commandesclient(){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $commandes=commande::with('user','detailscommande')->where('user_id','=',$userId)->get();
        foreach ($commandes as $commande) {
            $details_commande=details_commande::with('produit','commande','ticket')->where('commande_id','=',$commande->id)->get();
            $commande->details_commande = Details_Commande::where('commande_id', $commande->id)->get();
        
          
    
        }
            return view('commandesclient')->with('details_commande',$details_commande)->with('commandes',$commandes);
        } 
    } 
        








public function envoyerpaiment(Request $request)
{

    $validator = Validator::make($request->all(), [
        'produits' => ['required', 'array'],
        // 'products' => ['required_without_all:product_1,product_2,product_3', 'array'],
        // 'products.*' => ['filled'], // Chaque produit doit être rempli (coché)
    ]);
    
    if ($validator->fails()) {   
         return redirect()->back()->withErrors($validator)->withInput();
    }else{

    



$userId = Auth::user()->id;


    $produitsSelectionnes = $request->input('produits');
    $paniers = [];

     // Créer une nouvelle commande
     $commande = new Commande();
     $commande->user_id = $userId;
     $commande->save();

     foreach ($produitsSelectionnes as $produitId) {
        $panier = panier_produit::find($produitId);
    
        if ($panier) {
            $detailsCommande = new details_commande();
            $detailsCommande->commande_id = $commande->id;
            $detailsCommande->produit_id = $panier->produit_id;
            $detailsCommande->quantite_commande = $panier->quantite;
            $detailsCommande->save();
    
            $panier->delete();
        }
    }

    return redirect('store');   

}

}
















public function supprimerpanier(Request $r){
    // echo $r->id;
    if(Auth::check()){
$userId = Auth::user()->id;

    
    $panier=panier_produit::find($r->id);
    $panier->delete();
    
    return redirect('affpanier');
}
}






public function affichertickets(){
    $tickets=Ticket::with('user','matche')->get();
    $matches=Matche::with('ticket')->where('nom_equipe_domicile','=','raja casablanca')->get();
    // affichiit gher les matches lli raja feh equipe domicile 7tash ankono 7na lli kanbi3o tickets
    return view('tickets',compact('tickets','matches'));

}

public function afficherfixtures(){
    $matches=Matche::with('ticket')->get();
    return view('fixtures',compact('matches'));

}





public function acheterticket(Request $request){
if(Auth::check()){
    $matcheId = $request->input('matcheid');
    $validator = Validator::make($request->all(), [
        // 'quantite_commande'.$matcheId => ['required', 'numeric', 'min:1','max:5'],
        'quantite_ticket_'.$matcheId => ['required', 'numeric', 'min:1', 'max:5'],
    ], [
        'quantite_ticket_'.$matcheId.'.required' => 'Veuillez choisir la quantité.',
        'quantite_ticket_'.$matcheId.'.numeric' => 'Veuillez choisir la quantité.',
    ]
);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    else{
        
    $number=mt_rand(1000000,9999999);
    // 7tash ki3te des nombres random dnc y9dr ykono 2 les memes 
    if($this->productCodeExists($number)){
    $number=mt_rand(1000000,9999999);

    }
        $userId = Auth::user()->id;
        $ticket=new Ticket;
        $ticket->prix_ticket=$request->prix_ticket ;
        $ticket->code_ticket=$number ;
        $ticket->quantite_ticket=$request->quantite_ticket_.$matcheId ;
        $ticket->user_id=$userId;
        $ticket->matche_id=$request->matcheid;
        $ticket->save();

    



    $commande=new Commande;
    $commande->ticket='oui';
    $commande->user_id=$userId;
    $commande->save();




    $detailCommande=new details_commande;
    $detailCommande->commande_id=$commande->id;
    $detailCommande->quantite_commande=$request->quantite_ticket_.$matcheId;
    $detailCommande->ticket_id=$ticket->id;
    $detailCommande->save();

    return redirect()->back()->with('success', 'Votre ticket a été acheté avec succès');

    }


  







}else{
    return view('auth/login');
}
    
}


public function productCodeExists($number){
    return ticket::wherecode_ticket($number)->exists();
}





public function mestickets(){
    if(Auth::check()){
        $userId = Auth::user()->id;
        $tickets=Ticket::with('user','matche')->where('user_id',$userId)->get();
        $commandes=commande::where('user_id',$userId)->where('type_commande','=','payee')->get();
        $details = collect(); // Créer une collection vide pour stocker les détails de commande
        foreach($commandes as $commande){
            $detailsCommande=details_commande::where('commande_id',$commande->id)->with('ticket','produit','commande')->get();
            $details->push($detailsCommande);
        }
        return view('mestickets',compact('tickets','commandes','details'));
    }
}



public function telechargerpdf(Request $r){



     $user=Auth::user();
    $ticket = Ticket::with('user', 'matche')->where('id', $r->id)->first();
    $data = [
        // si la quantité kant 2 ra ghaytelecharga gher fichier pdf wahd whuwa mktuba feh 2dles personnes dnc a
        'prix_total' => $ticket->prix_total,
        'quantite_ticket' => $ticket->quantite_ticket,
        'date_achat_ticket' => $ticket->date_achat_ticket,
        'nom_equipe_domicile' => $ticket->matche->nom_equipe_domicile,
        'nom_equipe_exterieur' => $ticket->matche->nom_equipe_exterieur,
        'date_matche' => $ticket->matche->date_matche,
        'heure_matche' => $ticket->matche->heure_matche,
        'lieu_matche' => $ticket->matche->lieu_matche,
        'firstname' => $ticket->user->firstname,
        'lastname' => $ticket->user->lastname,
        'code_ticket' =>"$ticket->code_ticket", 
        //darori  derhom entre les cotes bash y3tabro ka varchar ila madrthumsh aytl3 erreur 

        // Ajoutez d'autres clés et valeurs si nécessaire
    ];

    view()->share('data',$data);
    $pdf = PDF::loadView('pdf',$data);
    return $pdf->download("$ticket->code_ticket" . '_' . $user->lastname . $user->firstname . '.pdf');
   

}





}



