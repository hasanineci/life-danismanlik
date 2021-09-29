@extends('layouts.adminlayout')
@section('css')
    <style>
        .form-control {
            margin: 10px;
        }

    </style>
@endsection
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-12">

            <a href="{{ route('admin_create_project') }}" style="float:right;" class="btn btn-success">Yeni oluştur</a>
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Proje İsmi</th>
                        <th scope="col">Proje Detayı</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td> {{ $project->title }} </td>
                            <td> {!! $project->content !!} </td>
                            <td>
                                <a href="{{ route('admin_edit_project', ['id' => $project->id]) }}"
                                    class="btn btn-warning">Düzenle</a>
                            </td>
                            <td> <a href="{{ route('admin_delete_project', ['id' => $project->id]) }}"
                                class="btn btn-danger">Sil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <input type="hidden" id="project-id" value="">
            </table>

            <div class="row">
                <div class="col-12">
                    {{ $projects->links() }}
                </div>
            </div>

        </div>
    </div>

@endsection

@section('js');

    <script>
        var globalEditor;

        ClassicEditor
            .create(document.querySelector('#project_content'))
            .then(editor => {
                console.log(editor);
                globalEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        /*
                function getdeleteId(id) {
                    $('#project-id').val(id);
                    deleteProjects();
                }

                function getUpdateId(id) {
                    /*Düzenle Butonuna tıkladığım anda Proje ID'sini yakalıyorum */
        /* $('#project-id').val(id);
         /* Düzenle Butonuna tıkladığım zaman modal'da kişilerin bilgilerini yazıcak */

        /*      updateProjects();
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
                      url: "/admin/updateProject",
                      dataType: "JSON",
                      data: {
                          project_id: $('#project-id').val(),
                          project_title: $("#project-title").val(),
                          project_content: $("#project_content").val(),
                      },
                      success: function(response) {
                          document.getElementById('success-message').style.visibility = "visible";
                          $('#success-message').html(response.success);
                          setInterval("location.reload()", 1500);
                      }
                  })
              });
          }

          function updateProjects() {
              $(document).ready(function() {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });

                  $.ajax({
                      type: "POST",
                      url: "/admin/showUpdateDetailsProject",
                      dataType: "JSON",
                      data: {
                          project_id: $('#project-id').val(),
                      },

                      success: function(response) {
                          $("#project-title").val(response.title);
                          $("#project_content").html(response.content);
                          globalEditor.setData(response.content);
                      }
                  })
              });
          }

          function deleteProjects() {
              $(document).ready(function() {
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });

                  $.ajax({

                      type: "POST",
                      url: "/admin/deleteProject",
                      dataType: "JSON",
                      data: {
                          project_id: $('#project-id').val(),
                      },

                      success: function(response) {
                          $('#success-message').val(response.success);
                          setInterval("location.reload()", 1500);
                      }
                  })
              });

          }
    </script>

@endsection
