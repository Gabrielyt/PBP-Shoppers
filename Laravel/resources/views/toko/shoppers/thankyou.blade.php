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
                  <li><a href="pesanan">Pesanan</a></li>
                  </ul></li>

        </ul>
    </div>
</nav>
  </header>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <a href="/cart">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Terima Kasih!</h2>
            <p class="lead mb-5">Pesanan Telah Sukses.</p>
            <p><a href="keranjang" class="btn btn-sm btn-primary">Melihat Detail Pesanan</a></p>
          </div>
        </div>
      </div>
    </div>

    @endsection
