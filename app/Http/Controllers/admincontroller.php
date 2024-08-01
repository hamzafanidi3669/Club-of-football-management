<?php

namespace App\Http\Controllers;
use App\Models\details_commande;
use App\Models\categorie;
use App\Models\produit;
use App\Models\ticket;
use App\Models\commande;
use App\Models\produitcouleur;
use App\Models\ProduitImage;
use App\Models\produitTaille;
use App\Models\Matche;
use App\Models\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use App\Models\Neww;
use App\Models\academynew;
use Illuminate\Foundation\Validation\ValidatesRequests;


use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    public function affichercommandes(){
        $details_commande=details_commande::with('produit','commande','ticket')->get();
        $commandes=commande::with('user','detailscommande')->get();
    foreach ($commandes as $commande) {
        $commande->details_commande = Details_Commande::where('commande_id', $commande->id)->get();
        foreach ($commande->details_commande as $detail) {
            $detail->produit = Produit::find($detail->produit_id);
            // b7ala kangulih ra $detail->produit rahya Produit::find...
        }

    }
        return view('admin/commandes')->with('details_commande',$details_commande)->with('commandes',$commandes); 
    }

    public function commandenonpayee(){
    $commandes = DB::select('CALL commandes_type(?)', ['nonpayee']);
    foreach ($commandes as $commande) {
        $commande->details_commande = Details_Commande::where('commande_id', $commande->id)->get();
        foreach ($commande->details_commande as $detail) {
            $detail->produit = Produit::find($detail->produit_id);
            // b7ala kangulih ra $detail->produit rahya Produit::find... bash nkhdem b produit tema
        }
    }

    
        return view('admin/commandestype')->with('commandes', $commandes);
        // }


    }


    public function commandepayee(){

    $commandes = DB::select('CALL commandes_type(?)', ['payee']);
    foreach ($commandes as $commande) {
        $commande->details_commande = Details_Commande::where('commande_id', $commande->id)->get();
        foreach ($commande->details_commande as $detail) {
            $detail->produit = Produit::find($detail->produit_id);
            $detail->ticket = Ticket::find($detail->ticket_id);
                if ($detail->ticket) {
                $detail->ticket->matche = Matche::find($detail->ticket->matche_id);
                }
        }
    }

    
        return view('admin/commandestype')->with('commandes', $commandes);
        // }


    }










    public function savenews(Request $request){
       

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string','max:65'],
            'content' => ['required', 'string', 'min:1','max:2000'],
            'image' => ['required'],
        ]
    );
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
        $imageFile = $request->file('image');
        // echo $imageFile;

        // // Générer un nom de fichier unique+ dik time ra katjib lk timestamp wderna _ bash tferre9 lina bin timestamp wsmiya dyal lfile lassliya
        $imageName = time() . '_' . $imageFile->getClientOriginalName();
        
        // // Stocker l'image dans le dossier spécifié
        $imagePath = $imageFile->storeAs('news', $imageName);
        $imageNameOnly = basename($imagePath); //bash nakhud aname dyalha

        // // Enregistrer le chemin de l'image dans la base de données
        $news = new Neww();
         // Autres attributs de la nouvelle d'équipe
        $news->image = $imageNameOnly;
        $news->titre = $request->title;
        $news->content = $request->content;
        $news->save();
        
        // return redirect('');

        return redirect()->back()->withErrors($validator);
        
        

    

    }
}



public function saveacademynews(Request $request){

    $validator = Validator::make($request->all(), [
        'title' => ['required', 'string','max:65'],
        'content' => ['required', 'string', 'min:1','max:8000'],
        'image' => ['required'],
    ]
);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    else{
    $imageFile = $request->file('image');
    // echo $imageFile;

    // // Générer un nom de fichier unique+ dik time ra katjib lk timestamp wderna _ bash tferre9 lina bin timestamp wsmiya dyal lfile lassliya
    $imageName = time() . '_' . $imageFile->getClientOriginalName();
    
    // // Stocker l'image dans le dossier spécifié
    $imagePath = $imageFile->storeAs('academynews', $imageName);
    $imageNameOnly = basename($imagePath); //bash nakhud aname dyalha

    // // Enregistrer le chemin de l'image dans la base de données
    $academynew = new academynew();
     // Autres attributs de la nouvelle d'équipe
    $academynew->image = $imageNameOnly;
    $academynew->titre = $request->title;
    $academynew->content = $request->content;
    $academynew->save();
    
    // return redirect('');

    return redirect()->back()->withErrors($validator);
    
    



}
}




    public function deletenews(Request $request){
        $id = $request->id;
        $new=Neww::find($id)->delete();
        return redirect('');

    }
    public function deleteacademynew(Request $request){
        $academynew=academynew::find($request->id);
        $academynew->delete();
        return redirect()->back();
    }
 
    public function addproduct(){
        $categorie= Categorie::get();
        return view('admin.addproducts',['categorie'=>$categorie]);
    }













    
    public function saveproduct(Request $request)
{

    $validator = Validator::make($request->all(), [
        'designation_produit' => ['required', 'string','max:65'],
        'prix_produit' => ['required', 'numeric', 'min:1','max:500'],
        'categorie' => ['required'],
        'description_produit' => ['required','min:1','max:2005'],
      
        'tailles' => ['required'],
        'couleurs' => ['required'],

    ]
);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    else{
        $produit = new Produit();
        $produit->designation_produit = $request->input('designation_produit');
        $produit->description_produit = $request->input('description_produit');
        $produit->prix_produit = $request->input('prix_produit');
        $produit->categorie_id= $request->input('categorie');
        $produit->save();


        
        // Enregistrez les couleurs du produit dans la table "produit_couleurs"
        $couleurs = $request->input('couleurs');
        foreach ($couleurs as $couleur) {
        $produitCouleur = new ProduitCouleur();
        $produitCouleur->produit_id = $produit->id;
        $produitCouleur->couleur = $couleur;
        $produitCouleur->save();
    }


    $images = $request->file('images');
    $couleursimages = $request->input('couleurs');
    if (!is_array($couleursimages)) {
        $couleursimages = [$couleursimages];
    }
   


    


    foreach ($couleursimages as $index => $couleurImage) {
        if (isset($images[$index])) {
            // image dyal dak lcouleur dnc khdemt b lindex
            $image = $images[$index];
    
            $imageName = time() . '_' . $image->getClientOriginalName();
            // // Stocker l'image dans le dossier spécifié
            $imagePath = $image->storeAs('produit', $imageName);
            // $image->move(public_path('produit'), $imageName);
    
            $produitImage = new ProduitImage();
            $produitImage->url = $imageName;
            $produitImage->couleur = $couleurImage;
            $produitImage->produit_id = $produit->id;
    
            $produitImage->save();
        }
    }

















    // Enregistrez les tailles du produit dans la table "produit_tailles"
    $tailles = $request->input('tailles');
    foreach ($tailles as $taille) {
        $produitTaille = new ProduitTaille();
        $produitTaille->produit_id = $produit->id;
        $produitTaille->taille = $taille;
        $produitTaille->save();
    }

    return redirect()->back()->with('success', 'Images enregistrées avec succès.');
}
}




public function addmatche(){
    return view('admin/addmatche');
}
public function savematche(Request $request){
    $validator = Validator::make($request->all(), [
        'nom_equipe_domicile' => ['required', 'string','max:65'],
        'image_equipe_domicile' => ['required'],
        'nom_equipe_exterieur' => ['required', 'string','max:65'],
        'image_equipe_exterieur' => ['required'],
        'nom_championnat' => ['required', 'string','max:65'],
        'image_championnat' => ['required'],
        // 'ville' => ['required', 'string','max:65'],
        'lieu' => ['required', 'string','max:65'],
        'heure_matche' => ['required', 'string','max:65'],
        'prix_ticket' => ['required','integer'],
        'date_matche' => ['required'],

    ]
);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    else{

    




    $matche = new Matche();
    $matche->nom_equipe_domicile=$request->nom_equipe_domicile ;
    $matche->nom_equipe_exterieur=$request->nom_equipe_exterieur ;
    $matche->date_matche=$request->date_matche ;
    $matche->heure_matche=$request->heure_matche ;
    $matche->lieu=$request->lieu ;
    // $matche->resultat=$request->resultat ;
    $matche->nom_championnat=$request->nom_championnat ;
    $matche->ville=$request->ville ;
    $matche->prix_ticket=$request->prix_ticket ;
    
    

    $image_equipe_domicile=$request->file('image_equipe_domicile') ;
    $image_equipe_exterieur=$request->file('image_equipe_exterieur') ;
    $image_championnat=$request->file('image_championnat') ;


    $image_equipe_domicile_name = time() . '_' . $image_equipe_domicile->getClientOriginalName();
    $image_equipe_exterieur_name = time() . '_' . $image_equipe_exterieur->getClientOriginalName();
    $image_championnat_name = time() . '_' . $image_championnat->getClientOriginalName();



    $matche->image_equipe_domicile=$image_equipe_domicile_name ;
    $matche->image_equipe_exterieur=$image_equipe_exterieur_name ;
    $matche->image_championnat=$image_championnat_name ;
    $matche->save();


    $imagePath1 = $image_equipe_domicile->storeAs('equipes', $image_equipe_domicile_name);
    $imagePath2 = $image_equipe_exterieur->storeAs('equipes', $image_equipe_exterieur_name);
    $imagePath3 = $image_championnat->storeAs('equipes', $image_championnat_name);


}
}


public function deletematcheticket(Request $request){
    $matche=matche::find($request->id);
    $matche->delete();
    return redirect()->back();
}

public function deleteproduit(Request $request){
$produitcouleur=Produitcouleur::where('produit_id','=',$request->id);
$produitcouleur->delete() ;


$produitTaille=produitTaille::where('produit_id','=',$request->id);
$produitTaille->delete() ;


$produitimage=ProduitImage::where('produit_id','=',$request->id);
$produitimage->delete() ;


$produit=Produit::where('id','=',$request->id);
$produit->delete() ;
return redirect()->back();


}
public function afficherusers(){
    $users=User::with('commande')->get();
    return view('admin/allusers',['users'=>$users]);

}

public function refuserticket(Request $r){

    // $detailcommande=details_commande::where('commande_id','=',$r->id);
    // $commande=commande::where('id','=',$r->id);


    $detailcommande=details_commande::where('id','=',$r->id);
    $commande=commande::where('id','=',$r->commande_id);
    $ticket=ticket::where('id','=',$r->ticket_id);

    $detailcommande->delete();
    $commande->delete();
    $ticket->delete();
    // echo 'detailid:'. $r->id;
    // echo 'ticket id:'. $r->ticket_id;
    // echo 'commande id:'. $r->commande_id;
    return redirect()->back();
}
public function acceptercommande(Request $r){
       $commande_id=$r->id;
       $commande_type= $r->commande_type;

       if($commande_type=='nonpayee'){
        $commande=commande::find($commande_id);
        $commande->type_commande='payee';
        $commande->save();
        return redirect()->back();
  


       }
       else{
        echo 'commande deja confirmee';
       }




}
public function refusercommande(Request $r){
    $detailcommande=details_commande::where('id','=',$r->id);
    $commande=commande::where('id','=',$r->commande_id);

    $detailcommande->delete();
    $commande->delete();

    return redirect()->back();

}
public function deleteuser(Request $r){
    $user=user::find($r->id);
    $user->delete();
    return redirect()->back();

}













}

