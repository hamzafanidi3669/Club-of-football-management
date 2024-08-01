<link rel="stylesheet" href="stylewelcome.css">
<link rel="stylesheet" href="styleallnews.css">
<link rel="stylesheet" href="stylecustompagination.css">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  .img1{
    display: none;
  }
  .product-image{
    width: 100%;
  }
  .product-image-container{
    width: 300px;

  }
  .contentproduit{
    display: grid;
    justify-content: center;
    
  }
  .allphotosproduit{
    display: grid;
    justify-content: end;
    /* margin-right: 30px; */
    /* position: relative; */
    /* right: 20px */
  }
  .couleurlink{
    border: 1px solid black;
    height: 20px;
    width: 20px;
    display: inline-block;
    cursor: pointer;
  }
  .alltextproduit{
    font-family: 'Bebas Neue', sans-serif;

  }
  .designationproduit{
    font-size: 37px;
  }
  .alltextproduit{
    /* line-height: 89px; */
  }
  .selectproduit{
    width: 300px;
    height: 40px;
    font-size: 19px;
    border: 1px solid #13892D;
    background: none;
  }
  .selectproduit:focus{
    border: 2px solid #13892D;

  }
  .mesuresproduit{
    text-transform: uppercase;
    font-weight: 500;
    text-decoration: underline;
    color: black;
  }
  .mesuresproduit:hover{
    color: #13892D;
  }
  .btnproduitpanier{
    width: 300px;
    background-color: #13892D;
    height: 40px;
    

  }
  .descriptionproduit{
    font-size: 13px;
    max-width: 370px;
  }
  .bodyproduit{
    background: #13892D
  }
  .welcomeimg1{
    width: 100%;
    height: 100%;
  }
  
  .welcomeimgnews{
    width: 100%;
    height: 100%;
    
    /* height: 100%; */
  }
 
.marginproduct{
  margin: 20px 40px;
}
.allphotosproduit,.alltextproduit{
  background: #ffffff;
  padding-top: 120px;

}
.allphotosproduit{
}
 .quantiteproduit{
  width:300px;
 }
 .selected{
  border: 3px solid black;
  /* font-size: 40px */
  /* margin: 3px */

 }
 .selectedblack{
  border: 3px solid rgb(247, 247, 247);
  

 }
 body {
  overflow-x: hidden;
}

</style>

<x-navbar/>






<div class="contentproduit row">

      <div class="allphotosproduit col-6">


        <div class="product-image-container">
          <form action="ajouter-au-panier?id={{$produits->id}}" method="post">
            @csrf
            {{-- le premier image lli kit afficha --}}
        @if($produits->produitimage->isNotEmpty())

          <img class="product-image product-imagetest product-imagetest2 testimgyarbe scriptproduittest" src="img/produit/{{ $produits->produitimage->first()->url }}" alt="">
        @endif

        @foreach($produits->produitimage as $image)
        <script>const amen={{$image->id}}
        </script>

        <img value="{{ $image->id }}" data-couleur-id="{{ $image->couleur }}"  title="{{ $image->id }}" class="product-image product-imagetest product-imagetest2 testimgyarbe img1 {{ $image->couleur }}" src="img/produit/{{ $image->url }}" alt=""> 
        @endforeach
   
      

        </div>
       <script>
        document.querySelector('.scriptproduittest').value=amen ;
        document.querySelector('.scriptproduittest').title=amen ;
        document.querySelector('.scriptproduittest').title=amen ;
       </script>
        
      
      </div>














      <div class="alltextproduit col-6">
        <h3 class="designationproduit">{{$produits->designation_produit}}</h3>
        <h3>{{$produits->prix_produit}}.00 MAD</h3>
        <br> 

        <p class="descriptionproduit">{{$produits->description_produit}}</p>


        

            



            @for($i = 0; $i < count($produits->produitcouleur); $i++)
            @php
                $couleur = $produits->produitcouleur[$i];
                $image = $produits->produitimage[$i];
            @endphp
        <button type="button" name="couleur" class="btn-couleur selected-color couleurlink" title="{{ $image->couleur }}" style="background-color: {{ $image->couleur }}" data-couleur-id="{{ $image->couleur }}"  onclick="toggleCouleur(this);selectCouleur('{{ $image->couleur }}');selectImage({{$image->id}})"></button>
   
            
        @endfor












        <br> 
          <input type="hidden" name="produit_id" value="{{ $produits->id }}">
          <input type="hidden" name="prixunitaire" value="{{ $produits->prix_produit }}">
          <input type="hidden" name="couleur" id="couleur-input">
          <input type="hidden" name="image-input" class="image-input">
          
          <script>
   
            </script>

          <a href="" class="mesuresproduit">Voir Les mesures</a> <br> 
          <select name="taille" id="tailleSelect" class="selectproduit" id="">
            <option value="">Choisissez Une Taille</option>
            @foreach($produits->produittaille as $taille)
              <option name="taille" value="{{$taille->id}}">{{$taille->taille}}</option>
            @endforeach

          </select> <br>  <br>
          @error('taille')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
          <input type="number" class="quantiteproduit" name="quantite" min="1" max="5" placeholder="quanite"> <br> <br>
          @error('quantite')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
          <input type="submit" value="Ajouter Au Panier" class="btn btnproduitpanier text-center" style="background:#13892D; font-size: 20px;">
        </form>
          <br> 
        
        <br> <br>
      </div>
        





        
          




      
{{-- fin content --}}
</div> 
<br> <br>









<body class="bodyproduit">
  {{-- lli jam3ahom kamlin --}}
  <div class="welcomenewsall">
    {{-- lli jam3a ster lowl --}}
                <div class="welcomenewsline1 row">
    {{-- lli jam3a div kamla lowla --}}

@foreach($allproduits as $produit)

<a href="produit?id={{$produit->id}}" class="welcomenews1 col-xl-4 col-md-6">



  <div class="product-image-container marginproduct bg-primary">
    <img class="bg-secondary product-image" src="img/produit/{{ $produit->produitimage->first()->url }}">
</div> <br> <br>
<div class="welcomehours1">
    <span class="testhover1 newstime">{{ $produit->categorie->nom  }}</span>
</div>
<div class="welcometitre1">

    <span class="testhover1 prixproduit">{{$produit->prix_produit}}.00 MAD</span>
 
</div>

<div class="">
    <hr class="welcomehr">
</div>



                        </a>

@endforeach 



{{-- had div dyal line1 --}}

</div> 

{{-- had div dyal koolshi --}}
</div>





</body>
  
<br> <br> <br>

<script>

  var couleurSelectionnee = false;

  if(couleurSelectionnee==false){
  document.querySelector('.btnproduitpanier').disabled=true;  
  document.querySelector('.btnproduitpanier').title='Choisissez Un couleur';  
  //  7yd lhover
}






  function selectImage(imageid){
    document.querySelector('.image-input').value = imageid;
  }
 
   function selectCouleur(couleurId,imageurl) {
    // bash ila khtarit shi couleur kit7et les donnees dyal couleur lli khtarit fl input
    document.getElementById('couleur-input').value = couleurId;
    document.querySelector('.image-input').value = imageurl;




   }







  //  

  function toggleCouleur(button) {
  couleurSelectionnee = true;
  var buttons = document.getElementsByClassName('btn-couleur');
  if(couleurSelectionnee==true){
  btnpanier=document.querySelector('.btnproduitpanier') ;
  btnpanier.disabled=false; 
  btnpanier.classList.add('btnproduitpaniertest'); //bash fash lbtn mashi disabled ydar 3leha lhover 
  document.querySelector('.btnproduitpanier').title='';    // bash fash tkun lbtn active maytl3sh choisissez un couleur 7tash deja mkhtaro

 

  for (var i = 0; i < buttons.length; i++) {

if (buttons[i] === button) {
  if (button.style.backgroundColor === 'black') {
    button.style.border = '3px solid #13892D'; // Appliquer la bordure blanche au bouton noir
  } else {
    button.style.border = '3px solid black'; // Appliquer la bordure noire aux autres boutons
  }
} else {
  buttons[i].style.border = '1px solid black';
}
}
}

  
}







// 



const buttons = document.querySelectorAll('.btn-couleur');
  const images = document.querySelectorAll('.product-imagetest');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      const couleurId = button.getAttribute('data-couleur-id');



      images.forEach(image => {
        if (image.classList.contains(couleurId)) {
          image.style.display = 'block';
        } else {
          image.style.display = 'none';
        }
      });
    });
  });






  
</script>








<script>


</script>
<style>
  .btnproduitpaniertest:hover{
    background: #000000;
    color: white
    

  }
</style>











