<?php
/* Smarty version 5.5.1, created on 2025-06-16 14:12:30
  from 'file:pages/aboutUs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6850264e53cfd2_31693592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c09f9a6b3f2a21881f5343ffc74c57c905d5b67' => 
    array (
      0 => 'pages/aboutUs.tpl',
      1 => 1750083129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6850264e53cfd2_31693592 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12769599376850264e536e55_13555653', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9527004746850264e53c0d6_71150762', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_12769599376850264e536e55_13555653 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('config')->handle(array('key'=>"app.name"), $_smarty_tpl);?>
 | <?php echo $_smarty_tpl->getValue('pageTitle');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_9527004746850264e53c0d6_71150762 extends \Smarty\Runtime\Block
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
                        <span> <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('route')->handle(array('name'=>'homePage'), $_smarty_tpl);?>
">Home</a> - About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section class="section-about padding-tb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cr-about" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <h4 class="heading">About The Carrot</h4>
                    <div class="cr-about-content">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, recusandae
                            necessitatibus quasi incidunt alias adipisci pariatur earum iure beatae assumenda
                            rerum quod. Tempora magni autem a voluptatibus neque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vitae rerum cum
                            accusamus magni consequuntur architecto, ipsum deleniti expedita doloribus suscipit
                            voluptatum eius perferendis amet!.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, maxime amet
                            architecto est exercitationem optio ea maiores corporis beatae, dolores doloribus libero
                            nesciunt qui illum? Voluptates deserunt adipisci voluptatem magni sunt
                            sed blanditiis quod aspernatur! Iusto?</p>
                        <div class="elementor-counter">
                            <div class="row">
                                <div class="col-sm-4 col-12 margin-575">
                                    <h4 class="elementor">
                                        <span class="elementor-counter-number">1.2</span>
                                        <span class="elementor-suffix">k</span>
                                    </h4>
                                    <div class="elementor-counter-title">
                                        <span>Vendors</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12 margin-575">
                                    <h4 class="elementor">
                                        <span class="elementor-counter-number">410</span>
                                        <span class="elementor-suffix">k</span>
                                    </h4>
                                    <div class="elementor-counter-title">
                                        <span>Customers</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12 margin-575">
                                    <h4 class="elementor">
                                        <span class="elementor-counter-number">34</span>
                                        <span class="elementor-suffix">k</span>
                                    </h4>
                                    <div class="elementor-counter-title">
                                        <span>Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cr-about-image" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                    <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'website/assets/img/about/1.jpg'), $_smarty_tpl);?>
" alt="side-view">
                </div>
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
<?php
}
}
/* {/block "content"} */
}
