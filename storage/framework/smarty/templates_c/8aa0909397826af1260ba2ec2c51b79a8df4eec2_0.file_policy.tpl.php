<?php
/* Smarty version 5.5.1, created on 2025-06-16 14:23:47
  from 'file:pages/policy.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685028f32ee256_73955418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aa0909397826af1260ba2ec2c51b79a8df4eec2' => 
    array (
      0 => 'pages/policy.tpl',
      1 => 1750083824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685028f32ee256_73955418 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_751040255685028f32ebf41_50484465', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_403525261685028f32ed460_01400104', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_751040255685028f32ebf41_50484465 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('config')->handle(array('key'=>"app.name"), $_smarty_tpl);?>
 | <?php echo $_smarty_tpl->getValue('pageTitle');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_403525261685028f32ed460_01400104 extends \Smarty\Runtime\Block
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
">Home</a> - <?php echo $_smarty_tpl->getValue('pageTitle');?>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Policy section -->
    <section class="cr-policy padding-tb-100" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Privacy Policy</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Check ou Privacy Policy and Conditions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="cr-common-wrapper spacing-991">
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">Welcome to Carrot Store.</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">Carrot Websites</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">How browsing and vendor works?</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">Becoming an vendor</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-t-991">
                    <div class="cr-common-wrapper">
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">How browsing and vendor works?</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">Becoming an vendor</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">How browsing and vendor works?</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. <b>Lorem Ipsum is simply dutmmy text.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-12 cr-cgi-block">
                            <div class="cr-cgi-block-inner">
                                <h5 class="cr-cgi-block-title">Becoming an vendor</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <b>Lorem
                                        Ipsum is simply dutmmy text</b> ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Policy section End -->
<?php
}
}
/* {/block "content"} */
}
