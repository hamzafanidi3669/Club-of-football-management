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
            position: relative;
            left: 20px;
        }
        .supprimernews:hover{
            color: green

        }
        .welcometitre1col1 span{
            /* position: relative; */
            /* right: 150px; */
        }
        .khoya{
            position: relative;
            right: 10px;
        }
        body{
  overflow-x: hidden;
}
</style>





   
{{-- lli jam3ahom kamlin --}}
<div class="welcomenewsall">
    {{-- lli jam3a ster lowl --}}
                <div class="welcomenewsline1 row">
    {{-- lli jam3a div kamla lowla --}}
    
        
    @foreach ($allnews as $i)
        
                    <a href="news?id={{$i->id}}" class="welcomenews1 col-xl-4 col-md-6">
                        <div class="welcomeimg1">
                            <img src="img/news/{{$i->image}}" class="welcomeimgnews"  alt="">
                        </div> <br> <br>
                        <div class="welcomehours1">
                            <span class="testhover1 newstime">{{ $i->publishedAt()->diffForHumans() }}</span>
                        </div>
                        @if(Auth::check())
                    @if(Auth::user()->type == 'admin')
                    <form action="deletenews?id={{$i->id}}" method="post" class="welcometitre1 row">
                        @csrf
                        <div class="col-10">
                            <span class="testhover1 khoya">{{$i->titre}}</span>
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

    {{-- {{ $allnews->links('custom-pagination', ['nextPageUrl' => 'Voir plus']) }} --}}
    {{-- linkito m3a lview custom-pagination --}}

                {{-- had div dyal line1 --}}
    
                </div> 
                
                {{-- had div dyal koolshi --}}
            </div>
            <br> <br> <br>
    
            {{ $allnews->links('custom-pagination', ['nextPageUrl' => 'Voir plus']) }}
    
@endsection
@section('styles')
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="stylewelcome.css">
<link rel="stylesheet" href="styleallnews.css">
<link rel="stylesheet" href="stylecustompagination.css">


@endsection

{{-- ana ra khdam bview whda lli hya news w3la 7sab lcontroller huwa lli ghywrik --}}