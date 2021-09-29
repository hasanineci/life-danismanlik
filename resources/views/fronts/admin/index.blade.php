@extends('layouts.adminlayout')

@section('content')


    <div class="row">
        <div class="col-sm-6 col-6">
            <div class="bg-primary shadow-sm p-sm-5 p-3 mb-4 text-white">
                <span class="fs-1 d-block">{{ $data['events_count'] ?? 0 }}</span>
                <p class="m-0 p-0">Toplam Etkinlik Sayısı</p>
            </div>
        </div>
        <div class="col-sm-6 col-6">
            <div class="bg-danger shadow-sm p-sm-5 p-3 mb-4 text-white">
                <span class="fs-1 d-block">{{ $data['projects_count'] ?? 0 }}</span>
                <p class="m-0 p-0">Toplam Proje Sayısı</p>
            </div>
        </div>
        <div class="col-sm-6 col-6">
            <div class="bg-success shadow-sm p-sm-5 p-3 mb-4 text-white">
                <span class="fs-1 d-block">{{ $data['courses_count'] ?? 0 }}</span>
                <p class="m-0 p-0">Toplam Eğitim Sayısı</p>
            </div>
        </div>
        <div class="col-sm-6 col-6">
            <div class="bg-warning shadow-sm p-sm-5 p-3 mb-4 text-white">
                <span class="fs-1 d-block">{{ $data['messages_count'] ?? 0 }}</span>
                <p class="m-0 p-0">Toplam Mesaj Sayısı</p>
            </div>
        </div>
    </div>


@endsection