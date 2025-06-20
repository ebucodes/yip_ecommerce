{extends file="layouts/website/app.tpl"}

{block name="title"}{config key="app.name"} | {$pageTitle}{/block}

{block name="content"}
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>{$pageTitle}</h2>
                            <span> <a href="{route name='homePage'}">Home</a> - {$pageTitle}</span>
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
{/block}