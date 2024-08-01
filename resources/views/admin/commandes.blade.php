{{-- hii --}}
<x-navbar/>
 <br> <br> <br>
<style>

</style>


<h3 class="text-center">PRODUCTS</h3>
<br> <br>
{{-- <form action="commandepayee" method="post"> --}}
    {{-- @csrf --}}
    {{-- <input type="hidden" name="type_commande" value=""> --}}
    {{-- <button id="btn-commandes-payees" class="btn btn-success">Commandes Non Payee</button> --}}
    <a href="commandenonpayee" class="btn btn-success">Commandes Non Payee</a>
    <a href="commandepayee" class="btn btn-success">Commandes Payee</a> <br> <br>
    <a href="exportationdonnéesxml" class="btn btn-success">Exportation donnees</a>  
    <a href="import" class="btn btn-success">Importation donnees</a> 


{{-- </form> --}}

<table class="table table-stripped">
    <thead>
        <tr>
            <th>ID COMMANDE</th>
            <th>NOM PRODUIT</th>
            <th>TYPE COMMANDE</th>
            <th>USER ID</th>
            <th>ACTIONS</th>
        </tr>
        
    </thead>
    <tbody>
        @foreach($details_commande as $detail)
        @if($detail->commande->ticket=='non')



    <tr  class="commande-row" data-payee="false">
        <td>{{$detail->commande->id}} </td>
        {{-- @if($detail->commande->ticket=='non') --}}
        <td>{{$detail->produit->designation_produit}} </td>
        <td>{{$detail->commande->type_commande}}</td>
        <td>{{$detail->commande->user_id}}</td>
        <td>
            <a href="acceptercommande?id={{$detail->commande->id}}&commande_type={{$detail->commande->type_commande}}" class="btn btn-success">ACCEPTER</a>
            <a href="refusercommande?id={{$detail->id}}&commande_id={{$detail->commande->id}}" class="btn btn-danger">REFUSER</a>
        </td>
    </tr>
    @endif

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
            <th>TYPE COMMANDE</th>
            <th>USER ID</th>
            <th>MATCHEID</th>
        </tr>
        
    </thead>
    <tbody>
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
  
</script>