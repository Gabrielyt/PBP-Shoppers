@extends('toko/shoppers/layouts/master')

@section('content')
<nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
          <li >
              <a href="/">Home</a>
          </li>

          <li class="has-children active"><a href="tokoview">Shop</a>
            <ul class="dropdown">
                <li><a href="tokoview">Toko</a></li>
                <li><a href="toko/pesanan">Pesanan</a></li>
                </ul></li>

      </ul>
    </div>
</nav>
  </header>
  <div class="site-wrap">
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span>  <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>


      <div class="site-section">


        <div class="container" style="margin-top: 20px">

            <div class="col-md-12">
                <h3 class="text-black h4 text-uppercase">List Barang</h3>
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
                                <a href="/toko/edit/{{$c->id_barang }}"><button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right"><i class="fa fa-edit"></i></button>
                                </a>
                                <a href="/toko/hapus/{{$c->id_barang }}"><button class="btn btn-sm btn-danger" id="right-panel-link" style="text-align:right"><i class="fa fa-trash" ></i></button>
                                </a>
                                </td>
                            </tr>
                            @endforeach
                        </thread>
                    </table>
                </form>
                  <a href="/toko/tambah"><button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right">Tambah</button></a>
            </div>
        </div>




    </div>


    
  @endsection
