<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<<<<<<< HEAD
=======
    <link 
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    >

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <script src="{{ asset('js/profile.js') }}"></script>

    <script amount="{{$total}}" 
        callback="{{route('paiement.succes')}}"
        data="Régler le panier"
        position="right" 
        theme="#0095ff"
        sandbox=true
        key="3d4fdbe032e811ef96e18159e530ffed"
        src="https://cdn.kkiapay.me/k.js">
    </script>

>>>>>>> 7182a1c (site e-commerce easyShop final)
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<<<<<<< HEAD
    @vite('resources/js/app.js')
    <!-- Topbar Start -->
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Easy</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                    @auth
                    <form class="" action="{{route('user.deconnexion')}}" method="post">
                    @csrf
                    @method("delete")
                    <button class="my-auto btn btn-primary">
                        Déconnexion
                    </button>
                    </form>
                    @endauth
                    @guest
                    <div>
                    <a style="text-decoration:none" class="btn btn-primary" href="{{route('user.connexion')}}" class="my-auto">
                        Connexion
                    </a>
                    <a style="text-decoration:none" class="btn btn-primary ml-2" href="{{route('user.inscription')}}" class="my-auto">
                        Inscription
                    </a>
                    </div>
                   @endguest
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="" class="nav-item nav-link">Vêtements</a>
                        <a href="" class="nav-item nav-link">Chaussures</a>
                        <a href="" class="nav-item nav-link">Outis_Informatiques</a>
                    </div>
                </nav>
=======
@vite('resources/js/app.js')
    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="col-lg-4 pt-3">
                    <a href="" class="text-decoration-none d-flex">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">Easy</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                    </a>
                </div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Easy</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
<<<<<<< HEAD
                            <a href="{{route('user.accueil')}}" class="nav-item nav-link active">Accueil</a>
                            <a href="{{route('user.boutique')}}" class="nav-item nav-link">Boutique</a>
                            <a href="{{route('user.contact')}}" class="nav-item nav-link">Contact</a>
                            @can('delete',$produit)
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">EspaceVendeur<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{route('admin.property.index')}}" class="dropdown-item">Gestion des produits</a>
                                    <a href="{{route('admin.categorie.index')}}" class="dropdown-item">Gestion des categories</a>
                                </div>
                            </div>
                            @endcan
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="{{route('user.voirepanier')}}" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="font-size:15px;font-weight:bold;padding-bottom: 2px;">Panier</span>
                            </a>
                            @auth
                            <div class="">
                            <a href="#" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                             <span class="" style="font-weight:bold;color:light;font-size:20px">{{\Illuminate\Support\Facades\Auth::user()->name .' '.\Illuminate\Support\Facades\Auth::user()->secondname }}</span>
                            </div>
                            @endauth
=======
                             @can('delete',$produit)
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">EspaceVendeur<i class="fa fa-angle-down ml-1 mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{route('admin.property.index')}}" class="dropdown-item">Gestion des produits</a>
                                    <a href="{{route('admin.categorie.index')}}" class="dropdown-item">Gestion des categories</a>
                                    <a href="{{route('admin.achat')}}" class="dropdown-item">Gestion des achats</a>
                                </div>
                            </div>
                            @endcan
                            <a href="{{route('user.accueil')}}" class="nav-item nav-link active">Accueil</a>
                            @cannot('delete',$produit)
                            <a href="{{route('user.boutique')}}" class="nav-item nav-link">Boutique</a>
                            <a href="{{route('user.contact')}}" class="nav-item nav-link">Contact</a>
                            @endcannot
                        </div>
                        <div style="" class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <div style="display:flex;flex-direction:row;align-items:center;" class="nav-item dropdown">
                                <a href="{{route('user.voirepanier')}}" class="btn px-0 ml-5">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="font-size:15px;font-weight:bold;padding-bottom: 2px;"></span>
                                </a>
                                <a href="#" class="nav-link dropdown-toggle ml-3"  data-toggle="dropdown">
                                    <div id="profile-blog">
                                    <img style="height:30px;border-radius:20px" class="img-fluid ml-3" src="{{asset('img/profile.jpg')}}" alt="profile">
                                    @auth{{\Illuminate\Support\Facades\Auth::user()->rôle}}@endauth
                                    @guest <span>profile</span>@endguest
                                    <i class="fa fa-angle-down mr-2 mt-1"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0 ml-5">
                                    @auth
                                    <div  id="infos-user" class="dropdown-item">
                                    <i class="fa-regular fa-user"></i>
                                    <span style="font-weight:bold">{{\Illuminate\Support\Facades\Auth::user()->name .' '.\Illuminate\Support\Facades\Auth::user()->secondname }}</span>
                                    </div>
                                    <div class="dropdown-item d-flex flex-row">
                                     <i class="fa-solid fa-arrow-right-from-bracket mt-2"></i>
                                     <form class="" action="{{route('user.deconnexion')}}" method="post">
                                     @csrf
                                     @method("delete")
                                     <button id="deconexion"  class=" btn btn-primary">
                                       Déconnexion
                                     </button>
                                    </form>
                                    </div>
                                    @endauth
                                    @guest
                                    <a href="{{route('user.inscription')}}" class="dropdown-item">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span id="action-user">Inscription</span>
                                    </a>
                                    <a href="{{route('user.connexion')}}" class="dropdown-item">
                                     <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                     <span id="action-user">Connexion</span>
                                    </a>
                                    @endguest
                                </div>
                            </div>
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
                       
<<<<<<< HEAD

=======
>>>>>>> 7182a1c (site e-commerce easyShop final)
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Produits de qualité</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Livraison gratuite</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Retour sous 14 jours</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Assistance 24h/24 et 7j/7</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
    @if(session('success'))
     <div class="alert alert-success">
        {{session('success')}}
     </div>
    @endif
    </div>
    
        @yield("content")

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5 pl-5   ">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Entrer en contact</h5>
                <p class="mb-4">Pour toute question ou besoin d'assistance n'hésitez </br>
                pas à nous contacter notre équipe dans la page contact 
               </br>notre équipe dédiée est là pour vous aider à trouver les</br> 
               chaussures, vêtements et outils informatiques parfaits pour vous.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Gbégamey, Cotonou, Bénin</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>ketikouam@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+229 54140878</p>
            </div>
            <div class="col-lg-8 col-md-12 pl-5">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"> boutique en ligne</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{route('user.accueil')}}"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                            <a class="text-secondary mb-2" href="{{route('user.boutique')}}"><i class="fa fa-angle-right mr-2"></i>Boutique</a>
                            <a class="text-secondary mb-2" href="{{route('user.contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5 ">
<<<<<<< HEAD
                        <h5 class="text-secondary text-uppercase mb-4">Bulletin</h5>
                        <p>Lettre d'information périodique du site</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </form>
=======
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Nous suivre</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                © Copyright 2024 Esayshop. Tous droits réservés
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    

</body>

</html>