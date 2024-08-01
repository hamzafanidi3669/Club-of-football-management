{{-- view
@foreach($academynew as $academy)
{{$academy->id}}
@endforeach
 --}}




@extends('layouts.news')
@section('content')
<x-navbar/>
<br> <br> <br> <br>


    
    @foreach ($academynew as $academy)
        <div class="imgnewsdiv text-center">
            <img src="img/academynews/{{$academy->image}}" class="imgallnews imgnew" alt="">
        </div>
        <h2 class="wraptest text-center">{{$academy->titre}}</h2>
<div class="contentnews1">
    <div class="contentnews">
        <p class="contentnews2 text-center">{{$academy->content}}</p>
    </div>
    
</div>
        
        
    @endforeach


    
@endsection
@section('title')
    {{$academy->titre}}
@endsection
@section('styles')
<link rel="stylesheet" href="stylenews.css">
<link rel="stylesheet" href="bootstrap.min.css">
@endsection

{{-- ana ra khdam bview whda lli hya news w3la 7sab lcontroller huwa lli ghywrik --}}