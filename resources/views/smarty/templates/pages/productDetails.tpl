{extends file="layouts/website/app.tpl"}

{block name="title"}{$product->name} - {$appName}{/block}

{block name="content"}

    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>{$product->name}</h2>
                            <span> <a href="{$homePageRoute}">Home</a> - {$product->cat->name} - {$product->name}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="section-product padding-t-100">
        <div class="container">
            <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-xxl-4 col-xl-5 col-md-6 col-12 mb-24">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider">
                            <div class="slider slider-for">
                                {* Main product image *}
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        {if $product->main_picture|substr:0:4 == 'http'}
                                            <img src="{$product->main_picture}" alt="{$product->name}" class="product-image">
                                        {else}
                                            <img src="{$assetBaseUrl}/{$product->main_picture}" alt="{$product->name}"
                                                class="product-image">
                                        {/if}
                                    </div>
                                </div>

                                {* Other product images *}
                                {if $product->other_pictures_array}
                                    {foreach $product->other_pictures_array as $image}
                                        <div class="slider-banner-image">
                                            <div class="zoom-image-hover">
                                                {if $image|substr:0:4 == 'http'}
                                                    <img src="{$image}" alt="{$product->name}" class="product-image">
                                                {else}
                                                    <img src="{$assetBaseUrl}/{$image}" alt="{$product->name}" class="product-image">
                                                {/if}
                                            </div>
                                        </div>
                                    {/foreach}
                                {/if}
                            </div>

                            <div class="slider slider-nav thumb-image">
                                {* Main image thumbnail *}
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        {if $product->main_picture|substr:0:4 == 'http'}
                                            <img src="{$product->main_picture}" alt="{$product->name}">
                                        {else}
                                            <img src="{$assetBaseUrl}/{$product->main_picture}" alt="{$product->name}">
                                        {/if}
                                    </div>
                                </div>

                                {* Other images thumbnails *}
                                {if $product->other_pictures_array}
                                    {foreach $product->other_pictures_array as $image}
                                        <div class="thumbnail-image">
                                            <div class="thumbImg">
                                                {if $image|substr:0:4 == 'http'}
                                                    <img src="{$image}" alt="{$product->name}">
                                                {else}
                                                    <img src="{$assetBaseUrl}/{$image}" alt="{$product->name}">
                                                {/if}
                                            </div>
                                        </div>
                                    {/foreach}
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading">{$product->name}</h2>
                        <p>{$product->desc}</p>
                    </div>
                    <div class="cr-size-and-weight">
                        <div class="cr-review-star">
                            <div class="cr-star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>( 75 Review )</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><label>Category <span>:</span></label>{$product->cat->name}</li>
                                <li><label>Seller <span>:</span></label>{$product->user->name}</li>
                                <li><label>Stock <span>:</span></label>
                                    {if $product->quantity > 0}
                                        {$product->quantity} Available
                                    {else}
                                        Out of Stock
                                    {/if}
                                </li>
                                <li><label>Status <span>:</span></label>
                                    {if $product->status == 'active'}
                                        <span class="text-success">Active</span>
                                    {else}
                                        <span class="text-danger">Inactive</span>
                                    {/if}
                                </li>
                                <li><label>Product ID <span>:</span></label>#{$product->id}</li>
                            </ul>
                        </div>
                        <div class="cr-product-price">
                            <span class="new-price">${$product->price|number_format:2}</span>
                        </div>

                        {if $product->status == 'active' && $product->quantity > 0}
                            {if $auth && $auth->check() && $auth->user()->role == 'buyer'}
                                <div class="cr-add-card">
                                    <form action="{$addToCartRoute}" method="post">
                                        {$csrf_field}
                                        <input type="hidden" name="product" value="{$product->id}">
                                        <input type="hidden" name="user" value="{$auth->user()->email}">

                                        <div class="cr-qty-main">
                                            <input type="number" name="quantity" placeholder="1" value="1" min="1"
                                                max="{$product->quantity}" class="quantity">
                                            <button type="button" class="plus">+</button>
                                            <button type="button" class="minus">-</button>
                                        </div>
                                        <div class="cr-add-button">
                                            <button type="submit" class="cr-button cr-shopping-bag">Add to cart</button>
                                        </div>
                                    </form>
                                    <div class="cr-card-icon">
                                        <a href="javascript:void(0)" class="wishlist">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview" role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                </div>
                            {else}
                                <div class="cr-add-card">
                                    <p class="text-info">Please log in as a buyer to add items to your cart.</p>
                                    <div class="cr-add-button">
                                        <a href="{$loginRoute}" class="cr-button">Login to Purchase</a>
                                    </div>
                                </div>
                            {/if}
                        {else}
                            <div class="cr-add-card">
                                <p class="text-danger">This product is currently out of stock.</p>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button" disabled>Out of Stock</button>
                                </div>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-12">
                    <div class="cr-paking-delivery">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                    aria-selected="false">Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>{$product->desc}</p>
                                    </div>
                                    <h4 class="heading">Product Details</h4>
                                    <div class="cr-description">
                                        <p>This {$product->name} is available in our {$product->cat->name} category.
                                            We ensure quality products for our customers with proper packaging and delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>Additional information about {$product->name}.</p>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li><label>Category <span>:</span></label>{$product->cat->name}</li>
                                            <li><label>Product Name <span>:</span></label>{$product->name}</li>
                                            <li><label>Price <span>:</span></label>${$product->price|number_format:2}</li>
                                            <li><label>Quantity Available <span>:</span></label>{$product->quantity}</li>
                                            <li><label>Seller <span>:</span></label>{$product->user}</li>
                                            {* <li><label>Status <span>:</span></label>{$product->status|capitalize}</li> *}
                                            <li><label>Status <span>:</span></label>{$product->status_formatted}</li>
                                            <li><label>Product ID <span>:</span></label>#{$product->id}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                    <div class="post">
                                        <div class="content">
                                            <img src="{$websiteAssetsUrl}/img/review/1.jpg" alt="review">
                                            <div class="details">
                                                <span class="date">Jan 08, 2024</span>
                                                <span class="name">John Doe</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                            </div>
                                        </div>
                                        <p>Great product! The {$product->name} exceeded my expectations.
                                            Quality is excellent and delivery was fast.</p>
                                    </div>

                                    <h4 class="heading">Add a Review</h4>
                                    <form action="javascript:void(0)">
                                        <div class="cr-ratting-star">
                                            <span>Your rating :</span>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-name" placeholder="Name" type="text">
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-email" placeholder="Email*" type="email" required="">
                                        </div>
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                            <button class="cr-button" type="submit" value="Submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular products -->
    {if $relatedProducts && count($relatedProducts) > 0}
        <section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
            data-aos-delay="400">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-30">
                            <div class="cr-banner">
                                <h2>Related Products</h2>
                            </div>
                            <div class="cr-banner-sub-title">
                                <p>More products from {$product->cat->name} category</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-popular-product">
                            {foreach $relatedProducts as $relatedProduct}
                                <div class="slick-slide">
                                    <div class="cr-product-card">
                                        <div class="cr-product-image">
                                            <div class="cr-image-inner zoom-image-hover">
                                                {if $relatedProduct->main_picture|substr:0:4 == 'http'}
                                                    <img src="{$relatedProduct->main_picture}" alt="{$relatedProduct->name}">
                                                {else}
                                                    <img src="{$assetBaseUrl}/{$relatedProduct->main_picture}"
                                                        alt="{$relatedProduct->name}">
                                                {/if}
                                            </div>
                                            <div class="cr-side-view">
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                                <a href="{$productDetailsRoute}{$relatedProduct->id}" role="button">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </div>
                                            <a class="cr-shopping-bag" href="{$productDetailsRoute}{$relatedProduct->id}">
                                                <i class="ri-shopping-bag-line"></i>
                                            </a>
                                        </div>
                                        <div class="cr-product-details">
                                            <div class="cr-brand">
                                                <a
                                                    href="{$productDetailsRoute}{$relatedProduct->id}">{$relatedProduct->cat->name}</a>
                                                <div class="cr-star">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                    <p>(4.5)</p>
                                                </div>
                                            </div>
                                            <a href="{$productDetailsRoute}{$relatedProduct->id}"
                                                class="title">{$relatedProduct->name}</a>
                                            <p class="cr-price"><span
                                                    class="new-price">${$relatedProduct->price|number_format:2}</span></p>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/if}
{/block}