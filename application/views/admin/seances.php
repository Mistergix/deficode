<article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 column">
                        TITRE
                    </div>
                    <div class="col-lg-3 column">
                        DESCRIPTION
                    </div>
                    <div class="col-lg-3 column">
                        LIEN
                    </div>
                    <div class="col-lg-3 column">
                        ACTIONS
                    </div>
                </div> <!-- END ROW -->
                <?php
                    foreach($seances as $seance)
                    {
                ?>
                <div class="row">
                    <div class="col-lg-3 column">
                        <?php echo $seance->title;?>
                    </div>
                    <div class="col-lg-3 column">
                        <?php echo $seance->description;?>
                    </div>
                    <div class="col-lg-3 column">
                        <?php 
                            $id = $seance->id;
                            $url = seance_url($id);
                            $a = "<a href=\"$url\">$seance->title</a>";
                            echo $a;
                        ?>
                    </div>
                    <div class="col-lg-3 column">
                        <a href="<?php echo site_url("dashboard/edit/$id");?>">Editer</a> <a href="<?php echo site_url("dashboard/export/$id");?>">Télécharger html</a> <a href="<?php echo site_url("dashboard/delete/$id");?>" onclick="return confirm('Are you sure?')">Supprimer</a>
                    </div>
                </div> <!-- END ROW -->
                <?php
                    }
                ?>
                <div class="row">
                    <div class="col-lg-4 column offset-lg-4">
                        <a href="<?php echo site_url("dashboard/add_page");?>">Rajouter une séance</a>
                    </div>
                </div>
            </div>
</article>