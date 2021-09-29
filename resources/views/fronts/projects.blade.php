@extends('layouts.projectlayout')

@section('content')
@section('css')
    <style>
        .accordion-button:focus {
            border-color: #65759A;

            box-shadow: red;
        }

        .accordion-button {
            border-color: #65759A;

            box-shadow: red;
        }

        .accordion-button:active {
            border: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: #FFFFFF;
            background-color: #65759A;
            box-shadow: none;
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

<div class="container-fluid text-white " style="height:50px;background-color:#65759A; box-shadow: 0px 5px 10px #ccc;">
    <div class="container">
        <h1 class="page-headers" style="line-height:50px;">PROJELERİMİZ</h1>
    </div>
</div>
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-3 pb-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projelerimiz</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    @if( count($projects) > 0 )
        @foreach ($projects as $project)
            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <img src="{{ get_project_image($project) }}" alt="" style="max-width: 100%;">
                </div>
                <div class="col-md-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h2 style="color:#65759A">{{ $project['title'] }} </h2>
                            <p style="color: #828282; font-size:15px;">{!! $project['content'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    @else
        <div class="alert alert-warning text-center">
            Henüz proje eklenemmiş.
        </div>
    @endif
    <div class="row">
        <div class="col-12 pt-2 pb-2"">
            {{ $projects->links() }}
        </div>
    </div>
</div>

<div class="container">
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
