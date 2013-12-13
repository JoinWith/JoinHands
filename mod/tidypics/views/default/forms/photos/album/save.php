<?php
/**
 * Save album form body
 *
 * @author Cash Costello
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 */

$title = elgg_extract('title', $vars, '');
$description = elgg_extract('description', $vars, '');
$tags = elgg_extract('tags', $vars, '');
$access_id = elgg_extract('access_id', $vars, get_default_access());
$container_guid = elgg_extract('container_guid', $vars, elgg_get_page_owner_guid());
$guid = elgg_extract('guid', $vars, 0);

?>

<div>
	<label><?php echo elgg_echo('album:title'); ?></label>
	<?php echo elgg_view('input/text', array('name' => 'title', 'value' => $title)); ?>
</div>
<div>
	<label><?php echo elgg_echo('album:desc'); ?></label>
	<?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => $description)); ?>
</div>

<?php
/* Modify Tani 2013.12.09 */
$role = roles_get_role();
switch ($role->name) {
	case 'admin':
		echo "<div>";
		echo "	<label>" . elgg_echo('tags') . "</label>";
		echo elgg_view('input/tags', array('name' => 'tags', 'value' => $tags));
		echo "</div>";
		break;
	case 'creator':
		echo "<div>";
		echo elgg_view('input/hidden', array('name' => 'tags', 'value' => $tags));
		echo "</div>";
		break;
	default:
		echo "<div>";
		echo elgg_view('input/hidden', array('name' => 'tags', 'value' => $tags));
		echo "</div>";
		break;
}
?>

<?php

$categories = elgg_view('input/categories', $vars);
if ($categories) {
	echo $categories;
}

/* Add Tani 2013.12.09 */
$role = roles_get_role();
switch ($role->name) {
	case 'creator':
		echo "<div>";
		echo elgg_view('input/hidden', array('name' => 'access_id', 'value' => $access_id));
		echo "</div>";
		break;	
	default:
		echo "<div>";
		echo "	<label>" . elgg_echo('access') . "</label>";
		echo elgg_view('input/access', array('name' => 'access_id', 'value' => $access_id));
		echo "</div>";
		break;
}
?>

<div class="elgg-foot">
<?php
echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $guid));
echo elgg_view('input/hidden', array('name' => 'container_guid', 'value' => $container_guid));
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
?>
</div>
