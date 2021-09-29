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
                    <label>Kullanıcı Adı & Mail</label>
                    <input type="hidden" name="id">
                    <input type="mail" class="form-control" name="email" required minlength="5">
                    <div class="invalid-feedback">
                        Kullanıcı Adınız 5 Karakterden Az Olamaz
                    </div>

                </div>
                <div class="form-group  mb-3">
                    <label>Şifre</label>
                    <input type="password" class="form-control" name="first_password" required minlength="6">
                    <div class="invalid-feedback">
                        Şifreniz 6 Karakterden Az Olamaz
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Şifre Tekrar</label>
                    <input type="password" class="form-control" name="second_password" required minlength="6">
                </div>

                <button type="submit" class="btn btn-primary mt-3" style="float:left;">Oluştur</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <table class="table">
          <thead class="thead-dark">
            <tr>                     
              <th scope="col">Kullanıcı Adı</th>    
              <th scope="col">İşlem</th>
            </tr>
          </thead>
          <tbody>
        
       @foreach ($users as $user)
           <tr>
            <input type="hidden" name="userid" value={{$user->id}}>
             <td style="width: 90%;">{{$user->email}}</td>            
             <td> <a href="{{route('admin.deleteuser',['userid' => $user->id] )}}" class="btn btn-danger">Sil</a></td>
           </tr>
       @endforeach
         
  
          </tbody>
        </table>
      </div>
    </div>
</div>


@endsection


@section('js')

@endsection
