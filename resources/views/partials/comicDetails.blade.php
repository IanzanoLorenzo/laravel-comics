<div id="comic-details">
    <div class="container py-5">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                    </div>
                    <div class="col-12">
                        <div class="availability">
                            <div class="row">
                                <div class="col-8">
                                    <div class="row justify-content-between p-3">
                                        <div class="col-auto">
                                            U.S. Price: <span class="fw-bolder">{{ $comic['price'] }}</span>
                                        </div>
                                        <div class="col-auto fw-bolder text-uppercase">
                                            Available
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button class="w-100 h-100 fw-bolder">Check Availability <i class="fa-solid fa-sort-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="comic-description my-4">{{ $comic['description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-3 offset-1">
                <h6 class="text-end text-uppercase">Advertisement</h6>
                <div class="adv">
                    <img class="w-100" src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
