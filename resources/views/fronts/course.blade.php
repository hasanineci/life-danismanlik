@extends('layouts.projectlayout')


@section('css')
<style>
    .right-courses-box ul li{
        list-style-type:none;
        /*background-color: #FAA634;*/
       /* background-color: red;*/
    }

    .right-course-names{
        font-family: "Roboto", "Arial", "sans-serif";
        
        font-size: 15px;
        color: rgb(119, 119, 119);
        text-decoration: none;
        
      
    }
    .right-course-names:Hover{
        transition: 0.5s;
     color:#65759A;
    }
</style>
    
@endsection



@section('content')

<div class="container-fluid text-white" style="height:50px;background-color:#65759A; box-shadow: 0px 5px 10px #ccc;" >
    <div class="container">
        <h1 class="page-headers" style="line-height:50px; ">{{$courseInfo['name']}}</h1> 
    </div>
 </div>
    
 <div class="container">
     <div class="row">
         <div class="col-12 pt-3 pb-2">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                     <li class="breadcrumb-item"><a href="{{ route('courses') }}">Eğitimlerimiz</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ $courseInfo->name }}</li>
                 </ol>
             </nav>
         </div>
     </div>
 </div>

<div class="container">
    <div class="row">        
        <div class="col-md-9 col-sm-8 col-12">
            <h3 class="mt-3" style="font-family: 'Oswald', sans-serif !important,sans-serif; color:#65759A" >{{$courseInfo['name']}}</h3>
            <img class="mt-3 w-100 " src="{{ get_course_image($courseInfo) }}">
            <p class="mt-4" style="font-size:12px; letter-spacing:0.5px; line-height:25px;">
                {!! $courseInfo['content'] !!}
            </p>
        </div>

        <div class="col-md-3 col-sm-4 col-sm-12 mt-4 right-courses-box ">
            <div class="row">
                <div class="col-12">
                    <h4 style="font-family: 'Oswald', sans-serif !important,sans-serif; color:#65759A" >Diğer Eğitimlerimiz</h4>
                    <hr>
                    <ul class="m-0 p-0">
                        @foreach (getCoursesInfos() as $courseinfo)
                            @if ( $courseinfo->id != request('id') )
                            <li class="p-2 border-bottom"><a class="right-course-names" style="font-family: 'Oswald', sans-serif !important,sans-serif;" href="{{ route('course',$courseinfo['id']) }}">{{$courseinfo['name']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection