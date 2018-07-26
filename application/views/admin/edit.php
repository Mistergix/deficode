
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
                            <input type="text" name="title" id="title">
                            <br>
                            Description*:
                            <br>
                            <input type="email" name="description" id="description">
                            <br> 
                            Contenu*:
                            <br>
                            <textarea name="content" id="content"></textarea>
                            <br>
                            Priorité d'affichage*:
                            <br>
                            <input type="number" name="priority" id="priority" min="1">
                            <br>
                            <br>
                            <button type="submit" value="Envoyer">Ajouter</button>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div>
        </article>
    