@extends('_includes._theme')
@section('content')
    <div class="intro_section page_mainslider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <figure class="flexslider__img">
                        <a href="index.html#">
                            <img src="images/slider/img_slider-01.jpg" alt="">
                        </a>
                    </figure>
                    <div class="flexslider__content ">
                        <div class="content-table">
                            <div class="content-table__row">
                                <div class="content-table__cell text-center">
                                    <div class="content-table__wrapp">
                                        <h3 class="flexslider__title">We Sell Fresh Food</h3>
                                        <p class="flexslider__sub-title">Fresh Fruits, Vegetables, Cereals and many more</p>
                                        <button type="button" class="button-o_t1">Browse our Inventory</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="ls section_padding_bottom_115">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banners-wrapper">
                        <div class="banners-item-1">
                            <figure class="banners-item-1__img">
                                <img src="{{asset('images/banners/banner_01.jpg')}}" alt="">
                            </figure>
                            <div class="banners-item-1__content">
                                <h3 class="banners-item-1__title">Fresh Farm Fruits</h3>
                                <p class="banners-item-1__text">A small description goes here</p>
                                <a href="{{url('products')}}" class="banners-item-1__button">Browse Inventory</a>
                            </div>
                        </div>
                        <div class="banners-item-1">
                            <figure class="banners-item-1__img">
                                <img src="{{asset('images/banners/banner_02.jpg')}}" alt="">
                            </figure>
                            <div class="banners-item-1__content">
                                <h3 class="banners-item-1__title">Organic and Local Vegetables</h3>
                                <p class="banners-item-1__text">A small description goes here</p>
                                <a href="{{url('products')}}" class="banners-item-1__button">Browse Inventory</a>
                            </div>
                        </div>
                        <div class="banners-item-1">
                            <figure class="banners-item-1__img">
                                <img src="{{asset('images/banners/banner_03.jpg')}}" alt="">
                            </figure>
                            <div class="banners-item-1__content">
                                <h3 class="banners-item-1__title">Cereals and Dairy Products</h3>
                                <p class="banners-item-1__text">A small description goes here.</p>
                                <a href="{{url('products')}}" class="banners-item-1__button">Browse Inventory</a>
                            </div>
                        </div>
                        <div class="banners-item-1">
                            <figure class="banners-item-1__img">
                                <img src="{{asset('images/banners/banner_04.jpg')}}" alt="">
                            </figure>
                            <div class="banners-item-1__content">
                                <h3 class="banners-item-1__title">Fresh Meat and Chicken Products</h3>
                                <p class="banners-item-1__text">A small description goes here.</p>
                                <a href="{{url('products')}}" class="banners-item-1__button">Browse Inventory</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ls section_padding_bottom_20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title_t-1 title_t-1--position1 text-center">We Sell Best Food Products</h3>
                    <p class="sub-title_t-4 text-center">A small description of what steric entails goes here....3 to 4 lines of text is good.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ls section_padding_bottom_140">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 text-md-center">
                    <ul class="block__info-list">
                        <li>
                            <h3 class="block__info-title-1 block__t-1">Fresh</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                        </li>
                        <li>
                            <h3 class="block__info-title-1 block__t-2">Healthy</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                        </li>
                        <li>
                            <h3 class="block__info-title-1 block__t-3">Eco</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="block-recom">
                        <p class="block-recom__text">Personal recomendation of General Medical Association</p>
                        <figure class="block-recom__img_1">
                            <img src="images/img_1.png" alt="">
                        </figure>
                        <figure class="block-recom__img_2">
                            <img src="images/recom_02.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <ul class="block__info-list text-right text-md-center title_t-1--position4">
                        <li>
                            <h3 class="block__info-title-2 block__t-4">Tasty</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                        </li>
                        <li>
                            <h3 class="block__info-title-2 block__t-5">Yammy</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                        </li>
                        <li>
                            <h3 class="block__info-title-2 block__t-6">Premium</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ls section_padding_top_215 section_padding_bottom_70 home-parallax-1 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="home-parallax-1__wrapp">
                        <h3 class="home-parallax-1__title">Looking for Fresh Food Products?</h3>
                        <p class="home-parallax-1__sub-title">A small description goes here</p>
                        <button type="button" class="button-o_t1">Browse our Inventory</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-t_1">
        <div class="contacts-t_1_block-1 text-right">
            <div class="contacts-t_1_block-1-wrapp">
                <span class="contacts-t_1__logo">
                    <img src="{{asset('images/sterich_logo.jpg')}}" alt="">
                </span>
                <ul class="contact-list_t1 text-center">
                    <li>
                        <i class="rt-icon2-location2"></i>
                        <p>Building, Street, Kitengela, Kajiado</p>
                    </li>
                    <li>
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <p>+254 724 262 969, +254 725 454 59</p>
                    </li>
                    <li>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <p>9:00 A.M. - 5:00 P.M.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contacts-t_1_block-2 parallax">
            <form class="contact-form form__cont-02" method="post" action="http://webdesign-finder.com/">
                <p class="form__text text-left">Send Your Request and we will get in touch with you as soon as possible</p>
                <label class="label__name" for="name">
                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control name" placeholder="Full Name">
                </label>
                <label class="label__email" for="email">
                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control email" placeholder="Email">
                </label>
                <label class="label__phone" for="phone">
                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control phone" placeholder="Phone number">
                </label>
                <label class="label__message" for="message">
                    <textarea aria-required="true" rows="6" cols="30" name="message" id="message" class="form-control message" placeholder="What would you like?"></textarea>
                </label>
                <div class="text-left">
                    <button type="submit" class="button-o_t5" id="contact_form_submit" name="contact_submit">Send</button>
                </div>
            </form>
        </div>
    </div>
    <div class="ls section_padding_top_110 section_padding_bottom_20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title_t-1 text-center">Our Suppliers</h3>
                    {{--<p class="sub-title_t-1 text-center">We present our achievements and and awards</p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="ls section_padding_bottom_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-sm-center">
                    <div class="content-block_t-2 text-center">
                        <figure class="awards-img-1">
                            <a href="index.html#"></a>
                        </figure>
                    </div>
                    <div class="content-block_t-2 text-center">
                        <figure class="awards-img-2">
                            <a href="index.html#"></a>
                        </figure>
                    </div>
                    <div class="content-block_t-2 text-center">
                        <figure class="awards-img-3">
                            <a href="index.html#"></a>
                        </figure>
                    </div>
                    <div class="content-block_t-2 text-center">
                        <figure class="awards-img-4">
                            <a href="index.html#"></a>
                        </figure>
                    </div>
                    <div class="content-block_t-2 text-center">
                        <figure class="awards-img-5">
                            <a href="index.html#"></a>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="background-t_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-sm-center">
                    <h3 class="title_t-2 text-left text-sm-center">Get Started</h3>
                    <p class="sub-title_t-2 text-lef">Search our Inventory and make your Order. </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-sm-center">
                    <div class="content-block_t-3">
                        <img src="{{asset('images/img_about_post-4.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-right text-sm-center">
                    <button type="button" class="button-g_t4 button_p_1">Get Started</button>
                </div>
            </div>
        </div>
    </div>
@endsection