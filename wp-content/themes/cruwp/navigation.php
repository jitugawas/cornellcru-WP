<?php

$options = get_option('pb_options');

if($options['page_navi_type'] == 'pager') {

global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
	$paginate_format = '';
	$paginate_base = add_query_arg('paged', '%#%');
} else {
	$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
	user_trailingslashit('page/%#%/', 'paged');;
	$paginate_base .= '%_%';
}

echo '<ul id="pagination">'. "\n";
echo paginate_links( array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 2,
	'current' => ($paged ? $paged : 1),
        'type' => 'link',
        'prev_text' => __('&laquo; Newer', 'cruwp'),
        'next_text' => __('Older &raquo;', 'cruwp'),
));
echo "\n</ul>\n";

} else {

      echo '<div class="next-previous-navi clearfix">'."\n".'<div id="previous-page">'; previous_posts_link(__('Newer Entries','cruwp'));
      echo "</div>\n".'<div id="next-page">'; next_posts_link(__('Older Entries','cruwp'));
      echo "</div>\n</div>\n";

}
?>
