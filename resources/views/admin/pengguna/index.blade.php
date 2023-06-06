@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pengguna</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 6
                        </td>
                        <td>Win 98+</td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                    </tr>
                    <tr>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ OSX.2+</td>
                    </tr>
                    <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                    </tr>
                    <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                    </tr>
                    <tr>
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                    </tr>
                    <tr>
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>

                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>

                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
