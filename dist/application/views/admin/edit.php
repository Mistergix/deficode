
        <article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <p>
                            Les champs suivis d'une astérisque sont obligatoires.
                        </p>
                        <?php
                            if(isset($seance))
                            {
                                $id = $seance->id;
                                $seance_title = $seance->title;
                                $description = $seance->description;
                                $content = $seance->content;
                                $priority = $seance->priority;
                                $label = "Modifier";
                                $function = "edit/$id";
                            }
                            else
                            {
                                $seance_title = set_value('title');
                                $description = set_value('description');
                                $content = set_value('content');
                                $priority = set_value('priority');
                                $label = "Ajouter";
                                $function = "add";
                            }
                        ?>
                        <form action="<?php echo site_url("dashboard/$function");?>" method="post">
                            <?php
                            if(isset($id))
                            {
                                echo "ID : $id<br>";
                            }
                            ?>
                            Titre*:
                            <br>
                            <input type="text" name="title" id="title" value="<?php echo $seance_title; ?>">
                            <br>
                            <?php echo form_error('title');?>
                            Description*:
                            <br>
                            <input type="text" name="description" id="description" value="<?php echo $description; ?>">
                            <br>
                            <?php echo form_error('description');?>
                            Contenu*:
                            <br>
                            <textarea name="content" id="content"><?php echo $content; ?></textarea>
                            <br>
                            <?php echo form_error('content');?>
                            Priorité d'affichage*:
                            <br>
                            <input type="number" name="priority" id="priority" min="1" value="<?php echo $priority; ?>">
                            <br>
                            <?php echo form_error('priority');?>
                            <br>
                            <button type="submit" value="Envoyer"><?php echo $label; ?></button>
                            <?php echo $this->session->flashdata('error');?>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div>
        </article>
    