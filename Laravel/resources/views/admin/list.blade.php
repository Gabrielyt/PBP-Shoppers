@extends('admin/layout/layout')


@section('container')

<div class="container" style="margin-top: 20px">
    <div class="col-md-12">
            {{ csrf_field() }}
            <table <table id="table_id" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <thread>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Foto Barang</th>
                        <th>Stok Barang</th>
                        <th>Keterangan Barang</th>
                        <th>Fungsi</th>
                    </tr>
                    @foreach($listdata as $c)
                    <tr>
                        <td>{{ $c->nama }}</td>
                        <td>{{$c->harga}}</td>
                        <td><img src="{{asset('barangs/'.$c->foto)}}" width="70px" alt="barangs"></td>
                        <td>{{$c->stok}}</td>
                        <td>{{$c->keterangan}}</td>
                        <td>
                        <a href="/admin/tampilupdate/{{$c->id_barang }}"><button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="/admin/hapus/{{$c->id_barang }}"><button class="btn btn-sm btn-danger" id="right-panel-link" style="text-align:right"><i class="fa fa-trash" ></i></button>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </thread>
            </table>
        </form>
    </div>
</div>


@endsection
