<?php global $blog_id; ?>
<?php if ($blog_id == 2) { ?>
<?php } elseif ($blog_id == 1) { ?>  
<?php } ?> 

// Add site-id class to body functions.php
add_filter('body_class', 'multisite_body_classes');

function multisite_body_classes($classes) {
        $id = get_current_blog_id();
        $classes[] = 'site-id-'.$id;
        return $classes;
}
