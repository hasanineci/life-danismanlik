@extends('layouts.adminlayout')
@section('css')
    <style>
        .contact-form{
            background-color: red;
        }
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
@section('content')
  <div class="container">
      <div class="row">

               

        <form method="post">
            @csrf
            <div class="form-group">
              <label>1.Mail Adresi</label>
              <input type="hidden" name="id" value="{{$contactsInfos['id']}}">
              <input type="text" class="form-control" name="first_mail" value="{{$contactsInfos['email']}}">
            </div>
            <div class="form-group">
                <label>2.Mail Adresi</label>
                <input type="text" class="form-control" name="second_mail" value="{{$contactsInfos['second_email']}}">
              </div>
            <div class="form-group">
                <label>1.Telefon Numarası</label>
              <input type="text" class="form-control" name="first_phone_number" value="{{$contactsInfos['phone_number']}}">
            </div>
            <div class="form-group">
                <label>2.Telefon Numarası</label>
                <input type="text" class="form-control" name="second_phone_number" value="{{$contactsInfos['second_phone_number']}}">
              </div>
              <div class="form-group">
                <label>Watsap Numarası (Eğer Var ise)</label>
                <input type="text" class="form-control" name="watsap_number" value="{{$contactsInfos['watsapp']}}">
              </div>
              <div class="form-group">
                <label>Adress</label>
                <input type="text" class="form-control"  name="address" value="{{$contactsInfos['address']}}">
              </div>
              <button type="submit" class="btn btn-primary mt-3" style="float: right;">Güncelle</button>        
        </form>
         

          </div>
      </div>
  </div>
@endsection