<header class="l-header">
    <div class="l-wrap">
        <div class="l-wrap__inner">
            <?php if ( is_home() || is_front_page() ) : ?>
            <h1 class="l-header__left">
                <a href="<?php echo get_site_url(); ?>/">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_corporate.png"
                        alt="iMedX"
                    >
                </a>
            </h1>
            <?php else: ?>
            <div class="l-header__left">
                <a href="<?php echo get_site_url(); ?>/">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_corporate.png"
                        alt="iMedX"
                    >
                </a>
            </div>
            <?php endif; ?>
            <div class="l-header__right">
                <input id="drawer-checkbox" type="checkbox">
                <label id="drawer-icon" for="drawer-checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <label id="drawer-close" for="drawer-checkbox"></label>
                <nav id="drawer-content">
                    <ul class="p-nav">
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/" class="nav-link">トップページ</a>
                        </li>
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/service" class="nav-link">製品について</a>
                        </li>
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/company" class="nav-link">よくある質問</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/company" class="nav-link">会社概要</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/policy" class="nav-link">企業ポリシー</a>
                        </li>
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/news" class="nav-link">ニュース</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/contact" class="nav-link">お問い合わせ</a>
                        </li>
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/privacy-policy" class="nav-link">プライバシーポリシー</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>