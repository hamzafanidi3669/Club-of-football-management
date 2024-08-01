<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use SimpleXMLElement;

class Xmlcontroller extends Controller
{
    public function exportXML()
    {
        // Récupérer les données de la base de données
        $data = DB::table('produits')->get();

        // Créer un objet SimpleXMLElement pour construire le XML
        $xml = new \SimpleXMLElement('<root></root>');

        // Parcourir les données et ajouter des éléments XML
        foreach ($data as $item) {
            $xmlItem = $xml->addChild('item');
            $xmlItem->addChild('id', $item->id);
            $xmlItem->addChild('designation_produit', $item->designation_produit);
            $xmlItem->addChild('description_produit', $item->description_produit);
            $xmlItem->addChild('prix_produit', $item->prix_produit);
            $xmlItem->addChild('categorie_id', $item->categorie_id);
            // Ajoutez d'autres éléments en fonction de votre structure XML
        }

        // Définir les en-têtes de la réponse
        $headers = [
            'Content-type' => 'text/xml',
            'Content-Disposition' => 'attachment; filename="export.xml"',
        ];

        // Générer le contenu XML
        $content = $xml->asXML();

        // Renvoyer la réponse
        return Response::make($content, 200, $headers);
        // le code de statut 200= (OK) 
    }








    public function import(Request $request)
    {
        // Vérifier si un fichier a été téléchargé
        if ($request->hasFile('xml_file')) {
            $file = $request->file('xml_file');
            

            // Vérifier l'extension du fichier
            if ($file->getClientOriginalExtension() === 'xml') {
                $xmlContent = file_get_contents($file->getRealPath());
                // file_get_contents() kat9ra content d un file wkatreturnih 3la shkel texte 
                // getrealpath kat3tek chemin d acces reel sur systeme dyal fichiers

                // Créer une instance de SimpleXMLElement
                $xml = new SimpleXMLElement($xmlContent);

                // Parcourir les éléments XML et effectuer les opérations nécessaires
                foreach ($xml->item as $product) {
                    // Extraire les données du produit
                    $designation = $product->designation_produit;
                    $description = $product->description_produit;
                    $prix = $product->prix_produit;
                    $categorie_id = $product->categorie_id;
                    // ...

                    // Enregistrer les données dans la base de données ou effectuer d'autres opérations
                    $produits=new produit;
                    $produits->designation_produit=$designation;
                    $produits->description_produit=$description;
                    $produits->prix_produit=$prix;
                    $produits->categorie_id=$categorie_id;

                    $produits->save();
                }

                // Redirection vers une page de confirmation ou affichage d'un message de réussite
                return redirect()->back()->with('success', 'Importation des données XML réussie.');
            }
        }

        // Redirection avec un message d'erreur en cas d'échec de l'importation
        // return redirect()->back()->with('error', 'Erreur lors de l\'importation du fichier XML.');
    }
}
