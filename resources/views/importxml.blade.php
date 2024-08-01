<form action="importxml" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="xml_file">
    <button type="submit">OK</button>
</form>


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
    <form action="importxml" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="text-center addnewstitle">IMPORT PRODUCTS</h3>
        <span>Le fichier doit .xml!</span>
        <input type="file" class="form-control text-center" name="xml_file"><br>
        <div class="btnaddnewsdiv">
            <button name="submit" class="btn btn-success btnaddnews">ADD</button>

        </div>
    </form>

</div>


<style>
    .btnaddnews{
        background: #13892D;
        font-family: 'Roboto', sans-serif;
        

    }
    
</style>
    