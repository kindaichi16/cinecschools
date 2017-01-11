<?php
if (in_category( 'staff' ) || post_is_in_descendant_category( get_category_id('staff') ) ) {
	include (TEMPLATEPATH . '/single-staff.php');
}
else { 
	include (TEMPLATEPATH . '/single-default.php');
}
?>