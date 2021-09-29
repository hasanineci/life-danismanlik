@extends('layouts.projectlayout')
@section('css')

@endsection

@section('content')
    <div class="container-fluid text-white" style="height:50px; background-color:#65759A; box-shadow: 0px 5px 10px #ccc;">
        <div class="container">
            <h1 class="page-headers" style="line-height:50px;">{{ $eventInfo['title'] }}</h1>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('events') }}">Etkinlik Takvimi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $eventInfo['title'] }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container" style="min-height: 500px">
        <div class="row" style="min-height: 300px;">
            <div class="col-md-6 ">
                <img class="mt-3" src="{{ get_event_image($eventInfo) }}" style="height:350px; max-width:100% ">
            </div>

            <div class="col-md-4 mt-4  ">
                <div class="event-detail">
                    <p> <span style="color:#65759A">ETKİNLİK ADI: </span>
                        <span style="font-size: 13px;">{{ $eventInfo['title'] }}</span>
                    </p>
                    <p>
                        <span style="color:#65759A">TARİH:</span>
                        <span style="font-size: 12px;"> {{ $eventInfo['date'] }}</span>
                    </p>
                    <p>
                        <span style="color:#65759A">SAATİ:</span>
                        <span style="font-size: 12px;"> {{ $eventInfo['time'] }}</span>
                    </p>
                    <p>
                        <span style="color:#65759A">AÇIKLAMA:</span>
                        <span style="font-size: 12px;"> {{ $eventInfo['content'] }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
