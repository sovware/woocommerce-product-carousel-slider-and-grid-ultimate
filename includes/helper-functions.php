<?php
if (!function_exists('wcpcsu_pagination')) {
    /**
     * Prints pagination for custom post
     * @param object|WP_Query $custom_post_query
     * @param int $paged
     *
     * @return string
     */
    function wcpcsu_pagination($custom_post_query, $paged = 1)
    {
        $navigation = '';
        $largeNumber = 999999999; // we need a large number here
        $links = paginate_links(array(
            'base' => str_replace($largeNumber, '%#%', esc_url(get_pagenum_link($largeNumber))),
            'format' => '?paged=%#%',
            'current' => max(1, $paged),
            'total' => $custom_post_query->max_num_pages,
            'prev_text' => apply_filters('wcpcsu_pagination_prev_text', '<span class="la la-angle-left"></span>'),
            'next_text' => apply_filters('wcpcsu_pagination_next_text', '<span class="la la-angle-right"></span>'),
        ));
        if ($links) {
            $navigation = _navigation_markup($links, 'pagination', ' ');
        }
        return apply_filters('wcpcsu_pagination', $navigation, $links, $custom_post_query, $paged);
    }
}
if (!function_exists('wcpcsu_get_paged_num')) {
    /**
     * Get current page number for the pagination.
     *
     * @since    1.0.0
     *
     * @return    int    $paged    The current page number for the pagination.
     */
    function wcpcsu_get_paged_num()
    {

        global $paged;

        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } else if (get_query_var('page')) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }

        return absint($paged);

    }


}