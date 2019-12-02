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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"> <a href="/tokoview">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Pesanan</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

              <div class="col-md-30">
                <h2 class="h3 mb-3 text-black">Pesanan</h2>
                <div class="p-20 p-lg-10 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Pembeli</th>
                      <th>Alamat</th>
                      <th >Product</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Fungsi</th>
                      <th></th>
                    </thead>
                    <tbody>

                      @foreach($list as $a)
                      <form  action="/toko/updatebarang" method="post">
                        {{ csrf_field() }}
                      <tr>
                            <td>
                            {{$a->nama_pembeli}}
                            </td>
                            <td>
                            {{$a->alamat}}
                            </td>
                            <td>{{$a->nama_barang}}<strong class="mx-2">x</strong> {{$a->jumlah_barang}}</td>
                            <td>{{$a->total}}</td>
                            <td>
                              <?php
                                if($a->status==0){
                                  echo "Packing";
                                }elseif ($a->status==1) {
                                  echo "Perjalanan";
                                }elseif ($a->status==2) {
                                  echo "Terkirim";
                                }elseif ($a->status==3) {
                                  echo "Kembali";
                                }
                               ?>
                           </td>
                           <td>

                               <input type="hidden" name="id_user" value="{{$a->id_user}}" >
                               <input type="hidden" name="id_pesanan" value="{{$a->id}}" >

                             <select name="status" id="status">
                               <option value="0">Packing</option>
                               <option value="1">Perjalanan</option>
                               <option value="2">Terkirim</option>
                               <option value="3">Kembali</option>
                             </select>
                           </td>
                           <td>  <button class="btn btn-sm btn-primary" id="right-panel-link" style="text-align:right"><i class="fa fa-edit"></i></button>
                             </td>

                      </tr>
                      </form>
                      @endforeach

                    </tbody>

                  </table>



                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

  
@endsection
