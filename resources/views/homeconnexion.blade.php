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

    <link 
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    >

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <script src="{{ asset('js/profile.js') }}"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
@vite('resources/js/app.js')
    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-5">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="col-lg-4 pt-3">
                    <a href="" class="text-decoration-none d-flex">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">Easy</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                    </a>
                </div>
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
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
                       
    <div class="container mt-3">
    @if(session('success'))
     <div class="alert alert-success">
        {{session('success')}}
     </div>
    @endif
    </div>
    
        @yield("content")

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