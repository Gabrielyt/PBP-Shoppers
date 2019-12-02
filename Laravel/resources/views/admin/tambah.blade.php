@extends('admin/layout/layout')


@section('container')

<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
        <form method="post" action="/queryinsert" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table <table id="table_id" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <thread>
                    <tr>
                        <td>Nama Barang</td>
                        <td><input type="text" name="nama" placeholder="masukkan nama" required></td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td><input type="text" name="harga" placeholder="masukkan harga" required></td>
                    </tr>
                    <tr>
                        <td>Upload Foto</td>
                        <td><input id="barang" type="file" name="barang" required></td>
                    </tr>
                    <tr>
                        <td>Stok Barang</td>
                        <td><input type="text" name="stok" placeholder="masukkan stok" required></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input type="text" name="keterangan" placeholder="masukkan keterangan" required></td>
                    </tr>
                    <tr>
                        <td>ID Penjual</td>
                        <td><input type="text" name="idpenjual" placeholder="masukkan id penjual" required></td>
                    </tr>
                </thread>
            </table>
            <center>
                <button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right">Tambah</button>
            </center>
        </form>
    </div>
</div>

@endsection
