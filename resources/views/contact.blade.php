<x-navbar/>
<br> <br> <br>


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



<div class="contentaddnews">
    <form action="sendcontact" class="formaddnews" enctype="multipart/form-data" method="post">
        @csrf
        <h3 class="text-center addnewstitle">CONTACT US</h3>
        <input type="text" name="name" placeholder="name" class="form-control"> <br>
        @error('name')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="email" placeholder="Email" class="form-control"> <br>
        @error('email')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <input type="text" name="subject" placeholder="subject" class="form-control"> <br>
        @error('subject')
        <span style="color:red;">{{$message}}</span> <br>
        @enderror
        <textarea name="content" class="contenttextarea form-control" rows="7" placeholder="content" ></textarea> <br>
        @error('content')
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
    