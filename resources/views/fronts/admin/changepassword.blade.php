@extends('layouts.adminlayout')


@section('css')
    
@endsection

@section('content')
<div class="container">
    <div class="row">             
        <div class="col-md-6">
            <form method="post" class="needs-validation" novalidate>
                @csrf
                <div class="form-group mb-3">
                    <label>Hesap Seçiniz</label>
                    <select class="form-control" name="userid" id="">
                      @foreach ($users as $user)
                         <option value="{{$user->id}}">{{$user->email}}</option>
                      @endforeach
                    </select>                            
                </div>
                <div class="form-group mb-3">
                    <label>Eski Şifre</label>
                    <input type="password" class="form-control" name="old_password" required>
                  </div>
                <div class="form-group mb-3">
                    <label>Yeni Şifre(En az 6 Karakterli)</label>
                    <input type="password" class="form-control" name="first_password" minlength="6" required>
                    <div class="invalid-feedback">
                       Şifreniz 6 Karakterden Az Olamaz
                      </div>
                  </div>
                  
                <div class="form-group mb-3">
                    <label> Yeni Şifre Tekrar</label>
                  <input type="password" class="form-control" name="second_password" min-length=6 required>
                </div>
               
                  <button type="submit" class="btn btn-primary mt-3" style="float:left;">Oluştur</button>        
            </form>
        </div>  
    </div>           
    </div>
</div>
@endsection

@section('js')
    
@endsection