@extends('admin.admin_master')

@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Editar información</h4><br><br>

                            <form action="{{ route('update.slide') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $homeSlide->id }}">

                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="title" type="text" name="title"
                                            value="{{ $homeSlide->title }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="short_title" class="col-sm-2 col-form-label">Subtítulo</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="short_title" type="text" name="short_title"
                                            value="{{ $homeSlide->short_title }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="video_url" class="col-sm-2 col-form-label">URL de video</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="video_url" type="url" name="video_url"
                                            value="{{ $homeSlide->video_url }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="home_slide" class="col-sm-2 col-form-label">Imagen</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="home_slide" type="file" name="home_slide" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="image"
                                            src="{{ asset($homeSlide->home_slide ? $homeSlide->home_slide : 'upload/no_image.jpg') }}"
                                            alt="Imagen">
                                    </div>
                                </div>

                                <input class="btn btn-info waves-effect waves-light" type="submit"
                                    value="Actualizar información">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <script>
        $(document).ready(function() {
            // Cuando se sube el archivo en el campo #home_slide se crea una instancia de lector (FileReader).
            $('#home_slide').change(function(e) {
                var reader = new FileReader();

                // Luego se ejecuta la función readAsDataURL para tener acceso al archivo como URL en el atributo result
                reader.readAsDataURL(e.target.files[0]);

                // Al finalizar la carga del archivo se remplaza el atributo src de la imagen por la URL obtenida del lector.
                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
            });
        });
    </script>
@endsection
