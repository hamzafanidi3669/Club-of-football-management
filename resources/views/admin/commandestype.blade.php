{{-- hii --}}
<x-navbar/>
 <br> <br> <br>
<style>

</style>


<h3 class="text-center">PRODUCTS</h3>
<br> <br>
{{-- <form action="commandepayee" method="post">
    @csrf --}}
    {{-- <input type="hidden" name="type_commande" value=""> --}}
    {{-- <button id="btn-commandes-payees" class="btn btn-success">Commandes Payee</button> --}}
    
    <a href="commandenonpayee" class="btn btn-success @if(Request::is('commandenonpayee')) activecommandes @endif">Commandes Non Payee</a>
    <a href="commandepayee" class="btn btn-success @if(Request::is('commandepayee')) activecommandes @endif">Commandes Payee</a>
    <a href="exportationdonnéesxml" class="btn btn-success">Exportation donnees</a>  
    <a href="import" class="btn btn-success">Importation donnees</a> 
{{-- </form> --}}

<table class="table table-stripped">
    <thead>
        <tr>
            <th>ID COMMANDE</th>
            <th>NOM PRODUIT</th>
            <th>payee ula mzl</th>
            <th>USER ID</th>
           
        </tr>
        
    </thead>
    <tbody>
        {{-- @foreach($details_commande as $detail) --}}
        @foreach($commandes as $commande)

        @if($commande->ticket=='non')

        @foreach($commande->details_commande as $detail)
        {{-- @foreach ($commande->details_commande as $detail) --}}

    <tr  class="commande-row" data-payee="false">
        <td>{{$commande->id}} </td>
        {{-- @if($detail->commande->ticket=='non') --}}
        <td>{{$detail->produit->designation_produit}}</td>
        {{-- <td>{{$commande->produit->designation_produit}} </td> --}}
        <td>{{$commande->type_commande}}</td>
        <td>{{$commande->user_id}}</td>
        @if($commande->type_commande=='nonpayee')
        <td>
            <a href="acceptercommande?id={{$commande->id}}&commande_type={{$commande->type_commande}}" class="btn btn-success">ACCEPTER</a>
            <a href="refusercommande?id={{$detail->id}}&commande_id={{$commande->id}}" class="btn btn-danger">REFUSER</a>
        </td>
        @endif
    </tr>
    @endforeach
    @endif

    {{-- @endforeach --}}
    @endforeach

    </tbody>
</table>











<h3 class="text-center">Tickets</h3>
<br> <br>

<table class="table table-stripped">
    <thead>
        <tr>
            <th>ID COMMANDE</th>
            <th>MATCHE</th>
            <th>payee ula mzl</th>
            <th>USER ID</th>
            <th>Matche ID</th>
        </tr>
        
    </thead>
    <tbody>
        {{-- @foreach($details_commande as $detail) --}}
        @foreach($commandes as $commande)
        @foreach($commande->details_commande as $detail)

        @if($commande->ticket=='oui')


    <tr>
        <td>{{$commande->id}} </td>
        {{-- @if($detail->commande->ticket=='non') --}}
        <td>{{$detail->ticket->matche->nom_equipe_domicile}} vs {{$detail->ticket->matche->nom_equipe_exterieur}}</td>
        <td>{{$commande->type_commande}}</td>
        <td>{{$commande->user_id}}</td>
        <td>{{$detail->ticket->matche->id}}</td>
        @if($commande->type_commande=='nonpayee')
        <td>
            <a href="acceptercommande?id={{$commande->id}}&commande_type={{$commande->type_commande}}" class="btn btn-success">ACCEPTER</a>
            <a href="refuserticket?id={{$detail->id}}&ticket_id={{$detail->ticket_id}}&commande_id={{$commande->id}}" class="btn btn-danger">REFUSER</a>
        </td>
        @endif
        
    </tr>

    @endif

    @endforeach
    @endforeach

    </tbody>
</table>

















<script>
    document.getElementById('btn-commandes-payees').addEventListener('click', function() {
        // Filtrer les commandes affichées pour n'afficher que les commandes payées
        var commandes = document.querySelectorAll('.commande-row');
        for (var i = 0; i < commandes.length; i++) {
            var commande = commandes[i];
            if (commande.dataset.payee === 'false') {
                commande.style.display = 'none';
            }
        }
    });
</script>
<style>
    .activecommandes{
        background-color: #dfdfdf;
        border: none;
    }
    .activecommandes:hover{
        background-color: #dfdfdf;
        border: none;
        /* cursor:cell */
    }
</style>