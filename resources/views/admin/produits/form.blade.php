@extends("homeadmin")
@section("title",$produit->exists ? "Modifier le bien":"Creer le bien")
@section("content")
<<<<<<< HEAD
<div class="container my-3">
=======
<div class="container my-5">
<div style="height:2px" class="mb-5"></div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
    <h2>@yield('title')</h2>
    <form  class="vstack gap-5" method="post" action="{{route($produit->exists? 'admin.property.update':
    'admin.property.store',$produit)}}" enctype="multipart/form-data">
        @csrf
        @method($produit->exists? 'put':'post')
        <table class="table-striped">
            <tbody>
            <tr>
                <th class="col-4">
                    <div class="row d-flex flex-column ml-2">
                        <div class="col">
                        <label for="">Nom du produit</label>
<<<<<<< HEAD
                        <input type="text" placeholder="" value="{{old('nom',$produit->Nom)}}" class="form-control" name="nom">
                        @error('nom')
                        {{$message}}
=======
                        <input type="text" placeholder="" value="{{old('nom',$produit->Nom)}}" class="form-control" name="Nom">
                        @error('Nom')
                        <div class="text-danger">{{$message}}</div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        @enderror
                        </div>
                        <div class="col">
                        <label for="">Prix du produit</label>
<<<<<<< HEAD
                        <input type="text" placeholder="" value="{{old('prix',$produit->Prix)}}" name="prix" class="form-control">
                        @error('prix')
                        {{$message}}
=======
                        <input type="text" placeholder="" value="{{old('prix',$produit->Prix)}}" name="Prix" class="form-control">
                        @error('Prix')
                        <div class="text-danger">{{$message}}</div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        @enderror
                        </div>
                        <div class="col">
                        <label for="">Image du produit</label>
                        <input type="file" placeholder="" class="form-control" name="image">
                        @error('image')
<<<<<<< HEAD
                        {{$message}}
                        @enderror
                        </div>
                        <label for="">Categorie du produit</label>
                        <select name="categorie" >
=======
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <label for="">Categorie du produit</label>
                        <select name="categorie_id" >
>>>>>>> 7182a1c (site e-commerce easyShop final)
                            <option value="">Sélectionner une categorie</option>
                            @foreach($categories as $categorie)
                            <option @selected(old('categorie',$categorie->id)==$produit->categorie_id) value="{{$categorie->id}}">{{$categorie->Nom}}</option>
                            @endforeach
                        </select>
<<<<<<< HEAD
                        @error('categorie')
                        {{$message}}
=======
                        @error('categorie_id')
                        <div class="text-danger">{{$message}}</div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        @enderror
                        <label for="">Stock disponible</label>
                        <input name="Stock_disponible" placeholder="" value="{{old('Stock_disponible',$produit->Stock_disponible)}}" type="number" class="form-control">
                        @error('Stock_disponible')
<<<<<<< HEAD
                        {{$message}}
=======
                        <div class="text-danger">{{$message}}</div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        @enderror
                        <label for="">Description du bien</label>
                        <textarea name="Description" id="">{{old('Description',$produit->Description)}}</textarea>
                        </div>
                    </div>
            </th>
            <th class="col-4">
                <div class="row my-3 d-flex flex-column">
                    <div class="col">
                    @if($produit->image)
                    <img style="width:400px;height:300px;" src="\storage\{{$produit->image}}" alt="">
                    @endif
                    </div>
                    <div class="col">
                    <button style="width:300px" class="btn btn-primary mt-3 ml-5">
                    @if($produit->exists)
                    Modifier
                    @else
                    Creer
                    @endif
                    </button> 
                    </div>
                </div>    
            </th>
            </tr>
            </tbody>
        </table>  
    </form>
</div>

@endsection