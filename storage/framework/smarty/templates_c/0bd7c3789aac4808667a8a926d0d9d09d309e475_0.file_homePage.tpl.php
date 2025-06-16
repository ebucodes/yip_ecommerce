<?php
/* Smarty version 5.5.1, created on 2025-06-16 16:27:20
  from 'file:homePage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685045e8b48122_56385532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd7c3789aac4808667a8a926d0d9d09d309e475' => 
    array (
      0 => 'homePage.tpl',
      1 => 1750091149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685045e8b48122_56385532 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_296855528685045e8b3fd07_40461813', "title");
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1912533210685045e8b40ae0_14657871', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_296855528685045e8b3fd07_40461813 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates';
echo $_smarty_tpl->getValue('appName');?>
 | <?php echo $_smarty_tpl->getValue('pageTitle');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1912533210685045e8b40ae0_14657871 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates';
?>

        <?php if ($_smarty_tpl->getValue('sessionSuccess')) {?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 20px;">
            <i class="ri-check-line"></i> <?php echo $_smarty_tpl->getValue('sessionSuccess');?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('sessionError')) {?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 20px;">
            <i class="ri-error-warning-line"></i> <?php echo $_smarty_tpl->getValue('sessionError');?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }?>

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
                                            <a href="<?php echo $_smarty_tpl->getValue('allProductsRoute');?>
" class="cr-button">
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
                                            <a href="<?php echo $_smarty_tpl->getValue('allProductsRoute');?>
" class="cr-button">
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
    
    <!-- Popular product -->
    <section class="section-popular-product-shape padding-b-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
                                            </div>
                </div>
            </div>
            <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
                <div class="col-xl-12 col-lg-12 col-12 mb-24">
                    <div class="row mb-minus-24">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                            <div class="mix col-xxl-4 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                                                                        <img src="<?php echo $_smarty_tpl->getValue('assetBaseUrl');?>
/<?php echo $_smarty_tpl->getValue('product')->main_picture;?>
" alt="product-1">

                                        </div>
                                                                            </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a href="<?php echo $_smarty_tpl->getValue('productDetailsRoute');?>
/<?php echo $_smarty_tpl->getValue('product')->id;?>
"><?php echo $_smarty_tpl->getValue('product')->cat->name;?>
</a>
                                        </div>
                                        <a href="<?php echo $_smarty_tpl->getValue('productDetailsRoute');?>
/<?php echo $_smarty_tpl->getValue('product')->id;?>
" class="title">
                                            <h6 class="mb-6"><?php echo $_smarty_tpl->getValue('product')->name;?>
</h6>
                                        </a>
                                        <p class="cr-price"><span class="new-price">$<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('product')->price,2);?>
</span>
                                        </p>
                                        <?php if ($_smarty_tpl->getValue('product')->status == 'out_of_stock') {?>
                                            <p class="text-danger">This product is out of stock and currently not available</p>
                                        <?php } elseif ($_smarty_tpl->getValue('auth') && $_smarty_tpl->getValue('auth')->check() && $_smarty_tpl->getValue('auth')->user()->role == 'buyer') {?>
                                            <form action="<?php echo $_smarty_tpl->getValue('addToCartRoute');?>
" method="post">
                                                <?php echo $_smarty_tpl->getValue('csrf_field');?>

                                                <input type="hidden" name="product" value="<?php echo $_smarty_tpl->getValue('product')->id;?>
">
                                                <input type="hidden" name="user" value="<?php echo $_smarty_tpl->getValue('auth')->user()->email;?>
">
                                                <div class="cr-add-card">
                                                    <div class="cr-add-button">
                                                        <button type="submit" class="cr-button">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php } else { ?>
                                            <p>Please log in to add items to your cart.</p>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                    <nav aria-label="..." class="cr-pagination">
                        <ul class="pagination cr-pagination">
                            <li> <?php echo $_smarty_tpl->getValue('products')->links();?>
 </li>
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
                                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-testimonial-slider swiper-container">
                        <div class="swiper-wrapper cr-testimonial-pt-50">
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-testimonial">
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

<?php
}
}
/* {/block "content"} */
}
