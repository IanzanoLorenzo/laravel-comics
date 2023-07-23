<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<header>
    <div class="header-overline d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-auto px-5">
                    DC power&#8480;visa&#174;
                </div>
                <div class="col-auto">
                    additional dc sites
                </div>
            </div>
        </div>    
    </div>
    <nav>
       <div class="container">
            <div class="row">
                <div class="col-auto d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" class="logo">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <ul class="menu d-flex m-0 p-0">
                                <li><a href="">characters</a></li>
                                <li class="active"><a href="{{ route('home') }}">comics</a></li>
                                <li><a href="">movies</a></li>
                                <li><a href="">tv</a></li>
                                <li><a href="">games</a></li>
                                <li><a href="">collectibles</a></li>
                                <li><a href="">videos</a></li>
                                <li><a href="">fans</a></li>
                                <li><a href="">news</a></li>
                                <li><a href="">shop <i class="fa-solid fa-sort-down"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <div class="my-searchbar">
                                <input type="text" class="my-input" placeholder="Search">
                                <i class="fa-solid fa-magnifying-glass" ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
</header>