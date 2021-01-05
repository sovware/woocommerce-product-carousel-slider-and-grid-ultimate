<?php
defined('ABSPATH') || die('Direct access is not allow');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<!--TAB 1  Shortcode -->
<div class="lcsp-withoutTab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">
            <div class="cmb2-metabox-header">
                <div class="div">
                    <h4><span class="fas fa-cog"></span>Settings & Shortcode Generator</h4>
                </div>
                <div class="div">
                    <a href="#">
                        <p><span class="fas fa-question-circle"></span>Support</p>
                    </a>
                </div>
            </div>
            <div class="cmb2-metabox-content">
                <div class="cmb2-metabox-card cmb2-metabox-card2">
                    <h6><?php esc_html_e('Shortcode',WCPCSU_TEXTDOMAIN); ?></h6>
                    <p><?php esc_html_e('Copy this shortcode and paste on page or post where you want to display logos.Use PHP code to your themes file to display them.',WCPCSU_TEXTDOMAIN); ?>
                    </p>
                    <div class="cmb2-metabox-card-textarea">
                        <textarea onClick="this.select();">[wcpcsu <?php echo 'id="'.$post->ID.'"';?>]</textarea>
                    </div>
                </div>
                <div class="cmb2-metabox-card cmb2-metabox-card3">
                    <h6><?php esc_html_e('PHP Code:',WCPCSU_TEXTDOMAIN); ?></h6>
                    <p><?php esc_html_e('Copy this shortcode and paste on page or post where you want to display logos.Use PHP code to your themes file to display them.',WCPCSU_TEXTDOMAIN); ?>
                    </p>
                    <div class="cmb2-metabox-card-textarea">
                        <textarea
                            onClick="this.select();"><?php echo '<?php echo do_shortcode("[wcpcsu id='; echo "'".$post->ID."']"; echo '"); ?>'; ?></textarea>
                    </div>
                </div>
            </div>
        </div> <!-- end cmb2-metabox -->
    </div> <!-- end cmb2-wrap -->
</div> <!-- end lcsp-tab-2 -->
<div id="lcsp-tabs-container">
    <div class="lcsp-tabs-menu-wrapper">
        <ul class="lcsp-tabs-menu">
            <li class="current"><a href="#lcsp-tab-5"><span
                        class="fas fa-cog"></span><?php esc_html_e('General Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
            <li style="display: <?php if(!empty($layout) && $layout == "grid"){ echo "none";}else{ echo "block";}?>;"
                id="tab2"><a href="#lcsp-tab-2"><span
                        class="fas fa-sliders-h"></span><?php esc_html_e('Carousel Settings', WCPCSU_TEXTDOMAIN); ?></a>
            </li>
            <li style="display: <?php if(!empty($layout) && $layout == "grid"){ echo "block";}else{ echo "none";}?>;"
                id="tab3"><a href="#lcsp-tab-3"><span
                        class="fas fa-th"></span><?php esc_html_e('Grid Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
            <li><a href="#lcsp-tab-4"><span
                        class="fas fa-palette"></span><?php esc_html_e('Style Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
        </ul>
    </div>

    <div class="lcsp-tab">
        <?php
                require_once WCPCSU_INC_DIR . 'settings/general.php';
                require_once WCPCSU_INC_DIR . 'settings/carousel.php';
                require_once WCPCSU_INC_DIR . 'settings/grid.php';
                require_once WCPCSU_INC_DIR . 'settings/style.php';
              ?>

    </div> <!-- end lcsp-tab -->
</div> <!-- end lcsp-tabs-container -->