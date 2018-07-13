<article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3 column">
                        <ul>
                        <?php
                            $dir = new DirectoryIterator(dirname(__FILE__).'/list');
                            foreach ($dir as $fileinfo) 
                            {
                                if (!$fileinfo->isDot()) 
                                {
                                    $name = $fileinfo->getFilename();
                                    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $name);
                                    $url = site_url("seances/list/$withoutExt");
                                    $a = "<a href=\"$url\">$withoutExt</a>";
                                    echo "<li>$a</li>" . PHP_EOL;
                                }
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
</article>