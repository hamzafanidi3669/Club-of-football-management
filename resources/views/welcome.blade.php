
<x-navbar/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylewelcome.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');
        .welcometitre1col1{
            /* display:flex;
            justify-content: end; */


        }
        .welcometitre1col1admin span{
            position: relative;
            right: 15px;
        }
        .welcometitre1col2{
            /* width: 10px; */
            display:flex;
            justify-content: end; 
            background: none;
            border: none;
            color: white
        }
        .supprimernews:hover{
            color: green

        }
        .academyvideowelcome{
            color: black;
            display: grid;
            justify-content: center;
            max-width: 700px;
            padding-top: 130px
        }
        .testwelcomevideo{
            display: grid;
            justify-content: center;
        }
        .minititleacademywelcome span{
            text-transform: uppercase;
            font-size: 17px;
            font-family: 'Roboto', sans-serif;
            /* font-weight: 900; */

        }
        .titleacademywelcome h2{
            font-family: 'Roboto', sans-serif;
            font-size: 37px;

        }
        .hracademy hr{
            width: 500px;
            color: white
        }
        .titleacademywelcome{
            max-width: 500px;

        }
        .videotitleacademywelcome{
            max-width: 500px;

        }
        .videotitleacademywelcome span{
            font-weight: 700;
        }
        .academy{
            background: white;
            color: #000;
            /* height: 700px; */

        }
        .academymorespandiv{
            /* float: right; */
            display: flex;
            justify-content:end ;
            /* margin:20px; */
            padding: 70px
        }
    
        .academymorespandiv span{
            color: rgb(0, 0, 0);
            /* padding: 10px; */
            font-family: 'Roboto', sans-serif;

        }
        .academymorespandiv i{
            /* padding: 10px; */
            position: relative;
            top: 3px;
            left:3px;


        }
        .academyspandiv{
            font-family: 'Roboto', sans-serif;
            padding: 70px;
        }
        .academyspandiv span{
            color: white;
            background: #000;
            padding: 10px;
            border-radius:20px; 
        }
   .academyline1welcome{
    padding: 50px;
    position: relative;
    bottom: 70px
    /* margin:30px; */
   }
   .academydiv1{
    /* padding: 50px; */
    /* margin: 40px; */
   }
   .academyimg{
    width:360px;
    height: 210px;
   }
   .academyimg img{
    width: 100%;
    height: 100%;

   }
   .academytime{
    color: gray;
   }
   .academyhrdiv hr{
    width: 390px
   }
   .academydiv1:hover .academytime{
    position: relative;
    bottom: 10px;
    text-decoration:none;

   }
   .academydiv1:hover .academytitle{
    position: relative;
    bottom: 10px;
   
  
   }
   .academydiv1:hover{
    background: #e2e2e2;
    transition: 0.5s
   }
   a:hover{
    text-decoration: none;
   }
   .pub1welcome{
    background: rgb(243, 243, 243);
    height: 500px;
   }
   .pubimg1{
    width: 390px;
    height:320px;
    display: flex;
    justify-content: end;
   }
   .pubimg1 img{
    width: 100%;
    height: 100%;
   }
   .pubimg2{
    width: 390px;
    height:320px;
   }
   .pubimg2 img{
    width: 100%;
    height: 100%;
   }
   .img1pub{
    display: grid;
    justify-content: end;
    align-items: center;
   }
   .img2pub{
    display: grid;
    align-items: center;

   }
   .addacademynews{
    font-family: 'Roboto', sans-serif;
    color: rgb(0, 0, 0)
   }
   .addacademynews:hover{
    color: #127227;
   }
   .testwelcomesubscribe{
    background: rgb(0, 0, 0);
    padding: 10px;
    position: relative;
    bottom: 12px;
    color: white;
    border-radius:21px; 
   }
   .testwelcomesubscribe:hover{
    background: rgb(49, 49, 49);
    color: rgb(226, 226, 226);
   }
   .standingtogetherdiv{
    width: 100%;
    height: 300px;
   }
   .standingtogetherimg{
    width: 100%;
    height: 100%;
   }
   .alltropheeswelcome{
    background: #e4e4e4;
    height: 250px;
    display: flex;
    align-items: center
   }
   .alltropheeswelcomeimg{
    /* margin: 40px; */
  
   }
   .grid-container{
    display: grid;
    grid-template-columns: 100px 100px 100px 100px 100px 100px 100px;
    grid-template-columns: repeat(7,1fr);
   }

   .img2welcome{
    position: relative;
    /* bottom:8px; */
    top: 8px;
    display: grid;
    align-items: center;
    justify-content: center;
   }
   .img3welcome{
    display: grid;
    align-items: center;
    position: relative;
    left:15px;

   }
   .img4welcome{
    display: grid;
    align-items: center;
    position: relative;
    top: 10px

   }
   .img5welcome{
    display: grid;
    align-items: center;
    position: relative;
    /* bottom: 8px; */
    top: 6px
   }
   .img6welcome{
    display: grid;
    align-items: center;
    position: relative;
    left: 37px;
    top:8px;
   }
   .img7welcome{
    display: grid;
    align-items: center
   }
   .footer1{
    margin-left: 100px;
    /* margin-top: 40px */
} .testacademyimg{
    /* margin: 10px; */
    padding: 30px;
    /* background: #0A4E19 */
}


    </style>
    
</head>
<body class="welcomebody">
    <br> <br> <br> <br>
        <div class="welcomeheader">
            <div class="welcomeheadlines ">
                
                <span class="welcomeheadlinesbg">HEADLINES</span>
            </div>
            <div class="welcomeallnews">
            {{-- ila kan un user dakhl --}}
            @if(Auth::check())
                {{-- ila kan admin lli dakhl --}}
                @if(Auth::user()->type == 'admin')
                <a href="addnews" class="welcomea">
                    {{-- <button type="button">Bouton pour l'administrateur</button> --}}
                    <span>ADD NEWS</span>
                {{-- ila kan user 3ade dakhl --}}
                @else
                <a href="allnews" class="welcomea">
                    <span>ALL NEWS</span>
                @endif
              {{--ila makansh user dakhl  --}}
            @else 
            <a href="allnews" class="welcomea">
                <span>ALL NEWS</span>
            @endif
                  
                    
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
<br>  <br>



{{-- lli jam3ahom kamlin --}}
        <div class="welcomenewsall">
{{-- lli jam3a ster lowl --}}
            <div class="welcomenewsline1 row">
{{-- lli jam3a div kamla lowla --}}
{{-- <form action="test"> --}}
    
@foreach ($news as $i)

    
                <a href="news?id={{$i->id}}" class="welcomenews1 col-xl-4 col-md-6">
                    {{-- <a href="{{ route('news.show', ['slug' => $news->titre]) }}" class="welcomenews1 col-4"> --}}
                        {{-- <a href="{{ route('news.show', $news->slug) }}" class="welcomenews1 col-4"> --}}
                    <div class="welcomeimg1">
                        <img src="img/news/{{$i->image}}" class="welcomeimgnews"  alt="">
                    </div> <br> <br>
                    <div class="welcomehours1">
                        <span class="testhover1 welcometime">{{ $i->publishedAt()->diffForHumans() }}</span>
                    </div>
                @if(Auth::check())
                    @if(Auth::user()->type == 'admin')
                    <form action="deletenews?id={{$i->id}}" method="post" class="welcometitre1 row">
                        @csrf
                        <div class="welcometitre1col1admin col-10">
                            <span class="testhover1">{{$i->titre}}</span>
                        </div>
                        <button type="submit" class="welcometitre1col2 col-1">
                            {{-- <span class="">delete</span> --}}
                            <i class="fa fa-trash supprimernews" aria-hidden="true"></i>

                        </button>
                    </form>
                    @else
                    
                        <div class="welcometitre1">
                            <div class="welcometitre1col1">
                                <span class="testhover1">{{$i->titre}}</span>
                            </div>
                        </div>
                        
                    @endif

                @else
                <div class="welcometitre1">
                    <div class="welcometitre1col1">
                        <span class="testhover1">{{$i->titre}}</span>
                    </div>
                
                </div>
                @endif

                    <div class="">
                        <hr class="welcomehr">
                    </div>
                </a>

@endforeach 
{{-- </form> --}}

            {{-- had div dyal line1 --}}

            </div> 
            
            {{-- had div dyal koolshi --}}
        </div>
        <br> <br> <br>
        {{-- lli khas nder liha lmargin whya lli chadda lkhra kaml --}}



        {{-- chaineytb: --}}
    <div class="testwelcomebg bg-white">
        <br>
        <div class="welcomechainekamla">
      <div class="testgrid row">

            <div class="welcometitrechaine col-xl-9 col-lg-12" >
                <span class="welcometitrechainespan"> <span class="welcometitrechainespan2"> LATEST VIDEOS</span> Watch RAJA TV for exclusive interviews,documentaries and highlights</span>
            </div>
            <div class="welcomephotochaine1 col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                <a href="https://www.youtube.com/@RajaClubAthleticOfficiel">
                    <img class="welcomephotochaine2" src="img/chaineytbraja.jpeg" alt="">
                </a>
                
            </div>
        </div>
        

        <a href="https://www.youtube.com/@RajaClubAthleticOfficiel" class="welcomebtnchainea col-md-3 col-sm-3">
            <div class="welcomebtnchaine testhoverbtn col-md-6 col-sm-6 col-xl-12">
               <span>WATCH NOW</span> 
                <i class="fa fa-arrow-right welcomefasahm" aria-hidden="true"></i>
            </div>
        </a>
                        
      </div>
        <br>

    </div>








<div class="fixtureskamla bg-white">
    <div class="welcomefixturesheader ">
        <div class="welcomefixtures ">
            <span class="welcomefixturesbg">FIXTURES</span>
        </div>
        <div class="welcomeallfixtures">
        @if(Auth::check())
            @if(Auth::user()->type=='admin')
            <a href="addfixtures" class="welcomea welcomeallfixtureslink">
                    <span>ADD FIXTURES</span>
                <i class="fa fa-arrow-right facolor" aria-hidden="true"></i>
            </a>
            @else
            <a href="allfixtures" class="welcomea welcomeallfixtureslink">
                <span>ALL FIXTURES</span>
                <i class="fa fa-arrow-right facolor" aria-hidden="true"></i>
            </a>
            @endif
        @else
        <a href="allfixtures" class="welcomea welcomeallfixtureslink">
            <span>ALL FIXTURES</span>
            <i class="fa fa-arrow-right facolor" aria-hidden="true"></i>
        </a>
        @endif
        </div>
    </div>


<br> <br>



{{-- FIXTURE 1 --}}



{{-- ster kaml --}}
<div class="fixturesdivkamlin row">
@foreach($fixtures as $fixture)
    {{-- div lowla kamla --}}
    <div class="fixturescadre primary col-xl-3 col-md-6">
{{-- la partie dyal botola wtswera --}}
        <div class="headerfixtures row">

            <div class="titlefixtures info col-9">
                <span class="botolaprotest" >{{$fixture->nom_championnat}}</span>
            </div>
            <div class="botolaprodiv col-3">
                <img style="width: 100%;height:100%;" src="img/{{$fixture->image_championnat}}" alt="" class="botolaproimg">
            </div>
        </div>
<br>
{{-- partie dyal equip --}}
        {{-- hadi div jam3a les 2equipes --}}
        <div class="deuxequipesfixtures">
            {{-- jam3a ster lowl dyal equipelowla --}}
            <div class="equipe1fixtures row">
                <div class="imgequipe1fixtures dark col-3">
                    <img src="img/equipes/{{$fixture->image_equipe_domicile}}" class="imgrajaequipe1" alt="">
                </div>
                <div class="nomequipe1fixtures col-6">
                    <span>{{$fixture->nom_equipe_domicile}}</span>
                </div>
            <div class="col-3">
                @if(strtotime($fixture->date_matche) < time())
                <div class="scoreequipe1fixtures resultatfixtures">
                    <span>{{$fixture->resultat_equipe_domicile}}</span>
                </div>
            @endif
            </div>
            </div>

            <div class="hrwithdiv row">
                <div class="fixturesequipehr col-9">
                    <hr>
                </div>
                {{-- hade dyal background  gray kent zaydha a3la 9bl result--}}
                @if(strtotime($fixture->date_matche) < time())
                <div class="col-3 resultatfixtures">
                </div>
                @endif
                
            </div>
            
            





            {{-- jam3a ster tani dyal equipetanya --}}
            <div class="equipe2fixtures row">
                <div class="imgequipe2fixtures dark col-3">
                    <img src="img/equipes/{{$fixture->image_equipe_exterieur}}" style="" class="imgfarequipe2" alt="">
                </div>
                <div class="nomequipe2fixtures info col-6">
                    <span>{{$fixture->nom_equipe_exterieur}}</span>
                </div>
                @if(strtotime($fixture->date_matche) < time())
                <div class="scoreequipe2fixtures resultatfixtures col-3">
                    <span>{{$fixture->resultat_equipe_exterieur}}</span>
                </div>
                @endif
            </div>

{{-- had fonction time() katjib lina lwe9t dyal db w9anrnto m3a la date dyal matche --}}

            @if(strtotime($fixture->date_matche) < time())
            <a href="https://www.youtube.com/@RajaClubAthleticOfficiel" class="watchbtnfixturesa">
                <div class="fixturesbtnactions">
                
                    <div class="watchbtnfixtures testhoverbtn">
                       <span>WATCH MATCH ACTIONS</span> 
                        <i class="fa fa-arrow-right watchfasahm" aria-hidden="true"></i>
                    </div>
                
                
                </div>

            </a>
            @endif


<br>
{{-- hadi div jam3a les 2equipes : --}}
        </div>

    {{-- div lowla kamla --}}
    </div>
    @endforeach

{{-- sterlowl --}}
</div>



























{{-- lli jam3ahom kamlin --}}
</div>











    
{{-- 

        <br>
        <br>
        <br><br>
        <br>
        <br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br> --}}
<div class="testwelcomevideo">
    <div class="academyvideowelcome col">
        <div class="minititleacademywelcome">
            <strong>HAVE YOU SEEN?</strong>
        </div> <br>
        <div class="titleacademywelcome">
            <h2>Check on the latest progress of Our Academy Road Stand expansion with our new video and images</h2>
        </div>
        <div class="hracademy">
            <hr>
        </div>
        <div class="videotitleacademywelcome">
            <span>VIDEOS AND PHOTOS </span> <strong>Academy update:Developpement latest and first look inside</strong>
        </div><br>
        <div class="videowelcome">
            
            <iframe width="330" height="185" src="https://www.youtube.com/embed/AJvCClf3YBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;"></iframe>
    
            {{-- <video src="video/academyvideo.mp4" width="340" height="250" type="video/mp4" controls ></video> --}}
              
        </div>
    
    </div>
</div>
</div>
<br> <br> <br> <br> 


{{-- <div class="academykamla bg-white"> --}}
    {{-- <div class="welcomefixturesheader bg-white">
        <div class="welcomefixtures">
            <span class="welcomefixturesbg text-white">ACADEMY</span>
        </div>
        <div class="welcomeallfixtures bg-white">
            <a href="" class="welcomea welcomeallfixtureslink">
                <span>MORE</span>
                <i class="fa fa-arrow-right facolor" aria-hidden="true"></i>
            </a>
        </div>
    </div> --}}
{{-- </div> --}}
{{-- <div class="newssterlowl"> --}}

{{-- </div> --}}

<div class="bg-white academykamla text-dark">
    <div class="academyheader row">
        <div class="academyspandiv col-6">
            <span>ACADEMY</span>
        </div>
        <div class="academymorespandiv col-6">

            @if(Auth::check())
                @if(Auth::user()->type == 'admin')
                    <a href="addacademynews" class="addacademynews">
                        ADD ACADEMYNEWS
                    </a>
                    {{-- <i class="fa fa-arrow-right facolor " aria-hidden="true"></i> --}}
                   

                @else
                <a href="allacademynews" class="allacademynews">MORE
                </a>
                {{-- <i class="fa fa-arrow-right facolor addacademynews" aria-hidden="true"></i> --}}
                {{-- <i class="fa fa-arrow-right" aria-hidden="true"></i> --}}

                @endif
            @else
            <a  href="allacademynews" class="allacademynews">MORE
            </a>
            {{-- <i class="fa fa-arrow-right facolor addacademynews" aria-hidden="true"></i> --}}
            {{-- <i class="fa fa-arrow-right addacademynews" aria-hidden="true"></i> --}}

            @endif
        </div>

    </div>


    
    
         {{-- sterlowl --}}
    <div class="academyline1welcome row">
        @foreach ($academynews as $academy)
            
        {{-- divlowla --}}
        <a href="academynew?id={{$academy->id}}" class="academydiv1 testacademyimg col-xl-4 col-md-6">
            <div class="academyimg">
                <img src="img/academynews/{{$academy->image}}" width="100px" height="90px" alt="">
            </div> <br> <br>
            {{-- <br> <br> <br> <br> --}}
            <div class="academytime">
                <span class="welcometime">{{ $academy->publishedAt()->diffForHumans() }}</span>
            </div>
            <div class="academytitle">
                <strong class="text-dark">{{$academy->titre}}</strong>
            </div>
            <div class="academyhrdiv">
                <hr>
            </div>
        </a>
        @endforeach
{{--sterlowl lte7t  --}}
    </div>
{{--academykamla lte7t  --}}
</div>


<div class="pub1welcome row">
    
    <div class="img1pub col-6">
        <div class="pubimg1">
            <img src="img/sponsor/raja1xbetdetails.jpg" alt="">
        </div>
    </div>

    <div class="img2pub col-6">
        <div class="pubimg2">
            <img src="img/sponsor/rajafaalidetails.jpg" alt="">
        </div>
    </div>


    

</div>








<div class="bg-white academykamla text-dark">
    <div class="academyheader row">
        <div class="academyspandiv col-6">
            <span>VIDEOS</span>
        </div>
        <div class="academymorespandiv channelsubscribe col-6">           
                <a href="https://www.youtube.com/RajaClubAthleticOfficiel" class="testwelcomesubscribe">
                    <span class="text-white">SUBSCRIBE</span>
                </a>

        </div>

    </div>



    
    
         {{-- sterlowl --}}
    <div class="academyline1welcome row">
        {{-- divlowla --}}
        <a href="academy" class="academydiv1 col-xl-4 col-md-6">
            <div class="academyimg">
                {{-- <img src="img/news/1684760790_khabba2.jpeg" width="100px" height="90px" alt=""> --}}
            <iframe width="390" height="230" src="https://www.youtube.com/embed/5463yK6mSns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;"></iframe>
            {{-- <iframe width="390" height="230" src="https://www.youtube.com/embed/@RajaClubAthleticOfficiel" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;"></iframe> --}}


            </div>
        </a>
         {{-- divlowla --}}
         <a href="academy"class="academydiv1 col-xl-4 col-md-6">
            <div class="academyimg">
                {{-- <img src="img/news/1684760790_khabba2.jpeg" width="100px" height="90px" alt=""> --}}
                <iframe width="390" height="230" src="https://www.youtube.com/embed/S8Jydn8ck0c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;"></iframe>
            </div>
        </a>
         {{-- divlowla --}}
         <a href="academy" class="academydiv1 col-xl-4 col-md-6">
            <div class="academyimg">
                {{-- <img src="img/news/1684760790_khabba2.jpeg" class="imgacademy" alt=""> --}}
                <iframe width="390" height="230" src="https://www.youtube.com/embed/L3GGZn2cTsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;"></iframe>
            </div>

        </a>
{{--sterlowl lte7t  --}}
    </div>
{{--academykamla lte7t  --}}
</div>







<div class="standingtogetherdiv">
    <img src="img/rajadimam3ak.jpeg" class="standingtogetherimg" alt="">
</div>



<div class="alltropheeswelcome">
    <div class="alltropheeswelcomeimg grid-container">
        <div class="img2welcome watestbotola grid-item col">
            <img src="img/trophees/botolatrophé1.png" class="row-1" alt="">
            <span class="row-1 botola12">12</span>
            
        </div>

        <div class="img2welcome grid-item col">
            <img src="img/trophees/3osba.png" class="row-1" alt="">
            <span class="row-1 champions3">3</span>
            
        </div>
      
        <div class="img2welcome grid-item col">
            <img src="img/trophees/COUPE_DU_TRONE1.png" class="row-1" alt="">
            <span class="row-1 coupedutone8">8</span>
            
        </div>
  
        <div class="img4welcome grid-item">
            <img src="img/trophees/caf2 1.png"  class="row-1" alt="">
            <span class="row-1 caf2">2</span>
            
        </div>
        <div class="img5welcome grid-item">
            <img src="img/trophees/supercoupe 1.png"  class="row-1" alt="">
            <span class="row-1 supercoupe2">2</span>
            
        </div>
        <div class="img6welcome grid-item">
            <img src="img/trophees/CAF_Cup_-_trophy 1.png"  class="row-1" alt="">
            <span class="row-1 caf1">1</span>
            
        </div>
        <div class="img7welcome grid-item">
            <img src="img/trophees/afro-as 1.png"  class="row-1" alt="">
            <span class="row-1 afro1">1</span>
            
        </div>
    </div>
    

</div>






<div class="footer1 row">
    <div class="imgfooter1 col-3">
        {{-- <img src="img/footer/logo.png" alt=""> --}}
        <img src="img/sponsor/logoocp.png" class="ocpimage"   alt="">

    </div>
    <div class="imgfooter2 col-3">
        {{-- <img src="img/footer/logo.png" alt=""> --}}
        <img src="img/sponsor/One_Sport140820223.png" class="oneallsportimage"  alt="">

    </div>
    <div class="imgfooter3 col-3">
        {{-- <img src="img/footer/logo.png" alt=""> --}}
        <img src="img/sponsor/logo-marsa-maroc1.png"   alt="">

    </div>
    <div class="imgfooter4 col-3">
        {{-- <img src="img/footer/logo.png" alt=""> --}}
        <img src="img/sponsor/1xbet-logo-01.png" class="onexbetsponsor"  alt="">

    </div>
</div>
<br> 




<div class="testfooter2">
    <div class="footer2 row">
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/58429977a6515b1e0ad75ade1.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/apple-logo-png-dallas-shootings-don-add-are-speech-zones-used-41.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/Audi-Logo-PNG-File1.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/burger-king-png-logo-01.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/pepsi-logo-pepsi-symbol-meaning-history-png-logo-31.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/Starbucks-logo1.png"   alt="">
        </div>
    </div>
    <div class="footer2 footer3 row">
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/58429977a6515b1e0ad75ade1.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/apple-logo-png-dallas-shootings-don-add-are-speech-zones-used-41.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/Audi-Logo-PNG-File1.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/burger-king-png-logo-01.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/pepsi-logo-pepsi-symbol-meaning-history-png-logo-31.png"   alt="">
        </div>
        <div class="imgfooter2 col-2">
            <img src="img/sponsor/Starbucks-logo1.png"   alt="">
        </div>
    </div>


{{-- <div class="footer5bg"> --}}
    <div class="footer5 row">
        <div class="termsfooter col-9  row">
            <div class="privacypolicy">
                PRIVACY POLICY
            </div>
            <div class="privacypolicy termsandconditions">
                TERMS AND CONDITIONS
            </div>
            <div class="privacypolicy">
                ANTI-SLAVERY
            </div>
            <div class="privacypolicy cookiesprivacy">
                COOKIES
            </div>
            <div class="privacypolicy helpprivacy">
                HELP
            </div>
            <a href="contact" class="privacypolicy contactcouleur">
                CONTACT US
            </a>
            <div class="privacypolicy">
                ACCESSIBILITY
            </div>
            <div class="privacypolicy">
                COOKIE SETTINGS
            </div>
    
        </div>
    
        <div class="logoreseausociaux col-3 row">
            <a href="https://www.facebook.com/RajaClubAthleticOfficiel" class="imgr1">
                <img src="img/reseausociaux/icons8-facebook-24 1.png" alt="">
            </a>
            <a href="https://www.instagram.com/rcaofficiel" class="imgr2">
                <img src="img/reseausociaux/icons8-instagram-32 1.png" alt="">
            </a>
            <a href="https://www.linkedin.com/company/raja-club-athletic"  class="imgr3">
                <img src="img/reseausociaux/icons8-linkedin-50 1.png" alt="">
            </a>
            <a href="https://www.tiktok.com/@rcaofficiel"  class="imgr4">
                <img src="img/reseausociaux/icons8-tiktok-50 1.png" alt="">
            </a>
            <a  href="https://twitter.com/RCAofficiel" class="imgr5">
                <img src="img/reseausociaux/icons8-twitter-48 1.png" alt="">
                
            </a>
            <a href="https://www.youtube.com/@RajaClubAthleticOfficiel"  class="imgr6">
                <img src="img/reseausociaux/icons8-youtube-50 1.png" alt="">
                
            </a>
        </div>
    
     
    
        <div class="hrwelcomefooter">
            <hr>
        </div>
        <div class="copyrightfooter text-center">
            &copy COPYRIGHT 2023 THE RAJA CA FOOTBALL CLUB AND ATHLETIC GROUNDS LIMITED. ALL RIGHTS RESERVED. MATCH STATISTICS SUPPLIED BY OPTA SPORTS DATA LIMITED. REPRODUCED UNDER .LICENCE FROM FOOTBALL DATACO LIMITED. ALL RIGHTS RESERVED
    
    
    
    
        
        {{-- footer5 --}}
    </div>
    
{{-- </div> --}}
    
    
    
</div>












<style>
    .contactcouleur::hover{
            color: #0e5f21
        }
    .contactcouleur{
        color: white;
    }
    .allacademynews{
        font-family: 'Roboto', sans-serif;
        color: #000;
    }
    .allacademynews:hover{
        color: #127227;
    }

.welcometime{
        text-transform: uppercase;
}
    .copyrightfooter{
        text-align: center;
        width: 100%;
        max-width: 96%;

    }
    .hrwelcomefooter hr{
        width: 1200px;
        /* color: white */
        background: white;
        height: 0.3px;
        opacity: 0.1;
    }
    .hrwelcomefooter{
        margin-top: 30px;
    }
    .logoreseausociaux{
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        left: 40px;
        /* margin: 20px */
    }
    .imgr1{
        width: 35px;
    }
    .imgr2{
        width: 35px;
    }
    .imgr3{
        width: 35px;
    }
    
    .imgr4{
        width: 35px;
    }
    
    .imgr5{
        width: 35px;
    }
    .imgr6{
        width: 35px;
    }
    .helpprivacy{
        position: relative;
        left: 20px;
    }
    .cookiesprivacy{
        position: relative;
        left: 20px
    }
    .termsfooter{
        display: grid;
        /* grid-template-columns:100px 200px 100px 100px 100px 100px 100px 100px;  */
        grid-template-columns:1fr 2fr 1fr 1fr 1fr 1fr 1fr 1fr; 
        /* font-size: 10px; */
        /* letter-spacing: -0.5px */
    }
    .termsandconditions{
        position: relative;
        left: 27px
    }
    .footer5{
        background: #0A4E19;
        position: relative;
        bottom: 150px;
        /* margin: 40px; */
        padding: 50px;
        font-size: 11px;
        font-family: 'Oswald', sans-serif;



    }

    .footer1,.footer2{
        display: flex;
        align-items: center
    }
    .footer3{
        position: relative;
        bottom: 160px;
    }

    .oneallsportimage{
        position: relative;
        /* bottom: 65px; */
        right: 26px;
    }
    .onexbetsponsor{
        position: relative;
        right: 50px;
    }
    .footer2{
        margin-left: 50px;
        /* background: #127227; */
        /* margin-top: 50px; */
        height: 300px;
    }
    .testfooter2{
        background: #127227;

    }
    .botola12{
        position: relative;
        left: 48px;
    }
    .champions3{
        position: relative;
        left: 30px;
    }
    .coupedutone8{
        position: relative;
        left: 43px;
    }
    .caf2{
        position: relative;
        left: 55px;
    }
    .supercoupe2{
        position: relative;
        left:60px;
    }
    .caf1{
        position: relative;
        left:38px;
    }
    .afro1{
        position: relative;
        left:95px;
    }
    .alltropheeswelcome{
        color: #000
    }
    .copyrightfooter{
        font-family: 'Oswald', sans-serif;
        }
        .footer5bg{
        background: #0A4E19;
        position: relative;
        /* bottom: 100px; */

    }
    .testfooter2{
        height: 500px;
    }
   .scoreequipe1fixtures{
    width: 87px;
    position: relative;
    right: 25px;
    height: 60px;
   }
   .font-size-sm{
    font-size: 16px
   }
   body {
  overflow-x: hidden;
}
</style>

</body>
</html>