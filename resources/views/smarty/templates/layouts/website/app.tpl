{include file="layouts/website/head.tpl"}

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>
    {* header *}
    {include file="layouts/website/header.tpl"}
    <!-- Mobile menu -->
    {include file="layouts/website/mobile.tpl"}
    {block name="content"}{/block}
    {include file="layouts/website/footer.tpl"}
    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder">
        <i class="ri-arrow-up-line"></i>
        <div class="back-to-top-wrap">
            <svg viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </a>
    {include file="layouts/website/js.tpl"}
</body>

</html>