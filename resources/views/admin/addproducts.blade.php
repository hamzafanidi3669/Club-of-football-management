<link rel="stylesheet" href="bootstrap.min.css">

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

.contentaddnews{
        display: grid;
        justify-content: center;
    }
    .contenttextarea{
        /* width: 400px; */
        /* height: 190px; */
    }
    .formaddnews{
        width: 600px;
    }
    .btnaddnewsdiv{
        display: grid;
        justify-content: center;
    }
    .btnaddnews{
        width: 150px;
        border-radius: 20px;
        background: #13892D;
    }
    .formaddnews{
        padding: 40px
    }
    .formaddnews{
        /* background: gainsboro */

    }
    .addnewstitle{
        font-family: 'Roboto', sans-serif;
        color: #13892D

    }
</style>








<x-navbar/>
<br> <br> <br>


<div class="contentaddnews">
    <form action="saveproduct" class="formaddnews" enctype="multipart/form-data" method="post">
        @csrf
        <h3 class="text-center addnewstitle">ADD PRODUCT</h3>
        <input type="text" name="designation_produit" placeholder="designation_produit" class="form-control"> <br>
        @error('designation_produit')
        <span style="color:red;">{{$message}}</span>
        @enderror
        <input type="text" name="prix_produit" placeholder="prix_produit" class="form-control"> <br>
        @error('prix_produit')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <select name="categorie" id="">
            <option value="-1">categorie name</option>
            @foreach($categorie as $c)
            <option value="{{$c->id}}">{{$c->nom}}</option>
            @endforeach
        </select>
        @error('categorie')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <textarea name="description_produit" class="contenttextarea form-control" rows="7" placeholder="description" ></textarea> <br>
        @error('description_produit')
        <span style="color:red;">{{$message}}</span>
        @enderror
        {{-- <img src="" alt=""> --}}
        Produit Vert:
        <input type="file"  class="form-control text-center" name="images[]" id=""> <br>
        Produit blanc:
        <input type="file"   class="form-control text-center" name="images[]" id=""> <br>
        Produit noir:
        <input type="file"  class="form-control text-center" name="images[]" id=""> <br>
        
        @error('images')
        <span style="color:red;">{{$message}}</span>
        @enderror

        Taille
        <input type="checkbox" name="tailles[]" value="S"> S<br>
        <input type="checkbox" name="tailles[]" value="M"> M<br>
        <input type="checkbox" name="tailles[]" value="L"> L<br>
        <input type="checkbox" name="tailles[]" value="XL"> XL<br>
        @error('tailles')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror


        <label>Couleurs Dispo:</label><br>
        <input type="checkbox" name="couleurs[]" value="green"> vert<br>
        <input type="checkbox" name="couleurs[]" value="white"> blanc<br>
        <input type="checkbox" name="couleurs[]" value="black"> noir<br>
        @error('couleurs')
        <span style="color:red;">{{$message}}</span>
        @enderror
        
        
        
        <div class="btnaddnewsdiv">
            <button name="submit" class="btn btn-success btnaddnews">ADD PRODUCT</button>

        </div>
        <a href="import">Ajouter un fichier xml</a>
    </form>

</div>


<style>
    .btnaddnews{
        background: #13892D;
        font-family: 'Roboto', sans-serif;
        

    }
    
</style>


    