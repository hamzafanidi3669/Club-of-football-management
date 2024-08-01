<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <style>
.rje3{
    margin-left:auto;
    margin-top:25px;
    margin-right:13px;

    
}
@media(max-width:640px){
    .divlbyda{
        /* width:400px; */
        /* height:200px; */
        /* margin:50px; */
        max-width:500px;


    }
    .socialmedia{
    /* display: grid; */
    /* justify-content:center; */
    margin-left:45px;
    

}


}

@media(max-width:570px){
    .divlbyda{
        /* width:400px; */
        /* border:red 1px solid; */
        /* height:200px; */
        /* margin:50px; */
        max-width:450px;

        


    }
    .socialmedia{
    /* display: grid; */
    position: relative;
    right:30px;

    /* justify-content:center; */

}   }  


@media(max-width:420px){
    .divlbyda{
        /* width:400px; */
        /* border:red 1px solid; */
        /* height:200px; */
        /* margin:50px; */
        max-width:350px;

        


    }
    .socialmedia{
    /* display: grid; */
    position: relative;
    right:80px;

    /* justify-content:center; */

}   } 










</style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <a href="/authbreezebackend/public/" class="rje3 ">
                <i class="fa fa-window-close fa-2x"></i>
            </a>

            <div class="w-full sm:max-w-md  px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden  divlbyda">
            <!-- sm:max-w-md -->
            <!-- sm:max-w-md -->
            <!-- <div class="container  bg-primary"> -->
                <!-- hadihya dik div lli jam3a kulshi lli bghet n7yd -->
                {{ $slot }}
            </div>
            <!-- </div> -->
        </div>
    </body>
</html>

