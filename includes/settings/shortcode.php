<div id="lcsp-tab-1" class="lcsp-tab-content">
    <div class="cmb2-wrap form-table">
<div class="lcsp-withoutTab-content">
    <div class="cmb2-wrap form-table">
        <div id="cmb2-metabox">
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
    </div>
</div>