<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <meta name="description" content="" />
        <title>Locomanicks</title>

        <link rel="icon" type="image/png" href="uploads/favicon.png" />

        <!-- All CSS -->
        @include('front.layout.styles')

        <!-- All Javascripts -->
        @include('front.layout.scripts')
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
       @include('front.layout.nav')

        @yield('main-content')

        @include('front.layout.footer')

        <script src="{{ asset('dist-front/js/custom.js') }}"></script>
    </body>
</html>
