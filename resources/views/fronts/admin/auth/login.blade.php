<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Sisteme Giriş Yap</title>
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

    </style>
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center mt-sm-5 mt-3 mb-3">
            <div class="col-md-4 col-sm-6 col-12">

                <div class="bg-white shadow-sm p-sm-5 p-3">

                    <h1>Giriş Yap</h1>
                    <hr>
                    <br>

                    <form action="" method="POST" class="needs-validation" novalidate>
                        @csrf

                        <div class="form-group mb-3">
                            <label for="email">E-Posta Adresi</label>
                            <input type="text" class="form-control" name="email" id="email" minlength="3"
                                value="{{ old('email') }}" required>
                            <div class="invalid-feedback">
                                E-Posta alanı en az 3 karakter olmalıdır.
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Şifre</label>
                            <input type="password" class="form-control" name="password" id="password" minlength="6"
                                required>
                            <div class="invalid-feedback">
                                Şifre alanı en az 6 karakter olmaldıır.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Giriş Yap</button>
                    </form>

                    @if (session('success'))
                        <div class="alert alert-success mt-4">
                            {{ session('success') }}
                        </div>
                    @elseif ( session('error') )
                        <div class="alert alert-danger mt-4">
                            {{ session('error') }}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>


</body>

</html>
