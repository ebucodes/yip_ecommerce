<!-- Footer -->
<footer class="footer padding-t-100 bg-off-white">
    <div class="container">
        <div class="row footer-top padding-b-100">
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer-logo">
                    <div class="image">
                        <img src="{{ asset('website/assets/img/logo/logo.png') }}" alt="logo" class="logo">
                        <img src="{{ asset('website/assets/img/logo/dark-logo.png') }}" alt="logo" class="dark-logo">
                    </div>
                    <p>{{ config('app.name') }} is the biggest market of grocery products. Get your daily needs from our
                        store.</p>
                </div>
                <div class="cr-footer">
                    <h4 class="cr-sub-title cr-title-hidden">
                        Contact us
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li class="location-icon">
                            UCM Lee's Summit Campus 1101 NW Innovation Pkwy Lee's Summit, MO 64086
                        </li>
                        <li class="mail-icon">
                            <a href="javascript:void(0)">example@email.com</a>
                        </li>
                        <li class="phone-icon">
                            <a href="javascript:void(0)"> +91 123 4567890</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        {{ config('app.name') }}
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                        {{-- <li><a href="track-order.html">Delivery Information</a></li> --}}
                        <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                        {{-- <li><a href="terms.html">Terms & Conditions</a></li> --}}
                        <li><a href="{{ route('contactUs') }}">contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer cr-newsletter">
                    <h4 class="cr-sub-title">
                        Subscribe Our Newsletter
                        <span class="cr-heading-res"></span>
                    </h4>
                    <div class="cr-footer-links cr-footer-dropdown">
                        <form class="cr-search-footer">
                            <input class="search-input" type="text" placeholder="Search here...">
                            <a href="javascript:void(0)" class="search-btn">
                                <i class="ri-send-plane-fill"></i>
                            </a>
                        </form>
                    </div>
                    <div class="cr-social-media">
                        <span><a href="#"><i class="ri-facebook-line"></i></a></span>
                        <span><a href="#"><i class="ri-twitter-x-line"></i></a></span>
                        <span><a href="#"><i class="ri-dribbble-line"></i></a></span>
                        <span><a href="#"><i class="ri-instagram-line"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-last-footer">
            <p>&copy; <span id="copyright_year"></span> <a href="{{ route('homePage') }}">{{ config('app.name') }}</a>,
                All rights
                reserved.</p>
        </div>
    </div>
</footer>
