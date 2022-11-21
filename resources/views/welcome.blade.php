<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mao Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            html{
                scroll-behavior: smooth;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }

            .carding:hover {
                box-shadow: 5px 5px 10px grey;
                border-radius: 5px 5px;
                color: green;
            }
/*
            .abouthover:hover{
                animation-delay: 1s;
                animation-duration: 3s;
                animation-direction: alternate;
                animation-name: abouth;
                animation-iteration-count: infinite;
            }

            @keyframes abouth{
                from{
                    background-color: rgb(222, 253, 222);
                }
                to{
                    background-color: rgb(255, 255, 255);
                }
            } */

            .aboutpic{
                animation-duration: 3s;
                animation-direction: alternate-reverse;
                animation-iteration-count: infinite;
                animation-name: aboutpix;
            }
            @keyframes aboutpix{
                from{
                    transform: rotate(1deg);
                }
                to{
                    transform: rotate(-1deg)
                }
            }
        </style>
    </head>
    <body class="antialiased">



    <!-- Topbar Start -->
    <div class="px-5 container-fluid d-none d-lg-block">
        <div class="row gx-5">
            <div class="py-3 text-center col-lg-4">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt-fill text-success me-3 fs-1"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Our Office</h6>
                        <span>Municipality of Mamburao, Occidental Mindoro</span>
                    </div>
                </div>
            </div>
            <div class="py-3 text-center col-lg-4 border-start border-end">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-fill me-3 fs-1 text-success"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>mao@example.com</span>
                    </div>
                </div>
            </div>
            <div class="py-3 text-center col-lg-4">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-success me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Call Us</h6>
                        <span>+63965 890 9212</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-success"><img src={{url('logo.png')}} width="128px" alt=""> MAO Portal</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link ">
                        Home
                    </a>
                    <a href="#about" class="nav-item nav-link">About</a>

                    <a href="#services" class="nav-item nav-link" >Services</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="project.html" class="dropdown-item">Our Project</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> --}}
                    <a href="#contact" class="nav-item nav-link">Contact</a>

                    @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-item nav-link bg-success p-2">Register</a>
                                @endif
                            @endauth

                    @endif


                    <a href="#contact" class="nav-item nav-link bg-success text-white px-5 ms-3 d-none d-lg-block">Get A Quote <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class=""id="home">
        <div  class="p-0 container-fluid">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " height="600px" src={{url("portal/img/bg1.jpg")}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <i class="mb-4 fa fa-home fa-4x text-warning d-none d-sm-block"></i>
                                <h1 class="text-white display-2 text-uppercase mb-md-4">The farmer has to be an optimist</h1>
                                <a href="" class="mt-2 text-white btn btn-success py-md-3 px-md-5">Register</a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src={{url('portal/img/bg2.jpg')}} alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <i class="mb-4 fa fa-tools fa-4x text-warning d-none d-sm-block"></i>
                                <h1 class="text-white display-2 text-uppercase mb-md-4">We ca make it</h1>
                                <a href="#contact" class="mt-2 btn btn-success py-md-3 px-md-5">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
<!-- Carousel End -->




    <!-- Services Start -->
    <x-services/>
    <!-- Services End -->


  <!-- About Start -->
    <div class="px-5 py-6 my-5 container-fluid">
        <div class="text-center" id="about">
            <h1 class="display-5 text-success text-uppercase mb-4">--About--</h1>
        </div>
        {{-- mission --}}
        <div class="row g-5 abouthover">
            <div class="col-lg-7">
                <h1 class="mb-4 display-5 text-uppercase w-100">
                    <img src={{url('logo.png')}} width="128px" alt="">
                    <span class="font-bold text-success border-bottom">Mission</span>
                </h1>
                <h4 class="mb-3 text-justify text-uppercase text-success">
                    Office of the Agriculture Office of Mamburao is commited to provide effective and efficient delivery of basic agriculture
                    service from the well-being of the constituents leader:
                </h4>
                <div class="py-2 row gx-5">

                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Promotion of Sustainable Agriculture and Fishery productivity.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Provision of farm machineries, post-harvest facilities and input.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Development of Entreprenueriel capacities and capabilities of farmers and fisher folks.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Preparedness of impact of climate change and disaster on agro-fishery and farmer sector.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Capacitating of farmers on technology updating.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Provision of economic oppurtunities for farmers and agro-fishery community.</p>
                        </div>




                </div>

            </div>
            <div class="pb-5 col-lg-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="aboutpic mt-5 rounded shadow position-absolute w-100 h-100 ms-n5" src={{url("portal/img/aboutimage.jpg")}} style="object-fit: cover;">
                </div>
            </div>

        </div>

        {{-- vision --}}
        <div class="my-5 row g-5 border-top abouthover">
            <div class="col-lg-7">
                <h1 class="mb-4 display-5 text-uppercase w-100">
                    <img src={{url('logo.png')}} width="128px" alt="">
                    <span class="font-bold text-success border-bottom">Vision</span>
                </h1>
                <h4 class="mb-3 text-justify text-uppercase text-success ">
                    We envision Mamburao to be one of the major sources of supplier of agricultural products, host of agro- industries,
                    an emerging tourism destination in the province with skilled manpower, a disaster resilient and prepared community
                    and home to a strengthened and empower and healthy community governed by effective and righteous leader.
                </h4>
                {{-- <div class="py-2 row gx-5">

                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Promotion of Sustainable Agriculture and Fishery productivity.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Provision of farm machineries, post-harvest facilities and input.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Development of Entreprenueriel capacities and capabilities of farmers and fisher folks.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Preparedness of impact of climate change and disaster on agro-fishery and farmer sector.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Capacitating of farmers on technology updating.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mt-1 fa fa-check text-success me-3"></i>
                            <p class="mb-2 fw-bold">Provision of economic oppurtunities for farmers and agro-fishery community.</p>
                        </div>




                </div> --}}

            </div>
            <div class="pb-5 col-lg-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="aboutpic mt-5 border border-white rounded shadow position-absolute w-100 h-100 ms-n5" src={{url("portal/img/aboutimage2.jpg")}} style="object-fit: cover;">
                </div>
            </div>

        </div>

        {{-- mandates --}}
        <div class="my-5 border-top row g-5 abouthover">
            <div class="col-lg-7">
                <h1 class="mb-4 display-5 text-uppercase w-100">
                    <img src={{url('logo.png')}} width="128px" alt="">
                    <span class="font-bold text-success border-bottom">Mandates</span>
                </h1>
                {{-- <h4 class="mb-3 text-justify text-uppercase text-success">
                    Office of the Agriculture Office of Mamburao is commited to provide effective and efficient delivery of basic agriculture
                    service from the well-being of the constituents leader:
                </h4> --}}
                <div class="py-2row gx-5">

                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-1"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold">To ensure effective delivery of basic services to the farmers.</p>
                        </div>
                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-2"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold"> Ensure the maximum assistance and access to the resources in the production,
                                processing and marketing of agricultural, aqua cultural and marine products are extended to farmers,
                                fisherman and local entrepreneurs.</p>
                        </div>
                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-3"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold">Conduct location-specfic agricultural resaerch and assist in making available the
                                appropriate technology arising out and disseminating information on basic research on crops, prevention
                                and control of plant diseases and pests and other agricultural matter which will maximize productivity.</p>
                        </div>
                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-4"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold">Assist in the establishment and extension services and demonstration farm of aqua culture and marine products.</p>
                        </div>
                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-5"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold">Enforce rule and regulations relating to the agriculture and aqua culture.</p>
                        </div>
                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-6"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold">Coordinates with government agencies and non-government
                                association which promotes agricultural productivity throught appropriate technology compatible with environmental integrity.</p>
                        </div>
                        <div class="my-1 d-flex">
                            <i class="px-3 fa-regular fa-7"></i>
                            <p class="p-1 mb-2 border-start border-success fw-bold">Be in the frontline of delivery of basic agricultural service.,
                                particular thos e needed for the survival of inhabitants during and in the aftermath of man-made and natural disaster and calamities.</p>
                        </div>



                </div>

            </div>
            <div class="pb-5 col-lg-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="aboutpic mt-5 rounded shadow position-absolute w-100 h-100 ms-n5 " src={{url("portal/img/aboutimage3.jpeg")}} style="object-fit: cover;">
                </div>
            </div>

        </div>

    </div>
<!-- About End -->



{{-- contact start --}}
<x-contact/>
{{-- contact end --}}


{{-- Footer start --}}
    <x-footer/>
{{-- Footer end --}}
    </body>
</html>
