<div class="container">
    <div class="gallery d-flex justify-content-center">
        @foreach ($comics as $comic)
            <div class="card d-flex flex-column">
                <div class="card-img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h3>{{$comic['series']}}</h3>
            </div>
        @endforeach
        <div class="cta">
            <button class="load-more">Load more</button>
        </div>
    </div>
</div>