@extends("home")

@section('title','EasyShop -Votre site web de boutique en ligne')
@section("content")
<<<<<<< HEAD
<div style="font-size:18px;" id="apropos" class="container text-center">
<em><h1 style="font-weight:bold;">A propos de EasyShop</h1></em>
<div class="d-flex flex-direction-row justify-content-around mt-3">
<div style="height:280px" class="pr-5 text-center bg-light mt-4 pt-5">
Bienvenue sur notre site, votre destination unique pour découvrir </br> une vaste
collection de vêtements tendance, de chaussures élégantes </br> et d'outils informatiques
de pointe. Que vous cherchiez à renouveler votre garderobe avec les dernières modes,
à trouver la paire de  chaussures <br> parfaite pour chaque occasion, ou à équiper votre 
bureau avec des équipe-</br>ments technologiques performants, nous avons tout ce dont vous 
avez besoin.
</div>
<img class="pl-5" style="width:700px;height:350px;" src="{{asset('img/image_apropos.jpg')}}" alt="">
</div>
</div>
<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Produits Récents</span></h2>
        <div class="row px-xl-5">
            @foreach($produitrecents as $produit)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img style="width:400px;height:300px" class="img-fluid w-100" src="\storage\{{$produit->image}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6  text-truncate" href="{{route('user.montrerunbien',['slug'=>$produit->getSlug(),'produit'=>$produit])}}">{{$produit->Nom}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5 style="font-size:20px">{{number_format($produit->Prix,thousands_separator:' ')}}<strong>FCFA</strong></h5>
=======
<div style="font-size:18px;" id="apropos" class="container-fluid text-center bg-lightgrey">
<h2 style="font-weight:bold;" class="mb-4">A propos de EasyShop</h2>
        Bienvenue sur notre site, votre destination unique pour découvrir une vaste
        collection de vêtements tendance, de chaussures élégantes  et d'outils </br> informatiques
        de pointe. Que vous cherchiez à renouveler votre garderobe avec les dernières modes,
        à trouver la paire de  chaussures parfaite </br> pour chaque occasion, ou à équiper votre 
        bureau avec des équipements technologiques performants, nous avons tout ce dont vous 
        avez besoin.
</div>
<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Produits Récents</span></h2>
        <div  class="row px-xl-5">
            @foreach($produitrecents as $produit)
            <div  class="col-lg-3 col-md-4 col-sm-6 mb- pb-1">
                <div style="border-radius:10%;border:1px solid white;" class="product-item bg-light mb-4">
                    <div  class="product-img position-relative overflow-hidden">
                        @if($produit->Stock_disponible == 0)
                        <div style="position:absolute;font-weight:bold;" class="text-danger ml-2">
                            En rupture de stock
                        </div>
                        @endif
                        <img style="width:400px;height:300px;" class="img-fluid w-100" src="\storage\{{$produit->image}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        @cannot('delete',$produit)
                            @if($produit->Stock_disponible > 0)
                            <a class="h6  text-truncate" href="{{route('user.montrerunbien',['slug'=>$produit->getSlug(),'produit'=>$produit])}}">{{$produit->Nom}}
                            </a>
                            @endif
                            @if($produit->Stock_disponible == 0)
                            <span class="h6  text-truncate" >{{$produit->Nom}}</span>
                            @endif
                        @endcannot
                        @can('delete',$produit)
                        <span class="h6  text-truncate" >{{$produit->Nom}}</span>
                        @endcan
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5 style="font-size:20px">{{number_format($produit->Prix,thousands_separator:' ')}}<strong class="ml-2">FCFA</strong></h5>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
<div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection