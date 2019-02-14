<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="below-menu section align-items-center d-flex" id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-lg-0"></div>
			<?php foreach ($menu_links as $label => $link_data): ?>
			<?php if($link_data['url'] != ""):?>
			<div class="col-12 mt-3 col-md-4 col-lg-4">
				<a href="<?= site_url($link_data['url']); ?>" class="btn btn-primary btn-block"><?= $label ?></a>
			</div>
			<?php endif;?>
			<?php endforeach;?>
		</div>
	</div>
</section>
