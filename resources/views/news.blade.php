
@extends('layouts.news')
@section('content')
<x-navbar/>
<br> <br> <br> <br>


    
    @foreach ($news as $i)
        <div class="imgnewsdiv text-center">
            <img src="img/news/{{$i->image}}" class="imgallnews imgnew" alt="">
        </div>
        <h2 class="text-center">{{$i->titre}}</h2>  <br> <br>
<div class="contentnews1">
    <div class="contentnews">
        <p class="contentnews2 text-center">{{$i->content}}</p>
    </div>
    
</div>
        
        
    @endforeach


    
@endsection
@section('title')
    {{$i->titre}}
@endsection
@section('styles')
<link rel="stylesheet" href="stylenews.css">
<link rel="stylesheet" href="bootstrap.min.css">
@endsection

{{-- ana ra khdam bview whda lli hya news w3la 7sab lcontroller huwa lli ghywrik --}}