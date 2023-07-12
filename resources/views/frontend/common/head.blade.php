
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />

    <meta name="apple-mobile-web-app-title" content="Telesante E-Pharma Theme">
    <meta name="application-name" content="Telesante E-Pharma Theme">
    <meta name="msapplication-TileColor" content="#0c347b">
    <meta name="theme-color" content="#ffffff">

    <meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="favicon/mstile-150x150.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="https://www.matelesante.com/build/assets/apple-touch-icon-57x57.bd64903c.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="https://www.matelesante.com/build/assets/apple-touch-icon-114x114.2b548cbd.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="https://www.matelesante.com/build/assets/apple-touch-icon-72x72.eba0eadb.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="https://www.matelesante.com/build/assets/apple-touch-icon-60x60.f01e72ee.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="https://www.matelesante.com/build/assets/apple-touch-icon-120x120.20c32add.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="https://www.matelesante.com/build/assets/apple-touch-icon-76x76.00dcacf4.png" />
    <link rel="icon" type="image/png" href="https://www.matelesante.com/build/assets/favicon-196x196.3c2c476f.png"
        sizes="196x196" />
    <link rel="icon" type="image/png" href="https://www.matelesante.com/build/assets/favicon-96x96.5430579d.png"
        sizes="96x96" />
    <link rel="icon" type="image/png" href="https://www.matelesante.com/build/assets/favicon-128.6c558f1f.png"
        sizes="128x128" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/custom-style.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/home-page-style.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/hedaer-style.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/footer-style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ url('frontend/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/styles.css') }}">
@yield('css')