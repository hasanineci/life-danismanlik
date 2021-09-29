@extends('layouts.adminlayout')
@section('css')
    <style>
        .form-control {
            margin: 10px;
        }

    </style>

@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <a href="{{ route('admin_create_event') }}" style="float:right;" class="btn btn-success">Yeni oluştur</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">isim</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Saat</th>
                        <th scope="col">İçerik</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventInfos as $eventInfo)
                        <tr>
                            <td> {{ $eventInfo->title }} </td>
                            <td> {{ $eventInfo->date }} </td>
                            <td> {{ $eventInfo->time }} </td>
                            <td>
                                <p style="
                                            font-size:12px;
                                            display: -webkit-box;
                                            max-width: 100%;
                                           -webkit-line-clamp:3;
                                            -webkit-box-orient: vertical;
                                             overflow: hidden;"> {{ $eventInfo->content }} </p>
                            </td>
                            <td> <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reg-modal"
                                    onclick="getId({{ $eventInfo->id }})"> Düzenle</button> </td>
                            <td> <button class="btn btn-danger" onclick="getIdDelete({{ $eventInfo->id }})"> Sil</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $eventInfos->links() }}
        </div>

    </div>


    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Etkinlik Güncelle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input id="event-id" type="hidden" value="">

                    <label for="news-title " class="form-label"> Etkinlik ismi</label>
                    <input type="text" class="form-control" name="event-title" id="event-title" placeholder="" e.g.safsd">

                    <label for="news-category" class="form-label"> Etkinlik Tarih</label>
                    <input type="date" class="form-control" name="event-date" id="event-date" placeholder="" e.g.safsd">

                    <label for="news-content" class="form-label"> Etkinlik Saati </label><br>
                    <input type="time" class="form-control" name="event-time" id="event-time" placeholder="" e.g.safsd">

                    <label for="news-picture" class="form-label mt-3">Etkinlik İçeriği</label>
                    <textarea class="form-control" name="event-content" id="event-content" placeholder=""
                        style="height: 100px"> </textarea>


                    <div class=" alert alert-success" id="success-message" style="visibility:hidden"></div>
                    <div class="modal-footer">
                        <button type="submit " class="btn btn-primary" onclick="update()">Güncelle</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('js');

    <script>
        function getId(id) {
            /*Düzenle Butonuna tıkladığım anda Etkinlik ID'sini yakalıyorum */
            $('#event-id').val(id);

            /* Düzenle Butonuna tıkladığım zaman modal'da kişilerin bilgilerini yazıcak */
            updateDetails();
        }

        function getIdDelete(id) {
            $('#event-id').val(id);
            deleteDetails();
        }

        function update() {

            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/admin/update_event",
                    dataType: "JSON",
                    data: {
                        event_id: $('#event-id').val(),
                        event_title: $("#event-title").val(),
                        event_date: $("#event-date").val(),
                        event_time: $("#event-time").val(),
                        event_content: $("#event-content").val(),

                    },
                    success: function(response) {
                        document.getElementById('success-message').style.visibility = "visible";
                        $('#success-message').html(response.success);
                        setInterval("location.reload()", 1500);

                    }
                })
            });
        }


        function updateDetails() {


            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/admin/update_details",
                    dataType: "JSON",
                    data: {
                        event_id: $('#event-id').val(),
                    },
                    success: function(response) {
                        $("#event-title").val(response.title);
                        $("#event-date").val(response.date);
                        $("#event-time").val(response.time);
                        $("#event-content").val(response.content);

                    }
                })
            });
        }

        function deleteDetails() {
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/admin/delete_event",
                    dataType: "JSON",
                    data: {
                        event_id: $('#event-id').val(),
                    },
                    success: function(response) {
                        $('#success-message').html(response.success);
                        setInterval("location.reload()", 1500);
                    }
                })
            });

        }
    </script>

@endsection
