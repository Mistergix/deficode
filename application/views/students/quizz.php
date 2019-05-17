<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="below-menu section align-items-center d-flex" id="main">
	<div class="container-fluid">
		<div class="row">
			<?php if($quizz_link != ""):?>
			<div class="col-12 mt-3 col-md-6 offset-md-3">
				<a href="<?= $quizz_link; ?>" class="btn btn-primary btn-block" target="_blank" rel="noopener noreferrer">Accéder au quizz</a>
			</div>
			<?php else :?>
			<div class="col-12 mt-3">
				<h1>Oups, il n'y a pas de quizz !</h1>
			</div>
			<div class="col-12 mt-3 col-md-6 offset-md-3">
				<a href="<?= site_url("students"); ?>" class="btn btn-primary btn-block">Retour</a>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>
