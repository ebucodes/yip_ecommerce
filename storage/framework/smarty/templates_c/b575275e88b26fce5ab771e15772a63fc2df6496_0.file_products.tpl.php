<?php
/* Smarty version 5.5.1, created on 2025-06-16 15:48:05
  from 'file:pages/products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68503cb5d825f8_78075856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b575275e88b26fce5ab771e15772a63fc2df6496' => 
    array (
      0 => 'pages/products.tpl',
      1 => 1750088884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68503cb5d825f8_78075856 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_26452924568503cb5d7bcd5_67869611', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_190624503868503cb5d7cfe2_03535954', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_26452924568503cb5d7bcd5_67869611 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('config')->handle(array('key'=>"app.name"), $_smarty_tpl);?>
 | <?php echo $_smarty_tpl->getValue('pageTitle');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_190624503868503cb5d7cfe2_03535954 extends \Smarty\Runtime\Block
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
                            <h2><?php echo $_smarty_tpl->getValue('pageTitle');?>
</h2>
                            <span> <a href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
">Home</a> - <?php echo $_smarty_tpl->getValue('pageTitle');?>
</span>
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
                            <h2><?php echo $_smarty_tpl->getValue('pageTitle');?>
</h2>
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
                                    <span>We found <strong><?php echo $_smarty_tpl->getValue('countProducts');?>
</strong> items for you!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-100 mb-minus-24">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                            <div class="col-xxl-4 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('productImage')->handle(array('image'=>$_smarty_tpl->getValue('product')->main_picture), $_smarty_tpl);?>
" alt="product-1" width="100"
                                                height="100">
                                        </div>
                                        <a class="cr-shopping-bag" href="javascript:void(0)">
                                            <i class="ri-shopping-bag-line"></i>
                                        </a>
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <h6 href="shop-left-sidebar.html"><?php echo $_smarty_tpl->getValue('product')->name;?>
</h6>
                                        </div>
                                        <p href="product-left-sidebar.html" class="title"><?php echo $_smarty_tpl->getValue('product')->desc;?>
</p>
                                        <p class="cr-price"><span class="new-price">$<?php echo $_smarty_tpl->getValue('product')->price;?>
</span></p>
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
                        <ul class="pagination">
                            <li><?php echo $_smarty_tpl->getValue('products')->links();?>
</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
