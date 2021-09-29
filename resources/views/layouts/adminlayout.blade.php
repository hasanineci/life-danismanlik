<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Yönetim Paneli</title>
    @yield('css')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
        }

        html,
        body {
            height: 100%;
        }

        body {
            background-color: white;
        }

        .main-cont {
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 0;
            padding: 0;
            min-height: 100%;
            height: auto !important;
            /* cross-browser */
            height: 100%;
            /* cross-browser */
        }

        .left-page {
            margin: 0;
            padding: 0;
        }

        .left-page {
            background-color: #262B40;
        }

        .right-page {
            background-color: #F5F8FB;
        }

        .list-group {
            color:#fff;
            width: 100%;
            margin-top: 15%;
        }

        .list-group a {

            text-decoration: none;
        }

        .list-group a:focus {
            text-decoration: none;
        }

        .list-group li {
            width: 100%;
            color: white;
            background-color: #262B40;
        }

        .container {
            position: relative;
        }

        .ck-content{
            min-height: 350px;
        }
    </style>
</head>

<body>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif ( session('error') )
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="main-cont row container-fluid " id="main-cont" style="height:800px;">
        <div class="col-md-1 left-page" style="width: 12% ;">
            @include('fronts.admin.left-menu')

        </div>
        <div class="col-md-10 col-sm-8 border right-page " style="width: 88%;">

            @include('fronts.admin.navbar')
            <hr>
            <div class="row" style="height: 100%;">

                <div class="container">
                    
                    <a href="{{ route('index')}}"
                        class="btn btn-warning mb-4">Sayfaya Dön</a>
                    @yield('content')
                    
                </div>
            </div>
        </div>
    </div>

    @yield('modal')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('js/ckeditor.js') }}"></script>
    @yield('js');

</body>

</html>
