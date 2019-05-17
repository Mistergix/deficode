<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php foreach ($sumups as $sumup_id => $view):?>
	<section class="below-menu section align-items-center d-flex" id="<?= $sumup_id; ?>"><?= $view; ?></section>
<?php endforeach;?>

<section class="below-menu section align-items-center d-flex" id="no-recap">
	<div class="container-fluid">
		<div class="row">
<?php if(count($sumups) == 0):?>
<div class="col-12 mt-3">
	<h1>Oups, il n'y a pas de récap' !</h1>
</div>
<div class="col-12 mt-3 col-md-6 offset-md-3">
	<a href="<?= site_url("students"); ?>" class="btn btn-primary btn-block">Retour</a>
</div>
<?php endif;?>
</div>
	</div>
</section>
