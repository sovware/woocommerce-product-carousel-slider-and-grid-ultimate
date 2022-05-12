<?php
defined('ABSPATH') || die('Direct access is not allow');
?>
<!--TAB 1  Shortcode -->
<div id="lcsp-tabs-container">
    <div class="lcsp-tabs-menu-wrapper">
        <ul class="lcsp-tabs-menu">
        <li class="current">
            <a href="#lcsp-tab-1">
                <span class="fas fa-code"></span>
                <img src="<?php echo WCPCSU_URL .'assets/icons/code-solid.svg' ?>" >
                <?php esc_html_e('Shortcodes', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?>
            </a>
        </li>
        <li><a href="#lcsp-tab-5"><span
                        class="fas fa-cog"></span><?php esc_html_e('General Settings', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></a></li>
            <li style="display: <?php if( ! empty( $layout ) && $layout == "grid" ){ echo "none"; }else{ echo "block"; }?>;"
                id="tab2"><a href="#lcsp-tab-2"><span
                        class="fas fa-sliders-h"></span><?php esc_html_e('Carousel Settings', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></a>
            </li>
            <li style="display: <?php if( ! empty( $layout ) && $layout == "grid" ){ echo "block"; }else{ echo "none"; }?>;"
                id="tab3"><a href="#lcsp-tab-3"><span
                        class="fas fa-th"></span><?php esc_html_e('Grid Settings', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></a></li>
            <li><a href="#lcsp-tab-4"><span
                        class="fas fa-palette"></span><?php esc_html_e('Style Settings', 'woocommerce-product-carousel-slider-and-grid-ultimate'); ?></a></li>
        </ul>
        <a href="https://wpwax.com/contact/" class="lcsp-support"><span class="fas fa-question-circle"></span>Support</a>
    </div>

    <div class="lcsp-tab">
        <?php
                require_once WCPCSU_INC_DIR . 'settings/shortcode.php';
                require_once WCPCSU_INC_DIR . 'settings/general.php';
                require_once WCPCSU_INC_DIR . 'settings/carousel.php';
                require_once WCPCSU_INC_DIR . 'settings/grid.php';
                require_once WCPCSU_INC_DIR . 'settings/style.php';
              ?>

    </div> <!-- end lcsp-tab -->
</div> <!-- end lcsp-tabs-container -->