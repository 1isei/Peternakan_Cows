<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knight - Free Bootstrap 4 Product Landing Page Template</title>
    <meta name="description"
          content="Knight is a beautiful Bootstrap 4 template for product landing pages."/>

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="{{ asset('landing-page/css/default.css')}}" id="theme-color">
</head>
<body>

<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="/">
                MOUW
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route('cows.index')}}">Sapi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('status.index') }}">Status Kesehatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#faq">Pangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#blog">Rumah Jaggal</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

@yield('content')
<!--scroll to top-->
<div class="scroll-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- theme switcher (FOR DEMO ONLY - REMOVE FROM PRODUCTION)
<div class="switcher-wrap">
    <div class="switcher-trigger">
        <span class="fa fa-gear"></span>
    </div>
    <div class="color-switcher">
        <h6>Color Switcher</h6>
        <ul class="mt-3 clearfix">
            <li class="bg-teal active" data-color="default" title="Default Teal"></li>
            <li class="bg-purple" data-color="purple" title="Purple"></li>
            <li class="bg-blue" data-color="blue" title="Blue"></li>
            <li class="bg-red" data-color="red" title="Red"></li>
            <li class="bg-green" data-color="green" title="Green"></li>
            <li class="bg-indigo" data-color="indigo" title="Indigo"></li>
            <li class="bg-orange" data-color="orange" title="Orange"></li>
            <li class="bg-cyan" data-color="cyan" title="Cyan"></li>
            <li class="bg-yellow" data-color="yellow" title="Yellow"></li>
            <li class="bg-pink" data-color="pink" title="Pink"></li>
        </ul>
        <p>These are just demo colors. You can <b>easily</b> create your own color scheme.</p>
    </div>
</div> -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('landing-page/js/scripts.js') }}"></script>
@yield("js")
</body>
</html>
