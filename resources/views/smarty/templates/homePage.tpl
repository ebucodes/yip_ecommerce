{extends file="layouts/website/app.tpl"}

{block name="title"}{$appName} | {$pageTitle}{/block}
{block name="content"}
    {* Success/Error Messages *}
    {if $sessionSuccess}
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 20px;">
            <i class="ri-check-line"></i> {$sessionSuccess}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    {/if}

    {if $sessionError}
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 20px;">
            <i class="ri-error-warning-line"></i> {$sessionError}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    {/if}

    <!-- Hero slider -->
    <section class="section-hero padding-b-100 next">
        <div class="cr-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cr-hero-banner cr-banner-image-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cr-left-side-contain slider-animation">
                                        <h5><span>100%</span> Organic Fruits</h5>
                                        <h1>Explore fresh & juicy fruits.</h1>
                                        <div class="cr-last-buttons">
                                            <a href="{$allProductsRoute}" class="cr-button">
                                                shop now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cr-hero-banner cr-banner-image-one">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cr-left-side-contain slider-animation">
                                        <h5><span>100%</span> Organic Vegetables</h5>
                                        <h1>The best way to stuff your wallet.</h1>
                                        <div class="cr-last-buttons">
                                            <a href="{$allProductsRoute}" class="cr-button">
                                                shop now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Categories -->
    {* <section class="section-categories padding-b-100">
    <div class="container">
        <div class="row mb-minus-24">
            ... (commented out content remains the same)
        </div>
    </div>
</section> *}

    <!-- Popular product -->
    <section class="section-popular-product-shape padding-b-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
                        {* <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore lacus vel facilisis. </p>
                    </div> *}
                    </div>
                </div>
            </div>
            <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
                <div class="col-xl-12 col-lg-12 col-12 mb-24">
                    <div class="row mb-minus-24">
                        {foreach $products as $product}
                            <div class="mix col-xxl-4 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            {* {$product->main_picture} *}
                                            <img src="{$assetBaseUrl}/{$product->main_picture}" alt="product-1">

                                        </div>
                                        {* <a class="cr-shopping-bag" href="javascript:void(0)">
                                            <i class="ri-shopping-bag-line"></i>
                                        </a> *}
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a href="{$productDetailsRoute}/{$product->id}">{$product->cat->name}</a>
                                        </div>
                                        <a href="{$productDetailsRoute}/{$product->id}" class="title">
                                            <h6 class="mb-6">{$product->name}</h6>
                                        </a>
                                        <p class="cr-price"><span class="new-price">${$product->price|number_format:2}</span>
                                        </p>
                                        {if $product->status == 'out_of_stock'}
                                            <p class="text-danger">This product is out of stock and currently not available</p>
                                        {elseif $auth && $auth->check() && $auth->user()->role == 'buyer'}
                                            <form action="{$addToCartRoute}" method="post">
                                                {$csrf_field}
                                                <input type="hidden" name="product" value="{$product->id}">
                                                <input type="hidden" name="user" value="{$auth->user()->email}">
                                                <div class="cr-add-card">
                                                    <div class="cr-add-button">
                                                        <button type="submit" class="cr-button">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        {else}
                                            <p>Please log in to add items to your cart.</p>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                    <nav aria-label="..." class="cr-pagination">
                        <ul class="pagination cr-pagination">
                            <li> {$products->links()} </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-services padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-services-border" data-aos="fade-up" data-aos-duration="2000">
                        <div class="cr-service-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-red-packet-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Product Packing</h4>
                                            {* <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> *}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-customer-service-2-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>24X7 Support</h4>
                                            {* <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> *}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-truck-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Delivery in 5 Days</h4>
                                            {* <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> *}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-money-dollar-box-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Payment Secure</h4>
                                            {* <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> *}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Deal -->
    <section class="section-deal padding-b-100">
        <div class="bg-banner-deal">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cr-deal-rightside">
                            <div class="cr-deal-content" data-aos="fade-up" data-aos-duration="2000">
                                <span><code>35%</code> OFF</span>
                                <h4 class="cr-deal-title">Great deal on organic food.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do maecenas accumsan
                                    lacus
                                    vel facilisis. </p>
                                <div id="timer" class="cr-counter">
                                    <div class="cr-counter-inner">
                                        <h4>
                                            <span id="days"></span>
                                            Days
                                        </h4>
                                        <h4>
                                            <span id="hours"></span>
                                            Hrs
                                        </h4>
                                        <h4>
                                            <span id="minutes"></span>
                                            Min
                                        </h4>
                                        <h4>
                                            <span id="seconds"></span>
                                            Sec
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="section-testimonial padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000">
                        <div class="cr-banner">
                            <h2>Great Words From People</h2>
                        </div>
                        {* <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore lacus vel facilisis. </p>
                    </div> *}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-testimonial-slider swiper-container">
                        <div class="swiper-wrapper cr-testimonial-pt-50">
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-testimonial">
                                    {* <div class="cr-testimonial-image">
                                    <img src="website/assets/img/testimonial/1.jpg" alt="businessman">
                                </div> *}
                                    <div class="cr-testimonial-inner">
                                        <span>Co Founder</span>
                                        <h4 class="title">Dahunsi Samuel Adeyemi</h4>
                                        <p>"The product exceeded my expectations with its outstanding performance,
                                        eco-friendly, and durable, truly a good buy"
                                        </p>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-testimonial">
                                    <div class="cr-testimonial-inner">
                                        <span>Manager</span>
                                        <h4 class="title">Ogochukwu Susan Ndibe</h4>
                                        <p>"The product exceeded my expectations with its outstanding performance,
                                        eco-friendly, and durable, truly a good buy"
                                        </p>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-testimonial">
                                    <div class="cr-testimonial-inner">
                                        <span>Team Leader</span>
                                        <h4 class="title">Yutong Zhao</h4>
                                        <p>"The product exceeded my expectations with its outstanding performance,
                                        eco-friendly, and durable, truly a good buy"
                                        </p>
                                        <div class="cr-star">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{/block}