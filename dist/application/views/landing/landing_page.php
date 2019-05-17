<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php foreach ($sections as $section_id => $view):?>
	<section class="below-menu section align-items-center d-flex" id="<?= $section_id; ?>"><?= $view; ?></section>
<?php endforeach;?>
