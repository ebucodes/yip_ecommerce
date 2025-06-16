<?php
/* Smarty version 5.5.1, created on 2025-06-16 16:27:20
  from 'file:layouts/website/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685045e8b659c5_51096989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e44d8e84c6b6ede528135287972ca1d807f20ba4' => 
    array (
      0 => 'layouts/website/header.tpl',
      1 => 1750091158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685045e8b659c5_51096989 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/layouts/website';
?><!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-header">
                    <a href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
" class="cr-logo">
                        <img src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/img/logo/logo.png" alt="logo" class="logo">
                        <img src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                    </a>
                                        <div class="cr-right-bar">
                        <ul class="navbar-nav">
                            <?php if ($_smarty_tpl->getValue('auth') && $_smarty_tpl->getValue('auth')->check()) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span><?php echo $_smarty_tpl->getValue('auth')->user()->firstName;?>
 <?php echo $_smarty_tpl->getValue('auth')->user()->lastName;?>
</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <?php if ($_smarty_tpl->getValue('auth')->user()->role == 'admin') {?>
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('adminDashboardRoute');?>
">My Dashboard</a>
                                            <?php } elseif ($_smarty_tpl->getValue('auth')->user()->role == 'seller') {?>
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('sellerDashboardRoute');?>
">My Dashboard</a>
                                            <?php } elseif ($_smarty_tpl->getValue('auth')->user()->role == 'buyer') {?>
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('myOrderRoute');?>
">Order History</a>
                                            <?php }?>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('logOutRoute');?>
">Sign Out</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>My Account</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('registerRoute');?>
">Register</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('loginRoute');?>
">Login</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>

                        <div class="cr-cart">
                            <a href="<?php echo $_smarty_tpl->getValue('myCartRoute');?>
" class="cr-shopping-bag">
                                <i class="ri-shopping-cart-line"></i>
                                                                <span class="cart-count-badge"><?php echo (($tmp = $_smarty_tpl->getValue('cartCount') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</span>
                                                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cr-fix" id="cr-main-menu-desk">
        <div class="container">
            <div class="cr-menu-list">
                <div class="cr-category-icon-block">
                </div>
                <nav class="navbar navbar-expand-lg">
                    <a href="javascript:void(0)" class="navbar-toggler shadow-none">
                        <i class="ri-menu-3-line"></i>
                    </a>
                    <div class="cr-header-buttons">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="ri-user-3-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('registerRoute');?>
">Register</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('loginRoute');?>
">Login</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="wishlist.html" class="cr-right-bar-item">
                            <i class="ri-heart-line"></i>
                        </a>
                        <a href="<?php echo $_smarty_tpl->getValue('myCartRoute');?>
" class="cr-right-bar-item Shopping-toggle">
                            <i class="ri-shopping-cart-line"></i>
                            <?php if ($_smarty_tpl->getValue('cartCount') > 0) {?>
                                <span class="cart-count-badge"><?php echo $_smarty_tpl->getValue('cartCount');?>
</span>
                            <?php }?>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Category
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach1DoElse = false;
?>
                                                                                <li>
                                            <a class="dropdown-item"
                                                href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
/products/<?php echo $_smarty_tpl->getValue('category')->id;?>
"><?php echo $_smarty_tpl->getValue('category')->name;?>
</a>
                                        </li>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('aboutUsRoute');?>
">About Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('contactUsRoute');?>
">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('faqRoute');?>
">Faq</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('policyRoute');?>
">Policy</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="cr-calling">
                    <i class="ri-phone-line"></i>
                    <a href="javascript:void(0)">+123 ( 456 ) ( 7890 )</a>
                </div>
            </div>
        </div>
    </div>
</header><?php }
}
