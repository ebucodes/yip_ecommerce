<?php
/* Smarty version 5.5.1, created on 2025-06-16 13:57:31
  from 'file:layouts/website/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685022cb09e147_51648987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a16d94511a9afdae733def9904f2a67cc4a074e9' => 
    array (
      0 => 'layouts/website/footer.tpl',
      1 => 1750082229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685022cb09e147_51648987 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/layouts/website';
?><!-- Footer -->
<footer class="footer padding-t-100 bg-off-white">
    <div class="container">
        <div class="row footer-top padding-b-100">
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer-logo">
                    <div class="image">
                        <img src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
img/logo/logo.png" alt="logo" class="logo">
                        <img src="<?php echo $_smarty_tpl->getValue('websiteAssetsUrl');?>
img/logo/dark-logo.png" alt="logo" class="dark-logo">
                    </div>
                    <p><?php echo $_smarty_tpl->getValue('appName');?>
 is the biggest market of grocery products. Get your daily needs from our
                        store.</p>
                </div>
                <div class="cr-footer">
                    <h4 class="cr-sub-title cr-title-hidden">
                        Contact us
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li class="location-icon">
                            UCM Lee's Summit Campus 1101 NW Innovation Pkwy Lee's Summit, MO 64086
                        </li>
                        <li class="mail-icon">
                            <a href="javascript:void(0)">example@email.com</a>
                        </li>
                        <li class="phone-icon">
                            <a href="javascript:void(0)"> +91 123 4567890</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        <?php echo $_smarty_tpl->getValue('appName');?>

                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li><a href="<?php echo $_smarty_tpl->getValue('aboutUsRoute');?>
">About Us</a></li>
                                                <li><a href="<?php echo $_smarty_tpl->getValue('policyRoute');?>
">Privacy Policy</a></li>
                                                <li><a href="<?php echo $_smarty_tpl->getValue('contactUsRoute');?>
">contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer cr-newsletter">
                    <h4 class="cr-sub-title">
                        Subscribe Our Newsletter
                        <span class="cr-heading-res"></span>
                    </h4>
                    <div class="cr-footer-links cr-footer-dropdown">
                        <form class="cr-search-footer">
                            <input class="search-input" type="text" placeholder="Search here...">
                            <a href="javascript:void(0)" class="search-btn">
                                <i class="ri-send-plane-fill"></i>
                            </a>
                        </form>
                    </div>
                    <div class="cr-social-media">
                        <span><a href="#"><i class="ri-facebook-line"></i></a></span>
                        <span><a href="#"><i class="ri-twitter-x-line"></i></a></span>
                        <span><a href="#"><i class="ri-dribbble-line"></i></a></span>
                        <span><a href="#"><i class="ri-instagram-line"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-last-footer">
            <p>&copy; <span id="copyright_year"></span> <a href="<?php echo $_smarty_tpl->getValue('homePageRoute');?>
"><?php echo $_smarty_tpl->getValue('appName');?>
</a>,
                All rights
                reserved.</p>
        </div>
    </div>
</footer><?php }
}
