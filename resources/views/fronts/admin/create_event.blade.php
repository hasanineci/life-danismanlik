@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-md-6">

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                  <label>Etkinlik Temsili Fotoğraf</label>
                  <input type="file" class="form-control" name="image" accept="image/png,jpg,jpeg">
                </div>
                <div class="form-group mb-4">
                  <label>Etkinlik Başlığı</label>
                  <input type="hidden" name="id">
                  <input type="text" class="form-control" name="title" >
                </div>
                <div class="form-group mb-4">
                    <label>Etkinlik Tariği</label>
                    <input type="date" class="form-control" name="date" >
                  </div>
                <div class="form-group mb-4">
                    <label>Etkinlik Saati</label>
                  <input type="time" class="form-control" name="time">
                </div>
                <div class="form-group mb-4">
                    <label>Açıklama</label>
                    <textarea class="form-control" name="content"  style="height: 200px;"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success mt-3" style="float: right;">Oluştur</button>        
            </form>
        </div>
     

        </div>
    </div>
</div>
    
@endsection