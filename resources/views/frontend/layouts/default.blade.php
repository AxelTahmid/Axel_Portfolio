<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        @include('frontend.includes.head')
    </head>

    <body class="one-page"> 

        <div class="doc-loader"></div>

        <div class="container">
            <div class="page-wrapper">

               @include('frontend.includes.nav')

               @yield('content')

            </div>
        </div>
        @include('frontend.includes.footer')
    </body>
</html>