@extends('toko/shoppers/layouts/master')

@section('content')
<nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
          <li class=" active">
              <a href="/">Home</a>
          </li>

          <li class="has-children"><a href="tokoview">Shop</a>
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
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <a href="/cart">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Order</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">





            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">

            </div>

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                      <th>Status</th>
                    </thead>
                    <tbody>
                      @foreach($list as $a)
                      <tr>
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
                          }elseif ($a->status==4) {
                            echo "Kembali";
                          }
                         ?>
                       </td>
                      </tr>
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
