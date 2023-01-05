<!-- footer area start -->
<footer>
    <div class="footer-area footer-demo-1">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left-area">
                        <div class="footer-logo">
                            <img src=" " alt="">
                            <div class="footer-content">
                                <p>
                                    Arfa Bank Solution
                                </p>
                            </div>
                            <div class="agent-social-links">
                                <nav>
                                    <ul>
                                        @foreach ($info->social as $value)
                                        <li><a href="{{ $value->link }}"><span class="iconify" data-icon="{{ $value->icon }}" data-inline="false"></span></a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-menu">




                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-menu">



                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-newsletter">

                        <div class="footer-content">
                            <p>20300 place de la gare casa voyageurs, Casablanca Maroc</p>
                        </div>
                        <div class="footer-newsletter-input">
                            <form action="#" id="newsletter" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Enter Your Email Address" id="subscribe_email">
                                <button type="submit" class="basicbtn">{{ __('Subscribe') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area footer-demo-1">
        <div class="footer-bottom-content text-center">
            <span>Copyright © Website - {{ date('Y') }}.'Develop By'<a href="{{ url('/') }}">Arafat Teams</a></span>
        </div>
    </div>
</footer>
<!-- footer area end -->

