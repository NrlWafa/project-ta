@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form method="POST" action={{ $url }} enctype="multipart/form-data">
                    @csrf
                    @if (@$mahasiswa)
                        @method('PUT')
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger text-center text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="hidden" name="id">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Nama<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="nama"
                                value="{{ @$mahasiswa->nama ?? old('nama') }}" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label>NIM<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="nim"
                                value="{{ @$mahasiswa->nim ?? old('nim') }}" name="nim" placeholder="Masukkan NIM">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir<span style="color: red;">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_lahir"
                                    value="{{ @$mahasiswa->tgl_lahir ?? old('tgl_lahir') }}" name="tgl_lahir"
                                    placeholder="Masukkan Tanggal Lahir">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="alamat"
                                value="{{ @$mahasiswa->alamat ?? old('alamat') }}" name="alamat"
                                placeholder="Masukkan Alamat">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="save">Simpan</button>

                        <a href="{{ url('Data_Mahasiswa') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Tambahkan kode script JavaScript berikut -->
        <script>
            function showSelectedFoto(event, previewId) {
                const input = event.target;
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.getElementById(previewId);
                        preview.setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </div>
    <!-- /.card-body -->
    <!-- /.card -->
@endsection
