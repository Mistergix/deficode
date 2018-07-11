<div class="content">
        <article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <p>
                            Les champs suivis d'une astérisque sont obligatoires.
                        </p>
                        <form action="php_scripts/sendmail.php" method="post">
                            Nom*:
                            <br>
                            <input type="text" name="name" id="name" required>
                            <br> E-mail*:
                            <br>
                            <input type="email" name="mail" id="mail" required>
                            <br> Message*:
                            <br>
                            <textarea name="message" id="message" maxlength="6000" required></textarea>
                            <br>
                            <br>
                            <button type="submit" value="Envoyer">Envoyer</button>
                        </form>
                    </div>

                </div>
            </div>
        </article>
    </div>
</body>

</html>