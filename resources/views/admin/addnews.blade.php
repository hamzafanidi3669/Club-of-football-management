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
    <form action="savenews" class="formaddnews" enctype="multipart/form-data" method="post">
        @csrf
        <h3 class="text-center addnewstitle">ADD NEWS</h3>
        <input type="text" name="title" placeholder="Title" class="form-control"> <br>
        @error('title')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <textarea name="content" class="contenttextarea form-control" rows="7" placeholder="content" ></textarea> <br>
        @error('content')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        {{-- <img src="" alt=""> --}}
        <input type="file" class="form-control text-center" name="image" id=""> <br>
        @error('image')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
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
    