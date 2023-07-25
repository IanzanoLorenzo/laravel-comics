<div id="comic-info">
    <div class="container py-4">
        <div class="row g-5">
            {{-- TALENT --}}
            <div class="col-6">
                <h3 class="pb-4 underline">
                    Talent
                </h3>
                <div class="row">
                    <div class="col-4 ">
                        <h6 class="fw-bold">Art by:</h6>
                    </div>
                    <div class="col-8">
                        <p>
                            @foreach ($comic['artists'] as $artist)
                                @if ($loop->last)
                                    <span class="blue-text"><a href="">{{ $artist }}</a></span>.
                                @else
                                    <span class="blue-text"><a href="">{{ $artist }}</a></span>,
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="underline"></div>
                    </div>
                    <div class="col-4 ">
                        <h6 class="fw-bold">Written by:</h6>
                    </div>
                    <div class="col-8">
                        <p>
                            @foreach ($comic['writers'] as $writer)
                                @if ($loop->last)
                                    <span class="blue-text"><a href="">{{ $writer }}</a></span>.
                                @else
                                    <span class="blue-text"><a href="">{{ $writer }}</a></span>,
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="underline"></div>
                    </div>
                </div>
            </div>
            {{-- SPECS --}}
            <div class="col-6">
                <h3 class="pb-4 underline">
                    Specs
                </h3>
                <div class="row">
                    <div class="col-4 ">
                        <h6 class="fw-bold">Series:</h6>
                    </div>
                    <div class="col-8">
                        <p>
                            <span class="blue-text text-uppercase"><a href="">{{ $comic['series'] }}</a></span>
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="underline"></div>
                    </div>
                    <div class="col-4 ">
                        <h6 class="fw-bold">U.S. Price:</h6>
                    </div>
                    <div class="col-8">
                        <p>
                            <span class="blue-text text-uppercase"><a href="">{{ $comic['price'] }}</a></span>
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="underline"></div>
                    </div>
                    <div class="col-4 ">
                        <h6 class="fw-bold">On Sale Date:</h6>
                    </div>
                    <div class="col-8">
                        <p>
                            <span class="blue-text text-uppercase"><a href="">{{ $comic['sale_date'] }}</a></span>
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="underline"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>