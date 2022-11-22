@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>
                        <center>
                            <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg') }}"
                                alt="Card image cap">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Nombre completo: {{ $user->name }}</h4>
                            <hr>
                            <h4 class="card-title">Correo electrónico: {{ $user->email }}</h4>
                            <hr>
                            <h4 class="card-title">Nombre de usuario: {{ $user->username }}</h4>
                            <hr>
                            <a href="{{ route('edit.profile') }}"
                                class="btn btn-info btn-rounded waves-effect waves-light">Editar perfil</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
