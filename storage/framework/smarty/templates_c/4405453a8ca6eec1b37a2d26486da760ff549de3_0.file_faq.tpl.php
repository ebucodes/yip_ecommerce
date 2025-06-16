<?php
/* Smarty version 5.5.1, created on 2025-06-16 14:21:41
  from 'file:pages/faq.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685028753ef166_00190477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4405453a8ca6eec1b37a2d26486da760ff549de3' => 
    array (
      0 => 'pages/faq.tpl',
      1 => 1750083697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685028753ef166_00190477 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_658739899685028753ece97_85136380', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1028507404685028753ee155_99178233', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/website/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_658739899685028753ece97_85136380 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/chukwuebuka-ohaji/workspace/technical_tests/e-shop (Copy)/resources/views/smarty/templates/pages';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('config')->handle(array('key'=>"app.name"), $_smarty_tpl);?>
 | <?php echo $_smarty_tpl->getValue('pageTitle');
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1028507404685028753ee155_99178233 extends \Smarty\Runtime\Block
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

    <!-- Faq -->
    <section class="section-faq padding-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cr-faq-img">
                        <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'website/assets/img/about/1.jpg'), $_smarty_tpl);?>
" alt="about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cr-faq" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-1">
                                    <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        What Facilities Does Your Hotel Have?
                                    </button>
                                </h2>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-2">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">
                                        How Do I Book A Room For My Vacation?
                                    </button>
                                </h2>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-3">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">
                                        How We are best among others?
                                    </button>
                                </h2>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-4">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">
                                        Is There Any Fitness Center In Your Hotel?
                                    </button>
                                </h2>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-5">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">
                                        What Type Of Room Service Do You Offer?
                                    </button>
                                </h2>
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-6">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">
                                        What Facilities Does Your Hotel Have?
                                    </button>
                                </h2>
                                <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-7">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false"
                                        aria-controls="collapse-7">
                                        How Do I Book A Room For My Vacation?
                                    </button>
                                </h2>
                                <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-8">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false"
                                        aria-controls="collapse-8">
                                        Is There Any Fitness Center In Your Hotel?
                                    </button>
                                </h2>
                                <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-9">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                        aria-controls="collapse-9">
                                        There Any Fitness Is Center In Your Hotel?
                                    </button>
                                </h2>
                                <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="heading-9"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Ad voluptate doloribus eos sunt labore ea enim voluptatem,
                                            sequi voluptas rem doloremque architecto. Libero, vero
                                            natus.
                                        </p>
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
