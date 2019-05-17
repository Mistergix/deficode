<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<div class="container-fluid">
<h1>Un programme proposé par</h1>
	<div class="row">
	<?php foreach ($creators as $creator): ?>
	
		<div class="col-12 col-md-6 offset-md-3">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><?=$creator["name"];?></h4>
					<?php if(isset($creator["description"])):?>
					<p class="card-text"><?=$creator["description"]?></p>
					<?php endif;?>
					<?php if(isset($creator["website"])):?>
					<a href="<?=$creator["website"]?>" target="_blank" rel="noopener noreferrer" class="card-link btn btn-primary btn-block">Visiter son site</a>
					<?php endif;?>
				</div>
			</div>
		</div>
	
	<?php endforeach;?>
	</div>  <!-- END ROW -->
</div>
