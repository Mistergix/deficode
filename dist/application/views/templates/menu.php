<nav id="mainNav" class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
		<button type="button" class="navbar-toggler ml-auto mr-1" data-toggle="collapse" data-target="#navbar-collapse-main">
			<span class="navbar-toggler-icon">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<ul class="nav navbar-nav ml-auto">
				<?php foreach ($menu_links as $label => $url): ?>
					<li class="nav-item"><a class="nav-link" href="<?= site_url($url); ?>"><?= $label ?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</nav>
<div class="below-menu"></div>
