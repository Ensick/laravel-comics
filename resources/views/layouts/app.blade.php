<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titolo-pagina')</title>
        <link rel="stylesheet" href=" {{ asset("css/app.css") }} ">
    </head>
    <body>

        <header>
            @include('components.header')
        </header>

        <main>
            <section class="section-1">
                <div class="main-top">
                    @yield('main-content')
                </div>
                
                <div class="cont-button">
                    <span class="btn-blue">LOAD MORE</span>
                </div>
            </section>

            <section class="section-2">
                @include('components.mainbot')
            </section>
            
        </main>

        <footer>
            @include('components.footer')
        </footer>
        
    </body>
</html>
