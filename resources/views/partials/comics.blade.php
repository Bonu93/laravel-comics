<div class="container">
    <div class="gallery d-flex">
        @foreach ($comics as $comic)
            <div class="card d-flex flex-column">
                <div class="card-img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h3>{{$comic['series']}}</h3>
            </div>
        @endforeach
    </div>
</div>