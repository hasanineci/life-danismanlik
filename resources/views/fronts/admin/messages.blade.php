@extends('layouts.adminlayout')
@section('css')
    <style>
        .message-table td:first {
            width: 50px;
        }

        .message-table :nth-child(2) {
            width: 250px;
        }

        .message-table :nth-child(3) {
            width: 150px;
        }

        .message-table :nth-child(4) {
            width: 300px;
        }

        .message-table td {
            /* color:blue; */

        }

        .message-table td {
            /* background: red;*/
        }

        .message-table tr {
            min-height: 50px;
        }

        .message-table td:last-child {
            /* color:red !important;*/
            min-height: 70px;
            min-width: 100%;
        }

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">

            <h1 class="text-center">GELEN MESAJLAR</h1>
            <table class="message-table table mt-5" style="font-size: 12px;">

                <form method="POST" action="">
                    @csrf

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">İsim</th>
                            <th scope="col">Tarih</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Konu</th>
                            <th scope="col">Mesaj</th>
                            <th scope="col">Oku</th>
                            <th scope="col">Sil</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($messages as $message)
                            @php
                                if ($message['readed'] == 0) {
                                    echo '<tr style="font-weight:900" id=' . $message->id . '>';
                                } else {
                                    echo '<tr>';
                                }
                            @endphp
                            <td>{{ $message['name'] }}</td>
                            <th>{{ \Carbon\Carbon::parse($message->created_at)->ago(["parts" => 2]) }}</th>
                            <td>{{ $message['email'] }}</td>
                            <td>{{ $message['phone'] }}</td>
                            <td>{{ $message['subject'] }}</td>
                            <td style=" white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            max-width:200px;">{{ $message['message'] }}</td>
                            <td><button type="button" name="project_id" onclick="getMessage({{ $message['id'] }})"
                                    value={{ $message['id'] }} class="btn btn-success">Oku</button></td>
                            <td><button type="submit" name="project_id" onclick="getMessage({{ $message['id'] }})"
                                    value={{ $message['id'] }} class="btn btn-danger">Sil</button></td>
                            </tr>
                        @endforeach

                    </tbody>
                </form>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pt-2 pb-2">
            {{ $messages->links() }}
        </div>
    </div>

    <div class="row">
        <div class="col-6 pt-5 pb-2">
            <h2>MESAJ</h2>
            <strong><span style="font-size: 15px;"> Kimden:</span> </strong><span id="message_from"
                style="font-size: 15px;"></span><br>
            <strong><span style="font-size: 15px;"> Mail:</span> </strong><span id="message_mail"
                style="font-size: 15px;"></span><br>
            <strong><span style="font-size: 15px;"> Konu:</span> </strong> <span id="message_subject"
                style="font-size: 15px;"></span><br>
            <strong> <span style="font-size: 15px;"> Tarih:</span> </strong><span id="message_date"
                style="font-size: 15px;"></span><br>
            <p id="message_content" class="mt-2" style="font-size: 15px;"></p>

        </div>
    </div>

@endsection

@section('js')
    <script>
        function getMessage(id) {
            // console.log(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var formData = {
                id: id,
            };
            //console.log(id);
            $.ajax({
                url: "/admin/getmessage",
                type: "POST",
                dataType: "JSON",
                data: formData,

                success: function(result) {
                    $("#message_from").html(result.name);
                    $("#message_mail").html(result.email);
                    $("#message_subject").html(result.subject);
                    $("#message_date").html(result.date);
                    $("#message_content").html(result.message);

                    document.getElementById(id).style.fontWeight = "100";
                }
            });
        }
    </script>
@endsection
