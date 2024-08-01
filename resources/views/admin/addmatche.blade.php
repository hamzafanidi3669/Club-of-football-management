



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
<br> <br>


<div class="contentaddnews">
    <form action="savematche" class="formaddnews" enctype="multipart/form-data" method="post">
        @csrf
        <h3 class="text-center addnewstitle">ADD MATCHE</h3>
        <input type="text" name="nom_equipe_domicile" placeholder="Equipe Domicile" class="form-control"> <br>
        @error('nom_equipe_domicile')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <span>Image equipe domicile</span>
        <input type="file" name="image_equipe_domicile" class="form-control"> <br>
        @error('image_equipe_domicile')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="nom_equipe_exterieur" placeholder="Equipe Exterieur" class="form-control"> <br>
        @error('nom_equipe_exterieur')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <span>Image equipe exterieur</span>
        <input type="file" name="image_equipe_exterieur" class="form-control"> <br>
        @error('image_equipe_exterieur')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="nom_championnat" placeholder="Coup nom" class="form-control"> <br>
        @error('nom_championnat')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <span>Image Coupe</span>
        <input type="file" name="image_championnat" class="form-control"> <br>
        @error('image_championnat')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="ville" placeholder="ville" class="form-control"> <br>
   
        <input type="text" name="lieu" placeholder="lieu" class="form-control"> <br>
        @error('lieu')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="heure_matche" placeholder="heure" class="form-control"> <br>
        @error('heure_matche')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="prix_ticket" placeholder="prix ticket" class="form-control"> <br>
        @error('prix_ticket')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="date" name="date_matche" placeholder="date_matche" class="form-control"> <br>
        
        @error('date_matche')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <div class="btnaddnewsdiv">
            <button name="submit" class="btn btn-success btnaddnews">ADD MATCHE</button>

        </div>
    </form>

</div>


<style>
    .btnaddnews{
        background: #13892D;
        font-family: 'Roboto', sans-serif;
        

    }
    
</style>
    