<article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3 column">
                        <ul>
                        <?php
                            foreach($seances as $seance)
                            {
                                echo "<li>";
                                $id = $seance->id;
                                $url = seance_url($id);
                                $a = "<a href=\"$url\">$seance->title</a>";
                                echo $a;
                                echo "</li>" . PHP_EOL;
                            }
                        ?>
                        </ul>
                    </div>
                </div> <!-- END ROW -->
            </div>
</article>