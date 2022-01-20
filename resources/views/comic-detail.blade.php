@extends('layouts.main')

@section('main-content')
<section class="comic-detail">
    <div class="comic-jumbo">
        <div class="detail-container h-100">
            <img class="thumb" src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
    <section class="content d-flex flex-column justify-content-center align-items-center">
        <div class="detail-container d-flex">
            <div class="description">
                <h3>{{$comic['title']}}</h3>
                <div class="green-bar d-flex align-items-center w100">
                    <div class="buy-details d-flex justify-content-between">
                        <div class="price">
                            <span class="detail">U.S. Price: </span>
                            <span>{{$comic['price']}}</span>
                        </div>
                        <div class="available">
                            <span class="detail">
                                AVAILAIBLE
                            </span>
                        </div>
                    </div>
                    <div class="cta text-center">
                        <a href="">Check Availability</a>
                    </div>
                </div>
                <p>{{$comic['description'] }}</p>
                
            </div>
            <div class="ad">
                <a href="">
                    <img src="{{asset('images/adv.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </section>
</section>

@endsection