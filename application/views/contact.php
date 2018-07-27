
        <article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <p>
                            Les champs suivis d'une astérisque sont obligatoires.
                        </p>
                        <form action="<?php echo site_url("contact/form_validation");?>" method="post">
                            Nom*:
                            <br>
                            <input type="text" name="name" id="name">
                            <?php echo form_error('name');?>
                            <br> E-mail*:
                            <br>
                            <input type="email" name="mail" id="mail">
                            <?php echo form_error('mail');?>
                            <br> Message*:
                            <br>
                            <textarea name="message" id="message" maxlength="6000"></textarea>
                            <?php echo form_error('message');?>
                            <br>
                            <br>
                            <button type="submit" value="Envoyer">Envoyer</button>
                            <?php echo $this->session->flashdata('error');?>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div>
        </article>
    
