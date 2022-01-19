<header class="main-header">
    <div class="container d-flex align-items-center h-100">
        <div class="brand">
            <a href="/" class="">
                <img src="{{asset('images/dc-logo.png')}}" alt="DC Logo">
            </a>
        </div>
        <nav class="h-100">
            <ul class="d-flex align-items-center h-100">
                <li class="h-100 d-flex align-items-center h-100">
                    <a class="@if (Request::route()->getName() == 'home') 
                        active
                        @endif
                        d-flex align-items-center h-100" 
                        href="{{route('home')}}"
                    
                    >
                        Comics
                    </a>
                </li>
                <li class="h-100 d-flex align-items-center h-100">
                    <a class="@if (Request::route()->getName() == 'news') 
                        active
                        @endif
                        d-flex align-items-center h-100" 
                        href="{{ route('news') }}"
                    
                    >
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</header>