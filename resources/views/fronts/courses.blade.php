@extends('layouts.projectlayout')

@section('css')
    <style>
        .course-box {
            min-height: 300px;
        }
        .course-box a {
            text-decoration: none;
        }
        .course-box:hover {
            transition: 1s;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url("{{ URL::asset('/images/courses1.jpg') }}");
        }
        .item {
        height: 120px;
        width: 150px;
        }
        .page-item.active .page-link {
            background-color: #65759A;
            border-color: #65759A;
            
        }

        .page-link {
            color:#65759A;
        }

    </style>
@endsection

@section('content')
    <div class="container-fluid text-white" style="height:50px;background-color:#65759A;box-shadow: 0px 5px 10px #ccc;">
        <div class="container">
            <h1 class="page-headers" style="line-height:50px; ">EĞİTİMLERİMİZ</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Eğitimlerimiz</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @if ( count($courses) > 0 )
                @foreach ($courses as $course)
                    <div class="col-md-4 border course-box d-flex flex-column justify-content-center align-items-center"
                        style="background-image: url({{ get_course_image($course) }})">
                        <a href="{{ route('course', $course['id']) }}">
                            <h2 class="text-center " style="font-family:Montserrat,sans-serif; color:#FFFFFF">
                                {{ $course['name'] }}</h2>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning text-center">
                    Henüz eğitim eklenemmiş.
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2 pb-2">
                <div class="pr-5" style="float:right; margin-right:100px;">
                    {{ $courses->links() }}
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('/images/sponsorlar/sponsor1.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/sponsorlar/sponsor2.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/sponsorlar/sponsor3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->

<script type="text/javascript">
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
    });

</script>
    
@endsection
