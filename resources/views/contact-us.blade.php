@extends('_includes._theme')
@section('content')
    <!-- Breadcrumbs -->
    <div class="page_breadcrumbs section_padding_85 breadcrumbs-01 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="breadcrumbs__title text-center">Get In Touch</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumbs-list text-center">
                        <li>
                            <a href="http://webdesign-finder.com/">Home</a>
                        </li>
                        <li class="active">Contacts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacts -->
    <div class="ls section_padding_top_80 form_position">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-lg-center">
                    <ul class="contact-list text-lg-left">
                        <li class="contact-list_address">Building, Street, Kitengela, kajiado</li>
                        <li class="contact-list_phone">+254 724 262 969</li>
                        <li class="contact-work-time">9:00 A.M. - 5:00 P.M.</li>
                    </ul>
                    <h4 class="contact-social__title">Follow Us:</h4>
                    <ul class="contact-social">
                        <li>
                            <a href="javascript:;">
                                <i class="cont__instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="cont__google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="cont__twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="cont__facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 text-right text-md-center">
                    <div class="form__bg">
                        <form class="contact-form form__cont-01" method="post" action="http://webdesign-finder.com/">
                            <p class="form__text text-left">Send Your Request and we will get in touch with you as soon
                                as possible</p>
                            <label class="label__name" for="name">
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name"
                                       class="form-control name" placeholder="Full Name">
                            </label>
                            <label class="label__email" for="email">
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email"
                                       class="form-control email" placeholder="Email">
                            </label>
                            <label class="label__phone" for="phone">
                                <input type="text" aria-required="true" size="30" value="" name="phone" id="phone"
                                       class="form-control phone" placeholder="Phone number">
                            </label>
                            <label class="label__message" for="message">
                                <textarea aria-required="true" rows="6" cols="30" name="message" id="Your Request"
                                          class="form-control message" placeholder="Message"></textarea>
                            </label>
                            <div class="text-left">
                                <button type="submit" class="button-o_t5" id="contact_form_submit"
                                        name="contact_submit">Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google maps -->
    <div class="page_map">
        <div id="map" class="contact-map"></div>
    </div>
@endsection