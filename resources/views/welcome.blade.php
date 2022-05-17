<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Quick Links CUCEA</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="#page-top">Quick Links CUCEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/admin">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white" style="background-image: url({{asset('assets/img/bg3.jpg')}}); min-height: 900px;">
        <div class="masthead-content">
            <div class="container px-5">
                <!--
                <h1 class="masthead-heading mb-0">Quick Links</h1>
                <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                -->
            </div>
        </div>
        <!--
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
        -->
    </header>


    <!-- Categorías -->

        <div class="row" ng-init="getBuild()">
            <div class="col-sm-4 col-lg-2" *ngFor="let build of lstBuilding; let i = index">
                <a class="block block-link-pop text-center pointer BuildDiv mt-3"
                    (click)="getAppByBuild(build); getBuildToApp(build)">
                    <div class="pt-5">
                        <div class="applicationTxt">Todas</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini text-white colorBlock mb-0 pb-0"></div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-2" *ngFor="let build of lstBuilding; let i = index">
                <a class="block block-link-pop text-center pointer BuildDiv mt-3"
                    (click)="getAppByBuild(build); getBuildToApp(build)">
                    <div class="pt-5">
                        <div class="applicationTxt">Nuevo Ingreso</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini text-white colorBlock mb-0 pb-0"></div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-2" *ngFor="let build of lstBuilding; let i = index">
                <a class="block block-link-pop text-center pointer BuildDiv mt-3"
                    (click)="getAppByBuild(build); getBuildToApp(build)">
                    <div class="pt-5">
                        <div class="applicationTxt">Servicio Social</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini text-white colorBlock mb-0 pb-0"></div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-2" *ngFor="let build of lstBuilding; let i = index">
                <a class="block block-link-pop text-center pointer BuildDiv mt-3"
                    (click)="getAppByBuild(build); getBuildToApp(build)">
                    <div class="pt-5">
                        <div class="applicationTxt">Practicas Profesionales</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini text-white colorBlock mb-0 pb-0"></div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-2" *ngFor="let build of lstBuilding; let i = index">
                <a class="block block-link-pop text-center pointer BuildDiv mt-3"
                    (click)="getAppByBuild(build); getBuildToApp(build)">
                    <div class="pt-5">
                        <div class="applicationTxt">Titulación</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini text-white colorBlock mb-0 pb-0"></div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-2" *ngFor="let build of lstBuilding; let i = index">
                <a class="block block-link-pop text-center pointer BuildDiv mt-3"
                    (click)="getAppByBuild(build); getBuildToApp(build)">
                    <div class="pt-5">
                        <div class="applicationTxt">Talleres</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini text-white colorBlock mb-0 pb-0"></div>
                </a>
            </div>
        </div>


    <!-- Categorías -->



    <!-- Content section 1-->

        @php
            $class1 = '';
            $class2 = '';
            $bandera = 0;
        @endphp

        @foreach ($links as $link)

            @if ($bandera == 0)
                @php
                    $class1 = 'order-lg-2';
                    $class2 = 'order-lg-1';
                @endphp
            @else
                @php
                    $class1 = '';
                    $class2 = '';
                @endphp
            @endif

            <section id="link_{{$link->id}}" class="{{$link->carrer}}">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 {{$class1}} hola">
                            <div class="p-5"><img class="img-fluid rounded-circle"
                                    src="{{asset(Voyager::image($link->img))}}" alt="..." /></div>
                        </div>
                        <div class="col-lg-6 {{$class2}}">
                            <div class="p-5">
                                <h2 class="display-4">{{$link->name}}</h2>
                                <h6>{{$link->excerpt}}</h6>
                                <a target="_blank" href="{{$link->url}}">visitar</a>
                                <p>{{$link->body}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @if ($bandera == 0)
                @php
                    $bandera = 1;
                @endphp
            @else
                @php
                    $bandera = 0;
                @endphp
            @endif

        @endforeach

    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5">
            <p class="m-0 text-center text-white small">Seminario de Titulación 2022</p>
            <p class="m-0 text-white small">Copyright &copy;</p>
            <ul class="m-0 text-white small">
                <li>Cinthya Arellano</li>
                <li>Jordan Rubio</li>
                <li>Carlos Ridan</li>
                <li>Alan Iñiguez</li>
            </ul>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
