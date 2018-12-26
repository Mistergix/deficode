<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128603942-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128603942-2');
</script>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <?php if (isset($description)): ?>
	<?php if ($description != ""): ?>
	<meta name="description" content="<?=$description;?>">
<?php endif; ?>
<?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<?php foreach($styles as $css):?>
		<link rel="stylesheet" href="<?= css_url($css); ?>">
	<?php endforeach;?>

	<link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu" rel="stylesheet"> 
</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">Vous utilisez  un navigateur <strong>obsolète</strong>. Veuillez <a href="https://browsehappy.com/">mettre votre navigateur à jour</a> pour améliorer votre expérience et votre sécurité.</p>
    <![endif]-->
    <!-- PAGE BEGINNING -->
<?= PHP_EOL; ?>
