@extends("homeafter")
@section("title",'EasyShop- Boutique')
@section('content')
<div class="container">
 <p style="font-size:20px;font-weight:bold" class="text-center"><em style="font-size:22px;">EasyShop</em> votre boutique en ligne ou vous trouvez des produits de qualité </br>
  pour vos besoins de tous les jours.Votre satisfaction notre priorité.
</p>
</div>
<div class="container-fluid mt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h6 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Rechercher un bien </br>selon votre critère</span></h6>
<<<<<<< HEAD
                <div class="bg-light p-4 mb-30">
=======
                <div style="border-radius:10%;border:1px solid white;" class="bg-light p-4 mb-30">
>>>>>>> 7182a1c (site e-commerce easyShop final)
                    <form action="{{route('user.rechercher')}}" method="get">
                        @csrf
                        <div class="d-flex align-items-center flex-column justify-content-between mb-3">
                        <label for="">Entrer votre buget maximum</label>
                        <input type="number"  name="Prix" value="{{$input?? ''}}" class="form-control" placeholder="Budget maximum">
                        @error('Prix')
                        {{$message}}
                        @enderror
                        </div>
                        <div class="d-flex align-items-center flex-column justify-content-between mb-3">
                        <label for="">Choisissez votre categorie</label>
                        <select name="categorie_id"  class="form-control">
                            <option value="">Sélectionner une catégorie</option>
                            @foreach($categories as $categorie)
                            <option @selected(old('categorie_id',$categorie->id)==$categorievoulu) value="{{$categorie->id}}">{{$categorie->Nom}}</option>
                            @endforeach
                        </select>
                        @error('Prix')
                        {{$message}}
                        @enderror
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                        <button type="submit" class="btn btn-primary ml-5 ">Rechercher</button>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @forelse($touslesproduits as $produit)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
<<<<<<< HEAD
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img style="width:400px;height:300px" class="img-fluid w-100" src="/storage/{{$produit->image}}" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-truncate" href="{{route('user.montrerunbien',['slug'=>$produit->getSlug(),'produit'=>$produit])}}"><strong>{{$produit->Nom}}</strong></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5 style="font-size:20px;"><strong>{{number_format($produit->Prix,thousands_separator: ' ')}}FCFA</strong></h5>
=======
                        <div style="border-radius:10%;border:1px solid white;" class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                            @if($produit->Stock_disponible == 0)
                                <div style="position:absolute;font-weight:bold;" class="text-danger ml-2">
                                    En rupture de stock
                                </div>
                            @endif
                                <img style="width:400px;height:300px;" class="img-fluid w-100" src="/storage/{{$produit->image}}" alt="">
                            </div>
                            <div class="text-center py-4">
                         @cannot('delete',$produit)
                            @if($produit->Stock_disponible > 0)
                            <a class="h6 text-truncate" href="{{route('user.montrerunbien',['slug'=>$produit->getSlug(),'produit'=>$produit])}}"><strong>{{$produit->Nom}}</strong></a>
                            @endif
                            @if($produit->Stock_disponible == 0)
                            <span class="h6  text-truncate" >{{$produit->Nom}}</span>
                            @endif
                        @endcannot
                        @can('delete',$produit)
                        <span class="h6  text-truncate" >{{$produit->Nom}}</span>
                        @endcan
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5 style="font-size:20px;"><strong>{{number_format($produit->Prix,thousands_separator: ' ')}} FCFA</strong></h5>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div  style="font-size:25px" class="text-center">
                            Aucun bien ne correspond a votre recherche 
                        </div>
                    @endforelse
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
    {{$touslesproduits->links()}}

@endsection