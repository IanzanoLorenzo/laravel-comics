
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        @vite('resources/js/app.js')


    </head>

    <body>
        @include('partials.header')
        <main>
            @yield('content')
            <div id="blue-section">
                <div class="container">
                    <ul class="row d-flex py-5 justify-content-between">
                        @foreach($sectionBlue as $section)
                        <li class="col-2 d-flex align-items-center">
                            <img class="me-2 blue-section-image" src="{{ Vite::asset($section['sectionImage']) }}" alt="">
                            <a href=""><h6>{{ $section['sectionName'] }}</h6></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
        @include('partials.footer')
    </body>
</html>