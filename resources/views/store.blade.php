
@extends('layouts.news')


<x-navbar/>
<br> <br> <br>



{{-- @foreach($produits as $produit)
  <h2>{{ $produit->designation_produit }}</h2>
  <p>Prix: {{ $produit->prix_produit }} dhs</p>
  <p>Catégorie: {{ $produit->categorie->nom }}</p>

    @foreach($produit->produitcouleur as $couleur)
      Couleur:{{ $couleur->couleur }} <br>
    @endforeach

    @foreach($produit->produittaille as $taille)
   Taille {{ $taille->taille }} <br>
  @endforeach



@endforeach --}}










<style>
  .btnsupprimerproduit{
    display: flex;
    justify-content: end
  }
  .btnsupprimerproduit button{
    background: none;
    border: none;
    position: relative;
    left: 50px;
    color: white
    
  }
  .supprimernews:hover{
            color: green

        }
        .addproductsstore{
          /* float: right; */
          margin-left: 100px;
          color: white
        }
        body {
  overflow-x: hidden;
}
</style>

















  @section('content')

  @if(Auth::check())
    @if(Auth::user()->type=='admin')
      <a class="addproductsstore" href="addproducts">
        <i class="fa fa-plus-circle supprimernews" aria-hidden="true"></i>
      </a>
    @endif
  @endif

  
  {{-- lli jam3ahom kamlin --}}
<div class="welcomenewsall">
    {{-- lli jam3a ster lowl --}}
                <div class="welcomenewsline1 row">
    {{-- lli jam3a div kamla lowla --}}
    
        
@foreach($produits as $produit)

        
                    <a href="produit?id={{$produit->id}}" class="welcomenews1  col-xl-4 col-md-6">


                      <div class="welcomeimg1">
                        <img class="welcomeimgnews" src="img/produit/{{ $produit->produitimage->first()->url }}">
                    </div> <br> <br>
                    <div class="welcomehours1">
                        <span class="testhover1 newstime">{{ $produit->categorie->nom  }}</span>
                    </div>
                    @if(Auth::check())
                      @if(Auth::user()->type=='admin')
                        <form action="deleteproduit?id={{$produit->id}}" method="post">
                          @csrf
        
                            <div class="welcometitre1 row">
                              <div class="welcometitrecol-1">
                                <span class="testhover1 prixproduit">{{$produit->prix_produit}}.00 MAD</span>
                              </div>
          
                                <div  class="btnsupprimerproduit col-9">
                                  <button type="submit">
                                    <i class="fa fa-trash supprimernews" aria-hidden="true"></i>
        
                                  </button>
                                </div>
                            </div>
                      </form>

                      @else
                        <div class="welcometitre1 row">
                          <div class="welcometitrecol-1">
                            <span class="testhover1 prixproduit">{{$produit->prix_produit}}.00 MAD</span>
                          </div>
                        </div>

                    @endif
                    @else
                      <div class="welcometitre1 row">
                        <div class="welcometitrecol-1">
                          <span class="testhover1 prixproduit">{{$produit->prix_produit}}.00 MAD</span>
                        </div>
                      </div>
                  @endif
                {{-- <form action="deleteproduit?id={{$produit->id}}" method="post">
                  @csrf

                    <div class="welcometitre1 row">
                      <div class="welcometitrecol-1">
                        <span class="testhover1 prixproduit">{{$produit->prix_produit}}.00 MAD</span>
                      </div>
  
                        <div  class="btnsupprimerproduit col-9">
                          <button>
                            <i class="fa fa-trash supprimernews" aria-hidden="true"></i>

                          </button>
                        </div>
                    </div>
              </form> --}}

                    
                    <div class="">
                        <hr class="welcomehr">
                    </div>


                      {{-- @endforeach --}}
                                            </a>
    
    @endforeach 

    {{-- {{ $allnews->links('custom-pagination', ['nextPageUrl' => 'Voir plus']) }} --}}
    {{-- linkito m3a lview custom-pagination --}}

                {{-- had div dyal line1 --}}
    
                </div> 
                
                {{-- had div dyal koolshi --}}
            </div>
            <br> <br> <br>
    
  @endsection
    

@section('styles')
<link rel="stylesheet" href="stylewelcome.css">
<link rel="stylesheet" href="styleallnews.css">
<link rel="stylesheet" href="stylecustompagination.css">
<link rel="stylesheet" href="stylestore.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>



@endsection

<a href="affpanier" class="fixed-button">

 <i class="fa fa-shopping-cart" aria-hidden="true"></i>

</a>
<style>
  .fixed-button{
    font-size: 20px;
  position: fixed;
  bottom: 60px; /* Ajustez la valeur selon vos besoins */
  right: 80px; /* Ajustez la valeur selon vos besoins */
  background: #000;
  border-radius: 50% 50%  50% 50%;
  padding: 17px;
  z-index: 3;
color: green

  }
  .fixed-button:hover{
    color: rgb(28, 56, 27)
  }
</style>


