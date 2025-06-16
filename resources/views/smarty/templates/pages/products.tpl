{extends file="layouts/website/app.tpl"}

{block name="title"}{config key="app.name"} | {$pageTitle}{/block}

{block name="content"}
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>{$pageTitle}</h2>
                            <span> <a href="{$homePageRoute}">Home</a> - {$pageTitle}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop -->
    <section class="section-shop padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>{$pageTitle}</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12 md-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                    <div class="row">
                        <div class="col-12">
                            <div class="cr-shop-bredekamp">
                                <div class="cr-toggle">
                                    <a href="javascript:void(0)" class="gridCol active-grid">
                                        <i class="ri-grid-line"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gridRow">
                                        <i class="ri-list-check-2"></i>
                                    </a>
                                </div>
                                <div class="center-content">
                                    <span>We found <strong>{$countProducts}</strong> items for you!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-100 mb-minus-24">
                        {foreach $products as $product}
                            <div class="col-xxl-4 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="{productImage image=$product->main_picture}" alt="product-1" width="100"
                                                height="100">
                                        </div>
                                        <a class="cr-shopping-bag" href="javascript:void(0)">
                                            <i class="ri-shopping-bag-line"></i>
                                        </a>
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <h6 href="shop-left-sidebar.html">{$product->name}</h6>
                                        </div>
                                        <p href="product-left-sidebar.html" class="title">{$product->desc}</p>
                                        <p class="cr-price"><span class="new-price">${$product->price}</span></p>
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
                        <ul class="pagination">
                            <li>{$products->links()}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
{/block}