<div class="container">
    <div class="gallery d-flex justify-content-center">
        @foreach ($comics as $index => $comic)
            <div class="card d-flex flex-column">
                <a href="{{ route('comic-detail', ['id' => $index])}}">
                    <div class="card-img">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <h3>{{$comic['series']}}</h3>
                </a>
            </div>
        @endforeach
        <div class="cta">
            <button class="load-more">Load more</button>
        </div>
    </div>
</div>