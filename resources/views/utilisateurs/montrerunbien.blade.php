@extends("homeafter")
@section("title",$produit->Nom)
@section("content")
<<<<<<< HEAD
<div class="container">
=======
<div class="container mb-5">
>>>>>>> 7182a1c (site e-commerce easyShop final)
 <p style="font-size:20px;font-weight:bold" class="text-center"><em style="font-size:22px;">EasyShop</em> votre boutique en ligne ou vous trouvez des produits de qualité </br>
  pour vos besoins de tous les jours.Votre satisfaction notre priorité.
</p>
</div>
<<<<<<< HEAD
<div class="container mt-4 d-flex justify-content-between">
    <div class="mr-5">
        <img style="width:500px;height:500px" src="/storage/{{$produit->image}}" alt="">
    </div>
    <div class="mt-5 pt-4">
        <h2 class="mb-3">Caractéristiques du bien</h2>
        <table class="table-striped">
        <tr>
            <div class="col-3">
                <td>
                <h3>Nom</h3>
                </td>
            </div>
            <div class="col-4">
                <td>
                <span style="font-size:30px;" class="ml-5">{{$produit->Nom}}</span>
                </td>
            </div>
        </tr>    
        <tr>
            <div class="col-3">
                <td>
                <h3>Description</h3>
                </td>
            </div>
            <div class="col-4 ml-3">
                <td>
                <div style="font-size:20px;" class="ml-5">{{$produit->Description}}</div>
                </td>
            </div>
        </tr>
        <tr>
            <div class="col-3">
                <td>
                <h3>Prix</h3>
                </td>
            </div>
            <div class="col-4 ml-5">
                <td>
                <h3 class="ml-5">{{number_format($produit->Prix,thousands_separator:' ')}} <strong class="text-primary" style="font-size:30px;">FCFA</strong></h3>
                </td>
            </div>
        </tr>
        </table>
    </div>
</div>
<div class="container mt-3">
    <div>
    <p style="font-size:20px;font-weight:bold">Ce bien vous interesse t-il ? Ajouter le a votre panier! </br> 
    Mais avant veuillez preciser quelques détails.</p>
    <form class="d-flex flex-column justify-content-between" action="{{route('user.ajouterpanier',['slug'=>$produit->getSlug(),'produit'=>$produit])}}" method="get">
     @csrf
     <select class="mt-3"  style="width:300px;" name="couleur">
     <option value="">Choisissez votre couleur</option>
     <option value="Blanc">Blanc</option>
     <option value="Noire">Noire</option>
     <option value="Vert">Vert</option>
     <option value="Rouge">Rouge</option>
     <option value="Bleue">Bleue</option>
     <option value="Maron">Maron</option>
     <option value="Jaune">Jaune</option>
     <option value="Berge">Berge</option>
     <option value="Gris">Gris</option>
     <option value="N'importe">N'importe</option>
     </select>
    @error('couleur')
    {{$message}}
    @enderror
     @if ( strcasecmp($produit->categorie->Nom,'Chaussures') == 0 )
     <label for="">Entrer votre pointure</label>
     <input class="" style="width:300px;" name="taille" type="number">
     @endif
     @if ( strcasecmp($produit->categorie->Nom,'Vetements') == 0 )
     <select class="mt-3"  style="width:300px;" name="taille">
     <option value="">Choisissez votre taille</option>
     <option value="S">S</option>
     <option value="M">M</option>
     <option value="L">L</option>
     <option value="XL">XL</option>
     <option value="XXL">XXL</option>
     </select>
     @endif
     @if ( strcasecmp($produit->categorie->Nom,'Outils_Informatiques') == 0 )
     <select class="mt-3"  style="width:300px;" name="taille">
        <option value="">Choisissez votre taille</option>
        <option value="12pouces">12pouces</option>
        <option value="14pouces">14pouces</option>
        <option value="15,6pouces">15,6pouces</option>
        <option value="Pas besoin">Pas besoin</option>
     </select>
     @endif
    @error('taille')
    {{$message}}
    @enderror
    <button style="width:300px;"  type="submit" class="btn btn-primary mt-3 ml-5">Ajouter au panier</button>
    </form>
    </div>
</div>
=======

    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" style=""  src="/storage/{{$produit->image}}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$produit->Nom}}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">{{number_format($produit->Prix,thousands_separator:' ')}} <strong class="text-primary" style="font-size:30px;">FCFA</strong></h3>
                    <div >
                        <p style="font-size:20px;font-weight:bold">Ce bien vous interesse t-il ? Ajouter le a votre panier! </br> 
                        Mais avant veuillez preciser quelques détails.</p>
                        <form class="d-flex flex-column justify-content-between" action="{{route('user.ajouterpanier',['slug'=>$produit->getSlug(),'produit'=>$produit])}}" method="get">
                        @csrf
                        <div class="row">
                        <select class="mt-3 mb-3 mr-4" style="width:300px;height:40px;" name="couleur">
                        <option value="">Choisissez la couleur</option>
                        <option value="Blanc">Blanc</option>
                        <option value="Noire">Noire</option>
                        <option value="Rouge">Rouge</option>
                        <option value="Bleue">Bleue</option>
                        <option value="Jaune">Jaune</option>
                        <option value="Jaune">Celle de l'image</option>
                        <option value="N'importe">N'importe</option>
                        </select>
                        @error('couleur')
                        {{$message}}
                        @enderror
                        @if ( strcasecmp($produit->categorie->Nom,'Chaussures') == 0 )
                        <select class="mt-3" style="width:300px;height:40px;" style="width:300px;" name="taille">
                        <option value="">Choisissez la pointure</option>
                        <option value="40-41">40-41</option>
                        <option value="41-42">41-42</option>
                        <option value="42-43">42-43</option>
                        <option value="43-44">43-44</option>
                        </select>
                        @endif
                        @if ( strcasecmp($produit->categorie->Nom,'Vetements') == 0 )
                        <select class="mt-3" style="width:300px;height:40px;" name="taille">
                        <option value="">Choisissez la taille</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="Jaune">Celle de l'image</option>
                        <option value="XXL">Pas necessaire</option>
                        </select>
                        @endif
                        @if ( strcasecmp($produit->categorie->Nom,'Outils_Informatiques') == 0 )
                        <select class="mt-3"  style="width:300px;height:40px;" name="taille">
                            <option value="">Choisissez votre taille</option>
                            <option value="12pouces">12pouces</option>
                            <option value="14pouces">14pouces</option>
                            <option value="15,6pouces">15,6pouces</option>
                            <option value="Jaune">Celle de l'image</option>
                            <option value="Pas besoin">Pas besoin</option>
                        </select>
                        @endif
                        @error('taille')
                        {{$message}}
                        @enderror
                        <button style="width:300px;"  type="submit" class="btn btn-primary mt-5">Ajouter au panier</button>
                        </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Description</h4>
                            {{$produit->Description}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Vous pourriez aimer aussi</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    @foreach($produitsimilaires as $similaire)
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                        @if($similaire->Stock_disponible == 0)
                        <div style="position:absolute;font-weight:bold;" class="text-danger ml-2">
                            En rupture de stock
                        </div>
                        @endif
                            <img class="img-fluid w-100" src="/storage/{{$similaire->image}}"  alt="">
                        </div>
                        <div class="text-center py-4">
                        @cannot('delete',$produit)
                            @if($similaire->Stock_disponible > 0)
                            <a class="h6  text-truncate" href="{{route('user.montrerunbien',['slug'=>$similaire->getSlug(),'produit'=>$similaire])}}">{{$similaire->Nom}}
                            </a>
                            @endif
                            @if($similaire->Stock_disponible == 0)
                            <span class="h6  text-truncate" >{{$produit->Nom}}</span>
                            @endif
                        @endcannot
                        @can('delete',$produit)
                        <span class="h6  text-truncate" >{{$similaire->Nom}}</span>
                        @endcan
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5 style="font-size:20px">{{number_format($similaire->Prix,thousands_separator:' ')}}<strong class="ml-2">FCFA</strong></h5>
                            </div>
                        </div>
                    </div>
                 @endforeach   
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
    

>>>>>>> 7182a1c (site e-commerce easyShop final)
@endsection