<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        @include('includes.head')
    </head>

    <body class="one-page"> 

        <div class="doc-loader"></div>

        <div class="container">
            <div class="page-wrapper">

               @include('includes.nav')

               @yield('content')

            </div>
        </div>
        @include('includes.footer')
    </body>
</html>