<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container-fluid">
<h3>FAQ</h3>
<div class="row">
<?php foreach ($faq as $question => $answer): ?>
		<?php
$collapse_id = "collapse_" . uniqid();
?>
		<div class="col-12 col-md-6">
			<div class="card my-3">
				<div class="card-header btn collapsed" data-toggle="collapse" data-target="<?="#$collapse_id";?>" aria-expanded="false" aria-controls="<?=$collapse_id;?>">
					<?=$question;?>
				</div>
				<div id="<?=$collapse_id;?>" class="collapse">
					<div class="card-body">
						<?=$answer;?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div><!-- END ROW --> 
