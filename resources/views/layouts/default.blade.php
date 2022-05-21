<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        @include('partials.head')
    </head>

    <body class="one-page"> 

        <div class="doc-loader"></div>

        <div class="container">
            <div class="page-wrapper">

               @include('partials.nav')

               @yield('content')

            </div>
        </div>
        @include('partials.footer')
    </body>
</html>