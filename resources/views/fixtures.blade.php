<x-navbar/>
<br> <br> <br>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    .equipeexterieurtickets,.equipedomiciletickets{
        text-transform:uppercase; 
        font-size: 18px;
        font-weight: 600;
    font-family: 'Roboto', sans-serif;
letter-spacing: -0.7px
    }
    .divticket{
        padding: 35px;
    }
    .btnticketdiv{
        display: grid;
        justify-content: center;
        padding: 57px;
        align-items: center
    }
    .textticket{
        height: 230px;
        padding: 20px
    }
    .matchesticket{
        padding: 10px 0;
    }
    .contenttickets{
        /* font-family: 'Bebas Neue', sans-serif; */
        /* letter-spacing: 1.7px */
    }
    .placeticketmatche,.dateticketmatche{
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 1.2px;
    }
    .divnomchampionnat{
        text-transform:uppercase; 
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 1.2px;
        /* font-size: 25px */


    }
    .nomchampionnat{
        font-size: 19px;

    }
    .btnacheterticket{
        font-family: 'Bebas Neue', sans-serif;
        font-size: 19px;
        width:200px;
        background: #13892D;

    }

    .btnacheterticket:hover,{
        background: #0e5c1f ;


    }
    .btndeleteticketelem:hover{
        color: #0e5c1f;
    }
    .btndeleteticket{
        font-family: 'Bebas Neue', sans-serif;
        font-size: 23px;
        

    }
    .btndeleteticket:hover{
        color: #0e5c1f
    }
    .textticket,.btnticketdiv{
        background: rgb(255, 255, 255);
        border-radius:7px; 
    }
    .ticketlieu{
        color: rgb(111, 111, 111)
    }
    .ticketville{
        color: rgb(124, 121, 121);
        opacity: 0.5;

    }
    .bodytickets{
        background: rgb(242, 242, 242);

    }
    .btnpdftest{
        display: none;
    }
    .linkmestickets{
        float: right;
        margin: 10px 40px;
    }
    .quantite_commadetickets{
        width: 200px
    }

</style>


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
        color: white;



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
    .footer0{
        background: #13892D
    }
    body {
  overflow-x: hidden;
}
   

    </style>
    
<body class="bodytickets">
    <div class="contenttickets">
        <div class="linkmestickets">
            @if(Auth::check())
                @if(Auth::user()->type == 'admin')
                    <a href="addmatche">add matches</a>
                @endif
                {{-- ila kan mamloguish maytl3 lya walo --}}
            @endif
        </div> <br> <br>
            {{-- link --}}
            @foreach($matches as $matche)
        <form action="acheterticket?id={{$matche->id}}" method="post">
            @csrf

            <div class="divticket row">
                <div class="textticket col-8">
                    <div class="divnomchampionnat">
                        <span class="btn btn-primary nomchampionnat">{{$matche->nom_championnat}}</span>
                    </div> 
                    <input type="hidden" value="{{$matche->id}}" name="matcheid">
                    <input type="hidden" value="{{$matche->prix_ticket}}" name="prix_ticket">
                    
                    <div class="matchesticket">
                        <span class="equipedomiciletickets">{{$matche->nom_equipe_domicile}}</span>
                        <span class="">vs</span>
                        <span class="equipeexterieurtickets">{{$matche->nom_equipe_exterieur}}</span>
                    </div>
                    <input type="number" min="1" max="5"  placeholder="Quantite" class="quantite_commadetickets" name="quantite_commande"> <br>
                    @error('quantite_commande')
                    <span style="color:red;">{{$message}}</span>
                    @enderror


                    <div class="placeticketmatche">
                        <span class="ticketlieu">{{$matche->lieu}}</span> &nbsp;
                        <span class="ticketville">{{$matche->ville}}</span>
                    </div>
                    <div class="dateticketmatche">
                        <span>{{$matche->date_matche}}</span>
                    </div>
                    
    
                </div>
                <div class="btnticketdiv col-4 col">
                    @if(Auth::check())
                        @if(Auth::user()->type == 'admin')
                            <a href="deletematcheticket?id={{$matche->id}}" class="btn btndeleteticket row-1" onclick="return confirmPayment()">
                            <i class="fa fa-trash supprimernews" class="btndeleteticketelem" aria-hidden="true"></i>

                            
                            </a> 
                        @else 
                            {{-- @if({{$matche->nom_equipe_domicile =='raja casablanca'}}) --}}
                            {{-- @if({{$matche->nom_equipe_domicile}}="raja casablanca") --}}
                            @if($matche->nom_equipe_domicile == 'raja casablanca')
                        
                            <button type="submit" class="btn btnacheterticket row-1" onclick="return confirmPayment()">Acheter Ticket</button> 
                            @endif
                        @endif
                    @else
                        {{-- @if({{$matche->nom_equipe_domicile}}=='raja casablanca') --}}
                        @if($matche->nom_equipe_domicile == 'raja casablanca')

                            <button type="submit" class="btn btnacheterticket row-1" onclick="return confirmPayment()">Acheter Ticket</button> 
                        @endif
                    @endif
                    {{-- <a href="" class="btn btn-warning row-1 btnpdftest">Test</a> --}}
                </div>
            </div>
        </form>
        
            @endforeach
    
    
    
    
    
    

    
    
    
    
    
    </div>

    


{{-- footer --}}



<div class="footer0">

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
                <div class="privacypolicy">
                    CONTACT US
                </div>
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
    
    
    
    {{-- endfooter --}}
    
</div>





















    <script>
        function confirmPayment() {
  var response = confirm("Êtes-vous sûr de vouloir effectuer le paiement ?");

  if (response) {
    // Effectuer les opérations de paiement nécessaires
    // ...
    
    // Afficher un message de confirmation à l'utilisateur
    alert("Paiement effectué avec succès !");

    // btnpdf=document.querySelector('.btnpdftest').style.display="block";
    // btnpdf.classList.remove('btnpdftest') ;

    return true; // Envoyer le formulaire
    //dir lya acheter ticket 7yd type hidden

  } else {
    return false; // Ne pas envoyer le formulaire
  }
}
    </script>
</body>
