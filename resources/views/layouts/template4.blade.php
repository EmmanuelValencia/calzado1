<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TU-CALZADO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-dark bg-navbar navbar-dark bg-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">TU CALZADO</a>
                <div class="font-medium text-light">Hola {{ Auth::user()->name }}</div>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-light text-dark rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="user/profile">VER PERFIL</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="usuario3dos">TODOS LOS ARTICULOS</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        CERRAR SESION</a></li>
                        

                       
                       
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
 
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-secondary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                
                <h1 class="masthead-heading text-uppercase mb-0">EL MEJOR CALZADO A TU ALCANCE</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-shoe-prints fa-lg"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CATALOGO</h2>
                <br>
                <br>
                <br>
                <br>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">





                <h1>Tenis</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='tenis'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
@endforeach

<h1>Sandalias</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='sandalia'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
@endforeach


<h1>Zapatillas</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='zapatilla'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
@endforeach


<h1>Mocasines</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='mocasin'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <?php }?>
@endforeach


<h1>Botas</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='bota'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <?php }?>
@endforeach


<h1>Zapatos</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='zapato'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <?php }?>
@endforeach



<h1>Botin</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='botin'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <?php }?>
@endforeach

<h1>Crocs</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='crocs'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <?php }?>
@endforeach

<h1>Pantuflas</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='pantufla'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <?php }?>
@endforeach


<h1>Botas de agua</h1>
@foreach ($articulos as $articulo)
    <tr>
     <!-- Portfolio Item 1-->
     <?php if($articulo ->tipo=='botaagua'){ ?>
     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $articulo->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-dark"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            
                            <img class="img-fluid" src="{{ $articulo->imagen }}" alt="..." />
                            
                        </div>
                    </div>
                    
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Articulo<br>{{ $articulo->codigo }}</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fab fa-angellist"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <center><img class="img-fluid rounded mb-5" src="{{ $articulo->imagen }}" alt="..." /></center>
                                    <h3>{{ $articulo->tipo }}
                                    {{ $articulo->marca }}
                                    {{ $articulo->modelo }}</h3>
                                    
                                    <br>
                                    Precio: {{ $articulo->precio }} $
                                    <br>
                                    Talla: {{ $articulo->talla }} cm
                                    <br>
                                    Stock: {{ $articulo->disponibilidad }} disponibles
                                    <br><br>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-dark" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <?php }?>
@endforeach

                    
               




                </div>
            </div>
        </section>
       
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Puebla
                            <br />
                            
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Acerca de</h4>
                        <p class="lead mb-0">
                            emmavalop@gmail.com    
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
       
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
