<?php
/* Smarty version 5.5.1, created on 2025-06-16 13:55:16
  from 'file:layouts/website/mobile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68502244324d89_78880256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df41880c68129feb9ebcefe6f17ef7b65003ed64' => 
    array (
      0 => 'layouts/website/mobile.tpl',
      1 => 1750082091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68502244324d89_78880256 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/layouts/website';
?><div class="cr-sidebar-overlay"></div>
<div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu">
    <div class="cr-menu-title">
        <span class="menu-title">My Menu</span>
        <button type="button" class="cr-close">×</button>
    </div>
    <div class="cr-menu-inner">
        <div class="cr-menu-content">
            <ul>
                <li class="dropdown drop-list">
                    <a href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
">Home</a>
                </li>
                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>
                    <a href="javascript:void(0)" class="dropdown-list">Categories</a>
                    <ul class="sub-menu">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
category/<?php echo $_smarty_tpl->getValue('category')->id;?>
"><?php echo $_smarty_tpl->getValue('category')->name;?>
</a>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
                                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>
                    <a href="javascript:void(0)" class="dropdown-list">Pages</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo $_smarty_tpl->getValue('aboutUsRoute');?>
">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getValue('contactUsRoute');?>
">Contact Us</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getValue('faqRoute');?>
">Faq</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getValue('policyRoute');?>
">Policy</a>
                        </li>
                    </ul>
                </li>
                            </ul>
        </div>
    </div>
</div><?php }
}
