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
        background: rgb(255, 230, 0);

    }
    .btnacheterticket:hover{
        background: #0e5c1f;


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

</style>

<body class="bodytickets">
    <div class="contenttickets">


        @foreach($tickets as $ticket)
        {{-- {{$tickets->matche}} --}}
        
        
        <form action="telechargerpdf?id={{$ticket->id}}" method="post">
            @csrf
        
            <div class="divticket row">
                <div class="textticket col-8">
                    <div class="divnomchampionnat">
                        <span class="btn btn-primary nomchampionnat">{{$ticket->matche->nom_championnat}}</span>
                    </div> 
                    <input type="hidden" value="{{$ticket->matche->id}}" name="matcheid">
                    <input type="hidden" value="{{$ticket->matche->prix_ticket}}" name="prix_ticket">
                    

                    <input type="hidden" name="tickets_ids" value="{{ implode(',', $tickets->pluck('id')->toArray()) }}">
                    
                    <div class="matchesticket">
                        <span class="equipedomiciletickets">{{$ticket->matche->nom_equipe_domicile}}</span>
                        <span class="">vs</span>
                        <span class="equipeexterieurtickets">{{$ticket->matche->nom_equipe_exterieur}}</span>
                    </div>
                    <input type="number"  placeholder="Quantite" name="quantite_commande">
        
                    <div class="placeticketmatche">
                        <span class="ticketlieu">{{$ticket->prix_total}}</span> &nbsp;
                        <span class="ticketville">{{$ticket->quantite_ticket}}</span>
                    </div>
                    <div class="dateticketmatche">
                        <span>{{$ticket->date_achat_ticket}}</span>
                    </div>
                    
        
                </div>
                @php
                $isPaid = false;
                @endphp

                {{-- @foreach($details as $detail)
                    @if($detail->commande->type_commande == 'payee' && $detail->ticket_id == $ticket->id)
                        @php
                            $isPaid = true;
                        @endphp
                    @endif
                @endforeach --}}
                @foreach($details as $detailsCommande)
                @foreach($detailsCommande as $detail)
                    @if($detail->commande->type_commande == 'payee' && $detail->ticket_id == $ticket->id)
                        @php
                            $isPaid = true;
                        @endphp
                    @endif
                @endforeach
            @endforeach







                {{-- @if($detail->commande->type_commande=='payee') --}}
                @if($isPaid)
                <div class="btnticketdiv col-4">
                    <button type="submit" class="btn btnacheterticket">Telecharger PDF</button> 
                    {{-- <a href="" class="btn btn-warning row-1 btnpdftest">Test</a> --}}
                </div>
                @else
                <div class="btnticketdiv col-4">
                    <input type="submit" disabled class="btn btnacheterticket" value="Attendez Confirmation"/> 
                    {{-- <a href="" class="btn btn-warning row-1 btnpdftest">Test</a> --}}
                </div>
                @endif

                
                
            </div>
        </form>
        
        @endforeach
        
        
        
            
                {{-- link --}}
                {{-- @foreach($matches as $matche) --}}
            
                {{-- @endforeach --}}
        
    
        
        </div>
        
</body>
