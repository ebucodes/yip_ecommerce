<?php
/* Smarty version 5.5.1, created on 2025-06-16 14:19:29
  from 'file:pages/contactUs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685027f16732c7_70663523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5268ad760881709834f97bf4a510ab7ff04286cf' => 
    array (
      0 => 'pages/contactUs.tpl',
      1 => 1750083565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685027f16732c7_70663523 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_683662210685027f1671392_33173252', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_722385227685027f16727c0_67680135', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_683662210685027f1671392_33173252 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('config')->handle(array('key'=>"app.name"), $_smarty_tpl);?>
 | <?php echo $_smarty_tpl->getValue('pageTitle');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_722385227685027f16727c0_67680135 extends \Smarty\Runtime\Block
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
    <!-- Contact -->
    <section class="section-Contact padding-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs
                                do ye
                                admire. His secure called esteem praise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-24">
                <div class="col-lg-4 col-md-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="400">
                    <div class="cr-info-box">
                        <div class="cr-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="cr-info-content">
                            <h4 class="heading">Contact</h4>
                            <p><a href="javascript:void(0)"><i class="ri-phone-line"></i> &nbsp; (+91)-9876XXXXX</a></p>
                            <p><a href="javascript:void(0)"><i class="ri-phone-line"></i> &nbsp; (+91)-987654XXXX</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="600">
                    <div class="cr-info-box">
                        <div class="cr-icon">
                            <i class="ri-mail-line"></i>
                        </div>
                        <div class="cr-info-content">
                            <h4 class="heading">Mail & Website</h4>
                            <p><a href="javascript:void(0)"><i class="ri-mail-line"></i> &nbsp;
                                    mail.example@gmail.com</a></p>
                            <p><a href="javascript:void(0)"><i class="ri-globe-line"></i> &nbsp; www.yourdomain.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                    <div class="cr-info-box">
                        <div class="cr-icon">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <div class="cr-info-content">
                            <h4 class="heading">Address</h4>
                            <p><a href="javascript:void(0)"><i class="ri-map-pin-line"></i> &nbsp;UCM Lee's Summit Campus
                                1101 NW Innovation Pkwy Lee's Summit, MO 64086</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row padding-t-100 mb-minus-24">
                <div class="col-md-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                        title="maps">
                    </iframe>
                </div>
                <div class="col-md-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                    <form class="cr-content-form">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" class="cr-form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="cr-form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="cr-form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="cr-form-control" id="exampleFormControlTextarea1" rows="4"
                                placeholder="Message"></textarea>
                        </div>
                        <button type="button" class="cr-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
