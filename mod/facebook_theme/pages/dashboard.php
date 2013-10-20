<?php
gatekeeper();

$user = elgg_get_logged_in_user_entity();

elgg_set_page_owner_guid($user->guid);

$title = elgg_echo('newsfeed');

$composer = elgg_view('page/elements/composer', array('entity' => $user));


$db_prefix = elgg_get_config('dbprefix');
$activity = elgg_list_river(array(
	'joins' => array("JOIN {$db_prefix}entities object ON object.guid = rv.object_guid"),
	'wheres' => array("
		rv.subject_guid = $user->guid
		OR rv.subject_guid IN (SELECT guid_two FROM {$db_prefix}entity_relationships WHERE guid_one=$user->guid AND relationship='follower')
		OR rv.subject_guid IN (SELECT guid_one FROM {$db_prefix}entity_relationships WHERE guid_two=$user->guid AND relationship='friend')
	"),
));

/* Modify Tani 2013.06.24 */
//if (elgg_is_admin_logged_in()){
$side_content = elgg_view('statichtml/whats_new2');
//} else {
//$side_content = elgg_view('statichtml/whats_new');
//}
$side_content .= elgg_view('statichtml/info_pages');
$side_content .= elgg_view('statichtml/facebook_page');
$side_content .= elgg_view('statichtml/freelink');
$side_content .= elgg_view('statichtml/w_city_twitter');

elgg_set_page_owner_guid(1);
$content = elgg_view_layout('two_sidebar', array(
	'title' => $title,
	'content' => $composer . $activity,
	'sidebar_alt' => $side_content,
));

echo elgg_view_page($title, $content);
