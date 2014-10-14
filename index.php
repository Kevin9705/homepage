<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="design.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="./jquery.background.js"></script>
    <title>Homepage</title>
    <script>
        $(document).ready(function() {
            $.backstretch("./bg.jpg");
        });

    </script>
    </head>
    <body>
        <section id="menubar">
            <ul>
                <li><a class="menubutton" href="#menu"><img src="images/menu.png" /></a></li>
            </ul>
        </section>
        <header>
            <h1>Homepage</h1>
        </header>
        <nav class="nav">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="index.php">Seite1</a></li>
                <li><a href="index.php">Seite2</a></li>
                <li><a href="index.php">Seite3</a></li>
                <li><a href="index.php">Seite14</a></li>
            </ul>
        </nav>
        <section id="main">
            <article>
                <h2>Das ist ein Artikel</h2>
                <img src="images/artikelbild.jpg">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </article>
                <aside>
                    <section>
                        <h2>Weitere Artikel</h2>
                        <ul>
                            <li>Noch ein Artikel</li>
                            <li>Les mich</li>
                            <li>Der letzte Artikel</li>
                        </ul>
                    </section>
                    <section>
                        <h2>Ein Textfeld</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                    </section>
                    <section>
                        <h2>Kategorie</h2>
                        <ul>
                            <li>HTML TUT</li>
                            <li>HTML TUgdfsgdfT</li>
                            <li>HTML TdfgdUT</li>
                            <li>HTML TsfffdfUT</li>
                            <li>HTML TsdfsdUT</li>
                        </ul>
                    </section>
                </aside>
        </section>
    <footer>
        <ul>
            <li>&copy; 2014 Bla bla</li>
            <li>Kontakt</li>
            <li>Impressum</li>
        </ul>
    </footer>
    </body>
</html>