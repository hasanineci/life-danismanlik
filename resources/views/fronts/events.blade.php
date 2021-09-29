@extends('layouts.projectlayout')
@section('css')
    <style>
        .event-pic {
            background:rgba(0.0.0.0,5);
                
            background-size: cover;
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

    <div class="container-fluid text-white" style="height:50px; background-color:#65759A;box-shadow: 0px 5px 10px #ccc;">
        <div class="container">
            <h1 class="page-headers" style="line-height:50px;">ETKİNLİK TAKVİMİ</h1>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Etkinlik Takvimi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @if(count($eventInfos) > 0 )
                @foreach ($eventInfos as $eventInfo)
                    <div class="col-md-4 mb-4 position-relative">

                        <div class="card" style="height:400px;">
                            <div class="event-pic"
                                style="min-height: 200px; background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0)),url({{ get_event_image($eventInfo) }}); background-position: center; background-size: cover;">
                            </div>
                            <div class="card-body position-relative">
                                <h5 class="card-title" title="{{ $eventInfo->title }}" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $eventInfo->title }}</h5>
                                <p class="card-text" style="
                                    font-size:12px;
                                    display: -webkit-box;
                                    max-width: 100%;
                                    -webkit-line-clamp:3;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    height: 54px;">"{{ $eventInfo->content }}</p>

                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <p class="m-0 p-0"><span class="p-0 m-0" style="font-size: 12px"><u>Tarih:</u>
                                                {{ $eventInfo->date }}</span></p>
                                        <p class="m-0 p-0"><span class="p-0 m-0" style="font-size: 12px"><u>Saat:</u>
                                                {{ $eventInfo->time }}</span></p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-12">
                                        <a href="{{ route('event', $eventInfo['id']) }}" class="btn mt-3 text-white w-100"
                                            style="background-color:#65759A">Detay Gör</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <div class="alert alert-warning text-center">
                    Henüz etkinlik eklenemmiş.
                </div>
            @endif
        </div>
    </div>
    <div class="container">


        <div class="row">
            <div class="col-12 pt-2 pb-2"">
                {{ $eventInfos->links() }}
            </div>
        </div>
    </div>

@endsection
