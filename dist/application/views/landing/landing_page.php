<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php foreach ($sections as $section_id => $view):?>
	<section id="<?= $section_id; ?>"><?= $view; ?></section>
<?php endforeach;?>
