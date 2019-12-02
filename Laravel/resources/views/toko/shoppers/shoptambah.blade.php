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
          <div class="col-md-12 mb-0">  <a href="/tokoview">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tambah Barang</strong></div>
        </div>
      </div>
    </div>


      <div class="site-section">








          <div class="container" style="margin-top: 20px">
              <div class="col-md-12">
                  <h3 class="text-black h4 text-uppercase">Tambah Barang</h3>
                  <form method="post" action="/toko/tambah" enctype="multipart/form-data">
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

                          </thread>
                      </table>
                      <center>
                          <button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right">Tambah</button>
                      </center>
                  </form>
              </div>
          </div>



    </div>


  
  @endsection
