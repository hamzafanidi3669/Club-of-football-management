<x-navbar/>
<br> <br> <br>
{{-- hadshi automatiquement kat7ett une commande 7da luser dyalha --}}
{{-- @foreach($users as $user)
iduser:{{$user->id}} 
{{$user->lastname}} 
@foreach($user->commande as $commande)
{{$commande->type_commande}}
commande id: {{$commande->id}}
user_commande_id: {{$commande->user_id}} 
<br>

@endforeach

@endforeach --}}

<table class="table table-stripped">
    <thead>
        <tr>
            <th>IDUSER</th>
            <th>LAST NAME</th>
            <th>FIRST NAME</th>
            <th>EMAIL</th>
            <th>ACTIONS</th>
        </tr>
        
    </thead>
    <tbody>
    @foreach($users as $user)
    {{-- @foreach($user->commande as $commande) --}}
        @if($user->type=="normal")

    <tr>
        <td>{{$user->id}} </td>
        <td>{{$user->lastname}} </td>
        <td>{{$user->firstname}} </td>
        <td>{{$user->email}} </td>
        

    
        <td>
            <a href="deleteuser?id={{$user->id}}" class="btn btn-danger">DELETE USER</a>
        </td>
    </tr>
    @endif
    {{-- @endforeach  --}}
    @endforeach
    </tbody>
</table>