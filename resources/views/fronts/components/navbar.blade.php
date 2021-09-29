<nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 pb-3">
    <div class="container">
        <a href="{{route('index')}}"> <img src="{{asset('images/logo/base-logo.png')}} " alt="logo" style="width: 200px; " ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('index') ? 'choosen' : ''}}" aria-current="page" href="{{route('index')}}">ANASAYFA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('about') ? 'choosen' : ''}}" href="{{route('about')}}">HAKKIMIZDA</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{Route::is('courses') ? 'choosen' : ''}}" href="{{route('courses')}}" id="navbarDropdownMenuLink" role="button"
                         aria-expanded="false"> 
                        EĞİTİMLERİMİZ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (getCoursesInfos(); as $courseinfo)
                        <li><a class="dropdown-item"  href="{{route('course',$courseinfo['id'])}}"> {{$courseinfo['name']}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('events') ? 'choosen' : ''}}" href="{{route('events')}}">ETKİNLİK TAKVİMİ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('projects') ? 'choosen' : ''}}" href="{{route('projects')}}">PROJELERİMİZ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('contact') ? 'choosen' : ''}}" href="{{route('contact')}}">İLETİŞİM</a>
                </li>
            </ul>
        </div>
    </div>
</nav>