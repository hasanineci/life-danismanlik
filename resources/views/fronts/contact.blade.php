@extends('layouts.projectlayout')
@section('css')
    <style>


        .info-wrap {
            font-family: 'Lora', serif !important;
        }

    </style>
@endsection
@section('content')
    <div class="container-fluid text-white " style="height:50px;background-color:#65759A; box-shadow: 0px 5px 10px #ccc;">
        <div class="container">
            <h1 class="page-headers" style="line-height:50px;">İLETİŞİM </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container" style="min-height: 720px">
            <div class="row justify-content-center mt-5">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Bize Ulaşın</h3>
                                    <div id="form-message-warning" class="mb-4"></div>

                                    <form method="POST" action="" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-4">
                                                    <label class="label" for="name">Adınız Soyadınız</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" minlength="2" maxlength="50" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-4">
                                                    <label class="label" for="email">E posta adresiniz</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" minlength="2" maxlength="50" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-4">
                                                    <label class="label" for="subject">Telefon Numaranız</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" minlength="10" maxlength="30" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-4">
                                                    <label class="label" for="subject">Konu</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" minlength="2" maxlength="50" required>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 2 karakterden oluşmalıdır.
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label class="label" for="#">Mesajınız</label>
                                                    <textarea class="form-control" name="message" id="message" cols="30"
                                                        rows="4" placeholder="Hangi Konuda Danışmanlık Hizmeti İstersiniz ?"
                                                        style="height:200px; resize:none;" minlength="10" maxlength="500" required>{{ old('message') }}</textarea>
                                                    <div class="invalid-feedback">
                                                        Bu alan gereklidir ve en az 10 en fazla 500 karakter arasında olmalıdır
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group pt-4">
                                                    <input type="submit" value="Mesaj Gönder" class="btn text-white"
                                                        style="background-color:#65759A; float:right">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- FORM BİTİŞ !-->
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch text-white">
                                <div class="info-wrap w-100 p-md-5 p-4" style="background-color: #65759A; font-size:13px; ">
                                    <h4>Bize Ulaşın</h4>
                                    <p class="mb-4">Bütün soru , öneri ve görüşlerinize açığız.</p>
                                    <div class="dbox w-100 d-flex align-items-center mb-4">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-2x fa-map-marker"></span>
                                        </div>
                                        <div class="text" style="margin-left: 20px;">
                                            <a>{{ getContactInfos()->address ?? null }}</a>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center mb-4">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-2x fa-phone"></span>
                                        </div>
                                        <div class="text" style="margin-left: 20px;">
                                            <a href="tel:{{ getContactInfos()->phone_number ?? null }}" style="color:white; text-decoration:none;">{{ getContactInfos()->phone_number ?? null }}</a>
                                        </div>
                                    </div>                             
                                    <div class="dbox w-100 d-flex align-items-center mb-4">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-2x fa-whatsapp"></span>
                                        </div>
                                        <div class="text" style="margin-left: 20px;">
                                            <a href="https://api.whatsapp.com/send?phone={{ getContactInfos()->watsapp ?? null }}"" style="color:white; text-decoration:none;">{{ getContactInfos()->watsapp ?? null }}</a>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center mb-4">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="bi fa-2x bi-envelope-fill"></span>
                                        </div>
                                        <div class="text" style="margin-left: 20px;">
                                            <a href="mailto:{{ getContactInfos()->email ?? null }}" style="color:white; text-decoration:none;">{{ getContactInfos()->email ?? null }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.7850720260374!2d38.80385317076377!3d37.162919408203756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153471cb83d6394b%3A0xf056757292022f58!2sOrtado%C4%9Fu%20Ziraat!5e0!3m2!1str!2str!4v1631132218876!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
