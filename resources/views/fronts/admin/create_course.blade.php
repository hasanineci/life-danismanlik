@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-md-6">

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label>Eğitim Temsili Fotoğraf</label>
                    <input type="file" class="form-control" name="image" accept="image/png,jpg,jpeg">
                </div>
                <div class="form-group mb-4">
                    <label>Eğitim Başlığı</label>
                    <input type="hidden" name="id">
                    <input type="text" class="form-control" name="title" id="title";>
                </div>
                <div class="form-group mb-4">
                    <label>Eğitim İçeriği</label>
                    <textarea class="form-control" name="content" id="content" style="height:300px;"></textarea>
                </div>


                <button type="submit" class="btn btn-success mt-3" style="float: right;">Oluştur</button>
            </form>
        </div>


    </div>
</div>
</div>

@endsection

@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
       
    </script>
@endsection
