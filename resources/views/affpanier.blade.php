<x-navbarpanier/>
@include('layouts.app2')
<br> <br> <br> <br> <br>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<style>
    .testbtnpanier{
        /* margin-right: 70px; */
        position: relative;
        right: 37px
        
    }
    .accountpanier{
        font-size:16px ;
        background: #d11515;
    }
    .shoppinglinkdashboard{
       
    }
    .shoppinglinkdashboard:hover{
        color: #13892D
    }
    .panierselectionnezetproduit{
        display: grid;
        justify-content: center;
        /* margin: 40px; */
    }
    .paimentpanier{
        display: grid;
        justify-content: center;

    }
    .bodypanier{
        width:100%;
        
    }
    .panierselectionnez{
        padding: 30px;
        height: 160px;
        background: #ffff;
        width: 700px;
    }
    .panierproduitaff{
        padding: 30px;
        background: rgb(243, 243, 243);
        /* margin: 30px; */

        

    }
    .methodepaiment{
        padding: 30px;
        background: #ffff;
        height: 260px;
        

    }
    .resumeprix{
        background: rgb(255, 255, 255);
        padding: 20px;


    }
    .inputalign{
        display: grid;
        align-items: center;
    }
    .deletealign{
        display: grid;
        align-items: center;
        
    }
    .textalign{
        display: grid;
        align-items: center;

    }
    .imagealign{
        display: grid;
        align-items: center;
        padding: 10px

    }
    .danger{
        width: 600px
    }
    .texteproduitpanier{
        display: grid;
        align-items: center;
        padding: 10px
    }
    .btnpayerpanier{
        width: 300px;
        background: #13892D;
        border-radius: 30px;
    }
    .resumeprix{
        height: 160px;
    }
    .hrpanier hr{
        width: 400px
    }
    .resumeprix, .paimentpanier,.methodepaiment{
        width:350px;
    }
    .btnpayerpanierdiv{
        display: grid;
        justify-content: center;
    }
    .btntout{
        background: rgb(236, 236, 236);
        border: 1px solid rgb(0, 0, 0);
        border-radius:7px; 
    }
    .testpanier{
        margin-top: 10px;
    }
    .taillepanier{
        font-size: 11px;
    }
    .bodyaffpanier{
        background: rgb(243, 243, 243)
    }
    .backgroundpanier{
        background: rgb(255, 255, 255)

        
    }
    .deletelinkpanier:hover{
        color: #195726
    }
    .deletelinkpanier{
        color: #000;


    }
    .navpaniernew{
        position: relative;
        top: 40px;
    }
    .joinm{
        /* display: grid;
        justify-content: center */
    }
  
    .xnavlink{
color: white;
font-family: 'Roboto', sans-serif;
position: relative;
left: 7px


      
    }
    .shoppinglinkdashboard{
        color: white;
        font-family: 'Roboto', sans-serif;

        margin-left: 20px;


    }
    .testgridpanier{
        display: flex;
        justify-content: center
}
.bg-navbarpanier{
    background: rgb(243, 243, 243);
}
.xnavlink:hover{
    color: #186829

}
.testpanier2{
    position: relative;
    top: 7px
}

</style>
























<body class=" bodyaffpanier">
    
<div class="bodypanier row">

    <div class="panierselectionnezetproduit col-9 row">
       
        <div class="panierselectionnez">

            <strong class="panierde"></strong> 
            {{-- <strong>({{$paniersproduits->count()}})</strong>  <br>  --}}
            @foreach($paniersproduits as $panierp)

            <strong>({{ !empty($panierp) ? count($panierp) : 0 }})</strong>
            @endforeach <br>

      
            <input id="select-all" type="checkbox" class="testpanier select-all-checkbox" name="tousarticles"  id="">
            <span class="testpanier testpanier2">Selectionnez Tous Les Articles</span> <br> <br>
            <button type="button" class="btn btntout">Tout</button>

            
            




        </div>
        <br>
        <form action="envoyerpaiment" method="post">
            @csrf
            {{-- @foreach($paniers as $panier) --}}
        @foreach($paniersproduits as $panierp)
            @foreach($panierp as $produit)
                <div class="backgroundpanier">
                    <div class="panierproduitaff row">
                        <div class="col-1 backgroundpanier inputalign">
                            <input type="checkbox" class="testpanier product-checkbox" value="{{$produit->id}}" name="produits[]" id="">
                        </div>
                        <div class="imageproduitpanier imagealign col-3 backgroundpanier">
                            <img src="img/produit/{{$produit->produitImage->url}}" style="width:70px; height:70px;" alt="">
                        </div>
                        <div class="texteproduitpanier col-6 backgroundpanier">
                            <span class="">{{$produit->produit->designation_produit}}</span>
                            <span class="">{{$produit->prixtotal}} .00MAD</span>
                            <span class="taillepanier">Size: {{$produit->produittaille->taille}} </span>
                        </div>
                        <div class="btnproduitpanier deletealign col-2 backgroundpanier">
                            <a href="supprimerpanier?id={{$produit->id}}" class="deletelinkpanier">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
         @error('produits')
            <span style="color:red;">{{$message}}</span> <br>
            @enderror
    

        
        




        
    </div>

    <div class="paimentpanier col-3">
        <div class="resumeprix">
            <div class="resumepanier">
                <strong>Résumé</strong> <br>
            </div>
            <div class="prixtotalpanier row">
                <span class="col-8">Total</span>
                <span class="col-4">PrixTotal</span>    
            </div>
            <br>
            <div class="btnpayerpanierdiv">
                <button type="submit" class="btn btnpayerpanier"  onclick="return confirmPayment()">Payer</button>
            </div>
        

        </div>
        <br> 
        <div class="methodepaiment">
            <div class="modepaiment">
                <strong>Mode De Paiment</strong>
            </div>
            <div class="logocashondelivery">
                <span>Cash on delivery logo</span>
            </div>
            <div class="hrpanier">
                <hr>
            </div>
            <div class="protectionacheteur">
                <strong>Protection Acheteur</strong> <br>
                {{-- logo verification --}}
                <span>Obtenez un remboursement complet si l'article vous parvient en retard ou bien ne correspond pas à la description du produit</span>
                
            </div>
            
        </div>

    </div>
</form>




































</div>
</body>






















<!-- ... Votre code HTML ... -->

<script>
    // Récupérer la case à cocher principale
    const selectAllCheckbox = document.getElementById('select-all');
  
    // Récupérer toutes les cases à cocher individuelles
    const productCheckboxes = document.getElementsByClassName('product-checkbox');
  
    // Ajouter un écouteur d'événement pour la case à cocher principale
    selectAllCheckbox.addEventListener('change', function () {
      // Cocher ou décocher toutes les cases à cocher individuelles en fonction de l'état de la case à cocher principale
      for (let i = 0; i < productCheckboxes.length; i++) {
        productCheckboxes[i].checked = selectAllCheckbox.checked;
      }
    });
  
    for (let i = 0; i < productCheckboxes.length; i++) {
      productCheckboxes[i].addEventListener('change', function () {
        // Vérifier si toutes les cases à cocher individuelles sont cochées
        let allChecked = true;
        for (let j = 0; j < productCheckboxes.length; j++) {
          if (!productCheckboxes[j].checked) {
            allChecked = false;
            break;
          }
        }
  
        // Mettre à jour l'état de la case à cocher principale en fonction de l'état des cases à cocher individuelles
        selectAllCheckbox.checked = allChecked;
      });
    }
  
    function confirmPayment() {
      var response = confirm("Êtes-vous sûr de vouloir effectuer le paiement ?");
  
      if (response) {
        // Effectuer les opérations de paiement nécessaires
        // ...
  
        // Afficher un message de confirmation à l'utilisateur
        alert("Paiement effectué avec succès !");
  
        return true; // Envoyer le formulaire
      } else {
        return false; // Ne pas envoyer le formulaire
      }
    }
  </script>
  
  <!-- ... Suite de votre code HTML ... -->
  