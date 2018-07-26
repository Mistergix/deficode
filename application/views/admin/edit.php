
        <article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <p>
                            Les champs suivis d'une astérisque sont obligatoires.
                        </p>
                        <?php
                            if(isset($id))
                            {
                                echo "<p>ID = $id</p>";
                            }
                        ?>
                        <form action="<?php echo site_url("dashboard/add");?>" method="post">
                            Titre*:
                            <br>
                            <input type="text" name="title" id="title" value="<?php echo set_value('title'); ?>">
                            <br>
                            <?php echo form_error('title');?>
                            Description*:
                            <br>
                            <input type="text" name="description" id="description" value="<?php echo set_value('description'); ?>">
                            <br>
                            <?php echo form_error('description');?>
                            Contenu*:
                            <br>
                            <textarea name="content" id="content"><?php echo set_value('content'); ?></textarea>
                            <br>
                            <?php echo form_error('content');?>
                            Priorité d'affichage*:
                            <br>
                            <input type="number" name="priority" id="priority" min="1" value="<?php echo set_value('priority'); ?>">
                            <br>
                            <?php echo form_error('priority');?>
                            <br>
                            <button type="submit" value="Envoyer">Ajouter</button>
                            <?php echo $this->session->flashdata('error');?>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div>
        </article>
    