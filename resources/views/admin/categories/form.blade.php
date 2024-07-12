@extends("homeadmin")
@section("title",$categorie->exists ? "Modifier la categorie":"Creer la categorie")
@section("content")
<<<<<<< HEAD
<div class="container my-3">
    <h2>@yield('title')</h2>
=======
<div class="container mt-5 mb-5">
    <div style="height:80px" class="mb-5"></div>
    <h2 class="mt-5" >@yield('title')</h2>
>>>>>>> 7182a1c (site e-commerce easyShop final)
    <form  class="vstack gap-5" method="post" action="{{route($categorie->exists? 'admin.categorie.update':'admin.categorie.store',$categorie)}}">
        @csrf
        @method($categorie->exists? 'put':'post')
        <div class="row">
            <div class="col-8">
            <label for="">Nom de la categorie</label>
<<<<<<< HEAD
            <input type="text" placeholder="" value="{{old('nomcat',$categorie->Nom)}}" class="form-control" name="nomcat">
            @error('nomcat')
            {{$message}}
=======
            <input type="text" placeholder="" value="{{old('Nom',$categorie->Nom)}}" class="form-control" name="Nom">
            @error('Nom')
            <div class="text-danger">{{$message}}</div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
            @enderror
            </div>
        </div>
        <button class="btn btn-primary mt-3">
        @if($categorie->exists)
            Modifier
            @else
            Creer
            @endif
        </button>
    </form>

</div>

@endsection