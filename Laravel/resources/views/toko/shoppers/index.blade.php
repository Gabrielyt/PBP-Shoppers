@extends('toko/shoppers/layouts/master')

@section('content')
<nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children active">
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
        <div class="site-blocks-cover" style="background-image:url({{URL::asset('/toko/images/hero_1.jpg')}})"
            data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2">Finding Your Perfect Shoes</h1>
                        <div class="intro-text text-center text-md-left">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at
                                iaculis quam. Integer accumsan tincidunt fringilla. </p>
                            <p>
                                <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-section-sm site-blocks-1">
            <div class="container">
                <div class="row">
                    @foreach($barang as $a)
                    <div class="col-md-12 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('barangs/'.$a->foto)}}" class="card-img-top" width="50px" height="150px">
                            <div class="card-body">
                                <h5 class="card-title">{{$a->nama}}</h5>
                                <p class="card-text">Rp. {{$a->harga}}</p>
                                <a href="/cart/tambah/{{$a->id_barang}}" class="btn btn-primary">add to cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

      






    @endsection
