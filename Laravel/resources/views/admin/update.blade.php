@extends('admin/layout/layout')


@section('container')

<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
        <form method="post" action="/admin/update" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table <table id="table_id" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <thread>
                    @foreach($tampilupdate as $c)
                    <input type="hidden" name="id_barang" value="{{ $c->id_barang }}">
                    <tr>
                        <td>Nama Barang</td>
                        <td><input type="text" name="nama" value="{{$c->nama}}" required></td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td><input type="text" name="harga" value="{{$c->harga}}" required></td>
                    </tr>
                    <tr>
                        <td>Upload Foto</td>
                        <td><input id="barang" type="file" name="barang"></td>
                        <input type="hidden" name="foto" value="{{ $c->foto }}">
                    </tr>
                    <tr>
                        <td>Stok Barang</td>
                        <td><input type="text" name="stok" value="{{$c->stok}}" required></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input type="text" name="keterangan" value="{{$c->keterangan}}" required></td>
                    </tr>
                    <tr>
                        <td>ID Penjual</td>
                        <td><input type="text" name="idpenjual" value="{{$c->id_penjual}}" required></td>
                    </tr>
                    @endforeach
                </thread>
            </table>
            <center>
                <button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right">Update</button>
            </center>
        </form>
    </div>
</div>

@endsection
