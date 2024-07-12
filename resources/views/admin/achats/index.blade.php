@extends("homeadmin")
@section('title','EasyShop- Gestion des achats')
@section("content")

<div class="container mt-3">
        <div class="text-center py-5">
<<<<<<< HEAD
        <h1 >Bienvenue dans l'espace d'administration de EasyShop<h1>
=======
        <h1 class="mt-5" >Bienvenue dans l'espace d'administration de EasyShop<h1>
>>>>>>> 7182a1c (site e-commerce easyShop final)
        </div>
        
        <div class="d-flex justify-content-between">
            <h3>Voici la liste des achats client</h3>
        </div>
        <div>
        <table class="table table-striped ">
            <thead>
                <tr>
                <th class="col-3">Client</th>
                <th class="col-3">Produit</th>
                <th class="col-3">Details_Commandes</th>
                <th class="col-3">Quantité</th>
                <th class="col-3">Transactions_Ref</th>
<<<<<<< HEAD
                <th class="col-3">Actions</th>
=======
>>>>>>> 7182a1c (site e-commerce easyShop final)
                </tr>    
            </thead>
            <tbody>
                @foreach($achats as $achat)
                <tr>
                <td>{{\App\Models\User::select('name')->where('id','=',$achat->user_id)->value('name')}} <br>
                    {{\App\Models\User::select('email')->where('id','=',$achat->user_id)->value('email')}}
                </td>
                <td>{{$achat->produit}}</td>
<<<<<<< HEAD
                <td>{{$achat->taille}} <br>
                    {{$achat->couleur}} 
=======
                <td> Taille: {{$achat->taille}} </br>
                     Couleur: {{$achat->couleur}} 
>>>>>>> 7182a1c (site e-commerce easyShop final)
                </td>
                <td>{{$achat->quantité}} ({{number_format($achat->total,thousands_separator:' ')}}FCFA)</td>
                <td>{{$achat->Transaction_Ref}} 
                </td>
<<<<<<< HEAD
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <form action="" method="post">
                        @csrf
                        <button class="btn btn-primary ml-2">Valider</button>
                        </form>  
                    </div>
                </td>
=======
>>>>>>> 7182a1c (site e-commerce easyShop final)
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>
        {{$achats->links()}}
@endsection
