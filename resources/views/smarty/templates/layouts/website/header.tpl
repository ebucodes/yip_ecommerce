<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-header">
                    <a href="{$homePageRoute}" class="cr-logo">
                        <img src="{$websiteAssetsUrl}/img/logo/logo.png" alt="logo" class="logo">
                        <img src="{$websiteAssetsUrl}/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                    </a>
                    {*  *}
                    <div class="cr-right-bar">
                        <ul class="navbar-nav">
                            {if $auth && $auth->check()}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>{$auth->user()->firstName} {$auth->user()->lastName}</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            {if $auth->user()->role == 'admin'}
                                                <a class="dropdown-item" href="{$adminDashboardRoute}">My Dashboard</a>
                                            {elseif $auth->user()->role == 'seller'}
                                                <a class="dropdown-item" href="{$sellerDashboardRoute}">My Dashboard</a>
                                            {elseif $auth->user()->role == 'buyer'}
                                                <a class="dropdown-item" href="{$myOrderRoute}">Order History</a>
                                            {/if}
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{$logOutRoute}">Sign Out</a>
                                        </li>
                                    </ul>
                                </li>
                            {else}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>My Account</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{$registerRoute}">Register</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{$loginRoute}">Login</a>
                                        </li>
                                    </ul>
                                </li>
                            {/if}
                        </ul>

                        <div class="cr-cart">
                            <a href="{$myCartRoute}" class="cr-shopping-bag">
                                <i class="ri-shopping-cart-line"></i>
                                {* Debug: Always show count for testing *}
                                <span class="cart-count-badge">{$cartCount|default:0}</span>
                                {* Remove the if condition temporarily to see if the variable is being passed *}
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
                                        <a class="dropdown-item" href="{$registerRoute}">Register</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{$loginRoute}">Login</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="wishlist.html" class="cr-right-bar-item">
                            <i class="ri-heart-line"></i>
                        </a>
                        <a href="{$myCartRoute}" class="cr-right-bar-item Shopping-toggle">
                            <i class="ri-shopping-cart-line"></i>
                            {if $cartCount > 0}
                                <span class="cart-count-badge">{$cartCount}</span>
                            {/if}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{$homePageRoute}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Category
                                </a>
                                <ul class="dropdown-menu">
                                    {foreach $categories as $category}
                                        {* <li>
                                            <a class="dropdown-item"
                                                href="{$homePageRoute}products/{$category->id}">{$category->name}</a>
                                        </li> *}
                                        <li>
                                            <a class="dropdown-item"
                                                href="{$homePageRoute}/products/{$category->id}">{$category->name}</a>
                                        </li>
                                    {/foreach}
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{$aboutUsRoute}">About Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{$contactUsRoute}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{$faqRoute}">Faq</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{$policyRoute}">Policy</a>
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
</header>