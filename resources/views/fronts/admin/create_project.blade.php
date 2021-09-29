@extends('layouts.adminlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-md-6">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id">

                    <div class="form-group mb-4">
                        <label>Proje Temsili Fotoğrafı</label>
                        <input type="file" class="form-control" name="image" accept="image/png,jpg,jpeg">
                    </div>

                    <div class="form-group mb-4">
                        <label>Proje Adı</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Açıklama</label>
                        <textarea class="form-control" name="content" id="content"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success mt-3" style="float: right;">Oluştur</button>
                </form>

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
