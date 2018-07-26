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
                        ACTIONS
                    </div>
                </div> <!-- END ROW -->
                <?php
                    }
                ?>
            </div>
</article>