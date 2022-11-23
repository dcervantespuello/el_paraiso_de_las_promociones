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

                            <h4 class="card-title">Editar perfil</h4><br><br>

                            <form action="{{ route('store.profile') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre completo</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="name" type="text" name="name"
                                            value="{{ $user->name }}" required autofocus />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="email" type="email" name="email"
                                            value="{{ $user->email }}" required />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="username" type="text" name="username"
                                            value="{{ $user->username }}" required />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label">Imagen de perfil</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="profile_image" type="file" name="profile_image"
                                            required />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="image"
                                            src="{{ asset($user->profile_image ? 'upload/profile_images/' . $user->profile_image : 'upload/no_image.jpg') }}"
                                            alt="Imagen de perfil">
                                    </div>
                                </div>

                                <input class="btn btn-info waves-effect waves-light" type="submit"
                                    value="Actualizar perfil">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <script>
        $(document).ready(function() {
            // Cuando se sube el archivo en el campo #profile_image se crea una instancia de lector (FileReader).
            $('#profile_image').change(function(e) {
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
