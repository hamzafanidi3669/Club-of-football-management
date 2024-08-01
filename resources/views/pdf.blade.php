<link rel="stylesheet" href="bootstrap.min.css">
<style>
    .contentpdf{
        margin: 30px 150px
    }
    .contentpdf{
        display: grid;
        justify-content: center
    }
    .equipeexterieurpdf,.equipedomicilepdf{
        text-transform: uppercase;
    }
    .firstnamepdf,.lastnamepdf{
        font-size: 36px;
        text-transform: uppercase;


    }
    .quantite_ticketpdf{
        font-size: 11px
    }

    .heure_matchepdf{
        font-size: 11px
    }
    .important{
        margin: 170px 0px;
        color: red;
    }
    .personnesticket{
        /* text-decoration: underline */
        font-weight: 500
    }
</style>







<div class="contentpdf">
    <div class="partie1pdf row">
        <div class="equipespdf col-8">
            <strong class="equipedomicilepdf">{{ $data['nom_equipe_domicile'] }}</strong>
            <span>vs</span>
            <strong class="equipeexterieurpdf">{{ $data['nom_equipe_exterieur'] }}</strong> <br>
            <span class="firstnamepdf">{{ $data['firstname'] }}</span> 
            <span class="lastnamepdf">{{ $data['lastname'] }}</span>  <br> 
            <span class="prix_totalpdf">{{ $data['prix_total'] }}.00MAD /</span>  
            <span class="quantite_ticketpdf">{{ $data['quantite_ticket'] }} tickets</span> <br> <br> 
            {{-- <span class="quantite_ticketpdf">{{ $data['quantite_ticket'] }} personnes peuvent entrer avec ce ticket</span> <br> --}}
            <span class="heure_matchepdf">{{ $data['heure_matche']  }}</span> <br>


    
        </div>
        <div class="codebarpdf col-4">
            {{-- <img src="data:image/png;base64,{{ base64_encode($barcode) }}" alt="Code-barres"> --}}
            <span class="heure_matchepdf">{!! DNS2D::getBarcodeHTML($data['code_ticket'],"QRCODE")  !!}</span> 
            <span class="heure_matchepdf">{{ $data['code_ticket']  }}</span> <br>


    
        </div>
    </div>
    


    <div class="important">
        <strong>IMPORTANT:</strong> <br>
        <span class="personnesticket">CETTE TICKET DE {{$data['quantite_ticket'] }} PERSONNES ET PAS PLUS</span> <br>
        <span>Obligation de présenter le récépissé d'achat effectué via le site Raja-Club-Athletic.ma</span> <br>
        <span> Obligation d'acheter un ticket pour les mineurs</span> <br>
        <span> Obligation de présenter la Carte d’Identité Nationale physique (non photocopiée) aux guichets</span> <br>
    </div>


</div>



{{-- 
<h2>{{ $data['prix_total'] }}</h2>
<h2>{{ $data['quantite_ticket'] }}</h2>
<h2>{{ $data['date_achat_ticket'] }}</h2>
<h2>{{ $data['nom_equipe_domicile'] }}</h2>
<h2>{{ $data['nom_equipe_exterieur'] }}</h2>
<h2>{{ $data['date_matche'] }}</h2>
<h2>{{ $data['heure_matche'] }}</h2>
<h2>{{ $data['lieu_matche'] }}</h2> --}}
{{-- <h2>{{ $ticket->prix_ticket }}</h2> --}}