

<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="stylenav.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    </style>
</head>
<body>
  

    <nav class="navbar navbar-expand-lg navnav row">
        <a class="navbar-brand col-2"  href="./">
            <img class="navrcalogo" src="img/logoraja.png" alt="">
            <span class="navrca testnavrca text-white" style="font-size: 40px; font-weight:500; font-family:'Bebas Neue', sans-serif;" >RAJA</span>
        </a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="col-8 jam3ali ">


          <ul class="navbar-nav text-center mr-auto naveul">
            <li class="nav-item navanews @if(Request::is('allnews')) active @endif">
              <a class="nav-link nava navanews" href="allnews">NEWS <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->is('video') ? 'active' : '' }}">
              <a class="nav-link nava"  href="video">VIDEO</a>
            </li>
            <li class="nav-item {{ request()->is('fixturesteams') ? 'active' : '' }}">
              <a class="nav-link nava" href="fixturesteams">ADMIN</a>
            </li>
            <li class="nav-item {{ request()->is('tickets') ? 'active' : '' }}">
              <a class="nav-link nava"  href="tickets">TICKETS</a>
            </li>
            <li class="nav-item {{ request()->is('store') ? 'active' : '' }}">
              <a class="nav-link nava "  href="store">STORE</a>
            </li>
          </ul>
        </div>
















      <div class="navhr1">

      </div>
















      @if (Route::has('login'))
        <div class="navloginss col-3   row">
        @auth

                
            <div class="nav-item   join">
              <a href="{{ url('/dashboard') }}" class="nav-link joinm">
                <img src="img/utilisateur.png" width="15px" height="15px" alt="" class="navuser">
 
                <span class="joinlink  nava">ACCOUNT</span>

              </a>
            </div>

          <div class="nav-item login">
              <a href="{{ url('/logout') }}" class="nav-link navloginlink nava">LOGOUT</a>
          </div>
        @else
        <div class="nav-item   join">
          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="nav-link joinm">
                <img src="img/utilisateur.png" width="15px" height="15px" alt="" class="user">
 
                <span class="navjoinlink  nava">JOIN</span>

              </a>
            @endif
            </div>

          <div class="nav-item login">
              <a href="{{ route('login') }}" class="nav-link loginlink nava">LOGIN</a>
          </div>
       @endauth
      </div>
    @endif



       





    


    




          
         

          <!-- 1XBET LOGO -->
         <div class="col navhr2 onexbetdiv  row"> 
          <a href="https://1xbet.com/fr">
              <img src="img/1xbet logo.png" class="navlogo1xbet" alt="">
          </a>

          
          </div> 

        

    </div>






<!-- l3aaaaaayba -->



<div class="navloginss2 col-6   row">

    <div class="nav-item   navjoin">
      <a href="" class="nav-link joinm">

        <span class="joinlink  nava">JOIN</span>

      </a>
    </div>

  <div class="nav-item login">
      <a href="" class="nav-link loginlink nava">LOGIN</a>
  </div>
  
</div>















    
      <!-- FA-BARS -->
      <label for="" class="fadiv" id="icon">
        <i class="fa fa-bars" aria-hidden="true"></i>

      </label>
      </nav>







<br> <br>

      <nav class="nav-bar2">
        <ul class="ul2 navul">
          <li>
            <a href="" class="active nava test2">News</a>
          </li>
          <li>
            <a href="" class="active nava">Video</a>
          </li>
          <li>
            <a href="" class="active nava">Fixtures&Teams</a>
          </li>
          <li>
            <a href="" class="active nava">Tickets</a>
          </li>
          <li>
            <a href="" class="active nava">Store</a>
          </li>
        </ul>
      </nav>






        



      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



<script>
  
  fadiv=document.querySelector(".fadiv");
  logindiv=document.querySelector(".navloginss2");
  var nb=0;
  fadiv.onclick=function(){
    nb+=1
    navbar=document.querySelector(".nav-bar2");
    navbar.classList.toggle("active");
  //   if(nb % 2){
  //      logindiv.style.display="none";
  // }else{
  //   logindiv.style.display="flex";

  // }   // hadi hya lli katkharb9lya dik lmedia query 

  }
  document.addEventListener('scroll',()=>{
    const logo=document.querySelector('.navrcalogo');
    const rca=document.querySelector('.navrca');
    if(window.scrollY>0){
      logo.classList.add('navlogowidth') ;
      rca.classList.add('navrca2') ;

    }else{
      logo.classList.remove('navlogowidth');
      rca.classList.remove('navrca2');

    }
  })
</script>


</body>
</html>

