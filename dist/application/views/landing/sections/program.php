<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container-fluid">
<h3>Programme</h3>
	<div class="row">
		<div class="col-12">
			<p>
				L'informatique est enseignée bien trop tard en France.
				En inscrivant votre enfant à ce programme, vous lui permettez de prendre une grande avance dans un domaine essentiel.
				Voici les détails de ce programme :
			</p>
		</div>	
	<?php foreach ($periods as $period): ?>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><?=$period["name"];?></h4>
					<h6 class="card-subtitle"><?=$period["span"];?></h6>
					<p class="card-text"><?=$period["description"]?></p>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div> <!-- END ROW -->
</div>
