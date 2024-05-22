<header class="l-header">
    <div class="l-wrap">
        <div class="l-wrap__inner">
            <div class="l-header__left">
                <a href="<?php echo get_site_url(); ?>/service">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/service/assets/images/logo_service.png"
                        alt="iMedX 生活習慣病DX"
                    >
                </a>
                <?php if ( !is_page( array(23, 25)) ) : ?>
                <a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn__header">無料デモ予約</a>
                <?php endif; ?>
            </div>
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
                            <a href="<?php echo get_site_url(); ?>/service" class="nav-link">トップページ</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/service/detail" class="nav-link">機能</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/service/news" class="nav-link">お知らせ</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/service/price" class="nav-link">料金</a>
                        </li>
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/service/detail#environment" class="nav-link">対応機器・動作環境</a>
                        </li>
                        <li class="nav-item sp-only">
                            <a href="<?php echo get_site_url(); ?>/service/simulation" class="nav-link">シミュレーション</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/service/case" class="nav-link">導入事例</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url(); ?>/service/faq" class="nav-link">よくある質問</a>
                        </li>
                        <li class="nav-item pc-only">
                            <a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn__contact c-btn-arrow">問合せ/無料デモ予約</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>