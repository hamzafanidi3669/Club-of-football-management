
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleregister.css">
    <link rel="stylesheet" href="bootstrap.min.css">

    
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap');
</style>



</head>

<body class="registerbody">
<!-- khsni nder xnavbar hna wlkin kanl9a un prob dyal links -->
<x-navbar/>
<br> <br> <br>

    <div class="registercontent">
        <div class="registerwhykamla1">

            <div class="registerwhykamla row ">
                <div class="whytitre">
                    <p class="text-center registertitrecentral">Why join RajaM3ana?</p>

                </div>
                <div class="whysoustitre">
                    <p class="text-center">Unlock new, exciting and exclusive benefits all in one place.
                        Join MyLFC, your FREE,Official LFC Account.</p>
                </div>
                <div class="whytrophees">
                    <ul class="registerul">
                        <li class="text-center registerli">The chance to win amazing prizes every week</li>
                        <li class="text-center registerli">Unlock behind-the-scenes videos</li>
                        <li class="text-center registerli">Follow the match with live commentary</li>
                        <li class="text-center registerli">Keep up to date through the Club newsletter</li>
                        <li class="text-center registerli">Read exclusive interviews in the eMagazine</li>
                        <li class="text-center registerli">Play EA Sports FIFA 23 at LFC Gaming</li>
                        <li class="text-center registerli">Join the conversation on LFC Fan Forums</li>
                        <li class="text-center registerli">Earn even more benefits and rewards</li>
                    </ul>
                    <div class="registerlogin">
                        <p class="text-center registeralready1">Already have an account? <a class="registera" href="login">Log In</a> </p>
                    </div>
                </div>
                
            </div>



        </div>
        <br> <br> <br>






        <div class="registerform">


            <!-- -->
            <form  action="{{ route('register') }}" method="post">
        @csrf
        
                
            <div class="names row">
                <div class="firstname col-6 registerinput-field">
                    <input type="text"name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" required spellcheck="false" >
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" /> 
                    <label>First Name</label>
                </div> 



                <div class="lastname col-6 registerinput-field">
                    <input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname"> 
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    <label>Last Name</label>
                </div> 
            </div>



            <br> <br>


            <div class="email_date row">

                <div class="email col-6 registerinput-field">
                    <input  required spellcheck="false" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email"> 
                    <label for="email">Email</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div> 
                <div class="date col-6 registerinput-field">
                    <input  required spellcheck="false"  name="date" id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autocomplete="date"> 
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    
                </div> 
            </div>



            <br> <br>




            <div class="passwords row">
                <div class="password col-6 registerinput-field">
                    <input  required spellcheck="false" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"> 
                    <label for="password">password</label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div> 

                <div class="comfirmpassword col-6 registerinput-field">
                    <input  required spellcheck="false" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"> 
                    <label for="password_confirmation">comfirmpassword</label>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                </div> 
            </div> 





               <br>

                <div class="registerconseilpasswords ">
                    <p class="registertitreh4">For your security please ensure your password</p>
                    <p>Is between 8 and 30 characters long</p>
                    <p>Contains a mix of upper (capital) and lower case letters</p>
                    <p>Contains at least one number</p>
                    <p>Contains at least one special character (* : @ | # % , . ; [ ] { } ? - _ ~ $ &   “ ^ ( ) / !
                            `)</p>

                </div>




<br> <br>


                <div class="villesexe row">

                <div class="villee col-6 registerinput-field">
                        <input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autocomplete="ville"  spellcheck="false"> 
                        <label for="ville">ville</label>
                        <x-input-error :messages="$errors->get('ville')" class="mt-2" />

                    </div> 

                    
    
                    <div class="sexe col-6 registerinput-field">
                        <input id="sexe" class="block mt-1 w-full" type="text" name="sexe" :value="old('sexe')" required autocomplete="sexe"  spellcheck="false"> 
                        <label for="sexe">sexe</label>
                        <x-input-error :messages="$errors->get('sexe')" class="mt-2" />

                    </div> 
                </div> 









<br> <br>




                <div class="telephoneadresse row">

                    <div class="telephone col-6 registerinput-field">
                        <input   id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autocomplete="Telephone"  spellcheck="false" > 
                        <label for="telephone">telephone</label>
                        <x-input-error :messages="$errors->get('telephone')" class="mt-2" />

                    </div> 
    
                    <div class="adresse col-6 registerinput-field">
                        <input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse"> 
                        <label for="adresse">adresse</label>
                        <x-input-error :messages="$errors->get('adresse')" class="mt-2" />

                    </div> 
                </div> 


<br> <br>
                


                






            
 

            <div class="registerbtndiv">
                <div class="">
                    <button name="register" class="registerbtn">Register Now</button>
                </div>


                <div class="registerAlready2">
                    <p>Already have an account? <a class="registera" href=""> Log In</a></p>
                </div>
            </div>

            </form>
        </div>
    </div>






   

 
    </body>

</html>














