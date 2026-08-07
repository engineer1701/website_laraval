<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Consultancy Company')</title>
    <meta name="description" content="@yield('description', 'Consultancy Company delivers strategic advisory services for growth and transformation.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-lg">
                <a class="navbar-brand order-0 py-2" href="{{ route('home') }}">
                    <figure class="mb-0">
                        <img src="{{ asset('images/logo.svg') }}" alt="" class="img-fluid">
                    </figure>
                </a>
                <div class="offcanvas offcanvas-start order-lg-1 order-2 ms-auto" tabindex="-1" id="offcanvasCustom" aria-labelledby="offcanvasCustomLabel">
                    <div class="d-flex justify-content-end d-lg-none p-3">
                        <button type="button" class="btn-close text-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-start w-100" href="{{ route('services') }}" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                            <ul class="dropdown-menu rounded-0 border-0 py-0" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item nav-link fs-7" href="{{ route('industries') }}">Industries</a></li>
                                <li><a class="dropdown-item nav-link fs-7" href="{{ route('capabilities') }}">Capabilities</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">Insights</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('careers') }}">Career</a></li>
                        <li class="nav-item"><a class="nav-link pe-0" href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <button class="navbar-toggler border-0 shadow-none order-1 px-0 ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCustom" aria-controls="offcanvasCustom">
                    <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                </button>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="py-5 mt-5 border-top">
        <div class="container-lg">
            <div class="row justify-content-between g-4 mb-xl-5 mb-4">
                <div class="col-xl-4 col-lg-5">
                    <div class="d-flex flex-column align-items-lg-start align-items-center h-100">
                        <div class="mb-4">
                            <img src="{{ asset('images/logo.svg') }}" alt="" class="footer-logo img-fluid">
                        </div>
                        <form action="" class="w-100">
                            <h5 class="fw-bold">Subscribe</h5>
                            <label class="small form-label">Receive quarterly insights on strategy, leadership, and innovation delivered directly to your inbox.</label>
                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                <input type="email" placeholder="Email" class="form-control rounded-pill shadow-none grey-bg">
                                <button type="submit" class="btn btn-type1 rounded-pill px-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column align-items-lg-end align-items-center justify-content-between h-100">
                        <div class="d-flex justify-content-lg-end justify-content-center flex-wrap gap-3">
                            <div class="d-flex justify-content-lg-end justify-content-center flex-wrap gap-3 small">
                                <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                                <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                                <a href="{{ route('news') }}" class="nav-link">Insights</a>
                                <a href="{{ route('careers') }}" class="nav-link">Career</a>
                                <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                <a href="{{ route('team') }}" class="nav-link">Our Team</a>
                            </div>
                            <div class="d-flex justify-content-lg-end justify-content-center flex-wrap gap-3 fs-5">
                                <a href="" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                                <a href="" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                <a href="" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                <a href="" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                            </div>
                        </div>
                        <div class="copyright-text text-muted mt-3">&copy; 2025 Consultancy Company</div>
                    </div>
                </div>
            </div>
            <p class="small">Consulting Company is an Equal Opportunity Employer. All qualified applicants will receive consideration for employment without regard to race, color, age, religion, sex, sexual orientation, gender identity / expression, national origin, protected veteran status, or any other characteristic protected under federal, state or local law, where applicable, and those with criminal histories will be considered in a manner consistent with applicable state and local laws.</p>
            <p class="small">Pursuant to Transparency in Coverage final rules (85 FR 72158) set forth in the United States by The Departments of the Treasury, Labor, and Health and Human Services click here to access required Machine Readable Files or here to access the Federal No Surprises Bill Act Disclosure.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <button type="button" class="progress-wrap btn p-0">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 212.586px;"></path>
        </svg>
    </button>
    <script src="{{ asset('js/custom-header.js') }}"></script>
    <script src="{{ asset('js/fixed-header.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
