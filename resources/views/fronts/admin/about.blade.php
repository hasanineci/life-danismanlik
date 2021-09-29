@extends('layouts.adminlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-md-12">

                <form method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <label>Tarihçe</label><br>

                        <textarea name="history" id="history" style="height:200px;width: 80%; "> {{ $aboutInfos['history'] }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label>Misyon</label><br>
                        <textarea name="mission" id="mission" style="height:200px;width: 80%; "> {{ $aboutInfos['mission'] }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label>Vizyon</label><br>
                        <textarea name="vision" id="vision" style="height:200px;width: 80%; "> {{ $aboutInfos['vision'] }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-3" style="float: right;">Güncelle</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#history'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#mission'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#vision'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
