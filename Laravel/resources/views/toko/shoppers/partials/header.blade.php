<div class="site-wrap">
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                        <form action="" class="site-block-top-search">
                            <span class="icon icon-search2"></span>
                            <input type="text" class="form-control border-0" placeholder="Search">
                        </form>
                    </div>

                    <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                        <div class="site-logo">
                            <a href="/" class="js-logo-clone">Shoppers</a>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                        <div class="site-top-icons">
                            <ul>

                                <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                                <li>
                                    <a href="/cart" class="site-cart">
                                        <span class="icon icon-shopping_cart"></span>

                                        <?php if(Session::get('count_cart')>0) { ?>
                                        <span class="count">{{Session::get('count_cart')}}</span>
                                        <?php } ?>
                                    </a>
                                </li>
                                <li><nav class="site-navigation ">

                                            <ul class="site-menu">
                                                <li class="has-children">
                                                      <a href=""><span class="icon icon-person"></span></a>
                                                    <ul class="dropdown">

                                                        @if(!Session::get('id_user'))
                                                        <li>
                                                          <a href="{{url('login')}}">Login</a>
                                                        </li>
                                                        <li>
                                                          <a href="{{url('registration')}}">Register</a>
                                                        </li>
                                                        @else
                                                        <li><a href="{{url('logout')}}">Logout</a></li>
                                                        @endif
                                                 </ul>
                                                </li>

                                            </ul>

                                    </nav></li

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <div class="container">
                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li class="has-children active">
                        <a href="/">Home</a>
                        <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                            <li class="has-children">
                                <a href="#">Sub Menu</a>
                                <ul class="dropdown">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="about.html">About</a>
                        <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                        </ul>
                    </li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="#">Catalogue</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
