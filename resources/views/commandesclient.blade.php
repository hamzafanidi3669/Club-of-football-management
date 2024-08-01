<x-navbar/>
<br> <br> <br>



<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix Commande</th>
            <th>Confirmation</th>
            <th>Date_Commande</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($commandes as $commande)
            @if($commande->ticket=='non')
                @foreach($commande->detailscommande as $index => $detail)
                    <tr>
                        @if($index === 0)
                            <td>{{$detail->quantite_commande}} {{$detail->produit->designation_produit}}</td>
                            <td>{{ $detail->produit->prix_produit * $detail->quantite_commande }}</td>
                            @if($commande->type_commande == 'payee')
                                <td>Confirmé</td>
                            @else
                                <td>En Cours</td>
                            @endif
                            <td>{{$commande->publishedAt()->diffForHumans()}}</td>
                            <td>
                                <a href="deletecommandeuser?id={{$commande->id}}" class="btn btn-outline-danger">DELETE COMMANDE</a>
                            </td>
                        @else
                            <td>{{$detail->quantite_commande}} {{$detail->produit->designation_produit}}</td>
                            <td>{{ $detail->produit->prix_produit * $detail->quantite_commande }}</td>
                            <td>meme commande</td>
                            <td>-</td>
                            <td>-</td>
                        @endif
                    </tr>
                @endforeach
            @endif
        @endforeach
    </tbody>
</table>
