<footer>
    <div id="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col-6 py-5">
                    <div class="col-12 d-flex custom-flex">
                        <ul class="d-flex flex-wrap flex-column">
                            @foreach($bottomMenu as $item)
                            <li class="me-5">
                                <a href=""><h4 class="text-light">{{ $item['listName'] }}</h4></a>
                                <ul>
                                    @foreach($item['listContent'] as $content)
                                    <li>{{ $content }}</li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>All Site Content TM &copy; 2020 DC Entertainment, unless otherwise <span><a href="">noted here</a></span>. All rights reserved. <br>
                        <span><a href="">Cookies settings</a></span>.</p>
                    </div>
                </div>
                <div class="offset-1 col-5 dc-bg">
                </div>
            </div>
        </div>
    </div>
    <div id="lower-footer">

    </div>
</footer>