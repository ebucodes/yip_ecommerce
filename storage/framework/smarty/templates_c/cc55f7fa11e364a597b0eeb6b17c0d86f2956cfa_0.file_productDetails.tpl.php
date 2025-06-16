<?php
/* Smarty version 5.5.1, created on 2025-06-16 16:18:37
  from 'file:pages/productDetails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685043ddc34c99_77301823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc55f7fa11e364a597b0eeb6b17c0d86f2956cfa' => 
    array (
      0 => 'pages/productDetails.tpl',
      1 => 1750090708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685043ddc34c99_77301823 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1286356474685043ddc184d9_74373646', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_440682589685043ddc19956_13752007', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_1286356474685043ddc184d9_74373646 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
echo $_smarty_tpl->getValue('product')->name;?>
 - <?php echo $_smarty_tpl->getValue('appName');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_440682589685043ddc19956_13752007 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
?>


    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2><?php echo $_smarty_tpl->getValue('product')->name;?>
</h2>
                            <span> <a href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
">Home</a> - <?php echo $_smarty_tpl->getValue('product')->cat->name;?>
 - <?php echo $_smarty_tpl->getValue('product')->name;?>
</span>
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
                                                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <?php if (substr((string) $_smarty_tpl->getValue('product')->main_picture, (int) 0, (int) 4) == 'http') {?>
                                            <img src="<?php echo $_smarty_tpl->getValue('product')->main_picture;?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
" class="product-image">
                                        <?php } else { ?>
                                            <img src="<?php echo $_smarty_tpl->getValue('assetBaseUrl');?>
/<?php echo $_smarty_tpl->getValue('product')->main_picture;?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
"
                                                class="product-image">
                                        <?php }?>
                                    </div>
                                </div>

                                                                <?php if ($_smarty_tpl->getValue('product')->other_pictures_array) {?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->other_pictures_array, 'image');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
?>
                                        <div class="slider-banner-image">
                                            <div class="zoom-image-hover">
                                                <?php if (substr((string) $_smarty_tpl->getValue('image'), (int) 0, (int) 4) == 'http') {?>
                                                    <img src="<?php echo $_smarty_tpl->getValue('image');?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
" class="product-image">
                                                <?php } else { ?>
                                                    <img src="<?php echo $_smarty_tpl->getValue('assetBaseUrl');?>
/<?php echo $_smarty_tpl->getValue('image');?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
" class="product-image">
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </div>

                            <div class="slider slider-nav thumb-image">
                                                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <?php if (substr((string) $_smarty_tpl->getValue('product')->main_picture, (int) 0, (int) 4) == 'http') {?>
                                            <img src="<?php echo $_smarty_tpl->getValue('product')->main_picture;?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
">
                                        <?php } else { ?>
                                            <img src="<?php echo $_smarty_tpl->getValue('assetBaseUrl');?>
/<?php echo $_smarty_tpl->getValue('product')->main_picture;?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
">
                                        <?php }?>
                                    </div>
                                </div>

                                                                <?php if ($_smarty_tpl->getValue('product')->other_pictures_array) {?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')->other_pictures_array, 'image');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach1DoElse = false;
?>
                                        <div class="thumbnail-image">
                                            <div class="thumbImg">
                                                <?php if (substr((string) $_smarty_tpl->getValue('image'), (int) 0, (int) 4) == 'http') {?>
                                                    <img src="<?php echo $_smarty_tpl->getValue('image');?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
">
                                                <?php } else { ?>
                                                    <img src="<?php echo $_smarty_tpl->getValue('assetBaseUrl');?>
/<?php echo $_smarty_tpl->getValue('image');?>
" alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
">
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading"><?php echo $_smarty_tpl->getValue('product')->name;?>
</h2>
                        <p><?php echo $_smarty_tpl->getValue('product')->desc;?>
</p>
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
                                <li><label>Category <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->cat->name;?>
</li>
                                <li><label>Seller <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->user->name;?>
</li>
                                <li><label>Stock <span>:</span></label>
                                    <?php if ($_smarty_tpl->getValue('product')->quantity > 0) {?>
                                        <?php echo $_smarty_tpl->getValue('product')->quantity;?>
 Available
                                    <?php } else { ?>
                                        Out of Stock
                                    <?php }?>
                                </li>
                                <li><label>Status <span>:</span></label>
                                    <?php if ($_smarty_tpl->getValue('product')->status == 'active') {?>
                                        <span class="text-success">Active</span>
                                    <?php } else { ?>
                                        <span class="text-danger">Inactive</span>
                                    <?php }?>
                                </li>
                                <li><label>Product ID <span>:</span></label>#<?php echo $_smarty_tpl->getValue('product')->id;?>
</li>
                            </ul>
                        </div>
                        <div class="cr-product-price">
                            <span class="new-price">$<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('product')->price,2);?>
</span>
                        </div>

                        <?php if ($_smarty_tpl->getValue('product')->status == 'active' && $_smarty_tpl->getValue('product')->quantity > 0) {?>
                            <?php if ($_smarty_tpl->getValue('auth') && $_smarty_tpl->getValue('auth')->check() && $_smarty_tpl->getValue('auth')->user()->role == 'buyer') {?>
                                <div class="cr-add-card">
                                    <form action="<?php echo $_smarty_tpl->getValue('addToCartRoute');?>
" method="post">
                                        <?php echo $_smarty_tpl->getValue('csrf_field');?>

                                        <input type="hidden" name="product" value="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
                                        <input type="hidden" name="user" value="<?php echo $_smarty_tpl->getValue('auth')->user()->email;?>
">

                                        <div class="cr-qty-main">
                                            <input type="number" name="quantity" placeholder="1" value="1" min="1"
                                                max="<?php echo $_smarty_tpl->getValue('product')->quantity;?>
" class="quantity">
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
                            <?php } else { ?>
                                <div class="cr-add-card">
                                    <p class="text-info">Please log in as a buyer to add items to your cart.</p>
                                    <div class="cr-add-button">
                                        <a href="<?php echo $_smarty_tpl->getValue('loginRoute');?>
" class="cr-button">Login to Purchase</a>
                                    </div>
                                </div>
                            <?php }?>
                        <?php } else { ?>
                            <div class="cr-add-card">
                                <p class="text-danger">This product is currently out of stock.</p>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button" disabled>Out of Stock</button>
                                </div>
                            </div>
                        <?php }?>
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
                                        <p><?php echo $_smarty_tpl->getValue('product')->desc;?>
</p>
                                    </div>
                                    <h4 class="heading">Product Details</h4>
                                    <div class="cr-description">
                                        <p>This <?php echo $_smarty_tpl->getValue('product')->name;?>
 is available in our <?php echo $_smarty_tpl->getValue('product')->cat->name;?>
 category.
                                            We ensure quality products for our customers with proper packaging and delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>Additional information about <?php echo $_smarty_tpl->getValue('product')->name;?>
.</p>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li><label>Category <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->cat->name;?>
</li>
                                            <li><label>Product Name <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->name;?>
</li>
                                            <li><label>Price <span>:</span></label>$<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('product')->price,2);?>
</li>
                                            <li><label>Quantity Available <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->quantity;?>
</li>
                                            <li><label>Seller <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->user;?>
</li>
                                                                                        <li><label>Status <span>:</span></label><?php echo $_smarty_tpl->getValue('product')->status_formatted;?>
</li>
                                            <li><label>Product ID <span>:</span></label>#<?php echo $_smarty_tpl->getValue('product')->id;?>
</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                    <div class="post">
                                        <div class="content">
                                            <img src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/img/review/1.jpg" alt="review">
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
                                        <p>Great product! The <?php echo $_smarty_tpl->getValue('product')->name;?>
 exceeded my expectations.
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
    <?php if ($_smarty_tpl->getValue('relatedProducts') && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('relatedProducts')) > 0) {?>
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
                                <p>More products from <?php echo $_smarty_tpl->getValue('product')->cat->name;?>
 category</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-popular-product">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('relatedProducts'), 'relatedProduct');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('relatedProduct')->value) {
$foreach2DoElse = false;
?>
                                <div class="slick-slide">
                                    <div class="cr-product-card">
                                        <div class="cr-product-image">
                                            <div class="cr-image-inner zoom-image-hover">
                                                <?php if (substr((string) $_smarty_tpl->getValue('relatedProduct')->main_picture, (int) 0, (int) 4) == 'http') {?>
                                                    <img src="<?php echo $_smarty_tpl->getValue('relatedProduct')->main_picture;?>
" alt="<?php echo $_smarty_tpl->getValue('relatedProduct')->name;?>
">
                                                <?php } else { ?>
                                                    <img src="<?php echo $_smarty_tpl->getValue('assetBaseUrl');?>
/<?php echo $_smarty_tpl->getValue('relatedProduct')->main_picture;?>
"
                                                        alt="<?php echo $_smarty_tpl->getValue('relatedProduct')->name;?>
">
                                                <?php }?>
                                            </div>
                                            <div class="cr-side-view">
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                                <a href="<?php echo $_smarty_tpl->getValue('productDetailsRoute');
echo $_smarty_tpl->getValue('relatedProduct')->id;?>
" role="button">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </div>
                                            <a class="cr-shopping-bag" href="<?php echo $_smarty_tpl->getValue('productDetailsRoute');
echo $_smarty_tpl->getValue('relatedProduct')->id;?>
">
                                                <i class="ri-shopping-bag-line"></i>
                                            </a>
                                        </div>
                                        <div class="cr-product-details">
                                            <div class="cr-brand">
                                                <a
                                                    href="<?php echo $_smarty_tpl->getValue('productDetailsRoute');
echo $_smarty_tpl->getValue('relatedProduct')->id;?>
"><?php echo $_smarty_tpl->getValue('relatedProduct')->cat->name;?>
</a>
                                                <div class="cr-star">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                    <p>(4.5)</p>
                                                </div>
                                            </div>
                                            <a href="<?php echo $_smarty_tpl->getValue('productDetailsRoute');
echo $_smarty_tpl->getValue('relatedProduct')->id;?>
"
                                                class="title"><?php echo $_smarty_tpl->getValue('relatedProduct')->name;?>
</a>
                                            <p class="cr-price"><span
                                                    class="new-price">$<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('relatedProduct')->price,2);?>
</span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }
}
}
/* {/block "content"} */
}
