@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0">Profile</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/AdminLTE/dist/img/user4-128x128.jpg"
                                alt="User profile picture" style="height: 150px;width:150px;object-fit:fill;">
                        </div>

                        <h5 class="profil-nama text-center mb-3 mt-3">{{ $profil->nama }}</h5>
                        <a href="admin" class="btn btn-primary btn-block"><b>Kembali</b></a>


                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Data Profile</h3>
                    </div>
                    <div class="card-body">
                        <strong>Nama Lengkap</strong>
                        <p class="text-muted"> {{ $profil->nama }}</p>
                        <hr>
                        <strong>E-Mail</strong>
                        <p class="text-muted">{{ $profil->email }}</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
