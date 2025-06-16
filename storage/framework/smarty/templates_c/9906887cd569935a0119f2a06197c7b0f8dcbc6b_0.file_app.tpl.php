<?php
/* Smarty version 5.5.1, created on 2025-06-16 16:27:20
  from 'file:layouts/website/app.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685045e8b58f08_40000471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9906887cd569935a0119f2a06197c7b0f8dcbc6b' => 
    array (
      0 => 'layouts/website/app.tpl',
      1 => 1750091176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/website/head.tpl' => 1,
    'file:layouts/website/header.tpl' => 1,
    'file:layouts/website/mobile.tpl' => 1,
    'file:layouts/website/footer.tpl' => 1,
    'file:layouts/website/js.tpl' => 1,
  ),
))) {
function content_685045e8b58f08_40000471 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/layouts/website';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->renderSubTemplate("file:layouts/website/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>
        <?php $_smarty_tpl->renderSubTemplate("file:layouts/website/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <!-- Mobile menu -->
    <?php $_smarty_tpl->renderSubTemplate("file:layouts/website/mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_871087272685045e8b58296_89872262', "content");
?>

    <?php $_smarty_tpl->renderSubTemplate("file:layouts/website/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-line"></i>
        <div class="back-to-top-wrap">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </a>
    <?php $_smarty_tpl->renderSubTemplate("file:layouts/website/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</body>

</html><?php }
/* {block "content"} */
class Block_871087272685045e8b58296_89872262 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/layouts/website';
}
}
/* {/block "content"} */
}
