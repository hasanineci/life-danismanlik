@extends('layouts.projectlayout')
@section('css')
    <style>
        .carousel .carousel-item {
            height: 300px;
        }

        .carousel-item img {
            position: absolute;
            object-fit: cover;
            top: 0;
            left: 0;
            min-height: 300px;
        }
   
    </style>

@endsection

@section('content')
    <div class="container-fluid text-white " style="height:50px;background-color:#65759A; box-shadow: 0px 5px 10px #ccc;">
        <div class="container">
            <h1 class="page-headers" style="line-height:50px;">HAKKIMIZDA</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-3" style="min-height: 720px">
        <div class="row" style="min-height: 300px;">
            <div class="col-md-8">
                <h3 class="mt-3 font-weight-bold" style="font-family: Montserrat,sans-serif; color:#65759A">TARİHÇEMİZ</h3>
                <p class="about-text">  {!! $aboutInfos['history'] !!}</p>
            </div>
            <div class="col-md-4 pt-3 pb-3">
                <img class ="mt-5" src="{{ asset('images/hakkimizda.jpg') }}" alt="" style="max-width: 100%; box-shadow: 0px 5px 10px 0px #ccc;">
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <h3 class="" style=" font-family: Montserrat,sans-serif; color:#65759A">MİSYONUMUZ</h3>
                <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{!! $aboutInfos['mission'] !!}</p>

                <h3 class="mt-5" style="font-family: Montserrat,sans-serif; color:#65759A">VİZYONUMUZ</h3>
               {!! $aboutInfos['vision'] !!} 
            </div>
        </div>
    </div>
@endsection
