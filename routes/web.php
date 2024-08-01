<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sayhicontroller ;
use App\Http\Controllers\testcontroller ;
use App\Http\Controllers\admincontroller ;
use App\Http\Controllers\produitcontroller ;
use App\Http\Controllers\xmlcontroller ;
use App\Http\Controllers\GoogleAuthController ;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('send',[sayhicontroller::class,'send']);
Route::get('regles', function () {
    return view('reglesconfidentialités');
});

Route::post('regles', function () {
    return view('reglesconfidentialités');
});




Route::get('allacademynews', [testcontroller::class,'allacademynews']);
Route::post('allacademynews', [testcontroller::class,'allacademynews']);

Route::get('allnews', [testcontroller::class,'affichernewskamlin']);
Route::post('allnews', [testcontroller::class,'affichernewskamlin']);

Route::get('tickets', [produitcontroller::class,'affichertickets']);
Route::post('tickets', [produitcontroller::class,'affichertickets']);

Route::get('fixtures', [produitcontroller::class,'afficherfixtures']);
Route::post('fixtures', [produitcontroller::class,'afficherfixtures']);

Route::post('acheterticket', [produitcontroller::class,'acheterticket']);
Route::post('acheterticket', [produitcontroller::class,'acheterticket']);

Route::get('mestickets', [produitcontroller::class,'mestickets']);
Route::post('mestickets', [produitcontroller::class,'mestickets']);

Route::post('telechargerpdf', [produitcontroller::class,'telechargerpdf']);




// Routes pour l'authentification avec Google


Route::get('login/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('login/google/callback', function () {
    $user = Socialite::driver('google')->user();
})->name('login.google.callback');

Route::get('login/google/callback', function () {
    $user = Socialite::driver('google')->user();

    // Vérifiez si l'utilisateur existe dans votre base de données
    $existingUser = User::where('email', $user->email)->first();

    if ($existingUser) {
        // Authentifiez l'utilisateur existant
        Auth::login($existingUser);
    } else {
        return redirect()->intended('/register');
    }

    // Redirigez l'utilisateur après la connexion
    return redirect()->intended('/');
})->name('login.google.callback');










Route::get('/',[testcontroller::class,'index']);
Route::post('/news',[testcontroller::class,'affichernews']);
Route::get('/news',[testcontroller::class,'affichernews']);
Route::post('/allnews',[testcontroller::class,'affichernewskamlin']);
Route::get('/allnews',[testcontroller::class,'affichernewskamlin']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/admin', [AdminController::class, 'index'])->middleware('AdminMiddleware');



Route::middleware('admin')->group(function () {

    Route::get('/admin',function(){
            return view('admin');

        });
    Route::post('commandes', [admincontroller::class, 'affichercommandes']);
    Route::get('commandes', [admincontroller::class, 'affichercommandes']);

    Route::get('addnews',function(){
        return view('admin/addnews');
    });

    Route::get('addproducts', [admincontroller::class, 'addproduct']);
    Route::post('addproducts', [admincontroller::class, 'addproduct']);
    Route::post('saveproduct', [admincontroller::class, 'saveproduct']);
    Route::get('savenews', [admincontroller::class, 'savenews']);
    Route::post('savenews', [admincontroller::class, 'savenews']);
    Route::post('deletenews', [admincontroller::class, 'deletenews']);

    Route::post('addmatche', [admincontroller::class, 'addmatche']);
    Route::get('addmatche', [admincontroller::class, 'addmatche']);


    Route::post('savematche', [admincontroller::class, 'savematche']);
    Route::get('savematche', [admincontroller::class, 'savematche']);

    Route::get('deletematcheticket', [admincontroller::class, 'deletematcheticket']);
    Route::post('deletematcheticket', [admincontroller::class, 'deletematcheticket']);

    Route::post('deleteproduit', [admincontroller::class, 'deleteproduit']);

    Route::post('allusers', [admincontroller::class, 'afficherusers']);
    Route::get('allusers', [admincontroller::class, 'afficherusers']);

    
    Route::get('refuserticket', [admincontroller::class, 'refuserticket']);
    Route::post('refuserticket', [admincontroller::class, 'refuserticket']);

    Route::get('refusercommande', [admincontroller::class, 'refusercommande']);
    Route::post('refusercommande', [admincontroller::class, 'refusercommande']);


    Route::get('acceptercommande', [admincontroller::class, 'acceptercommande']);
    Route::post('acceptercommande', [admincontroller::class, 'acceptercommande']);

    Route::get('deleteuser', [admincontroller::class, 'deleteuser']);
    Route::post('deleteuser', [admincontroller::class, 'deleteuser']);

    Route::get('commandenonpayee', [admincontroller::class, 'commandenonpayee']);
    Route::post('commandenonpayee', [admincontroller::class, 'commandenonpayee']);
    Route::get('commandepayee', [admincontroller::class, 'commandepayee']);
    Route::post('commandepayee', [admincontroller::class, 'commandepayee']);

    Route::get('addacademynews', [testcontroller::class,'addacademynews']);

    Route::get('saveacademynews', [admincontroller::class,'saveacademynews']);
    Route::post('saveacademynews', [admincontroller::class,'saveacademynews']);



    
    Route::get('deleteacademynew', [admincontroller::class,'deleteacademynew']);
    Route::post('deleteacademynew', [admincontroller::class,'deleteacademynew']);




    Route::get('exportationdonnéesxml', [xmlcontroller::class,'exportXML']);
    Route::post('exportationdonnéesxml', [xmlcontroller::class,'exportXML']);

    Route::get('importxml', [xmlcontroller::class,'import']);
    Route::post('importxml', [xmlcontroller::class,'import']);
    Route::get('import',function(){
        return view('importxml');
    });


    

});


Route::get('/contact',function(){
    return view('contact');
});
Route::get('/store',[produitcontroller::class,'index']);
Route::get('/produit',[produitcontroller::class,'affproduit']);
Route::post('/produit',[produitcontroller::class,'affproduit']);
// Route::post('/produit',[produitcontroller::class,'indexproduit']);
Route::post('/ajouter-au-panier',[produitcontroller::class,'ajouterAuPanier']);
Route::get('/ajouter-au-panier',[produitcontroller::class,'ajouterAuPanier']);
Route::get('/affpanier',[produitcontroller::class,'affpanier'])->name('affpanier');
// Route::post('/modifierQuantite/{produitid}',[produitcontroller::class,'modifierQuantite'])->name('modifierQuantite');
Route::post('/modifierQuantite/{produitid}/{index}', [ProduitController::class, 'modifierQuantite'])->name('modifierQuantite');
Route::post('envoyerpaiment', [ProduitController::class, 'envoyerpaiment'])->name('modifierQuantite');
Route::post('supprimerpanier', [ProduitController::class, 'supprimerpanier'])->name('supprimerpanier');
Route::get('supprimerpanier', [ProduitController::class, 'supprimerpanier'])->name('supprimerpanier');


Route::get('commandesclient', [ProduitController::class, 'commandesclient']);
Route::get('commandesclient', [ProduitController::class, 'commandesclient']);

Route::get('deletecommandeuser', [ProduitController::class, 'deletecommandeuser']);
Route::post('deletecommandeuser', [ProduitController::class, 'deletecommandeuser']);



Route::get('academynew', [testcontroller::class,'academynew']);
Route::post('academynew', [testcontroller::class,'academynew']);





require __DIR__.'/auth.php';
