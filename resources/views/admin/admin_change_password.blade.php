@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $error }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif

                            <h4 class="card-title">Cambiar contraseña</h4><br><br>

                            <form action="{{ route('update.password') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="oldPassword" class="col-sm-2 col-form-label">Contraseña anterior</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="oldPassword" type="password" name="oldPassword"
                                            required autofocus />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-sm-2 col-form-label">Contraseña nueva</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="newPassword" type="password" name="newPassword"
                                            required />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="confirmPassword" class="col-sm-2 col-form-label">Confirmar
                                        contraseña</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="confirmPassword" type="password"
                                            name="confirmPassword" required />
                                    </div>
                                </div>

                                <input class="btn btn-info waves-effect waves-light" type="submit"
                                    value="Actualizar contraseña">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div> <!-- container-fluid -->
    </div>
@endsection
