<x-guest-layout>
    <!-- Session Status -->

    <x-auth-session-status class="mb-4" :status="session('status')" />



    
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="google-signin-client_id" content="373032838659-md5rdtkc5oa4fludkfhb8sk8089i7u81.apps.googleusercontent.com">

    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <style>
        .rememberforgot{
            display: flex;
            justify-content:space-around;
        }
        .test{
            /* display: flex; */
            /* align-items:center; */
            margin-left:35px;
            /* float:right; */

        }
        .font{
            font-size:12px;

        }
        .btn{
            /* margin-left: 50px; */
            /* margin:30px; */
            width: 270px;
            font-weight: 600;
             border-radius: 30px;
             height: 44px;
        }
        .email:focus{
    box-shadow: 0px 0px 0px #13892D; 
    /* bash y7yd dak lbox-shadow dyal lbootstrap */
    border: 1px solid #6e6e6e;

    

}
.password:focus{
    box-shadow: 0px 0px 0px #13892D; 
    
    border: 1px solid #6e6e6e;

}
.confidentialités{
    font-size: 13px;
    margin-top:8px;
}
.container{
                width:  500px;
               
                
            }
            .google{
                width:120px;
                margin-left:100px;
                
            }

            .chil2{
                display: grid;
                justify-content:center;
            }
            a{
    color: black;
    text-decoration: underline;
    
}
a:hover{
    text-decoration: underline;
    color: #13892D;
}
.divlbyda{
    /* margin-top:20px; */
    position: relative;
    top: 50px;
}
.btntest{
    display: grid;
    justify-content:center;
}
.socialmedia{
    display: grid;
    /* justify-content:center; */

}
    </style>
</head>
<body>



        <div class="content col  ">
            <h1 class="text-center">LOGIN</h1>
            <div class="titles">
                <div class="">
                    <h6 class="h6-2 text-center ">Connectez vous maintenant pour debloquer votre accés exclusif</h6>
                    <h6 class="h6-2 text-center">au contenu et aux offres</h6> 
                </div>
                <p class="text-center">Vous n etes pas inscrit? <a href="register">Creez Un Compte</a></p>


                
            </div>




<!-- SOCIAL MEDIA -->


            <div class="socialmedia  col">
   
                    <a  href="{{ route('login.google') }}"  class="bg-success signinwithgoogle"  >
                     <img src="img/signinwithgoogle.jpeg"  alt=""> 
                     {{-- <i class="fab fa-google"></i>SIGN IN With Google --}}
                    </a>
                           
                    </a>
                </a>  
            </div> <br>


















            <!-- HR -->


            <div class="hr row parent">
            <div class="col  child">
                <hr class="">
            </div>
            <div class="col-1  chil2">
                <span class=" ouhr">Ou</span>

            </div>
            <div class="col child">
                <hr class="">
             </div>
        </div>










    <!-- form   -->

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
               
            <x-text-input id="email" class="block email mt-1 w-full" type="email" name="email" :value="old('email')"  required autofocus autocomplete="username"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block password mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"   />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>













        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> -->












        <!-- <div class="flex items-center justify-end mt-4">
            @            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
     


             <div class="gardez ">
                <input type="checkbox" class="" name="ch" id="ch"> 
                <span class="">Gardez Moi Connecté</span> &nbsp;&nbsp;
            @if (Route::has('password.request'))
                <a href="" class="">Mot De Passe Oublié?</a> <br> 
            @endif 

            </div> -->




            <!-- <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button> -->
        <!-- </div>  -->
        <br>
        <div class="btntest">
            <button class="btn btn-success">
                {{ __('Log in') }}
            <button> 
        </div>







               <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                
            </label>
        </div> -->


<!-- <br> <br> -->



<!-- RememberFORGOT -->

    <div class="rememberforgot  mt-4">

        <label for="remember_me" class="inline-flex col-7  items-center">
                <input id="remember_me" type="checkbox" class="test rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 test font text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                
        </label>







            @if (Route::has('password.request'))
                <div class="col-6  ">
                    <a class="font float underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </a>
            @endif
                </div>



               





    </div>
                <div class="confidentialités">
                    <p class="text-center" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis 
                     dignissimos tenetur.<a href="regles">Les regles de confidentialités</a></p>
                </div>



    </form>


























    <!-- <form action="">
            <label for="">Adresse Email</label> <br>
            <input type="text" class="form-control email" name="email"> <br>


            
            <label for="">Password</label> <br>
            <input type="text" class="form-control password" name="password"> <br> 
            <div class="button">
                <button name="submit" class="btn btn-success">LOGIN</button> <br>
            </div>



            <div class="gardez ">
                <input type="checkbox" class="" name="ch" id="ch"> 
                <span class="">Gardez Moi Connecté</span> &nbsp;&nbsp;
                <a href="" class="">Mot De Passe Oublié?</a> <br> 
            </div>



            <div class="confidentialités">
                <p class="text-center" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis 
                 dignissimos tenetur.<a href="">Les regles de confidentialités</a></p>
            </div>

        </form> -->
















    </body>
</html>


</x-guest-layout>

<script>
google.accounts.id.renderButton(
  document.getElementById("buttonDiv"),                
  { locale: "fr" }
);
</script>
<style>
    .btngoogle{
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  /* color: #fff; */
}

.btngoogle{
  background-color: #db4a39;
}

.btngoogle:hover {
  background-color: #c53729;
}

.btngoogle i {
  margin-right: 10px;
}
.signinwithgoogle{
    width: 200px;
    height: 48px;
  
}
.signinwithgoogle img{
    width: 100%;
    height: 100%;
}
.socialmedia{
    display: flex;
    justify-content: center
}
</style>