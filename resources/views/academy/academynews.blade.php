@extends('layouts.news')
@section('content')







<x-navbar/>
<br><br> <br>





<style>
    .welcometitre1col2{
            /* width: 10px; */
            display:flex;
            justify-content: end; 
            background: none;
            border: none;
            color: white
        }
        .welcometitre1col1admin span{
            /* position: relative;
            left: 20px; */
        }
        .supprimernews:hover{
            color: green

        }
        .addproductsstore{
            margin-left: 70px;
            font-size:20px;
            color: white
        }
        .addproductsstore:hover{
            font-size:27px;
            transition: 0.5s


        }
        body {
  overflow-x: hidden;
}
.testtitreacademy{
    position: relative;
    right: 60px;
}


</style>





@if(Auth::check())
@if(Auth::user()->type=='admin')
  <a class="addproductsstore" href="addacademynews">
    <i class="fa fa-plus-circle supprimernews" aria-hidden="true"></i>
  </a>
@endif
@endif
   
{{-- lli jam3ahom kamlin --}}
<div class="welcomenewsall">
    {{-- lli jam3a ster lowl --}}
                <div class="welcomenewsline1 row">
    {{-- lli jam3a div kamla lowla --}}
    
        
    {{-- @foreach ($allnews as $i) --}}
    @foreach ($academynews as $academy)

        
                    <a href="academynew?id={{$academy->id}}" class="welcomenews1 col-xl-4 col-md-6">
                        <div class="welcomeimg1">
                            <img src="img/academynews/{{$academy->image}}" class="welcomeimgnews"  alt="">
                        </div> <br> <br>
                        <div class="welcomehours1">
                            <span class="testhover1 newstime">{{ $academy->publishedAt()->diffForHumans() }}</span>
                        </div>
                        @if(Auth::check())
                    @if(Auth::user()->type == 'admin')
                    <form action="deleteacademynew?id={{$academy->id}}" method="post" class="welcometitre1 row">
                        @csrf
                        <div class="welcometitre1col1admin col-10">
                            <span class="testhover1 testtitreacademy">{{$academy->titre}}</span>
                        </div>
                        <button type="submit" class="welcometitre1col2 col-1">
                            {{-- <span class="">delete</span> --}}
                            <i class="fa fa-trash supprimernews" aria-hidden="true"></i>
                            {{-- <i class="fa fa-trash supprimernews" aria-hidden="true"></i> --}}
                            

                        </button>
                    </form>
                    @else
                    
                        <div class="welcometitre1">
                            <div class="welcometitre1col1">
                                <span class="testhover1">{{$academy->titre}}</span>
                            </div>
                        </div>
                        
                    @endif

                @else
                <div class="welcometitre1">
                    <div class="welcometitre1col1">
                        <span class="testhover1">{{$academy->titre}}</span>
                    </div>
                
                </div>
                @endif

                        <div class="">
                            <hr class="welcomehr">
                        </div>
                    </a>
    
    @endforeach 

    {{ $academynews->links('custom-pagination', ['nextPageUrl' => 'Voir plus']) }}
    {{-- linkito m3a lview custom-pagination --}}

                {{-- had div dyal line1 --}}
    
                </div> 
                
                {{-- had div dyal koolshi --}}
            </div>
            <br> <br> <br>
    
            {{-- {{ $allnews->links('custom-pagination', ['nextPageUrl' => 'Voir plus']) }} --}}
    
@endsection
@section('styles')
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="stylewelcome.css">
<link rel="stylesheet" href="styleallnews.css">
<link rel="stylesheet" href="stylecustompagination.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


@endsection


{{-- ana ra khdam bview whda lli hya news w3la 7sab lcontroller huwa lli ghywrik --}}