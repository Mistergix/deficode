<article class="article content-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <p>
                    Les champs suivis d'une astérisque sont obligatoires.
                </p>
                <form method="post" action="<?php echo site_url("logger/login_validation");?>">
                    <label for="mdp">Mot de passe* :</label>

                    <input type="password" name="mdp" value=""/>
                    <?php echo form_error('mdp');?>
                    <input type="submit" value="Se connecter" />
                    <?php echo $this->session->flashdata('error');?>
                </form>
            </div>

        </div>
    </div>
</article>