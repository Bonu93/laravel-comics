@extends('layouts.main')

@section('main-content')
<section class="comic-detail">
    <div class="comic-jumbo">
        <div class="detail-container">
            <img class="thumb" src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
    <section class="content">
        <div class="detail-container d-flex">
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non distinctio eaque ullam vel enim. Pariatur voluptatibus qui eligendi voluptas molestiae. Voluptatibus officia deserunt officiis aut iusto ut eligendi sit fugit?</p>
            </div>
            <div class="ad">
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </section>
</section>

@endsection