@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Editar perfil</h4>

                            <form action="" method="post">
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
                                        <img class="rounded avatar-lg"
                                            src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
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
@endsection
