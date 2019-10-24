@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informasi</div>
                <hr>
                <div class="panel-body">
                    <br>
                    <div class="table table-responsive">
                        <form action="/absen" method="post">
                            {{csrf_field()}}
                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="keterangan..." name="note">
                                </td>
                                <br>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="masuk">ABSEN MASUK</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="keluar">ABSEN KELUAR</button>
                                </td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7,5 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Riwayat Absensi</div>
                <hr>
                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan   </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2019-10-23</td>
                                <td>02:00:00</td>
                                <td>03:00:00</td>
                                <td>Hello</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
