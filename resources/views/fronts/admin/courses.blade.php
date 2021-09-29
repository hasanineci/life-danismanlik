@extends('layouts.adminlayout')
@section('css')
    <style>
        .form-control {
            margin: 10px;
        }

    </style>
@endsection
@section('content')


<div class="row justify-content-center">
    <div class="col-md-12">

        <a href="{{ route('admin_show_create_course_form') }}" style="float:right;" class="btn btn-success">Yeni oluştur</a>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">Eğitim İsmi</th>
                    <th scope="col">Eğitim Detayı</th>                            
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$course['name']}} </td>
                    <td> {{$course['content']}}</td>
                    
                    <td> <a href="{{ route('admin_edit_course', ['id' => $course->id]) }}"
                        class="btn btn-warning">Düzenle</a> </td>

                    <td> <a href="{{ route('admin_delete_course', ['id' => $course->id]) }}"
                        class="btn btn-danger">Sil</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
            <input type="hidden" id="project-id" value="">
        </table>

    </div>
</div>
<div class="row">
    <div class="col-12 pt-2 pb-2">
        <div class="pr-5" style="float:right; margin-right:100px;">
        {{ $courses->links() }}
        </div>
        
    </div>
</div>


@endsection
@section('js');


@endsection

