<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<h3>Un programme proposé par :</h3>
<div class="container-fluid">
	<?php foreach ($creators as $creator): ?>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><?=$creator["name"];?></h4>
					<p class="card-text"><?=$creator["description"]?></p>
					<a href="<?=$creator["website"]?>" target="_blank" rel="noopener noreferrer" class="card-link btn btn-primary btn-block">Visiter son site</a>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>
