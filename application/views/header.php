<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <?php
        if(isset($desc))
        {
            if($desc != "")
            {
                echo "<meta name=\"description\" content=\"$desc\">" . PHP_EOL;
            }
        }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/$filename.css");?>">
</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">Vous utilisez  un navigateur <strong>obsolète</strong>. Veuillez <a href="https://browsehappy.com/">mettre votre navigateur à jour</a> pour améliorer votre expérience et votre sécurité.</p>
    <![endif]-->
    <!-- PAGE BEGINNING -->
    <div class="content">
<?php echo PHP_EOL;?>