<?php
defined('ABSPATH') || die('Direct access is not allow');
?>
<div id="lcsp-tabs-container">

    <ul class="lcsp-tabs-menu">
        <li class="current"><a href="#lcsp-tab-1"><?php esc_html_e('Shortcodes', WCPCSU_TEXTDOMAIN); ?></a></li>
        <li><a href="#lcsp-tab-5"><?php esc_html_e('General Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
        <li style="display: <?php if(!empty($layout) && $layout == "grid"){ echo "none";}else{ echo "block";}?>;" id="tab2"><a href="#lcsp-tab-2"><?php esc_html_e('Carousel Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
        <li style="display: <?php if(!empty($layout) && $layout == "grid"){ echo "block";}else{ echo "none";}?>;" id="tab3"><a href="#lcsp-tab-3"><?php esc_html_e('Grid Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
        <li><a href="#lcsp-tab-4"><?php esc_html_e('Style Settings', WCPCSU_TEXTDOMAIN); ?></a></li>
    </ul>

    <div class="lcsp-tab">
        <!--TAB 1  Shortcode -->
        <div id="lcsp-tab-1" class="lcsp-tab-content">
            <div class="cmb2-wrap form-table">
                <div id="cmb2-metabox" class="cmb2-metabox cmb-field-list">


                    <p><?php esc_html_e('Shortcode',WCPCSU_TEXTDOMAIN); ?></p>
                    <p><?php esc_html_e('Copy this shortcode and paste on page or post where you want to display logos.Use PHP code to your themes file to display them.',WCPCSU_TEXTDOMAIN); ?></p>
                    <textarea cols="50" rows="1" style="background:#0074A8; color:#fff" onClick="this.select();" >[wcpcsu <?php echo 'id="'.$post->ID.'"';?>]</textarea>
                    <br /><br />

                    <p><?php esc_html_e('PHP Code:',WCPCSU_TEXTDOMAIN); ?></p>
                    <textarea cols="60" rows="1" style="background:#0074A8; color:#fff" onClick="this.select();" ><?php echo '<?php echo do_shortcode("[wcpcsu id='; echo "'".$post->ID."']"; echo '"); ?>'; ?></textarea>


                </div> <!-- end cmb2-metabox -->
            </div> <!-- end cmb2-wrap -->
        </div> <!-- end lcsp-tab-2 -->
              <?php
                require_once WCPCSU_INC_DIR . 'settings/general.php';
                require_once WCPCSU_INC_DIR . 'settings/carousel.php';
                require_once WCPCSU_INC_DIR . 'settings/grid.php';
                require_once WCPCSU_INC_DIR . 'settings/style.php';
              ?>

    </div> <!-- end lcsp-tab -->
</div> <!-- end lcsp-tabs-container -->

