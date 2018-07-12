<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $name = $_REQUEST['name'];

    $visitor_email = $_REQUEST['mail'];

    $message = $_REQUEST['message'];

    $headers = "From: $visitor_email";

    $email_to = 'deficode@parkours.fr';
    //$email_to = 'deficode@parkours.fr';

    $email_subject = "Nouveau message site";

    $email_body = "Vous avez reçu un message de $name.\n" . "Le voici :\n $message\n Mail: $visitor_email";

    try
    {
        mail($email_to, $email_subject, $email_body, $headers);
    }
    catch(Exception $e)
    {
        var_dump($e);
    }
    
}  

?>


        <article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3 text-center">
                        <p>
                            Votre message a été envoyé, nous vous recontacterons dans les plus brefs délais.
                        </p>
                        <p>
                            <a class="btn btn-primary btn-xl" href="<?php echo site_url('home');?>">Retour à l'accueil</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
    

