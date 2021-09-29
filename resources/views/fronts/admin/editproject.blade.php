@extends('layouts.adminlayout')

@section('content')

    <h2 class="text-center">PROJE GÜNCELLE</h2>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-md-6">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    

                    @if ( $projectInfos['image'] != null )
                    <div class="mb-4">
                        <img src="{{ get_project_image($projectInfos) }}" alt="" width="100%">
    
                        <label for="imageDelete" class="d-block mt-2 mb-2">
                            <input type="checkbox" name="imageDelete" id="imageDelete" value="1"> Bu resim güncelleme sırasında silinsin.
                        </label>
                    </div>
                    @endif

                    <div class="form-group mb-4">
                        <label>Proje Temsili Fotoğrafı</label>
                        <input type="file" class="form-control" name="image" accept="image/png,jpg,jpeg">
                    </div>

                    <div class="form-group mb-4">
                        <label>Proje Adı</label>
                        <input type="text" class="form-control" name="title" value="{{ $projectInfos['title'] }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Açıklama</label>
                        <textarea class="form-control" name="content"
                            id="content">{{ $projectInfos['content'] }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success mt-3 float-end">Güncelle</button>
                </form>

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        var globalEditor;

        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log(editor);
                globalEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
