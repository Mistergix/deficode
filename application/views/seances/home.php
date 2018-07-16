<article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3 column">
                        <ul>
                        <?php
                            if (ENVIRONMENT == "development")
                            {
                                var_dump($seances_titles);
                            }

                            $i = 1;
                            foreach($seances_titles as $title)
                            {
                                echo "<li>";
                                $url = site_url("seances/list/$i");
                                $a = "<a href=\"$url\">$title</a>";
                                echo $a;
                                echo "</li>" . PHP_EOL;
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
</article>