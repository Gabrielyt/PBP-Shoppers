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
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cart as $a)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{asset('barangs/'.$a->foto)}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$a->nama}}</h2>
                    </td>
                    <td>{{$a->harga}}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                        <a href="/cart/tambah_minus/{{$a->id_cart}}">  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button></a>
                        </div>
                        <input type="text" class="form-control text-center" value="{{$a->jumlah}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <a href="/cart/tambah_plus/{{$a->id_cart}}"><button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>{{$a->total}}</td>
                    <td><a href="/cart/hapus/{{$a->id_cart}}" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <a href="/"><button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <?php
                    $jumlah=0;
                    foreach ($cart as $key ) {
                      $jumlah+=$key->total;
                    } ?>
                    <strong class="text-black">Rp. {{$jumlah}}</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp {{$jumlah}}</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                  <a href="/checkout">  <button class="btn btn-primary btn-lg py-3 btn-block">Proceed To Checkout</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
