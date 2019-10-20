<!-- Logo: contains logo in various header layouts -->
<div class="ls page_toplogo section_padding_top_25 section_padding_bottom_10 table_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 text-left text-sm-center">
                <ul class="social-list">
                    <li>
                        <a href="javascript:;">
                            <i class="soc__instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="soc__google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="soc__twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="soc__facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('images/sterich_logo.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-right text-sm-center">
                <address class="contact-block text-right text-sm-center">
                    <p class="contact-block__address">Building, Street, Kitengela, Kajiado</p>
                    <p class="contact-block__phone">
                        <span>+254</span> 724 262 969</p>
                    <p class="contact-block__work-time">9:00 A.M. - 5:00 P.M.</p>
                </address>
            </div>
        </div>
    </div>
</div>

<!-- Header: contains site site Main Menu -->
<div class="ls">
    <header class="page_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 text-sm-center">
                    <span class="toggle_menu">
                        <span></span>
                    </span>
                    <!-- Main navigation start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu text-center">
                            <li class="{{$page == 'index' ? 'active': ''}}">
                                <a href="{{url('/')}}">Home</a>
                            </li>

                            <!-- Shop -->
                            <li class="{{$page == 'products' ? 'active': ''}}">
                                <a href="{{url('products')}}">Our Products</a>
                            </li>

                            <!-- Contact -->
                            <li class="{{$page == 'contact-us' ? 'active': ''}}">
                                <a href="{{url('contact-us')}}" data-target="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- eof main nav -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 text-right text-sm-center">
                    {{--<div class="shopping-cart">
                        <a class="shopping-cart__content header-button" id="cart" data-target="#" href="http://webdesign-finder.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="shopping-cart__info">(2)</span>
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </a>
                        <div class="shopping-cart__list dropdown-menu" aria-labelledby="cart">
                            <span class="grey">Recently added item(s)</span>
                            <div class="widget widget_shopping_cart">

                                <div class="widget_shopping_cart_content">
                                    <ul class="cart_list product_list_widget media-list darklinks">
                                        <li class="media">
                                            <div class="media-left media-middle">
                                                <a href="shop-single-item.html">
                                                    <img src="images/shop/shop_img-01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <h4>
                                                    <a href="shop-single-item.html">Stet clitad gubergren</a>
                                                </h4>
                                                <span class="quantity">1 ×
                                                    <span class="amount">$90</span>
                                                </span>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="index.html#" class="remove" title="Remove this item">
                                                    <i class="rt-icon2-trash highlight"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left media-middle">
                                                <a href="shop-single-item.html">
                                                    <img src="images/shop/shop_img-02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <h4>
                                                    <a href="shop-single-item.html">Takimata san bctus</a>
                                                </h4>
                                                <span class="quantity">1 ×
                                                    <span class="amount">$90</span>
                                                </span>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="index.html#" class="remove" title="Remove this item">
                                                    <i class="rt-icon2-trash highlight"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end product list -->
                                    <p class="total">
                                        <span class="grey">Cart Subtotal:
                                            <span class="amount">$180</span>
                                        </span>
                                    </p>
                                    <p class="buttons">
                                        <a href="shop-cart-right.html" class="button-o_t6">View All</a>
                                        <a href="shop-checkout-right.html" class="button-o_t6">Checkout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="index.html#" class="search_modal_button serach-button">
                        <i class="rt-icon2-search4"></i>
                    </a>--}}
                </div>
            </div>
        </div>
    </header>
</div>